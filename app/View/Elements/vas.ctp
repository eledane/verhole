<section class="vas">
	<?php
	echo $this->Html->link(
		$this->StaticText->getStripped('Value Added Services - title'),
		array(
			'pageurl' => $valueAddedServicesPage['Page']['tree_slug']
		)
	)
	?>
</section>