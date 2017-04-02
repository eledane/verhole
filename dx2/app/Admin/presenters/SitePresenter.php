<?php

namespace App\AdminModule\Presenters;

use Nette;

class SitePresenter extends AdminPresenter {

	protected $modelName = 'sites';

	protected $pageTitleDefault = 'Stránky';

	protected $showAddButton = false;

	public function setupColumns(&$grid) {
		$grid->addColumnText('id', 'no');
		$grid->addColumnText('domain', 'domain');
		$grid->addColumnText('price_selector', 'price_selector');
		$grid->addColumnText('name_selector', 'name_selector');
		$grid->addColumnText('img_selector', 'image_selector');
		$grid->addColumnText('category_selector', 'category_selector');
		$grid->addColumnText('thousands_separator', 'thousands_separator');
		$grid->addColumnText('decimal_separator', 'decimal_separator');
		$grid->addColumnNumber('ordering', 'ordering');
		$grid->addColumnText('crawler_class', 'crawler_class');

		$grid->addFilterText('id', '#');
		$grid->addFilterText('domain', 'Doména')
			->setSuggestion();
		$grid->addFilterText('price_selector', 'Selektor ceny');
		$grid->addFilterText('name_selector', 'Selektor názvu');
		$grid->addFilterText('img_selector', 'Selektor obrázku');
		$grid->addFilterText('category_selector', 'Selektor kategorie');
		$grid->addFilterText('thousands_separator', 'Oddělovač tisíců');
		$grid->addFilterText('decimal_separator', 'Oddělovač desetiných míst');
		$grid->addFilterNumber('ordering', 'Řazení');
		$grid->addFilterText('crawler_class', 'Název custom crawleru');
	}

	public function setupActions(&$grid) {
		$edit   = $grid->addActionHref('edit', 'edit');
		$remove = $grid->addActionHref('remove', 'delete');

		$edit->getElementPrototype()->class[]   = 'btn-default btn-flat';
		$remove->getElementPrototype()->class[] = 'btn-default btn-flat';
		$remove->setConfirm(function ($item) {
			return 'Id: ' . $item->domain;
		});
	}

	public function buildManageForm(&$component) {
	}



	public function renderDefault() {
	}


	public function renderEdit($id) {
		$row = $this->getModel()->get($id);

		$form = $this['addSiteForm'];

		$form['send']->caption = 'Uložit';
		$form->setDefaults($row);

		$this->template->site = $row;
	}


	public function actionRemove($id) {
		$row = $this->getModel()->get($id);
		$row->delete();
		$this->redirect('Site:');
	}


	public function renderAdd() {
		$form = $this['addSiteForm'];

		if (isset ($_GET['domain'])) {
			$form['domain']->value = $_GET['domain'];
		}
	}


	protected function createComponentAddSiteForm() {
		$form = new \Nette\Application\UI\Form;

		$form->addText('domain', 'Domain')
		     ->setRequired('Insert domain');
		$form->addText('price_selector', 'Price selector');
		$form->addText('name_selector', 'Name selector');
		$form->addText('img_selector', 'Image selector');
		$form->addText('category_selector', 'Category selector');
		$form->addText('thousands_separator', 'Thousands separator');
		$form->addText('decimal_separator', 'Decimal separator');
		$form->addText('ordering', 'Order');
		$form->addText('crawler_class', 'Custom crawler name');
		$form->addSubmit('send', self::BUTTON_SAVE)
			->onClick[] = [$this, 'onFormSend'];
		$form->addSubmit('send_continue', self::BUTTON_SAVE_CONTINUE)
			->onClick[] = [$this, 'onFormSendContinue'];

		$form->onSuccess[] = [$this, 'onAddSiteFormSuccess'];

		return $form;
	}

	public function onAddSiteFormSuccess($form, $values) {
		$id = (int) $this->getParameter('id');

		if (!$id) {
			$row = $this->getModel()->insert($values);
			$this->flashMessage('Stránka přidána', 'success');

			if ($this->redirect) {
				$this->redirect('Site:');
			} else {
				$this->redirect('Site:edit', ['id' => $row->id]);
			}
		} else {
			$row = $this->getModel()->get($id);
			$row->update($values);
			$this->flashMessage('Stránka uložena', 'success');

			if ($this->redirect) {
				$this->redirect('Site:');
			}
		}
	}
}
