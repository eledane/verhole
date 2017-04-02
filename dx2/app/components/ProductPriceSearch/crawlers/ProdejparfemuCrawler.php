<?php

class ProdejparfemuCrawler extends BaseCrawler implements ICrawler {

	public function parsePrice() {
		$result = $this->crawler->filter('.detail .product .product_sizes .sizebox .s_price');
		dump($result);
		if ($result->count() > 0) {
			foreach ($result as $res) {
				$text = $res->textContent;
				if (!empty($text)) {
					$price = $this->formatResult($text);
					if (!empty($price)) {
						return $price;
					}
				}
			}
		}
		return null;
	}

	protected function parseImage() {
		$result = $this->crawler->filter('.product_image img');
		if ($result->count() > 0) {
			return $result;
		}
		return null;
		
	}

	protected function parseName() {
		$result = $this->crawler->filter('h1');
		if ($result->count() > 0) {
			return $result->text();
		}
		return null;
		
	}

}
