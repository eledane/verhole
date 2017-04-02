<?php

namespace App\AdminModule\Presenters;

use Grido\Translations\FileTranslator;
use Nette,
	App\Model,
	App\Controls\Grido;

/**
 * Base admin presenter
 */
abstract class AdminPresenter extends SecuredPresenter {

	protected $modelName = '';

	protected $activeStates = [
		0 => 'Ne',
		1 => 'Ano',
	];

	protected $pageTitleDefault = '';
	protected $pageTitleAdd = '';
	protected $pageTitleEdit = '';

	protected $showAddButton = true;

	public $redirect = false;

	const BUTTON_SAVE = 'Save';
	const BUTTON_SAVE_CONTINUE = 'Save and continue';

	/**
	 *    Check if user is in role admin
	 */

	protected function startup() {

		parent::startup();

		// @TODO: MAKE ACCESS PRIVILEGIUM FOR ADMIN
		if (!$this->user->isInRole('admin')) {
			$this->redirect(':Homepage:default');
		}

		$this->template->showAddButton = $this->showAddButton;
	}

	/**
	 *    Creates Grid component to show data
	 */

	public function createComponentListing($name) {
		$grid = new Grido\Grid($this, $name); //\Grido\Grid($this, $name);

		$grid->setTranslator($this->translator->domain('messages.admin.grid'));

		$this->setupColumns($grid); // columns
		$this->setupActions($grid); // actions

		$grid->setModel($this->getModel()->getTable());
	}

	/**
	 *    Used by extended presenters to setup grid columns
	 */
	abstract public function setupColumns(&$grid);

	/**
	 *    User by extended presenters to create add/edit form
	 */
	abstract public function buildManageForm(&$component);

	/**
	 *    Base actions on grid component
	 */
	public function setupActions(&$grid) {

		$edit                                 = $grid->addActionHref('edit', 'edit')->setIcon('pencil');
		$edit->getElementPrototype()->class[] = 'btn-flat btn-default btn-sm';

		// delete action
		$delete                                 = $grid->addActionHref('delete', 'delete')->setIcon('trash');
		$delete->getElementPrototype()->class[] = 'btn-danger';

		//print_r($delete);

		$delete->setConfirm(
			function ($item) {
				return "Are you sure you want to delete #{$item->id}?";
			}
		);
	}

	/**
	 *    Returns presenters model
	 */
	public function getModel($name = null) {
		if ($name) {
			return $this->context->getService($name);
		} else {
			return $this->context->getService($this->getModelName());
		}
	}

	/**
	 *    Returns model name
	 */

	public function getModelName() {
		return $this->modelName;
	}

	/**
	 *    Create a form to add/edit record
	 *    - by url parametr decide if is edit mode and prefill data
	 */

	public function createComponentManageForm($name) {

		$component = new Nette\Application\UI\Form();
		$this->setupFormRenderer($component);
		$this->buildManageForm($component);

		if ($this->getAction() == 'edit') {
			$recordId = $this->getPresenter()->getRequest()->getParameter('id');
			$this->assignFormData($component, $recordId);

			$component->addSubmit('submitAndStay', 'Uložit a zůstat')
			          ->getControlPrototype()->addClass('btn-info');


			$component->addHidden('id', $recordId);        // add ID hidden
		}

		// add specific styles and renderer
		foreach ($component->getControls() as $control) {

			if ($control instanceof Nette\Forms\Controls\SubmitButton) {
				$control->getControlPrototype()->addClass('btn btn-default');
			} else if ($control instanceof Nette\Forms\Controls\Checkbox) {

			} else {
				$control->getControlPrototype()->addClass('form-control');
			}
		}

		$renderer                                    = $component->getRenderer();
		$renderer->wrappers['controls']['container'] = null;
		$renderer->wrappers['pair']['container']     = 'div class=form-group';
		$renderer->wrappers['pair']['.error']        = 'has-error';
		//$renderer->wrappers['control']['container'] = 'div class=col-sm-9';
		//$renderer->wrappers['label']['container'] = 'div class="col-sm-3 control-label"';
		$renderer->wrappers['control']['description']    = 'span class=help-block';
		$renderer->wrappers['control']['errorcontainer'] = 'span class=help-block';

		$component->getElementPrototype()->class('form-horizontal');

		$component->onSuccess[] = callback($this, 'processSubmitForm');

		$this->addComponent($component, $name);
	}

