<?php

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Crawler\Exception\PriceNotFoundException;
use Crawler\Exception\NameNotFoundException;
use Crawler\Exception\InvalidPriceFormatException,
    Crawler\Exception\ImageNotFoundException,
	Crawler\Exception\CategoryNotFoundException;

abstract class BaseCrawler implements ICrawler {

	/**
	 * @var Client
	 */
	protected $client;

	/**
	 * @var Crawler
	 */
	protected $crawler;

	protected $url;

	public function __construct($client = null, $crawler = null) {
		$this->client = $client;
		$this->crawler = $crawler;
	}

	public function getPrice($url, $thousandsSeparators=null, $decimalSeparators=null) {
		$log = "\n--- Price: ---\n";

		$this->url = $url;
		$this->getPageContent($url);

		try {
			$price = $this->parsePrice();
		} catch(InvalidArgumentException $e) {
			$price = null;
		}

		if(empty($price)) {
			$log .= 'PriceNotFoundException' . "\n";
			if (CRAWLER_LOGS) { error_log($log); }
			throw new PriceNotFoundException;
		}

		$price = $this->formatResult($price, $thousandsSeparators, $decimalSeparators);

		$log .= $price . "\n";
		$log .= "---\n";
		if (CRAWLER_LOGS) { error_log($log); }

		return $price;
	}

	public function getName($url) {
		$log = "\n--- Name: ---\n";

		$this->url = $url;
		$this->getPageContent($url);

		try {
			$name = $this->parseName();
		} catch(InvalidArgumentException $e) {
			$name = null;
		}

		if(empty($name)) {
			$log .= 'NameNotFoundException' . "\n";
			if (CRAWLER_LOGS) { error_log($log); }
			throw new NameNotFoundException;
		}

		$name = str_replace(array("\n","\r"), "", $name);

		$log .= $name . "\n";
		$log .= "---\n";
		if (CRAWLER_LOGS) { error_log($log); }

		return $name;
	}

	public function getImage($url) {
		$log = "\n--- Image: ---\n";

		$this->url = $url;
		$this->getPageContent($url);

		try {
			$image = $this->parseImage();
		} catch(InvalidArgumentException $e) {
			$image = null;
		}

		if(empty($image)) {
			$log .= 'ImageNotFoundException' . "\n";
			if (CRAWLER_LOGS) { error_log($log); }
			throw new ImageNotFoundException;
		}

		//Content je pro meta tag
		$absoluteUrl = '';
		if(!is_string($image)) {
			$possibleAttributes = array('src', 'content', 'href');
			foreach($possibleAttributes as $attr) {
				$imageUrl = $image->attr($attr);
				if(!empty($imageUrl)) {
					$absoluteUrl = $this->createAbsoluteUrl($imageUrl);
					break;
				}
			}
		} else {
			$absoluteUrl = $this->createAbsoluteUrl($image);
		}

		$log .= $absoluteUrl . "\n";
		$log .= "---\n";
		if (CRAWLER_LOGS) { error_log($log); }

		return $absoluteUrl;
	}

	public function getCategory($url) {
		$log = "\n--- Category: ---\n";

		$this->url = $url;
		$this->getPageContent($url);

		try {
			$category = $this->parseCategory();
		} catch(InvalidArgumentException $e) {
			$category = null;
		}

		if (empty($category)) {
			$log .= 'CategoryNotFoundException' . "\n";
			if (CRAWLER_LOGS) {error_log($log);}
			throw new CategoryNotFoundException;
		}

		$category = str_replace(array("\n","\r"), "", $category);

		$log .= $category . "\n";
		$log .= "---\n";
		if (CRAWLER_LOGS) { error_log($log); }

		return $category;
	}

	private function createAbsoluteUrl($url) {
		$domain  = parse_url($this->url, PHP_URL_HOST);
		$scheme  = parse_url($this->url, PHP_URL_SCHEME);
		if(strrpos($url, '//', -strlen($url)) !== FALSE) {
			return $scheme.':'.$url;
		}
		//Doplni na absolutni url
		if(strrpos($url, 'http', -strlen($url)) !== FALSE) {
			return $url;
		}
		$url = ltrim($url,"/");
		return $scheme."://".$domain."/".$url;
	}

	public function formatResult($price, $thousandsSeparators=null, $decimalSeparators=null) {
		//Remove all whitespaces
		$price = preg_replace("#(?:\xc2\xa0)|(\&nbsp\;)|(\&ensp\;)|(\&emsp\;)|(\&thinsp\;)|(\s)#", "", $price);
		preg_match('#(\d+)([\,|\.]?\d+)?#', $price, $matches);
		if(empty($matches)) {
			throw new InvalidPriceFormatException();
		}
		if(!empty($thousandsSeparators)) {
			foreach($thousandsSeparators as $sep) {
				$matches[0] = str_replace($sep->thousands_separator, '', $matches[0]);
			}
		}
		if(!empty($decimalSeparators)) {
			foreach($decimalSeparators as $sep) {
				$matches[0] = str_replace($sep->decimal_separator, '.', $matches[0]);
			}
		}
		//Sjendoceni formatu desetinneho cisla
		$price = str_replace(',', '.', $matches[0]);
		return $price;
	}

	public function getPageContent($url) {		// get page content via CURL

		//echo "<br ><br >We crawl this URL: " . $url . "<br ><br >";
		if(empty($this->client) && empty($this->crawler)) {
			//Lepsi zpusob
			$this->client = new Client();
			$this->client->setHeader('Accept-Language', 'cs-CZ,cs;q=0.8');
			$this->client->request('GET', $url);
			$this->crawler = $this->client->getCrawler();
		}
	}

	protected function dump($data) {
		echo "<pre>".print_r($data,true)."</pre>";
	}

	abstract protected function parsePrice();
	abstract protected function parseName();
	abstract protected function parseImage();
	abstract protected function parseCategory();
}
