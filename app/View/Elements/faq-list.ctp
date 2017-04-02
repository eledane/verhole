<?php
$categories = $pageData['modulesData']['faq_list'];
if(!empty($categories)) {
	?>
	<section class="faq faq-categories">
		<?php
		echo $this->Element('pageHeading',
			array(
				'heading' => 'FAQ - title',
				'background' => 'faq.jpg',
			)
		);
		?>
		<div class="container">

			
			<?php 
			    echo $this->element('faq-listing');
			?>
			
		</div>
	</section>
<?php
}
?>