	/**
	 *    Process form submit
	 */

	public function processSubmitForm($form, $values) {

		if ($this->getAction() == 'edit') {

			$this->getModel()->update($values->id, $values);
			$this->flashMessage('Item was updated.', 'success');

			if ($form['submitAndStay']->submittedBy) {
				$this->redirect('edit', ['id' => $values->id]);
			} else {
				$this->redirect('default');
			}

		} else {

			try {

				$this->getModel()->create($values);

				$this->flashMessage('Item was created.', 'success');
				$this->redirect('default');

			} catch (\Exception $e) {
				$this->flashMessage($e->getMessage(), 'danger');
			}

		}
	}

	public function onFormSend($form) {
		if ($form->getValue() == self::BUTTON_SAVE) {
			$this->redirect = true;
		}
	}

	public function onFormSendContinue($form) {
		if ($form->getValue() == self::BUTTON_SAVE_CONTINUE) {
			$this->redirect = false;
		}
	}

	/**
	 *    Assign data into form by specific id
	 */

	public function assignFormData(&$component, $recordId) {
		$record = $this->getModel()->getRecord($recordId);
		$component->setDefaults($record);
	}

	/**
	 *    Defines styles of form
	 */

	public function setupFormRenderer(&$component) {
		$render                                     = $component->getRenderer();
		$renderer->wrappers['control']['container'] = 'form-group';
	}

	/**
	 *    Action views
	 */

	/* public function actionDefault(){

	}

	public function actionAdd(){

	} */

	public function actionEdit($id) {
		try {
			$this->getModel()->get($id);
		} catch (\RecordNotFoundException $e) {
			$this->flashMessage($e->getMessage(), 'danger');
			$this->redirect('default');
		}
	}

	/**
	 *    Delete record by ID
	 */

	public function actionDelete($id) {
		try {
			$model = $this->getModel()->delete($id);
			$this->flashMessage('Item was deleted.', 'success');
			$this->redirect('default');
		} catch (\RecordNotFoundException $e) {
			$this->flashMessage($e->getMessage(), 'danger');
			$this->redirect('default');
		}
	}

	public function renderDefault() {
		// $template = $this->template;
		// $template->setFile(__DIR__ . '/Admin/default.latte');

		$this->template->title = $this->pageTitleDefault;
	}

	public function renderAdd() {
		//$template = $this->template;
		//$template->setFile(__DIR__ . '/Admin/form.latte');

		$this->template->title = $this->pageTitleAdd;
	}

	public function renderEdit($id) {
		$this->template->title = $this->pageTitleEdit;
	}

	public function recalculateOrder($id) {
		$cartItems = $this->getPresenter()->context->getService('cartItems');
		$orders    = $this->getPresenter()->context->getService('orders');
		$order     = $orders->get($id);

		$items = $cartItems->getCartItems($order['cart_id'])->fetchAll();
		$price = 0;
		foreach ($items as $item) {
			$price += $item['price'];
		}

		$or = $order->update([
			'total_price' => $price,
		]);
	}

	public function getTranslations() {
		return [
			'Grido.HintNumber'     => 'Můžete použít <, <=, >, >=, <>. Např.: ">= %d"',
			'Grido.SelectSomeRow'  => 'Vyberte řádek',
			'Grido.Invert'         => 'Obrátit výběr',
			'Grido.Items'          => 'Položky %d - %d z %d',
			'Grido.Previous'       => 'Předchozí',
			'Grido.Next'           => 'Další',
			'Grido.Actions'        => 'Detail',
			'Grido.Search'         => 'Vyhledat',
			'Grido.Reset'          => 'Resetovat',
			'Grido.ItemsPerPage'   => 'Položek na stránku',
			'Grido.Selected'       => 'Vybrané...',
			'Grido.EnterPage'      => 'Vložte stranu:',
			'Grido.NoResults'      => 'Žádné výsledky.',
			'Grido.ExportAllItems' => 'Exportovat všechny položky',
		];
	}
}
