<?php

namespace Crawler\Heuristic;

use Crawler\Heuristic\BaseHeuristicChecker;
use Symfony\Component\DomCrawler\Crawler;
use PrestaCrawler;

class PrestaChecker extends BaseHeuristicChecker {

	public static function match(Crawler $crawler) {
		$found = $crawler->filter('meta[name="generator"]')->extract('content');
		foreach($found as $f) {
			if(strtolower($f) == 'prestashop') {
				return true;
			}
		}
		return false;
	}

	public static function getCrawler(Crawler $crawler, \Goutte\Client $client) {
		return new PrestaCrawler($client,$crawler);
	}

}
