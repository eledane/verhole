<?php

namespace Crawler\Heuristic;

use Crawler\Heuristic\BaseHeuristicChecker;
use Symfony\Component\DomCrawler\Crawler;
use ZonerCrawler;

class ZonerChecker extends BaseHeuristicChecker {

	public static function match(Crawler $crawler) {
		//vetsinou ma v meta author text Zoner
		$found = $crawler->filter('meta[name="author"]')->extract('content');
		if(!empty($found)) {
			$found = strtolower($found[0]);
			if (strpos($found,'zoner') !== false) {
				return true;
			}
		}
		//nebo to ma v base tagu inshop
		$found = $crawler->filter('base')->extract('href');
		if(!empty($found)) {
			$found = strtolower($found[0]);
			if (strpos($found,'inshop') !== false) {
				return true;
			}
		}
		return false;
	}

	public static function getCrawler(Crawler $crawler, \Goutte\Client $client) {
		return new ZonerCrawler($client,$crawler);
	}

}
