<?php

namespace App\AdminModule\Presenters;

use App\Model\OverMaxPayLimitException;
use Nette,
	App\Forms\OrderFactory,
	App\Model\UserManager,
	App\Model\OrdersModel,
	App\Model\CartModel,
	App\Model\CartItemModel,
	Nette\Application\UI\Form,
	App\Model\VersionService;

class BrokenurlPresenter extends AdminPresenter {

	/** @var OrderFactory @inject */
	public $orderFactory;

	/** @var OrdersModel */
	public $orders;

	/** @var UserManager */
	public $users;

	/** @var CartModel */
	public $carts;

	/** @var CartItemModel */
	public $cartItems;

	/** @var VersionService */
	private $versions;

	protected $modelName = 'brokenUrl';

	protected $pageTitleDefault = 'Košíky';

	protected $showAddButton = false;

	public function setupColumns(&$grid) {
		$grid->addColumnNumber('id', 'no');

		$grid->addColumnDate('inserted', 'created', \Grido\Components\Columns\Date::FORMAT_DATETIME)
		     ->setDefaultSort('DESC')
		     ->setSortable();

		$grid->addColumnText('status', 'state')
		     ->setSortable();
		$grid->addFilterText('status', 'Status')
		     ->setSuggestion();

		$grid->addColumnText('url', 'url')
		     ->setCustomRender(function ($item) {
			     return \Nette\Utils\Html::el('a')->href($item->url)->title($item->url)->setText($item->url);
		     });

		$grid->addColumnText('exception', 'error');
	}

	public function buildManageForm(&$component) {
	}

	public function setupActions(&$grid) {
		$edit = $grid->addActionHref('edit', 'edit');

		$remove = $grid->addActionHref('remove', 'delete');
		$remove->setConfirm(function ($item) {
			return 'Remove id: ' . $item->id . '?';
		});

		$create = $grid->addActionHref('create', 'create');
		$find   = $grid->addActionHref('find', 'find');
	}


	public function actionFind($id) {
		$row    = $this->getModel()->get($id);
		$domain = $this->getDomain($row->url);
		$this->redirect('Site:default', ["listing-filter[domain]" => $domain]);
	}


	public function actionCreate($id) {
		$row    = $this->getModel()->get($id);
		$domain = $this->getDomain($row->url);
		$this->redirect('Site:add', ["domain" => $domain]);
	}


	public function actionRemove($id) {
		$row = $this->getModel()->get($id);
		$row->delete();
		$this->redirect('Brokenurl:');
	}


	public function renderEdit($id) {
		$row = $this->getModel()->get($id);

		$form = $this['editBrokenUrlForm'];
		$form->setDefaults($row);
	}


	protected function createComponentEditBrokenUrlForm() {
		$form = new \Nette\Application\UI\Form;

		$statuses = [
			'NEW'      => 'NEW',
			'OPEN'     => 'OPEN',
			'DONE'     => 'DONE',
			'BAD-URL'  => 'BAD URL',
			'HARDCORE' => 'HARDCORE',
		];

		$form->addText('id', 'Id');
		$form->addText('inserted', 'Vytvořeno');
		$form->addText('exception', 'Chyba');
		$form->addSelect('status', 'Status', $statuses);
		$form->addText('url', 'Url');

		$form->addSubmit('send', self::BUTTON_SAVE)
			->onClick[] = [$this, 'onFormSend'];
		$form->addSubmit('send_continue', self::BUTTON_SAVE_CONTINUE)
			->onClick[] = [$this, 'onFormSendContinue'];

		$form->onSuccess[] = [$this, 'onEditBrokenUrlFormSuccess'];

		return $form;
	}

	public function onEditBrokenUrlFormSuccess($form, $values) {
		$id  = (int) $this->getParameter('id');
		$row = $this->getModel()->get($id);
		$row->update($values);
		$this->flashMessage('Stránka uložena', 'success');
		if ($this->redirect) {
			$this->redirect('Brokenurl:');
		}
	}
}
