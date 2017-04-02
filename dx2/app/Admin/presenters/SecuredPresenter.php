<?php

namespace App\AdminModule\Presenters;

use Nette,
	App\Model;


/**
 * Secured presenter for all application presenters.
 */
abstract class SecuredPresenter extends BasePresenter
{
	protected function startup(){
		parent::startup();

        $user = $this->user;

		// all secured presenters requires user to be logged in
		if(!$user->isLoggedIn()){
			$this->getPresenter()->redirect('Sign:in');
		}

        if ($this->getAction() != 'logout' && $this->user->isInRole('user')) {
            $this->redirect(':Front:Profile:orders');
        }

        $this->template->loggedUser = $this->user->getIdentity()->getData();
		$this->template->user = $this->user;
	}

	protected function getUserData(){
		return $this->user->getIdentity()->getData();
	}

	public function actionLogout()
	{
		$this->getUser()->logout();
		$this->flashMessage($this->translator->trans('messages.admin.signInForm.message.logout'), 'success');
		$this->redirect('Sign:in');
	}

}
