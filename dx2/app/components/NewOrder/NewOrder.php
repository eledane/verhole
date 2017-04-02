<?php

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;

class NewOrder extends Control {

    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/template.latte');
        $template->render();
    }

    public function createComponentNewOrderForm()
    {
        $form = new Form;

        $status = array(
            'NEW' => 'Nová',
            'APPROVED' => 'Vyřízená',
            'CANCELED' => 'Zrušená'
        );

        $form->addText('firstname', 'Křestní jméno')
            ->setRequired('Doplňte křestní jméno');
        $form->addText('surname', 'Příjmení')
            ->setRequired('Doplňte příjmení');
        $form->addText('email', 'Email')
            ->setRequired('Doplňte email');
        $form->addText('phone', 'Telefon')
            ->setRequired('Doplňte telefon');
        $form->addText('loan_count', 'Částka')
            ->setRequired('Doplňte částku');
        $form->addSelect('status', 'Stav', $status);
        $form->addSubmit('register', 'Vytvořit objednávku');

        $form->onSuccess[] = array($this, 'onNewOrderFormSuccess');

        return $form;
    }

    public function onNewOrderFormSuccess($form, $values) {

        if (!$this->getPresenter()->isAjax()) {
            $this->redirect('this');
        } else {
            $this->template->registered = true;

            $this->invalidateControl('newOrder');
        }
    }

}
