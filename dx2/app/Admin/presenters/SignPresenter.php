<?php

namespace App\AdminModule\Presenters;

use Nette,
  App\Forms\SignFormFactory;


/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{
    /** @var SignFormFactory @inject */
    public $factory;

    /**
     * Sign-in form factory.
     * @return Nette\Application\UI\Form
     */
    protected function createComponentSignInForm()
    {
        $form = $this->factory->create();

        $form->onSuccess[] = function ($form) {
            $form->getPresenter()->redirect('Dashboard:');
        };

        $form->onError[] = function ($form) {
			$this->flashMessage($this->translator->trans('messages.admin.signInForm.message.bad_credentails'), 'danger');
			$this->redirect('in');
		};

        return $form;
    }


    public function actionOut()
    {
        $this->getUser()->logout();
        $this->flashMessage($this->translator->trans('messages.admin.signInForm.message.logout'), 'success');
        $this->redirect('in');
    }

}
