<?php

namespace App\Forms;

use Nette,
	Nette\Application\UI\Form,
	Nette\Security\User;
use Kdyby\Translation\Translator;

class SignFormFactory extends Nette\Object
{
	/** @var User */
	private $user;

	/** @var Translator */
	private $translator;

	public function __construct(User $user, Translator $translator)
	{
		$this->user = $user;
		$this->translator = $translator;
	}

	/**
	 * @return Form
	 */
	public function create()
	{
		$form = new Form;
		$form->setTranslator($this->translator->domain('messages.admin.signInForm'));

		$form->addText('username', 'username')
			->setRequired('username.required');

		$form->addPassword('password', 'password')
			->setRequired('password.required');

		$form->addCheckbox('remember', 'Zůstat přihlášen');

		$form->addSubmit('send', 'submit')->getControlPrototype()->addClass('btn btn-primary btn-block');

		$form->onSuccess[] = array($this, 'formSucceeded');
		return $form;
	}

	public function formSucceeded($form, $values)
	{
		if ($values->remember) {
			$this->user->setExpiration('14 days', FALSE);
		} else {
			$this->user->setExpiration('20 minutes', TRUE);
		}

		try {
			$this->user->login($values->username, $values->password);
		} catch (Nette\Security\AuthenticationException $e) {
			$form->addError('Špatné přihlašovací údaje.');
		}
	}

}
