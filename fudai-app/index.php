<?php
if($_SERVER['HTTP_HOST'] == 'www.homecreditcfc.cn'){
	$base_url = 'http://www.homecreditcfc.cn/fudai/index.php?utm_source=APP-iOS&utm_medium=APP&utm_campaign=MCL&utm_group=APP';
	if(!empty($_SERVER['QUERY_STRING'])) $base_url = $base_url.'&'.$_SERVER['QUERY_STRING'];
	header("Location: ".$base_url);
}else{
	$base_url = 'http://fudai.homecredit.cn/hc-cn-mcl/fudai-uat/index.php?utm_source=APP-iOS&utm_medium=APP&utm_campaign=MCL&utm_group=APP';
	if(!empty($_SERVER['QUERY_STRING'])) $base_url = $base_url.'&'.$_SERVER['QUERY_STRING'];
	header("Location: ".$base_url);
}
die();
?>
