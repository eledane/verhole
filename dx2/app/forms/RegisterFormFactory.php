<?php

namespace App\Forms;

use Nette,
    Nette\Application\UI\Form,
    App\Model\UserManager;

class RegisterFormFactory extends Nette\Object {

    /** @var UserManager */
    private $users;

    function __construct(UserManager $manager) {
        $this->users = $manager;
    }

    public function create() {
        $form = new Form;

        $form->addText('name', 'Křestní jméno')
            ->setRequired('Zadejte vaše jméno');
        $form->addText('surname', 'Příjmení')
            ->setRequired('Zadejte vaše příjmení');
        $form->addText('email', 'Email')
            ->setRequired('Zadejte váš email');
        $form->addText('phone', 'Telefon')
            ->setRequired('Zadejte váš telefon')
            ->addRule($form::PATTERN, 'Zadejte telefonní číslo ve správném formátu. Např. 774 123 123', '^(\+420)? ?[1-9][0-9]{2} ?[0-9]{3} ?[0-9]{3}$');
        $form->addSubmit('register', 'Registrovat');

        return $form;
    }
}
