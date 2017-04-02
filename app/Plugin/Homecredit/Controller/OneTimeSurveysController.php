<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
require_once ROOT.DS. 'Vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
require_once ROOT.DS. 'Vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';
/**
 * OneTimeSurveys Controller
 *
 */
class OneTimeSurveysController extends HomecreditAppController {

	var $components = array('Email','RequestHandler');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array(
			'addVote'
		);
		$this->Security->allowedControllers = array(
			'DefaultDisplay'
		);
	}
	public function addVote() {
		$this->autoRender = false;
		$this->loadModel('OneTimeSurvey');

		if($this->request->is(array('ajax'))) {
			if ($this->OneTimeSurvey->save($this->request->data)) {
				$this->OneTimeSurvey->save($this->request->data['oneTimeSurvey']);
			}
		}
	}
	public function admin_exportSurveys() {
		$this->export(array(),'OneTimeSurveys');
	}
	protected function export($options = array(),$fileName="export") {
		header('Content-Type: ' . 'text/csv');
		header('Content-Disposition: attachment;filename="'.$fileName.'.csv');
		header('Cache-Control: max-age=0');
		$out = fopen('php://output', 'w');
		$csvArray = array(
			//Headers
			'ID',
			'Trigger',
			'Score',
			'Comment',
			'Shared',
			'Created',
		);
		fputcsv($out, $csvArray, ";");
		$emptyFields = array();
		$fields = array(
			'id',
			'trigger',
			'score',
			'comment',
			'shared',
			'created'
		);
		$options = array(
			'order' => array('created' => 'desc'),
		);
		$data = $this->OneTimeSurvey->find('all',$options);
		foreach($data as $row) {
			$csvRow = array();
			foreach($fields as $field) {
				$fieldData = explode('.',$field);
				if(count($fieldData) == 2 && isset($row[$fieldData[0]][$fieldData[1]])) {
					$csvRow[] = $this->csvEscape($row[$fieldData[0]][$fieldData[1]]);
				} else {
					if(isset($row['OneTimeSurvey'][$fieldData[0]])) {
						$csvRow[] = $this->csvEscape($this->formatValueForExport($fieldData[0], $row['OneTimeSurvey'][$fieldData[0]], $row));
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
		if($this->OneTimeSurvey->getColumnType($fieldName) == "boolean") {
			if($val == 1) {
				$val = "yes";
			} else {
				$val = "no";
			}
		}
		return $val;
	}
}
