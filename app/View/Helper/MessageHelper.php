<?php 

App::uses('SessionHelper', 'View/Helper');

class MessageHelper extends SessionHelper {
	
	public function getError(){
            return $this->flash('public-error');
        }
        
        public function getSuccess(){
            return $this->flash('public-success');            
            
        }

}