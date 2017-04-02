<?php
	$title = urlencode($post['name']);
	$cutNumber = 50;
	$titleLength = strlen($title);
	if($titleLength >= 53) {
		$title = substr($title,0,$cutNumber).'...';
	}
?>
<a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php echo urlencode(Router::url($this->here, true)); ?>&amp;appkey=&amp;title=<?php echo $title; ?>&amp;pic=&amp;ralateUid=&amp;language=zh_cn">
	<img src="/img/qzone.png" alt="qzone"/>
</a>
