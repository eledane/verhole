<?php

namespace Crawler\Factory;

use \Goutte\Client;
use Crawler\Heuristic\OxyChecker;
use Crawler\Heuristic\UpgateChecker;
use Crawler\Heuristic\PrestaChecker;
use Crawler\Heuristic\GenericChecker;
use Crawler\Heuristic\ZonerChecker;
use Crawler\Heuristic\SunlightChecker;

class CrawlerFactory {

	public static function getCrawler($url) {
		$client = new Client();
		$client->request("GET", $url);
		$crawler = $client->getCrawler();

		if(OxyChecker::match($crawler)) {
			//echo "<br ><br >Oxy eshop detected<br ><br >";
			return OxyChecker::getCrawler($crawler, $client);
		}
		if(UpgateChecker::match($crawler)) {
			//echo "<br ><br >UpGate eshop detected<br ><br >";
			return UpgateChecker::getCrawler($crawler, $client);
		}
		if(PrestaChecker::match($crawler)) {
			//echo "<br ><br >Presta eshop detected<br ><br >";
			return PrestaChecker::getCrawler($crawler, $client);
		}
		if(ZonerChecker::match($crawler)) {
			//echo "<br ><br >Zoner eshop detected<br ><br >";
			return ZonerChecker::getCrawler($crawler, $client);
		}
		if(SunlightChecker::match($crawler)) {
			//echo "<br ><br >Sunlight eshop detected<br ><br >";
			return SunlightChecker::getCrawler($crawler, $client);
		}
		if(GenericChecker::match($crawler)) {
			//echo "<br ><br >Generic eshop. Trying to find price.<br ><br >";
			return GenericChecker::getCrawler($crawler, $client);
		}
	}
	
	public static function tryOnlyGeneric($url) {
		$client = new Client();
		$client->request("GET", $url);
		$crawler = $client->getCrawler();
		if(GenericChecker::match($crawler)) {
			return GenericChecker::getCrawler($crawler, $client);
		}
		throw new Crawler\Exception\UnsupportedEshopException();
	}

}
