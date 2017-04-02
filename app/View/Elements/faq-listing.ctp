
<?php
if ($pageData['url'] == 'financial-literacy') {
	$categories = $pageData['modulesData']['faq_categories'];
} else {
	$categories = $pageData['modulesData']['faq_list'];
}
?>

<section class="faq-listing">
	<div class="row">
		<div class="col-xs-12 col-lg-12">
			<h2><?php echo $this->staticText->getStripped('FAQ - Select category'); ?></h2>
			<ul class="faq-list">
				<?php
				foreach($categories as $category) {
					$lang = '';
					if($faqPage['Page']['locale'] === 'eng'){
						$lang = 'en/';
					}
					if($category['FaqCategory']['show_in_financial_literacy_page'] === true) {
						?>
						<li class="link-with-arrow">
							<?php
							if ($category['FaqCategory']['id'] == Configure::read('pboc')) {
								$pboc = $this->Html->image(
									'pboc.png',
									array(
										'class' => 'pboc',
										'alt' => 'PBOC'
									)
								);
							} else {
								$pboc = '';
							}
							echo $this->Html->link(
								$category['FaqCategory']['title'], // . $pboc,
								array(
									'pageurl' => $faqPage['Page']['tree_slug'] . '/' . $category['FaqCategory']['url']
								),
								array(
									'title' => $category['FaqCategory']['title'],
									'class' => '',
									'escape' => false
								)
							);
							?>
						</li>
						<?php
						}
					}
				?>
			</ul>
			<?php
				if ($pageData['url'] !== 'financial-literacy') {
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="contact-faq">
						<h3><?php echo $this->staticText->getStripped('FAQ list - Have not found') ?></h3>
						<?php
						echo $this->Html->link(
							$this->StaticText->getStripped('Button - Contact us'),
							array(
								'pageurl' => $contactPage['Page']['tree_slug']
							),
							array(
								'class' => 'btn btn-success'
							)
						);
						?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>