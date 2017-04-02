<?php

App::uses('AppHelper', 'View/Helper');
App::import("Model", "Faq");
App::import("Model", "Seed.Media");

/**
 * Description of StaticTextHelper
 *
 * @author kofon
 */
class FaqHelper extends AppHelper {
	
	public function getQuestions($id) {
		//$this->loadModel('Homecredit.Faq');
		$faq = new Faq();
		$options = array(
			'order' => array('id' => 'desc'),
			'conditions' => array(
				'faq_category_id' => $id
			)
		);
		$data = $faq->find('all',$options);
		return $data;
	}
	public function getQuestionImages($id) {
		$media = new Media();
		$options = array(
			'conditions' => array(
				'model_id' => $id
			)
		);
		$data = $media->find('all',$options);
		return $data;
	}
	
}
