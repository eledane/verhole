<div class="row">
	<div class="col-xs-12">
		<?php
		echo $this->Html->image(
			$this->Doodle->renderPath('like.png'),
			array(
				'class' => 'doodle like'
			)
		);
		?>
	</div>
</div>
<div class="row">
<?php
$categories = $pageData['modulesData']['Downloads'];
if ($pricelists == false) :
	foreach ($categories as $category) :
		if ($category['DownloadCategory']['id'] !== Configure::read('pricelists')) :
	?>
			<div class="col-xs-12">
				<h2 class="headline">
					<?php
					echo $category['DownloadCategory']['name'];
					?>
				</h2>
			</div>
			<div class="col-xs-12">
				<?php echo $this->Element('documentDetail',
					array(
						'category' => $category
					)
				);
				?>
			</div>
	<?php
		endif;
	endforeach;
else :
	foreach ($categories as $category) :
		if ($category['DownloadCategory']['id'] == Configure::read('pricelists')) :
	?>
			<div class="col-xs-12">
				<h2 class="headline">
					<?php
					echo $category['DownloadCategory']['name'];
					?>
				</h2>
			</div>
			<div class="col-xs-12">
				<?php echo $this->Element('documentDetail',
					array(
						'category' => $category
					)
				);
				?>
			</div>
	<?php
		endif;
	endforeach;
endif;
?>
<div class="clearfix relative"></div>
</div>
<div class="doodle-container relative">
	<?php
	echo $this->Html->image(
		$this->Doodle->renderPath('its-great.png'),
		array(
			'class' => 'doodle its-great'
		)
	);
	?>
</div>