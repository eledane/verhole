<?php

namespace App\Model;

use Nette,
    App\Model\CartModel,
    App\Model\CartIDModel,
    App\Model\VersionService;

class CartItemModel extends GridoModel {

    /** @var CartModel */
    protected $cart;

    /** @var CartIDModel */
    protected $cartIds;

    /** @var VersionService */
    protected $versions;

    protected $tableName = 'cart_item';


    function __construct(Nette\Database\Context $db, Nette\Http\Session $session, CartModel $cm, CartIDModel $id, VersionService $v) {
        parent::__construct($db, $session);

        $this->cart = $cm;
        $this->cartIds = $id;
        $this->versions = $v;
    }

    public function insertCartItem($cartId, $values) {
        $cartItems = $this->getCartItems($cartId)->fetchAll();
        $cart = $this->cart->get($cartId);

        $price = 0;
        foreach ($cartItems as $cartItem) {
            $price += $cartItem['price'];
        }
        $price += $values['price'];

        $values['cart_id'] = $cartId;
        return $this->getTable()->insert($values);
    }

    public function getCartItems($cartId) {
        return $this->getTable()->where('cart_id', $cartId);
    }

    public function getCartItemCount($cartId) {
        return $this->getCartItems($cartId)->count();
    }

    public function getRandomItems($count) {
        return $this->getTable()->where('featured', 1)->order('RAND()')->limit($count);
    }

    public function getCurrentCartPrice($cartId) {
        $cartItems = $this->getTable()->where('cart_id', $cartId)->fetchAll();
        $price = 0;

        foreach ($cartItems as $item) {
            $price += $item['price'];
        }

        return $price;
    }

    public function delete($id) {
        $cartItem = $this->get($id);
        $cartId = $this->cartIds->getCurrentCartID();

        if ($cartItem['cart_id'] === $cartId) {
            $cartItem->update(array('cart_id' => NULL));
        }
    }

    public function deleteAdmin($id) {
        $cartItem = $this->get($id);
        $cartItem->update(array('cart_id' => NULL));
    }
}

class OverMaxPayLimitException extends \Exception {
    private $limit;

    function __construct($limit) {
        $this->limit = $limit;
    }

    public function getLimit() {
        return $this->limit;
    }
}
