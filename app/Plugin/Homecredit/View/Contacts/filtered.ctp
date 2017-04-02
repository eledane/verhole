<?php
$this->extend('Seed.General/admin_header');

$this->start('header');
	echo $this->element($headerElement,array('title' => $title));
$this->end();

//id slouzici k identifikaci obsahu, na zaklade toho se jde nahoru a updatuje se cely blok
$uniqid = uniqid('content_');
?>

<div class="index" id="<?php echo $uniqid; ?>">
	<div class="model-form">
		<div class="" style="background-color: white;">
			<div class="export-form" style='padding: 20px;'>
				<?php
				echo $this->Form->create('Contact', array(
					'url' => array(
						'plugin' => 'homecredit',
						'admin' => true,
						'controller' => 'contacts',
						'action' => 'exportFiltered',
					),
					'target' => '_blank'
				));
				$options = array(
					'class' => '',
					'timeFormat' => '24',
					'minYear' => date('Y') - Configure::read('Seed.general_form_min_year_offset'),
					'maxYear' => date('Y') + Configure::read('Seed.general_form_max_year_offset'),
					'interval' => 1,
					'type' => 'date'
				);
				echo $this->Form->input('from', $options);
				echo $this->Form->input('to', $options);
				echo $this->Form->input('channel', array(
					'type' => 'select',
					'options' => $channels,
					'empty' => '--- select channel ---'
				));
				echo $this->Form->input('section', array(
					'type' => 'select',
					'options' => $sections,
					'empty'=> '--- select section ---'
				));
				?>
				<div class='input'>
					<label></label>
				<?php
				echo $this->Form->button('Export', array(
					'div' => false,
					'class' => 'btn btn-success'
				));
				?>
				</div>
				<?php
				echo $this->Form->end();
				?>

			</div>
		</div>
	</div>

</div>

<?php echo $this->Js->writeBuffer(); ?>