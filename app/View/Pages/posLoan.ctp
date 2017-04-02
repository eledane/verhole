<?php
if(empty($pageData['modulesData']['posloan-detail'])){
	echo $this->Element('posLoan-categories');
} else {
	echo $this->Element('posLoan-detail');
}
?>