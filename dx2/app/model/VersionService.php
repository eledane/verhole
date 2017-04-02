<?php

namespace App\Model;

use Nette;

class VersionService extends Nette\Object {

    private $versions = [0, 1, 2];
    private $priceLimits = [30000, 50000, 50000];

    public function getCorrectVersion($version) {
        return $this->versions[$version];
    }

    public function getCorrectPriceLimit($version) {
        return $this->priceLimits[$version];
    }

}