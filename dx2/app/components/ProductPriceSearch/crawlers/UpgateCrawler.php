<?php

class UpgateCrawler extends BaseCrawler implements ICrawler {

	public function parsePrice() {
		$result = $this->crawler->filter('#detail-buy-container .price');
		if($result->count() == 0) {
			//Vypada to na nejako ustarsi verzi
			$result = $this->crawler->filter('#ProductPrices .price');

		}
		if($result->count() == 0) {
			throw new InvalidArgumentException;
		}
		return $result->text();
	}

	protected function parseImage() {
		return $this->crawler->filter('#snippet--imagesAjax img');
	}

	protected function parseName() {
		return $this->crawler->filter('h1')->text();
	}

}
