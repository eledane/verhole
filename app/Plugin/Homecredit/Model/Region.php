<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Region Model
 *
 * @property City $City
 */
class Region extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'City' => array(
			'className' => 'Homecredit.City',
			'foreignKey' => 'region_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public $actsAs = array(
		'Seed.SeedTranslate' => array('name'),
	);

	/**
	 * @param unknown $regions
	 */
	public function getFormattedRegions($format = false) {
		$this->Behaviors->load('Containable');
		$regions = $this->find('all', array(
				'contain' => array(
					'City' => array(
						'order' => array(
							'City.name' => 'ASC'
						)
					)
				),
				'order' => array(
					'Region.ordering' => 'ASC'
				),
				'recursive' => 1,
			)
		);
		if ($format == 'json') {
			$formatted = array();
			foreach ($regions as $c => $region) {
				$formatted[$c] = array(
					'province' => $region['Region']['name'],
					'cities' => array(),
				);
				foreach ($region['City'] as $city) {
					$formatted[$c]['cities'][$city['id']] = $city['name'];
				}
			}
			$formatted = json_encode($formatted);
		}
		else {
			$formatted = array();
			foreach ($regions as $region) {
				foreach ($region['City'] as $city) {
					$formatted[$region['Region']['name']][$city['id']] = $city['name'];
				}
			}
		}

		return $formatted;
	}
}
