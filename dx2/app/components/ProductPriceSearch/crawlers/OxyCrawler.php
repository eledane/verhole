<?php

class OxyCrawler extends BaseCrawler implements ICrawler {

	public function parsePrice() {
		$result = $this->crawler->filter('body.details-page .price .pricevalue')->text();
		return $result;
	}

	protected function parseImage() {
		return $this->crawler->filter('.picture img');
	}

	protected function parseName() {
		$result = $this->crawler->filter('h1')->text();
		return $result;
	}

}
