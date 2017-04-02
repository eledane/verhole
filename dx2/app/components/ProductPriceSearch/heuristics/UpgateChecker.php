<?php

namespace Crawler\Heuristic;

use Crawler\Heuristic\BaseHeuristicChecker;
use Symfony\Component\DomCrawler\Crawler;
use UpgateCrawler;

class UpgateChecker extends BaseHeuristicChecker {

	public static function match(Crawler $crawler) {
		//ve footru musi byt vzdy odkaz na upgates.com nebo upgates.com/cs
		$found = $crawler->filter('a[href="http://www.upgates.com/cz"]');
		if( $found->count() == 0) {
			$found = $crawler->filter('a[href="https://www.upgates.com/cz"]');
		}
		return $found->count()!=0;
	}

	public static function getCrawler(Crawler $crawler, \Goutte\Client $client) {
		return new UpgateCrawler($client,$crawler);
	}

}
