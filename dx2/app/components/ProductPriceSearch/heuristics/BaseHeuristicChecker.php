<?php

namespace Crawler\Heuristic;

use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

abstract class BaseHeuristicChecker {

	public static function match(Crawler $crawler){

	}

	public static function getCrawler(Crawler $crawler, Client $client){
		
	}
}
