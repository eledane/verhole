<?php

class ZonerCrawler extends BaseCrawler implements ICrawler {

	public function parsePrice() {
		$result = $this->crawler->filter('#product');
		if($result->count() == 0) {
			$result = $this->crawler->filter('.product-view');
		}
		$price = $result->filter('.my-price');
		if($price->count() == 0) {
			$price = $result->filter('.view-price');
		}
		if($price->count() == 0) {
			$price = $result->filter('.price');
		}
		if(!empty($price)) {
			return $price->text();
		}
		throw new \InvalidArgumentException();
	}

	protected function parseImage() {
		return $this->crawler->filter('#product .inner img');
	}

	protected function parseName() {
		return $this->crawler->filter('h1')->text();
	}

}
