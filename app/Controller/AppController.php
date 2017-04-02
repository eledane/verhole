<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('SeedCoreController', 'Seed.Controller');
App::uses('AdminAccessComponent', 'Controller/Component');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends SeedCoreController {
	
	public $sessionLang;
	public $AdminAccess;

	public function beforeFilter() {
		parent::beforeFilter();
		if (strpos($this->here, '/admin') !== false) {
			$this->layout = "admin_china";
			$this->_setAdminAccess();
			$this->_setCorrectAdminMenu();
			$this->_setCorrectRedirectUrl();
			$this->_checkProfilePost();
			$this->checkActionAvailability();
// 			echo '<!--';print_r('');echo'-->';
		}
		if($this->params['action'] == "display") {
			$this->sessionLang = $this->Session->read('Config.language');
			$this->Session->write('Config.language', Configure::read('Config.language'));
			$this->setPromotions();
			//$this->setStores();
			$this->setSteps();
			$this->setDetaultValue();
			$this->setCanIAffordItPage();
			$this->setPromotionPage();
			$this->setFirstLoanPage();
			$this->setPosLoanPage();
			$this->setWalkInCashLoanPage();
			$this->setMyFirstLoanPage();
			$this->setBudgetToolPage();
			$this->setDocumentsPage();
			$this->setFaqPage();
			$this->setTestimonials();
			$this->setRegions();
			$this->setProductCategories();
			$this->setContactTypes();
			$this->setValueAddedServicesPage();
			$this->setContactPage();
			$this->setAboutPage();
			$this->setCsvPoslFile();
			$this->setCsvWclFile();
			$this->setFAQPage();
			$this->setAboutHCPage();
			$this->setFinancialLiteracyPage();
			$this->setPostsPages();
			$this->setPricelistsPage();
			$this->setHomepage();
			$this->setGuaranteePage();
			$this->setAnnouncements();

		}
		if (strpos($this->here, '/admin') !== false) {
			$this->viewClass = 'Homecredit.Admin';
		}
	}
	
	public function setAnnouncements() {
		$this->loadModel('Homecredit.Announcement');
		$this->set('announcements', $this->Announcement->find('all',array('order' => array('Announcement.ordering' => 'ASC'))));
	}
	
	/**
	 * Set regions to view
	 */
	public function setRegions() {
		$this->loadModel('Homecredit.Region');
		$this->set('regions', $this->Region->getFormattedRegions());
		$this->set('regions_json', $this->Region->getFormattedRegions('json'));
	}

	public function setPromotions() {
		$this->loadModel('Homecredit.Promotion');
		$this->set('promotions',$this->Promotion->getPromotions());
	}

	public function setStores() {
		$this->loadModel('Homecredit.Store');
		$this->set('stores',$this->Store->getStores());
	}
	public function setContactTypes() {
		$this->loadModel('Homecredit.Contact');
		$this->loadModel('Homecredit.ContactType');
		$this->set('contactTypes',$this->ContactType->find('list',array(
			'order' => array(
				'ContactType.ordering' => 'ASC'
			)
		)));
	}
	
	public function setSteps() {
		$this->loadModel('Homecredit.MyFirstLoanCategory');
		$steps = $this->MyFirstLoanCategory->getCategoriesWithSteps();
		$this->set('loanSteps',$steps);
	}
	
	public function setDetaultValue() {
		$value = null;
		$this->loadModel('Homecredit.ProductCategory');
		$categories = $this->ProductCategory->find('list',array('fields'=>array('url','id')));
		if(!empty($this->request->query['category']) && !empty($categories[$this->request->query['category']])) {
			$value = Configure::read('BudgetTool.nevim_co_to_je.'.$categories[$this->request->query['category']]);
		}
		$this->set('selectedCategory',$value);
	}
	
	public function setCanIAffordItPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.id' => Configure::read('Page.can_i_afford_it')
			)
		));
		$this->set('canI',$p);
	}

	public function setPromotionPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'promotion.ctp'
			)
		));
		$this->set('promotionPage',$p);
	}

	public function setContactPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'contact.ctp'
			)
		));
		$this->set('contactPage',$p);
	}

	public function setAboutPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'aboutus.ctp'
			)
		));
		$this->set('aboutPage',$p);
	}

	public function setPricelistsPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'pricelists.ctp'
			)
		));
		$this->set('pricelistsPage',$p);
	}
	public function setValueAddedServicesPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'valueAddedServices.ctp'
			)
		));
		$this->set('valueAddedServicesPage',$p);
	}
	public function setCsvPoslFile() {
		$this->loadModel('Homecredit.CsvFile');
		$p = $this->CsvFile->find('first', array(
			'conditions' => array(
				'CsvFile.name' => 'POSL'
			)
		));
		$p = $this->CsvFile->getForamtedData($p['CsvFile']['id']);
		$this->set('csvPOSL',$p);
	}
	public function setCsvWclFile() {
		$this->loadModel('Homecredit.CsvFile');
		$p = $this->CsvFile->find('first', array(
			'conditions' => array(
				'CsvFile.name' => 'WCL'
			)
		));
		$p = $this->CsvFile->getForamtedData($p['CsvFile']['id']);
		$this->set('csvWCL',$p);
	}

	public function setBudgetToolPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'budgetTool.ctp'
			)
		));
		$this->set('budgetToolPage',$p);
	}

	public function setDocumentsPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'documents.ctp'
			)
		));
		$this->set('documentsPage',$p);
	}

	public function setFirstLoanPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'firstLoan.ctp'
			)
		));
		$this->set('firstLoanPage',$p);
	}

	public function setFaqPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'faq.ctp'
			)
		));
		$this->set('faqPage',$p);
	}

	public function setPosLoanPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'posLoan.ctp'
			)
		));
		$this->set('posLoanPage',$p);
	}

	public function setWalkInCashLoanPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'walkInCashLoan.ctp'
			),
			'order' => array(
				'id' => 'ASC'
			),
		));
		$this->set('WCLPage',$p);
	}
	
	public function setMyFirstLoanPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.id' => Configure::read('Page.my_first_loan')
			)
		));
		$this->set('firstLoanPage',$p);
	}

	public function setAboutHCPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'aboutHC.ctp'
			)
		));
		$this->set('aboutHCPage',$p);
	}
	
	public function setPostsPages() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.id' => Configure::read('Page.efforts')
			)
		));
		$this->set('effortsPage',$p);
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.id' => Configure::read('Page.bulletin')
			)
		));
		$this->set('bulletinPage',$p);
	}

	public function setFinancialLiteracyPage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'financialLiteracy.ctp'
			)
		));
		$this->set('financialLiteracyPage',$p);
	}

	public function setHomepage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'home.ctp'
			)
		));
		$this->set('homepage',$p);
	}

	public function setGuaranteePage() {
		$this->loadModel('Pages.Page');
		$p = $this->Page->find('first',array(
			'conditions' => array(
				'Page.template' => 'guarantee.ctp'
			)
		));
		$this->set('guarantee',$p);
	}
	
	public function setTestimonials() {
		$this->loadModel('Homecredit.Testimonial');
		$this->Testimonial->loadMedia = true;
		$t = $this->Testimonial->find('all',array(
			'limit' => 5,
			'order' => 'RAND()'
		));
		$this->set('testimonials',$t);
		$this->loadModel("Pages.Page");
		$this->set('testimonialPage',
			$this->Page->find('first',array(
				'conditions' => array(
					'Page.template' => 'testimonials.ctp'
				)
			))
		);
	}
	public function setProductCategories() {
		$this->loadModel('Homecredit.ProductCategory');
		$this->set('ProductCategories', $this->ProductCategory->getProductCategories());
	}
	
	public function fakePageData() {
		//jde o to, ze pri ajaxove response potrebuju nasetovat spravne lokale a nacist staticke texty
		$locale = Configure::read('Config.defaultLanguage');
		$availableLangs = Configure::read('Config.availableLanguages');
		if(!empty($this->request->params['language']) && !empty($availableLangs[$this->request->params['language']])) {
			$locale = $availableLangs[$this->request->params['language']];
		}
		Configure::write('Config.language',$locale);
		$this->loadModel('Texts.Text');
		$this->Text->locale = $locale;
		$texts = $this->Text->find('all');
		// set string translations into global variable
		global $seed_string_translations;
		$seed_string_translations = Hash::combine($texts, '{n}.Text.name', '{n}.Text.content');
	}
	
	public function admin_index() {
		parent::admin_index();
		if(!empty($this->model) && $this->model->alias == 'Text') {
			$this->view = 'Homecredit.Texts/list';
		}
	}
	
	public function afterFilter() {
		parent::afterFilter();
		$this->Session->write('Config.language', $this->sessionLang); 
	}
	
	protected function _setAdminAccess() {
		$this->AdminAccess = $this->Components->load('AdminAccess');
		$this->AdminAccess->initialize($this);
		$this->AdminAccess->setAccessibleMethods($this->Auth->user());
	}
	
	protected function isUsersController() {
		return $this->request->params['controller'] == 'users';
	}
	
	protected function setCorrectUserTypes() {
		if($this->isUsersController() && in_array($this->request->params['action'], array('admin_profile'))) {
			$this->set('userTypes',array(Configure::read('UserType.host')=>'Export'));
		}
	}
	
	protected function _setCorrectRedirectUrl() {
		if($this->isUsersController() && in_array($this->request->params['action'], array('admin_profile')) && $this->AdminAccess->isExport($this->Auth->user())) {
			$this->redirectUrl = array(
				'admin' => true,
				'plugin' => 'seed',
				'controller' => 'users',
				'action' => 'profile'
			);
		}

        if($this->isUsersController() && in_array($this->request->params['action'], array('admin_profile')) && $this->AdminAccess->isArticle($this->Auth->user())) {
            $this->redirectUrl = array(
                'admin' => true,
                'plugin' => 'seed',
                'controller' => 'users',
                'action' => 'profile'
            );
        }
	}
	
	protected function _checkProfilePost() {
		if($this->AdminAccess->isExport($this->Auth->user())){
			if($this->_isPostOrPut() && !empty($this->request->data['User']['user_type_id'])) {
				$this->request->data['User']['user_type_id'] = Configure::read('UserType.host');
			}
		}
	}
	
	protected function _setCorrectAdminMenu() {
		if($this->AdminAccess->isExport($this->Auth->user())) {
			Configure::write('Menus.adminMenu',array(
				array(
							'name'=>'Export',
							'children'=> array(
								array(
									'name' => 'Contacts',
									'url' => array(
										'plugin'=>'homecredit',
										'controller'=>'contacts',
										'action' => 'exportContacts'
									),
									'options' => array(
										'target' => '_blank'
										)
								),
								array(
									'name' => 'Contacts grouped',
									'url' => array(
										'plugin'=>'homecredit',
										'controller'=>'contacts',
										'action' => 'exportContactsGrouped'
									),
									'options' => array(
										'target' => '_blank'
									)
								),
                                array(
                                    'name' => 'Contacts Filtered',
                                    'url' => array(
                                        'plugin'=>'homecredit',
                                        'controller'=>'contacts',
                                        'action' => 'exportFiltered'
                                    )
                                ),
								array(
									'name' => 'Onetime Surveys',
									'url' => array(
										'plugin'=>'homecredit',
										'controller'=>'onetimesurveys',
										'action' => 'exportSurveys'
									),
									'options' => array(
										'target' => '_blank'
									)
								),
							),
						)
					)
				);
		} else if($this->AdminAccess->isArticle($this->Auth->user())) {
            Configure::write('Menus.adminMenu',array(
                array(
                    'name'=>'Articles',
                    'url'=>array(
                        'plugin'=>'homecredit',
                        'controller'=>'articles',
                    ),
                    'children' => array(
                        array(
                            'name'=>'Article categories',
                            'url'=>array(
                                'plugin'=>'homecredit',
                                'controller'=>'articlecategories',
                            ),
                        ),
                        array(
                            'name'=>'Article tags',
                            'url'=>array(
                                'plugin'=>'homecredit',
                                'controller'=>'articleTags',
                            ),
                        ),

                    )
                )
            ));
        } else if($this->AdminAccess->isNPS($this->Auth->user())) {
            Configure::write('Menus.adminMenu',array(
				array(
					'name'=>'Pages',
					'children'=> array(
            			array(
            				'name'=>'Onetime survey',
            				'url'=>array(
            					'plugin'=>'homecredit',
            					'controller'=>'onetimesurveys',
            				),
            			)
					),
				)
            ));
        }
	}
	
	public function beforeRender() {
		parent::beforeRender();
		if(strpos($this->here, '/admin') !== false && $this->AdminAccess->isExport($this->Auth->user())) {
			$this->setCorrectUserTypes();
		}
		if(strpos($this->here, '/admin') !== false && $this->AdminAccess->isArticle($this->Auth->user())) {
		    $this->setCorrectUserTypes();
		}
	}
	
	private function hasPreviews() {
		$disabled = array(
		    'User'
		);
		return !in_array($this->model->alias, $disabled);
	}
	
	public function admin_edit($id = null) {
		parent::admin_edit($id);
		$this->view = "Homecredit.General/form";
		if($this->hasPreviews()) {
			if(!$this->model->hasPublicField() || ($this->model->hasPublicField() && !empty($this->request->data[$this->model->alias]['public']) && ($this->request->data[$this->model->alias]['public']))) {
				$this->set('isPublished', true);
			} else {
				$this->set('isPublished', false);
			}
		} else {
			$this->set('isPublished', false);
		}
	}
	
	public function admin_preview($id = null) {
		$locale = Configure::read('Config.defaultLanguage');
		if($this->model->Behaviors->loaded('Translate') || $this->model->Behaviors->loaded('SeedTranslate')) {
			$locale = Configure::read('Config.language');
		}
		$this->Session->write('preview.'.$locale.'.'.$this->model->alias.'.'.$id,$this->request->data);
		//@todo - zkusit najit stranku, na ktere se zobrazuje
		$localeString = "";
		if($locale != Configure::read('Config.defaultLanguage')) {
			$localeString = array_search($locale, Configure::read('Config.availableLanguages'));
		}
		$this->redirect("/".$localeString);
	}
	
	public function admin_discardPreview() {
		if ($this->request->is('post') || $this->request->is('put')) {
			if(!empty($this->request->data['Preview'])) {
				$data = $this->request->data['Preview'];
				$this->Session->delete('preview.'.$data['lang'].'.'.$data['model'].'.'.$data['id']);
				$empty = $this->Session->read('preview.'.$data['lang'].'.'.$data['model']);
				if(empty($empty)) {
					$this->Session->delete('preview.'.$data['lang'].'.'.$data['model']);
				}
				$empty = $this->Session->read('preview.'.$data['lang']);
				if(empty($empty)) {
					$this->Session->delete('preview.'.$data['lang']);
				}
				$this->redirect($this->request->data['Preview']['redirect']);
			}
		}
		$this->redirect( Router::url( $this->referer(), true ) );
	}
}
