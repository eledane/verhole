<?php

App::uses('HomecreditAppModel', 'Homecredit.Model');

/**
 * Contact Model
 *
 */
class Contact extends HomecreditAppModel {

	public $validationDomain = 'hc';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'name' => array(
			// email or phone notEmpty ... validation funciton
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'can not be empty',
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 2),
				'message' => 'Name must contain at least 2 characters.'
			),
			'maxLength' => array(
				'rule' => array('maxLength', 50),
				'message' => 'Name can contain 50 characters at maximum.'
			)
		),
		'agreement' => array(
			// email or phone notEmpty ... validation funciton

			'notempty' => array(
				'allowEmpty' => true,
				'rule' => array('comparison', '!=', 0),
				//'rule' => array('alphaNumeric'),
				'message' => 'can not be empty'
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'email' => array(
			/*                    'emailRule' => array(
			  'rule' => array('emailOrPhone', true),
			  'message' => 'You have to either enter you phone number or your email'
			  ),
			  /*                    'empty' => array(
			  'allowEmpty' => true
			  ), */
			'emailRule2' => array(
				'rule' => array('email', false),
				'allowEmpty' => true,
				'message' => 'invalid email address'
			)
		),
		'phone' => array(// minimal length?    'rule' => array('minLength', 8),
			/*                     'emailRule2' => array(
			  'rule' => array('emailOrPhone', true),
			  'message' => 'You have to either enter you phone number or your email'
			  ),
			  'empty' => array(
			  'allowEmpty' => true
			  ), */
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'can not be empty',
			),
			'phoneRule' => array(
				'rule' => array('decimal'),
				'message' => 'invalid phone number'
			),
			'minLength' => array(
				'rule' => array('minLength', 9),
				'message' => 'Phone number must contain at least 9 digits.'
			),
			'maxLength' => array(
				'rule' => array('maxLength', 12),
				'message' => 'Phone number can contain 12 digits at maximum.'
			)
		)
	);
	public $belongsTo = array(
		'City' => array(
			'className' => 'Homecredit.City',
			'foreignKey' => 'city_id'
		),
		'ContactType' => array(
			'className' => 'Homecredit.ContactType',
			'foreignKey' => 'contact_type_id'
		)
	);

	function emailOrPhone() {
		if (empty($this->data['Contact']['email']) && (empty($this->data['Contact']['phone']))) {
			return false;
		} else {
			return true;
		}
	}

	public $hiddenFormFields = array(
		'fb_account'
	);
	public $hiddenViewFields = array(
		'fb_account',
		'section',
		'promotion_name',
		'loan_amount',
		'repayment_length',
		'documents',
		'interested_in',
		'work_income',
		'parttime_income',
		'rents',
		'food',
		'children_cost',
		'other_expenses',
		'calculator_type'
	);

	public function getCallCenterEmail() {
		$emails = $this->S->getCallcenterEmails();
		if (empty($emails)) {
			$emails = Configure::read('adminEmail');
		}
		return $emails;
	}

	public function sendContactRequest($id, $adminEmails) {//sends an email with message to contact a person identified by id
		$email = $adminEmails;
		if (Configure::read('debug') > 0) {
			$email = Configure::read('debugEmail');
			if (is_array($email)) {
				$email = array_unique($email);
			}
		}
		$subject = __hc("Home Credit - Contact request");

		$contact = $this->read($id);

		$TPLEmail = 'info@homecredit.cn';
		$TPLUrl = 'http://homecredit.cn';
		$emailSender = 'info@homecredit.cn';

		$TPLArray = array(
			'FooterMail' => $TPLEmail,
			'FooterUrl' => $TPLUrl,
			'name' => $contact['Contact']['name'],
			'email' => $contact['Contact']['email'],
			'created' => $contact['Contact']['created'],
			'phone' => $contact['Contact']['phone'],
			'client_comment' => $contact['Contact']['client_comment'],
			'section' => $contact['Contact']['section'],
			'calculator_type' => $contact['Contact']['calculator_type'],
			'promotion_name' => $contact['Contact']['promotion_name'],
			'loan_amount' => $contact['Contact']['loan_amount'],
			'repayment_length' => $contact['Contact']['repayment_length'],
			'documents' => $contact['Contact']['documents'],
			'interested_in' => $contact['Contact']['interested_in'],
			'work_income' => $contact['Contact']['work_income'],
			'parttime_income' => $contact['Contact']['parttime_income'],
			'rents' => $contact['Contact']['rents'],
			'food' => $contact['Contact']['food'],
			'children_cost' => $contact['Contact']['children_cost'],
			'other_expenses' => $contact['Contact']['other_expenses'],
		);

		/*
		 * Odeslání mailu Home Creditu
		 * */
		/* $EmailHC = new CakeEmail();
		  $EmailHC->template('contactHc')
		  ->config('default')
		  ->viewVars($TPLArray)
		  ->emailFormat('both')
		  ->from($emailSender)
		  ->to($email)
		  ->subject($subject)
		  ->helpers('StaticText');
		  $EmailHC->send(); */

		/*
		 * Odeslání mailu klientovi
		 * */
		if (!empty($contact['Contact']['email'])) {
			$EmailClient = new CakeEmail();
			$EmailClient->template('contactClient')
				->config('default')
				->viewVars($TPLArray)
				->emailFormat('both')
				->from($TPLEmail)
				->to($contact['Contact']['email'])
				->subject($subject)
				->helpers('StaticText');
			$EmailClient->send();
		}
	}

	public function phonewithplus() {
		$phone = str_replace(' ', '', $this->data['Contact']['phone']);
		if ($phone[0] == '+') {
			$phone = substr($phone, 1, strlen($phone));
		}
		if (strlen($phone) < 6) // minimal length -- 6, 1-3 numbers for area code + 5-7 phone number
			return false;

		return is_numeric($phone);
	}

	public function generateContactUUID() {
		return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			// 32 bits for "time_low"
			mt_rand(0, 0xffff), mt_rand(0, 0xffff),
			// 16 bits for "time_mid"
			mt_rand(0, 0xffff),
			// 16 bits for "time_hi_and_version",
			// four most significant bits holds version number 4
			mt_rand(0, 0x0fff) | 0x4000,
			// 16 bits, 8 bits for "clk_seq_hi_res",
			// 8 bits for "clk_seq_low",
			// two most significant bits holds zero and one for variant DCE1.1
			mt_rand(0, 0x3fff) | 0x8000,
			// 48 bits for "node"
			mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
		);
	}

	public function getSections() {
		$sections = $this->find('all', array(
			'fields' => array('DISTINCT(Contact.section) as section_dist'),
			'order' => array('Contact.section')
		));

		$sections = Hash::combine($sections, '{n}.Contact.section_dist', '{n}.Contact.section_dist');
		unset($sections['']);
		unset($sections[null]);
		return $sections;
	}

	public function getWclTypes() {
		return array(
			'wcl2' => 'CPCS',
			'wcl3' => 'CPCM',
			'wcl4' => 'KOLWC',
			'wcl5' => 'CPCWE',
			'wcl6' => 'CPCQQ',
			'wcl7' => 'MENUWC',
			'wcl8' => 'shma',
			'wcl9' => 'Baidu',
			'wcl10' => 'hao',
			'wcl11' => 'sougo',
			'wcl12' => 'GDT',
			'wcl13' => 'WEBU',
			'wcl14' => 'mcllj1',
		);
	}

	public function getMobileTypes() {
		return array("WMW" => "WMW", "WMS" => "WMS");
	}

	public function getChannels() {
		return array_merge($this->getWclTypes(), $this->getMobileTypes());
	}

}
