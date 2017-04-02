<?php

use Nette\NotImplementedException;

class GenericCrawler extends BaseCrawler implements ICrawler {

	//Resazeno podle dulezitosti
	public static $selectors = [
		'#cena',
		'#price',
		'#Price',
		"#cenaS",
		'[itemprop="price"]',
		'#ceny',
		'.detail-price',
		'.detailPrice',
		'#detail_price',
		'#product-price',
		'#priceWithDPH',
		'#priceWithVat',
		'#our_price_display',
		'#input_cena',
		'.price .actionPrice',
		'.priceValue',
		'.price .actual',
		'.price_big',
		'.cenasdph',
		'.productPrice',
		'#good-price-details',
		'.product_price',
		'.product-price .price-akce',
		'.product-price',
		'.price .sum',
		'.price strong',
		'#product_detail .price',
		'#podrobnosti .cena',
		'.big_cena',
		'.price',
		'.cena',
		'#prices strong',
		'#prices',
		'.prices',
		'.priceBox',
		'.price-box',
		'.pricebox',
		'.price_box',
		'#final-price-value',
		'#final-price',
		'#boxCenaKomplet'
	];
	
	public static $nameSelectors  = [
		'#detailNadpis',
		'h1.name',
		"#center_column h1",
		'h1',
		'[itemprop="name"]',
		'#name',
		'title',
		'#nazevProduktu'
	];
	
	public static $imgSelectors = [
		'#product-images img',
		'[itemprop="image"]',
		'[property="og:image"]',
		'#product-image img',
		'.product-image img',
		'#product-images img',
		'#product-img img',
		'#detail img',
		'#id_productDetailImage',
		'#detail_product img',
		'#productdetail img',
		'#photo img',
		'#productImg',
		'.gallery_box img',
		'.gallery img',
		'#detail_image',
		'.gallery-container img',
		'.product_detail img',
		'#product_detail img',
		'#product-info img',
		'.product-info img',
		'#bigpic',
		'#image-block img',
		'#view_full_size img',
		'#image',
		'#image img',
		'#stoitem_detail img',
		'#productImages img',
		'.bigImgNahled',
		'.main-img img',
		'.main-img'
	];

	public function parsePrice() {
		foreach (self::$selectors as $selector) {
			$result = $this->crawler->filter($selector);
			if ($result->count() > 0) {
				$text = $result->text();
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
		foreach (self::$imgSelectors as $selector) {
			$result = $this->crawler->filter($selector);
			if ($result->count() > 0) {
				return $result;
			}
		}
		return null;
	}

	protected function parseName() {
		foreach (self::$nameSelectors as $selector) {
			$result = $this->crawler->filter($selector);
			if ($result->count() > 0) {
				$text = $result->text();
				if (!empty($text)) {
					return $text;
				}
			}
		}
		return null;
		
	}

	protected function parseCategory() {
		throw new NotImplementedException();
	}

}
