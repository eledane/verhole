<?php

class DBCrawler extends BaseCrawler implements ICrawler {

	protected $selectors = array();

	private function parseAttribute($property, $crawlerFunction, $parseText = true) {
		foreach ($this->selectors as $selector) {
			if (!empty($selector->crawler_class)) {
				$className = $selector->crawler_class . 'Crawler';
				$crawler = new $className;
				$result = $crawler->{$crawlerFunction}($this->url);
				if (!empty($result)) {
					return $result;
				}
			} else {
				if (!empty($selector->$property)) {
					$result = $this->crawler->filter($selector->$property);
					if ($result->count() > 0) {
						if ($parseText) {
							$result = $result->text();
						}
						if (!empty($result)) {
							return $result;
						}
					}
				}
			}
		}
	}

	public function setSelectors(array $selectors) {
		$this->selectors = $selectors;
	}

	protected function parseImage() {
		return $this->parseAttribute('img_selector', 'getImage', false);
	}

	protected function parseName() {
		return $this->parseAttribute('name_selector', 'getName');
	}

	public function parsePrice() {
		return $this->parseAttribute('price_selector', 'getPrice');
	}

	public function parseCategory() {
		return $this->parseAttribute('category_selector', 'getCategory');
	}

}
