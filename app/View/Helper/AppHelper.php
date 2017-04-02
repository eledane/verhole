<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {
	
	public function getAbsoluteLangLink($url) {
		$lang = Configure::read('Config.language');
		$availableLangs = Configure::read('Config.availableLanguages');
		if ($lang != Configure::read('Config.defaultLanguage') && in_array($lang, $availableLangs)) {
			$url = ltrim($url, '/');
			$url = '/'.array_search($lang,$availableLangs).'/'.$url;
		}
		return $url;
	}
	public function getFileByName($mediaArray, $name) {
		foreach ($mediaArray as $media) {
			if ($media['Media']['name'] == $name) {
				return $media['Media']['path'];
			}
		}
		return null;
	}
}
