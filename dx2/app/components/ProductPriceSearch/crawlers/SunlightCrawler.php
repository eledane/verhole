<?php

class SunlightCrawler extends BaseCrawler implements ICrawler {

	public function parsePrice() {
		$result = $this->crawler->filter('.ProductDetails [itemprop="price"]')->text();
		return $result;
	}

	protected function parseImage() {
		return $this->crawler->filter('img[itemprop="image"]');
	}

	protected function parseName() {
		$result = $this->crawler->filter('.ProductTop h1')->text();
		return $result;
	}

}
