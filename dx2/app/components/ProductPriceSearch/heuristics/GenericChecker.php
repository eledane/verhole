<?php

namespace Crawler\Heuristic;

use Crawler\Heuristic\BaseHeuristicChecker;
use Symfony\Component\DomCrawler\Crawler;
use GenericCrawler;

class GenericChecker extends BaseHeuristicChecker {

	public static function match(Crawler $crawler) {
		$result = $crawler->filter(implode(', ', \GenericCrawler::$selectors));
		return $result->count()>0;
	}

	public static function getCrawler(Crawler $crawler, \Goutte\Client $client) {
		return new GenericCrawler($client,$crawler);
	}

}
