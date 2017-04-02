<?php

App::uses('HomecreditAppModel', 'Homecredit.Model');

/**
 * Download Model
 *
 */
class Download extends HomecreditAppModel {

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
	public $actsAs = array(
		'Seed.SeedTranslate' => array('name', 'description'),
	);
	public $supportedImageTypes = array(
		'attachment' => array(
			'description' => "Attachment",
			'resolution' => array(
				'width' => '',
				'height' => ''
			)
		)
	);
	public $belongsTo = array(
		'DownloadCategory' => array(
			'className' => 'Homecredit.DownloadCategory',
			'foreignKey' => 'download_category_id'
		)
	);

}
