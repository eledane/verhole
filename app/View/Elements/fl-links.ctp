<div class="row">
	<div class="col-xs-12 fl-link1 col-lg-12">
		<?php
		echo $this->Html->link(
			$this->StaticText->getStripped('Financial literacy - Documents download'),
			array(
				'pageurl' => $documentsPage['Page']['tree_slug']
			),
			array(
				'title' => $this->StaticText->getStripped('Financial literacy - Documents download')
			)
		);
		?>
	</div>
	<div class="col-xs-12 fl-link2 col-lg-12">
		<?php
		echo $this->Html->link(
			$this->StaticText->getStripped('Financial literacy - Budget Planner'),
			array(
				'pageurl' => $budgetToolPage['Page']['tree_slug']
			),
			array(
				'title' => $this->StaticText->getStripped('Financial literacy - Budget Planner')
			)
		);
		?>
	</div>
</div>