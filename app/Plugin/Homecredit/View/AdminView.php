<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminView
 *
 * @author kofon
 */
App::uses('View', 'View');

class AdminView extends View {

	public function render($view = null, $layout = null) {
		$scripts = $this->fetch('script');
		if(empty($scripts)) {
			$scripts = "";
		}
		$string = parent::render($view, $layout);
		if(is_string($string)) {
			if(!preg_match('/<body>/', $string)) {
				$string .= '<script>setTimeout(function(){$( \'input[name*="[title]"].coupled, input[name*="[name]"].coupled\').unbind(\'keyup\');}, 300);</script>';
			}
		}
		return $string;
	}

}
