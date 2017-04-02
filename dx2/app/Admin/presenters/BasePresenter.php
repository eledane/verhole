<?php

namespace App\AdminModule\Presenters;

use Nette;
use Kdyby\Translation\Translator;


abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var Translator */
    protected $translator;

    /** @persistent */
    public $locale;

    protected function startup()
    {
        parent::startup();
        $this->translator->setLocale('en');

    }

    public function getDomain($url)
    {
        $parsed = parse_url($url);
        $domain = $parsed['host'];
        if (!empty($parsed['host'])) {
            $parts = explode('.', $parsed['host']);
            if (count($parts) >= 2) {
                $domain = $parts[count($parts) - 2] . '.' . $parts[count($parts) - 1];
            }
        }

        return $domain;
    }

    public function injectTranslator(Translator $t)
    {
        $this->translator = $t;
    }
}
