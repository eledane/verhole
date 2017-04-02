<?php

namespace App\AdminModule\Presenters;

use Nette,
    Nette\Application\UI\Form;

class BlacklistPresenter extends AdminPresenter {

    protected $modelName = 'blacklist';

    protected $pageTitleDefault = 'Zakázané eshopy';

    protected $showAddButton = false;

    public function setupColumns(&$grid){

        $grid->addColumnNumber('id', 'no')
            ->setSortable()
            ->setFilterNumber();

        $grid->addColumnNumber('url', 'url')
            ->setSortable()
            ->setFilterText();

        $grid->addColumnNumber('created_at', 'created');
    }

    public function buildManageForm(&$component){}

    public function actionEdit($id) {
        $row = $this->getModel()->get($id);

        $form = $this['addBlacklistForm'];
        $form['send']->caption = 'Uložit';
        $form->setDefaults($row);

        $this->template->site = $row;
    }

    public function actionDelete($id) {
        $row = $this->getModel()->get($id);

        $row->delete();
        $this->flashMessage('Stránka smazána', 'success');

        $this->redirect('Blacklist:');
    }

    public function createComponentAddBlacklistForm() {
        $form = new Form();

        $form->addText('url', 'URL eshopu')
            ->setRequired('Zadejte URL eshopu')
            ->addRule($form::URL, 'Zadejte URL ve správném formátu');

        $form->addSubmit('send', 'Přidat');

        $form->onSuccess[] = array($this, 'onAddBlacklistFormSuccess');

        return $form;
    }

    public function onAddBlacklistFormSuccess($form, $values) {
        $id = (int)$this->getParameter('id');

        if (!$id) {
            $this->getModel()->insert($values);
            $this->flashMessage('Stránka přidána', 'success');
        } else {
            $row = $this->getModel()->get($id);
            $row->update($values);
            $this->flashMessage('Stránka uložena', 'success');
        }

        $this->redirect('Blacklist:');
    }

}