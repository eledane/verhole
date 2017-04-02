<?php

namespace Crawler\Heuristic;

use Crawler\Heuristic\BaseHeuristicChecker;
use Symfony\Component\DomCrawler\Crawler;
use OxyCrawler;

class OxyChecker extends BaseHeuristicChecker {

	public static function match(Crawler $crawler) {
		//musi mit hlavicku meta web_author = oXy Online
		$found = $crawler->filter('meta[name="web_author"]')->extract('content');
		if(empty($found)) {
			$found = $crawler->filter('meta[name="author"]')->extract('content');
		}
		if(empty($found)) {
			$found = $crawler->filter('meta[name="Author"]')->extract('content');
		}
		if(!empty($found)) {
			foreach($found as $f) {
				if(strtolower($f) == 'oxy online' ) {
					return true;
				}
			}
		}
		return false;
	}

	public static function getCrawler(Crawler $crawler, \Goutte\Client $client) {
		return new OxyCrawler($client,$crawler);
	}

}
