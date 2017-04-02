<?php

namespace Crawler\Heuristic;

use Crawler\Heuristic\BaseHeuristicChecker;
use Symfony\Component\DomCrawler\Crawler;
use SunlightCrawler;

class SunlightChecker extends BaseHeuristicChecker {

	public static function match(Crawler $crawler) {
		//vetsinou ma v meta author text sunlight
		$found = $crawler->filter('meta[name="author"]')->extract('content');
		if(!empty($found)) {
			$found = strtolower($found[0]);
			if (strpos($found,'sunlight') !== false) {
				return true;
			}
		}
		return false;
	}

	public static function getCrawler(Crawler $crawler, \Goutte\Client $client) {
		return new SunlightCrawler($client,$crawler);
	}

}
