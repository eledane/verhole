<section class="about-hc">
	<?php
	echo $this->Element('pageHeading',
		array(
		    'doodle' => 'chinese-kid.png',
		    'class' => 'chinese-kid',
			'heading' => h($pageData['title']),
			'background' => 'about-hc.jpg',
		)
	);
	?>

	<?php
	echo $this->element('why-hc');
	?>


	<!-- HISTORY -->
	<?php
	echo $this->element('about-history');
	?>

	<?php
	echo $this->element('hcGlobalInfo');
	?>
</section>
