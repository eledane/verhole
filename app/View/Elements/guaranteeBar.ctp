	<section class="guarantee-bar">
		<div>
		<?php
	    	echo $this->Html->link(
	        $this->Html->tag('span', $this->staticText->getStripped('guarantee bar - text'), array('class' => 'guarantee-text')),
	        array(
	            'pageurl' => $guarantee['Page']['tree_slug']
	        ),
	        array(
	            'escape' => false,
	            'class' => 'guarantee-ribbon-link'
	        	)
	    	);
		?>
		</div>
	</section>
