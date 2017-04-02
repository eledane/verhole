<?php

namespace App\Forms;

use Nette,
    Nette\Application\UI\Form,
    App\Model\OrdersModel,
    App\Model\CartModel,
    App\Model\CartIDModel;

class OrderFactory extends Nette\Object {

    /** @var OrdersModel */
    private $orders;

    /** @var CartModel */
    private $carts;

    /** @var CardIDModel */
    private $cartIDs;

    public function __construct(CartIDModel $cartIDs, OrdersModel $orders, CartModel $carts)
    {
        $this->cartIDs = $cartIDs;
        $this->orders = $orders;
        $this->carts = $carts;
    }

    public function createNewOrder() {
        $form = new Form;

        $cartId = $this->cartIDs->getCurrentCartID();
        $cart = $this->carts->get($cartId);

        if ($cart['version']) {
            $link2 = Nette\Utils\Html::el('a')->target('_blank')->addAttributes(array(
                'href' => '/documents/obchodni_podminky_1.pdf'
            ))->setText('business terms and conditions');
        } else {
            $link2 = Nette\Utils\Html::el('a')->target('_blank')->addAttributes(array(
                'href' => '/documents/obchodni_podminky_0.pdf'
            ))->setText('business terms and conditions');
        }

        $link1 = Nette\Utils\Html::el('a')->target('_blank')->href('/documents/souhlas_se_zpracovanim_osobnich_udaju.pdf')->setText('processing personal data');

        $label = Nette\Utils\Html::el();
        $label->add('I agree with ')->add($link1)->add(' and ')->add($link2);

        $form->addText('name', 'name')
            ->setRequired('required_name');
        $form->addText('surname', 'surname')
            ->setRequired('required_surname');
        $form->addText('email', 'email')
            ->addRule($form::EMAIL, 'regex_email')
            ->setRequired('required_email');
        $form->addText('phone', 'phone')
            ->setRequired('required_phone')
            ->addCondition(Form::FILLED)
                ->addRule(Form::PATTERN, 'Zadejte telefonní číslo ve správném formátu', '^(\+420)? ?[1-9][0-9]{2} ?[0-9]{3} ?[0-9]{3}$');
        $form->addText('street', 'street')
            ->setRequired('required_street');
        $form->addText('city', 'city')
            ->setRequired('required_city');
        $form->addText('postal_code', 'postal_code')
            ->setRequired('required_postal_code')
            ->addCondition(Form::FILLED)
                ->addRule(Form::LENGTH, 'length_postal_code', 5)
                ->addRule(Form::INTEGER, 'number_postal_code');
        $form->addText('coupon', 'coupon');
        $form->addCheckbox('toc', $label)
            ->setRequired('Check the terms & conditions');
        $form->addText('call_time', 'calltime');
        $form->addHidden('loan_count');
        $form->addHidden('total_price');
        $form->addHidden('note');
        $form->addSubmit('send', 'send');

        return $form;
    }

}
