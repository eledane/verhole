<?php

namespace App;

use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route;
use Tester\Environment;
use Tracy\Debugger;

class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList();

		$admin = new RouteList('Admin');
		$admin[] = new Route('admin/<presenter>/<action>[/<id>]', 'Sign:in');
		$router[] = $admin;

		$front = new RouteList('Front');
        $router[] = new Route('muj-profil/moje-objednavky', 'Front:Profile:orders');
        $router[] = new Route('muj-profil/osobni-udaje', 'Front:Profile:personalData');
		$router[] = new Route('buy', 'Front:Ref:buy');
		$router[] = new Route('terms-and-conditions', 'Front:Homepage:terms');
		$router[] = new Route('faq', 'Front:Homepage:faq');
		$router[] = new Route('api/orders/notify', 'Front:Gateway:listener');
		$front[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		$router[] = $front;

		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');

		return $router;
	}

}
