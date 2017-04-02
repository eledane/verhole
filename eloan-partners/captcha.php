<?php 
session_start();
include_once dirname(__FILE__) . '/securimage/securimage.php';
$captcha_code = $_GET['captcha'];
if(!isset($captcha_code)){
    return 'false';
}
$options      = array();
$securimage = new Securimage();
$securecode = $securimage->getCode();

if (strtolower($securecode) != strtolower($captcha_code)) {
	echo 'false';
}else{
	echo 'true';
}

?>