<section class="bulletin-list">
	<?php //debug($pageData['modulesData']['postDetail']['Post']['highlighted']);die; ?>
	<?php echo $this->element('bulletin-story',array(
		'data' => $pageData['modulesData']['postDetail']
	));
	if (!$pageData['modulesData']['postDetail']['Post']['highlighted']) {
		echo $this->element('related-stories',array(
			'data' => $pageData['modulesData']['postDetail']['RelatedPosts'],
			'label' => $this->staticText->getStripped('Related stories'),
			'pageUrl' => $pageData['tree_slug'],
			'showLinkAll' => false
		)); 
	}
	?>
</section>