<?php

use Crawler\Factory\CrawlerFactory,
  Crawler\Exception\CrawlerException,
  Crawler\Exception\LowPriceException,
  Crawler\Exception\MaxPriceException;

class StrategyResolver
{

    const ITEM_LOW_PRICE_LIMIT = 100;
    const ITEM_MAX_PRICE_LIMIT = 500;

    protected $url = '';
    protected $top10shopsURL = [];
    /**
     * @var App\Model\SiteModel
     */
    protected $sites;

    /**
     * @var App\Model\BlacklistUrlModel
     */
    protected $blacklist;

    public function __construct($url, App\Model\SiteModel $sites, App\Model\BlacklistUrlModel $blacklist)
    {
        $this->url = $url; // assign domain and remove protocol
        $this->sites = $sites;
        $this->blacklist = $blacklist;
    }

    public function resolve()
    {

        $result = NULL;
        if ($this->isUrl()) {
            $result = $this->crawlDaSite();
        }
        else {
            throw new \Crawler\Exception\InvalidURLException();
        }

        return $result;
    }

    public function isUrl()
    {
        $this->url = preg_replace("/\p{Han}+/u", '', $this->url);
        if (filter_var($this->getUrl(), FILTER_VALIDATE_URL) === FALSE) {
            return FALSE;
        }

        return TRUE;
    }

    protected function getUrlDomain()
    {
        if (!$this->isUrl()) {
            throw new \Crawler\Exception\InvalidURLException();
        }

        $parsed = parse_url($this->getUrl());
        if (!empty($parsed['host'])) {
            $parts = explode('.', $parsed['host']);
            if (count($parts) >= 2) {
                return $parts[count($parts) - 2] . '.' . $parts[count($parts) - 1];
            }
        }

        throw new \Crawler\Exception\InvalidURLException();
    }

    public function crawlDaSite()
    {
        $found = FALSE;
        $priceResult = FALSE;
        $nameResult = FALSE;
        $imageResult = FALSE;
        $blacklisted = $this->blacklist->getByURL($this->getUrlDomain());

        if ($blacklisted != FALSE) {
            throw new \Crawler\Exception\BlacklistedURLException();
        }

        $selectors = $this->sites->getAllByDomain($this->getUrlDomain());
        if (!empty($selectors)) {
            $dbCrawler = new DBCrawler();
            $dbCrawler->setSelectors($selectors);
            $results = $this->getResults($dbCrawler);
            $found = TRUE;
        }
        //If still not found try some heuristics
        if (!$found) {
            throw new Crawler\Exception\UnsupportedEshopException();
        }

        return $results;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function isPrestashop()
    {
        // check via header if shop on prestashop
    }

    private function getResults($crawler)
    {
        $thousandsSeparators = $this->sites->getThousandsSeparatorByDomain($this->getUrlDomain());
        $domainSeparators = $this->sites->getDecimalSeparatorByDomain($this->getUrlDomain());
        $priceResult = $crawler->getPrice($this->getUrl(), $thousandsSeparators, $domainSeparators);
        /* if ($priceResult < self::ITEM_LOW_PRICE_LIMIT) {
            throw new LowPriceException;
        } */
        if ($priceResult > self::ITEM_MAX_PRICE_LIMIT) {
            throw new MaxPriceException;
        }
        $nameResult = $crawler->getName($this->getUrl());
        $imageResult = $crawler->getImage($this->getUrl());
        $categoryResult = $crawler->getCategory($this->getUrl());

        return [
          'price' => $priceResult,
          'name' => $nameResult,
          'image' => $imageResult,
          'category' => $categoryResult
        ];
    }

}
