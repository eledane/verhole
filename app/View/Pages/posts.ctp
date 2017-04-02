<?php
if(!empty($pageData['modulesData']['postDetail'])) {
	echo $this->element('bulletin-detail');
} else {
	echo $this->element('related-stories',array(
		'data' => (!empty($pageData['modulesData']['effortsPosts'])?$pageData['modulesData']['effortsPosts']:$pageData['modulesData']['bulletinPosts']),
		'label' => $pageData['title'],
		'pageUrl' => $pageData['tree_slug'],
		'showLinkAll' => false
	));
}