<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('SeedCoreModel', 'Seed.Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends SeedCoreModel {
	
	public function beforeFind($queryData) {
		if($this->alias == 'Text') {
			$this->virtualFields['content_short'] = "(SELECT COALESCE((SELECT content FROM i18n as LL WHERE LL.locale='".$this->locale."' AND LL.model='".$this->alias."' AND LL.foreign_key=".$this->alias.".id AND LL.field='content'),Text.content))";
		}
		
		parent::beforeFind($queryData);
		if($this->hasPublicField()) {
			if(!$this->isLggedIn()) {
				if(empty($queryData['conditions'])) {
					$queryData['conditions'] = array();
				}
				$queryData['conditions'][] = array(
				    $this->alias.'.public' => true
				);
			}
		}
		return $queryData;
	}
	
	public function hasPublicField() {
		$schema = $this->schema();
		return isset($schema['public']);
	}
	
	public function afterFind($results, $primary = false) {
		$results = parent::afterFind($results, $primary);
		if($this->isLggedIn()) {
			//Only for public actions
			$params = Router::getParams();
			if(!empty($results) && !empty($params['action']) && $params['action'] == 'display') {
				foreach($results as $key => $result) {
					if(!empty($result[$this->alias]['id'])) {
						$locale = Configure::read('Config.defaultLanguage');
						if(!empty($result[$this->alias]['locale'])) {
							$locale = $result[$this->alias]['locale'];
						}
						$sessionData = $this->getSessionData($result[$this->alias]['id'], $locale);
						
						if(!empty($sessionData)) {
							$sessionData['locale'] = $locale;
							$results[$key][$this->alias] = array_merge($result[$this->alias], $sessionData); 
						}
					}
				}
			}
		}
		return $results;
	}
	
	private function getSessionData($id, $locale) {
		App::uses('CakeSession', 'Model/Datasource');
		$preview = CakeSession::read('preview.'.$locale.'.'.$this->alias.'.'.$id);
		if(!empty($preview) && !empty($preview[$this->alias])) {
			return $preview[$this->alias];
		}
	}
	
	private function isLggedIn() {
		App::uses('CakeSession', 'Model/Datasource');
		App::uses('AuthComponent', 'Controller/Component');
		
		$user = CakeSession::read('Auth.User');
		return !empty($user);
	}
	
}
