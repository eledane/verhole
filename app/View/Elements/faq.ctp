<script type="text/javascript">
	$(document).ready(function() {
		faq();
	});
</script>
<section class="faq bg-light-gray">
	<div class="container">
	asdf
		<h1 class="smaller"><?php echo __("FAQ");?></h1>
		<ul class="faqs">
		<?php
		if(!empty($pageData['modulesData']['faqs'])) {
			$faqs = $pageData['modulesData']['faqs'];
			foreach($faqs as $faq) {
				?>
				
				<li>
					<h2 class="question"><?php echo h($faq['Faq']['title']); ?></h2>
					<div class="answer">
						<?php echo ($faq['Faq']['answer']); ?>
					</div>
				</li>
			<?php
			}
		}
		?>
		</ul>
	</div>
</section>