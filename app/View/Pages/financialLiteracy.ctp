<?php
if(!empty($pageData['modulesData']['highlightedPost'])) {
?>
	<div class="container related-stories">
		<?php 
		$detailLink = $effortsPage['Page']['tree_slug'];
		if( $pageData['modulesData']['highlightedPost']['Post']['post_type_id'] == Configure::read('Posts.type_bulletin')) {
			$detailLink = $bulletinPage['Page']['tree_slug'];
		}
		echo $this->Element('postHighlight',array(
			'data' => $pageData['modulesData']['highlightedPost']['Post'],
			'page' => $detailLink
		)); ?>
	</div>
<?php
}
?>
<div class="fl-testimonials">
	<div class="visible-xs-block visible-sm-block hidden-md hidden-lg">
		<?php
		echo $this->Element('testimonials');
		?>
	</div>
	<div class="hidden-sm hidden-xs visible-md-block visible-lg-block">
		<?php echo $this->Element('testimonials-desktop'); ?>
	</div>
</div>
<section class="financial-literacy">
	<?php
	echo $this->Html->image(
		$this->Doodle->renderPath('kiss-kiss.png'),
		array(
			'class' => 'doodle kiss'
		)
	);
	?>
	<?php
	$lang = '';
	if($faqPage['Page']['locale'] === 'eng'){
		$lang = 'en/';
	}
	if (!empty($pageData['modulesData']['faq_categories'])) {
		?>
		<div class="container faq-categories">
			<div class="row">
				<div class="col-xs-12 col-lg-12 relative">
					<h2><?php echo $this->StaticText->getStripped('Financial literacy - FAQ'); ?></h2>
				</div>
			</div>
			<?php echo $this->Element('faq-listing'); ?>
			<?php echo $this->Element('fl-links'); ?>
		</div>
	<?php
	}
	?>
	<?php 
	if(!empty($pageData['modulesData']['bulletinPosts'])) {
		echo $this->element('related-stories',array(
			'data' => $pageData['modulesData']['bulletinPosts'],
			'label' => $this->staticText->getStripped('Financial Literacy - Bulletin Board - title'),
			'pageUrl' => $bulletinPage['Page']['tree_slug'],
			'showLinkAll' => true
		));
	}
	if(!empty($pageData['modulesData']['effortsPosts'])) {
		echo $this->element('related-stories',array(
			'data' => $pageData['modulesData']['effortsPosts'],
			'label' => $this->staticText->getStripped('Finanacial Literacy - Efforts and Achievements - title'),
			'pageUrl' => $effortsPage['Page']['tree_slug'],
			'showLinkAll' => true
		));
	} 
	
	?>
</section>