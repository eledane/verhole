<?php

App::uses('AppHelper', 'View/Helper');

/**
 * Description of StaticTextHelper
 *
 * @author kofon
 */
class StaticTextHelper extends AppHelper {
	
	public function stripTags($text, $additionalAllowedTags=array(),$disabledTagsFromDefault = array()) {
		$tagsAllowedByDefault = Configure::read('Texts.allowed_tags');
		if(!empty($additionalAllowedTags)) {
			$tagsAllowedByDefault = array_merge($tagsAllowedByDefault, $additionalAllowedTags);
		}
		$copy = $tagsAllowedByDefault;
		if(!empty($disabledTagsFromDefault)) {
			foreach($tagsAllowedByDefault as $key=>$d) {
				if(in_array($d, $disabledTagsFromDefault)) {
					unset($copy[$key]);
				}
			}
		}
		if(!empty($copy)) {
			$allowed = "<".  implode('><', $copy).">";
		} else {
			$allowed = '';
		}
		return trim(strip_tags($text, $allowed), "\r\n");
	}
	
	public function get($key) {
		return ___($key);
	} 
	
	public function getStripped($key, $additionalAllowedTags=array(),$disabledTagsFromDefault = array()) {
		return html_entity_decode($this->stripTags($this->get($key), $additionalAllowedTags, $disabledTagsFromDefault), null, 'UTF-8');
	}
	
}
