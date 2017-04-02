<?php

namespace App\Model;

use Nette;

class CartIDModel extends Nette\Object {

    /** @var Nette\Http\Session */
    private $session;

    /** @var Nette\Http|SessionSection */
    private $cartSection;

    /** @var Nette\Http|SessionSection */
    private $webSection;

    function __construct(Nette\Http\Session $s) {
        $this->session = $s;
        $this->cartSection = $this->session->getSection('cart');
        $this->webSection = $this->session->getSection('web');
    }

    public function setCurrentSectionID($id) {
        $this->cartSection->cartID = $id;
    }

    public function setCartItemData($data) {
        $this->cartSection->cartItem = $data;
    }

    public function getCurrentCart() {
        return $this->cartSection;
    }

    public function getCurrentCartID() {
        return $this->cartSection->cartID;
    }

    public function getCurrentCartName() {
        return "Košík ID:" . $this->getCurrentCartID();
    }

    public function getCartItemData() {
        return $this->cartSection->cartItem;
    }

    public function getCurrentCartVersion() {
        return $this->webSection->version;
    }

}