

<?php
$category = $pageData['modulesData']['faq_detail']['FaqCategory'];
$faqs = $pageData['modulesData']['faq_detail']['Faq'];

if(!empty($faqs)) {
	?>
	<script type="text/javascript">
		$(document).ready(function() {
			faq();
		});
	</script>
	<section class="faq detail">
		<?php
		echo $this->Element('pageHeading',
			array(
				'heading' => 'FAQ - title',
				'sub' => $category['title'],
				'background' => 'faq.jpg',
			)
		);
		?>
		<div class="container">
			<?php /*
			<div class="row">
				<div class="col-xs-12 text-center">
					<?php
						if ($category['id'] == Configure::read('pboc')) {
							echo $this->Html->image(
								'pboc.png',
								array(
									'class' => 'pboc',
									'alt' => 'PBOC'
								)
							);
						};
					?>
				</div>
			</div>
			*/ ?>
			<div class="row">
				<div class="col-xs-12 col-lg-offset-1 col-lg-10">

					<div class="back-faq-wrapper">
						<?php
						echo $this->Html->image(
							$this->Doodle->renderPath('go-for-it-left.png'),
							array(
								'class' => 'doodle'
							)
						);
						echo $this->Html->link(
							$pageData['modulesData']['faq_detail']['FaqSection']['title'],
							array( 'pageurl' => $faqPage['Page']['tree_slug'], '?' => array('section' => $pageData['modulesData']['faq_detail']['FaqSection']['title']) ),
							array(
								'class' => 'back-faq link-with-arrow-left'
							)
						);
						?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<?php
			echo $this->element('faq-category');
			?>


			<div class="row">
				<?php
				if ($category['id'] == 7) {
					echo '<div class="col-xs-12 mt30 mb30 text-center">';
					echo $this->Html->link(
						$this->StaticText->getStripped('FAQ - Learn More About WCL'),
						'/' . $WCLPage['Page']['url'],
						array(
							'class' => 'with-arrow',
						)
					);
					echo '</div>';
				}
				?>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="contact-faq">
						<h3><?php echo $this->staticText->getStripped('FAQ detail - havent found'); ?></h3>
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
		</div>
	</section>
<?php
}
?>
