<div class="row wcl-features<?php echo(!empty($class) ? ' ' . $class : '') ?>">
	<div class="col-xs-6 col-md-6 item">
		<?php
		echo $this->Html->image(
			'wcl/money.png',
			array(
				'class' => ''
			)
		);
		?>
		<p><?php echo $this->staticText->getStripped('Walk in cash loan - No fees') ?></p>
	</div>
	<div class="col-xs-6 col-md-6 item">
		<?php
		echo $this->Html->image(
			'wcl/document.png',
			array(
				'class' => ''
			)
		);
		?>
		<p><?php echo $this->staticText->getStripped('Walk in cash loan - Simple Documents') ?></p>
	</div>
	<div class="clearfix hidden-md hidden-lg"></div>
	<div class="col-xs-6 col-md-6 item">
		<?php
		echo $this->Html->image(
			'wcl/45m.png',
			array(
				'class' => ''
			)
		);
		?>
		<p><?php echo $this->staticText->getStripped('Walk in cash loan - Fast aproval') ?></p>
	</div>
	<div class="col-xs-6 col-md-6 item">
		<?php
		echo $this->Html->image(
			'wcl/worldwide.png',
			array(
				'class' => ''
			)
		);
		?>
		<p><?php echo $this->staticText->getStripped('Walk in cash loan - POS coverage') ?></p>
	</div>
</div>