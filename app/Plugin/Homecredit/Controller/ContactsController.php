<?php

App::uses('HomecreditAppController', 'Homecredit.Controller');
App::uses('CakeTime', 'Utility');
require_once ROOT.DS. 'Vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
require_once ROOT.DS. 'Vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';

/**
 * Contacts Controller
 *
 *
 */
class ContactsController extends HomecreditAppController {

	var $components = array('Email','RequestHandler');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array(
			'add', 'addContact', 'addWcl' ,'noAgreement'
		);
		$this->Security->allowedControllers = array(
			'DefaultDisplay'
		);
	}

	public function addContact() {
		$this->add();
		$this->set('formElement','contact');
		$this->view = 'Homecredit.Contacts/add';
		$this->setContactTypes();
	}

	public function addWcl() {
		$this->add();
		$this->set('formElement','contact-form');
		$this->view = 'Homecredit.Contacts/add';
		$this->setRegions();
	}

	public function noAgreement() {
		$this->add();
		$this->set('formElement','default-without-agreement');
		$this->view = 'Homecredit.Contacts/add';
		$this->setRegions();
	}

	public function add() {
		$this->fakePageData();
		if ($this->request->is('post')) {

			$this->Contact->create();
			$this->request->data['Contact']['ip_address'] = $this->request->clientIp();
			$this->request->data['Contact']['uuid'] = $this->Contact->generateContactUUID();
			$this->request->data['Contact']['is_mobile'] = $this->RequestHandler->isMobile();
			if ($this->Contact->save($this->request->data)) {
				$this->setPublicSuccess(__('<script>Survey_Open("form");</script><p class="biggerInForm success-text" style="display:none;"><span class="check"></span><br><strong class="after-send-title">' . __d('hc', 'sent succes title') . '</strong><br>' . __d('hc', 'sent succes msg') . '<br><span class="phones">' . __d('hc', 'sent succes phones') . '</span><br>' . __d('hc', 'sent succes end') . '</p>'));
				$this->Contact->sendContactRequest($this->request->data['Contact']['id'], $this->getEmailsByType($this->request->data['Contact']));
			} else {
				$this->setPublicError('<span class="status-icon error"></span>' . __d('hc', 'contact form error'));
			}
		}
	}

	public function getEmailsByType($contactData) {
		if (!empty($contactData['type']) && $contactData['type'] == Configure::read('Contact.partners')) {
			return $this->Setting->getPartnersEmails();
		}
		if (!empty($contactData['type']) && $contactData['type'] == Configure::read('Contact.contactUs')) {
			return $this->Setting->getContactUsEmails();
		}
		return $this->Setting->getCallcenterEmails();
	}

	public function admin_exportContacts() {
		$this->export(array(),'Contacts');
	}

	public function admin_exportContactsGrouped() {
		$this->export(array('group' => array('phone')),'ContactsGrouped');
	}

	public function admin_exportFiltered() {
		$this->set('headerElement', $this->listHeader);
		$this->set('title', 'Contacts export filtered');
		$this->set('sections', $this->Contact->getSections());
		$this->set('channels', $this->Contact->getChannels());
		$this->view = "Homecredit.Contacts/filtered";
		if($this->_isPostOrPut()) {
			$conditions = $this->parseExportConditions($this->request->data);
			$this->export(array('conditions' => $conditions));
		}
	}

	private function parseExportConditions($formData) {
		if(empty($formData['Contact'])) {
			return array();
		}
		$conditions = array();
		$contact = $formData['Contact'];
		if(!empty($contact['from'])) {
			$conditions['Contact.created >='] = CakeTime::format($this->Contact->deconstruct('created', $contact['from']), '%Y-%m-%d 00:00:00');
		}
		if(!empty($contact['to'])) {
			$conditions['Contact.created <='] = CakeTime::format($this->Contact->deconstruct('created', $contact['to']), '%Y-%m-%d 23:59:59');
		}
		if(!empty($contact['section'])) {
			$conditions['Contact.section'] = $contact['section'];
		}
		if(!empty($contact['channel'])) {
			$wclValues = $this->Contact->getWclTypes();
			if(!empty($wclValues[$contact['channel']])) {
				$conditions['Contact.form_url LIKE'] = "%".$contact['channel']."%";
			}
			$channelValues = $this->Contact->getMobileTypes();
			if(!empty($channelValues[$contact['channel']])) {
				if($contact['channel'] == "WMW") {
					$conditions['Contact.is_mobile'] = true;
				} else {
					$conditions['Contact.is_mobile'] = false;
				}
				$conditions['NOT'] = array();
				foreach($this->Contact->getWclTypes() as $url => $type) {
					$conditions['NOT'][] = array('Contact.form_url LIKE' => "%".$url."%");
				}
			}
		}
		return $conditions;
	}

	protected function export($options = array(),$fileName="export") {
		header('Content-Type: ' . 'text/csv');
		header('Content-Disposition: attachment;filename="'.$fileName.'.csv');
		header('Cache-Control: max-age=0');
		$out = fopen('php://output', 'w');
		$csvArray = array(
			//Headers
				'Serial number',
				'Order number',
				'Channel',
				'Name',
				'Gender',
				'Phone',
				//To je to co se uklada referenci
				'WCL City',
				'Income',
				'Loan',
				'Contact time',
				'Client comment',
				'Created',
				'IP',
				'Section',
				'Current customer',
				'Contact Type',
				'Province',
				//To je to co se ukalda jen jako text
				'City',
				'URL',
				'utm_campaign',
				'utm_source',
				'utm_medium',
				'utm_content',
				'utm_term'

		);
		fputcsv($out, $csvArray, ";");
		//Nektere filedy jsou zamerne prazdne a nemame je ani v db
		$emptyFields = array(
			'gender','income','loan','contact_time',
		);
		$fields = array(
			'id',
			'uuid',
			'is_mobile',
			'name',
			'gender',
			'phone',
			'City.name',
			'income',
			'loan',
			'contact_time',
			'client_comment',
			'created',
			'ip_address',
			'section',
			'current_customer',
			'ContactType.name',
			'province_name',
			'city_name',
			'form_url',
			'utm_campaign',
			'utm_source',
			'utm_medium',
			'utm_content',
			'utm_term'
		);
		$defaultOptions = array(
			'contain' => array(
				'ContactType','City'
			)
		);
		$this->Contact->Behaviors->load('Containable');
		$options = array_merge($defaultOptions,$options);
		$data = $this->Contact->find('all',$options);
		foreach($data as $row) {
			$csvRow = array();
			foreach($fields as $field) {
				$fieldData = explode('.',$field);
				if(count($fieldData) == 2 && isset($row[$fieldData[0]][$fieldData[1]])) {
					$csvRow[] = $this->csvEscape($row[$fieldData[0]][$fieldData[1]]);
				} else {
					if(isset($row['Contact'][$fieldData[0]])) {
						$csvRow[] = $this->csvEscape($this->formatValueForExport($fieldData[0], $row['Contact'][$fieldData[0]], $row));
					} else {
						$csvRow[] = "";
					}
				}
			}
			fputcsv($out, $csvRow, ";");
		}
		fclose($out);
		exit();
	}

	private function csvEscape($text) {
		return preg_replace("/\r\n|\r|\n/",'-',$text);
	}

	private function formatValueForExport($fieldName,$val,$row) {
		if($fieldName == "is_mobile") {
			$returnVal = $val==1?"WMW":"WMS";
			$values = $this->Contact->getWclTypes();
			foreach($values as $url => $value) {
				if((strpos($row['Contact']['form_url'],$url) !== false)) {
					$returnVal = $value;
				}

			}
			return $returnVal;
		}
		if($this->Contact->getColumnType($fieldName) == "boolean") {
			if($val == 1) {
				$val = "yes";
			} else {
				$val = "no";
			}
		}
		return $val;
	}

}
