<?php

if($_SERVER['HTTP_HOST'] == 'www.homecreditcfc.cn'){
	if($_SERVER['HTTP_REFERER']){
		setcookie('incoming', $_SERVER['HTTP_REFERER'],0,'/fudai');
	}
	$base_url = 'http://www.homecreditcfc.cn/fudai/index.php';
	if(!empty($_SERVER['QUERY_STRING'])) $base_url = $base_url.'?'.$_SERVER['QUERY_STRING'];
	header("Location: ".$base_url);
}else{
	if($_SERVER['HTTP_REFERER']){
		setcookie('incoming', $_SERVER['HTTP_REFERER'],0,'/hc-cn-mcl/fudai');
	}
	$base_url = 'http://fudai.homecredit.cn/hc-cn-mcl/fudai/index.php';
	if(!empty($_SERVER['QUERY_STRING'])) $base_url = $base_url.'?'.$_SERVER['QUERY_STRING'];
	header("Location: ".$base_url);
}
die();
?>
