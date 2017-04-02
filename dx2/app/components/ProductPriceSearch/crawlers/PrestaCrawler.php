<?php

class PrestaCrawler extends BaseCrawler implements ICrawler {

	public function parsePrice() {
		$result = $this->crawler->filter('#product #our_price_display');
		if($result->count() == 0) {
			//Nasel jsem i presta shopy, kde to bohuzel funguje jen takto, pokud by to bylo moc obecne tak zrusit
			$result = $this->crawler->filter('#our_price_display');

		}
		if($result->count() == 0) {
			throw new InvalidArgumentException;
		}
		return $result->text();
	}

	protected function parseImage() {
		$seletors = array(
		    '#product-detail img',
		    '#bigpic'
		);
		foreach($seletors as $s) {
			$result = $this->crawler->filter($s);
			if($result->count() != 0) {
				return $result;
			}
		}
		return new InvalidArgumentException;
	}

	protected function parseName() {
		$result = $this->crawler->filter('h1')->text();
		return $result;
	}

}
