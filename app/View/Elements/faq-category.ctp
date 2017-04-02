<?php
$faqs = $pageData['modulesData']['faq_detail']['Faq'];
?>

<section class="faq-category">
	<div class="row">
		<div class="col-xs-12 col-lg-offset-1 col-lg-10">
			<ul class="faqs">
				<?php
				foreach($faqs as $faq) {
					?>
					<li>
						<h2 class="question"><?php echo $faq['title']; ?></h2>
						<div class="answer">
							<?php
								echo $faq['answer'];
								$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
								if ($language !== 'en') {
									$img = $this->Media->getImagePathByName($faq['moduleMedia'], 'faq-image-zh');
								} else {
									$img = $this->Media->getImagePathByName($faq['moduleMedia'], 'faq-image-en');
								}
								if(!empty($img)) {
								?>
									<img src="/<?php echo h($img);?>" alt="<?php h($faq['title']); ?>" class="img-responsive" style="display:block;">
								<?php
								}
							?>
						</div>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</section>