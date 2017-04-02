<?php

namespace App\FrontModule\Presenters;

use App\Model\OverMaxPayLimitException;
use Nette,
  App\Forms\RegisterFormFactory,
  App\Forms\SignFormFactory,
  App\Model\OrdersModel,
  App\Forms\OrderFactory,
  App\Model\TextModel,
  App\Model\CallMeModel,
  App\Model\FingerprintModel,
  App\Model\CouponModel,
  App\Model\VersionService,
  Kdyby\Translation\Translator;
use Tracy\Debugger;

class SearchPresenter extends BasePresenter
{
    protected function startup()
    {
        parent::startup();

        if (!Debugger::detectDebugMode('213.151.93.106')) {
            throw new Nette\Security\AuthenticationException('You are not in dev environment');
        }
    }

    public function renderDefault()
    {
        $strategyResolver = new \StrategyResolver($this->request->getParameter('url'), $this->context->getService('sites'), $this->context->getService('blacklist'));
        $crawledProduct = $strategyResolver->resolve();
        dump($crawledProduct);
        echo "<img src='{$crawledProduct['image']}' />";
        die;
    }
}
