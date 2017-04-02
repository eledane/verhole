<?php
if (!empty($tabs)) {
	$tabs = 'have-tabs';
} else{
	$tabs = '';
}?>
<div class="page-heading <?php echo $tabs;?>" style="background-image: url('/img/page-heading/<?php echo $background; ?>')">
	<?php
		if(!empty($doodle)) {
			echo $this->Html->image(
				$this->Doodle->renderPath($doodle),
				array(
					'class' => 'doodle ' . $class
				)
			);
		}
		
	?>
	<div class="heading-wrapper">
		<h1>
			<?php
			echo $this->StaticText->getStripped($heading);
			if (!empty($sub)) {
				?>
				<br>
				<span>
				<?php echo $this->StaticText->getStripped($sub); ?>
				</span>
			<?php
			}
			?>
		</h1>
	</div>
</div>