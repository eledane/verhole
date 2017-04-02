<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

/**
 * CsvFile Model
 *
 */
class CsvFile extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	public $hiddenViewFields = array('file');
	public $hiddenFormFields = array('parsed_json');
	
	public function validateIndentifier($value) {
		$pattern = '/^[0-9]+$/';
		$match = "";
		if(preg_match($pattern, $value, $match)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function validateValue($value) {
		$pattern = '/^[0-9]+\.?[0-9]*$/';
		$match = "";
		if(preg_match($pattern, $value, $match)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function processFile($fileData,$monthsOnly = false) {
		try {
			$file = new File($fileData['tmp_name']);
			$data = $file->read();			
			$lines = explode(PHP_EOL, $data);
			if(empty($lines)) {
				return null;
			}
			$result = array();
			$counter = 0;
			$months = null;
			foreach ($lines as $line) {
				$counter++;
				
				$row = str_getcsv($line,";");
				//Prvni radek je definice mesicu a je odsazeny o jeden sloupec
				if($counter == 1) {
					if(empty($row)) {
						return null;
					} else {
						unset($row[0]);
						$months = implode(',',$row);
						continue;
					}
				}
				if(!empty($row) && !empty($row[0])) {
					if(count($row) < 2 ) {
						return null;
					}
					$identifier = $row[0];
					if(!$this->validateIndentifier($identifier)) {
						return null;
					}
					unset($row[0]);
					foreach($row as $key=>$element) {
						if(!$this->validateValue($element)) {
							return null;
						}
						if(empty($result[$key])) {
							$result[$key] = array();
						}
						$result[$key][$identifier] = round($element);
					}

				}
			}
			$file->close();
			if($monthsOnly) {
				return $months;
			}
			return array_values($result);
		} catch(Exception $e) {
			return null;
		}
		
	}
	
	public function validateFile($fileData) {
		if(pathinfo($fileData['name'], PATHINFO_EXTENSION)!='csv') {
			return false;
		}
		$result = $this->processFile($fileData);
		return !empty($result);
	}
	
	public function getMonths($fileData) {
		return $this->processFile($fileData,true);
	}
	
	public function saveFile($id,$fileData) {
		$result = $this->processFile($fileData);
		$months = $this->getMonths($fileData);
		$metaData = $this->find('first',array(
			'conditions' => array(
				'CsvFile.id' => $id
			)
		));
		$newPath = $this->copyCsv($fileData['tmp_name'],$metaData);
		if($newPath) {
			$saveData = array(
				'id'=>$id,
				'file'=>$newPath,
				'parsed_json' => json_encode(array_values($result))
			);
			if(!empty($months)) {
				$saveData['months'] = $months;
			}
			return $this->save($saveData);
		} else {
			return false;
		}
	}
	
	public function copyCsv($path,$metaData) {
		try {
			$f = Configure::read('Calc.csv_import_folder').DS.$metaData['CsvFile']['id'].'-'.  uniqid().'.csv';
			$dest = WWW_ROOT.$f;
			$file = new File($path);
			$reuslt = $file->copy($dest);
			$file->close();
			if($reuslt) {
				return $f;
			}
			return false;
		} catch(Exception $e) {
			return false;
		}
	}
	
	public function getForamtedData($id = null) {
		$options = array();
		if(!empty($id)) {
			$options['conditions'] = array(
				'CsvFile.id' => $id
			);
		}
		$rows = $this->find('all',$options);
		$totalResult = array();
		foreach($rows as $key => $row) {
			$totalResult[$key] = array(
			'monthSteps' => explode(',', $row['CsvFile']['months']),
			'data' => json_decode($row['CsvFile']['parsed_json'], true)
			);
		}
		if(!empty($totalResult) && !empty($id)) {
			$totalResult = $totalResult[0];
		}
		return json_encode($totalResult);
	}
}
