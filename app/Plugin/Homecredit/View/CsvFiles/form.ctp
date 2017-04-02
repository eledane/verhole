<div class="form-wrapper">
	<?php
	$this->extend('Seed.General/admin_header');


	$this->start('header');
	echo $this->element($headerElement,array('title' => $title));
	$this->end();

	$model = $modelObject;
	$requestData = $this->request->data;


	$isEdit = $action == 'edit';

	$displayModuleTab = $model->hasModulesData && $isEdit;
	$displayMediaTab = $model->hasMedia; // && $isEdit;

	$moduleTabId = 'module-tab-' . $formId;
	$mediaTabId = 'media-tab-' . $formId;
	$attachedModulesTabId = 'attached-modules-tab-' . $formId;



	if (isset($requestData[$model->alias])) {
		$recordId = $requestData[$model->alias]['id'];
	}
	?>
	<?php echo $this->Form->create($model->alias, array('id' => $formId)); ?>
	<div class="<?php echo $model->alias; ?> model-form">
		<div class="nav-tabs-wrapper">
			<ul class='nav-tabs nav <?php echo $formId; ?>'>
				<?php
				$hasMoreThanOneTab = true;
				$addTabs = $this->fetch('additional_tabs');
				if (empty($addTabs) && !$displayMediaTab && !$displayModuleTab) {
					$hasMoreThanOneTab = false;
				}
				
				if ($hasMoreThanOneTab) {
					?>
					<li class='active'>
						<a href='#<?php echo $moduleTabId; ?>'><?php echo __($model->alias); ?></a>
					</li>
					<?php
					$associated = $model->getAssociated();
					if (!empty($associated) && is_array($associated)) {
						foreach ($associated as $mod => $assocType) {
							if($assocType == 'hasMany' && $model->hasInnerForm($mod)) {
								?>
								<li>
									<a href='#<?php echo $mod."IdTab"; ?>'><?php echo __($mod); ?></a>
								</li>
								<?php
							}
						}
					}
					if ($this->fetch('additional_tabs')) {
						echo $this->fetch('additional_tabs');
					}
				}
				?>

			</ul>
		</div>

		<div class="tab-content">
			<div class="tab-pane active" id="<?php echo $moduleTabId; ?>">
				
				<fieldset>
					<?php
					$autofocus = false;
					$disabled = array(
						'','ordering'
					);
					if(!$isEdit) {
						$disabled[] = 'file';
					}
					foreach ($model->getFormFields() as $field => $type) {
						if(in_array($field, $disabled)) {
							continue;
						}
						$options = array(
							'class' => '',
							'timeFormat' => '24',
							'minYear' => date('Y') - Configure::read('Seed.general_form_min_year_offset'),
							'maxYear' => date('Y') + Configure::read('Seed.general_form_max_year_offset'),
							'interval' => 1,
							'id' => $model->alias . ucfirst(str_replace(" ", "", Inflector::humanize($field))) . $formId
						);
						if($type == 'password') {
							$options['type'] = $type;
						}
						if (in_array($field, $model->wysiwygFormFields)) {
							$options['class'].=' ckeditor ';
							$options['div'] = array(
								'data-type' => 'richtext'
							);
						}

						if ($field == 'parent_id') {
							$options['empty'] = __('----');
						}
						$schema = $model->schema();
						if (!empty($schema[$field]) && array_key_exists('null', $schema[$field]) && $schema[$field]['null']) {
							if (!array_key_exists($field, $model->formPlaceholders)) {
								$options['empty'] = __('----');
							} else {
								$options['empty'] = '-- ' . $model->formPlaceholders[$field] . ' --';
							}
						}


						if (array_key_exists($field, $model->formPlaceholders)) {
							if (preg_match("/type=\\\"checkbox\\\"/i", $this->Form->input($field, $options))) {
								$options['after'] = '<span class="checkbox-placeholder">' . $model->formPlaceholders[$field] . '</span>';
							} else {
								$options['placeholder'] = $model->formPlaceholders[$field];
							}
						}
						if (!$autofocus && $field != 'id') {
							$options['autofocus'] = 'autofocus';
							$autofocus = true;
						}
						
						if($field == 'file') {
							$this->Form->unlockField('file');
							$options['type'] = 'file';
							$options['class'] = 'fileup';
						}
						if($field != 'name') {
							echo $this->Form->input($field, $options);
						} else {
							echo $this->Form->input($field, $options);
							if(!empty($this->request->data['CsvFile']['file'])) {
							?>
							<h3 class="text-center"><?php echo $this->request->data['CsvFile']['name'].' - CSV' ?></h3>
							<?php
							if(empty($this->request->data['CsvFile']['file'])) {
								$style = 'display:none';
							} else {
								$style = "";
							}
							?>
							<br>
							<div class="current-file text-center" style="<?php echo $style; ?>">
							<strong>Current file : </strong>
							<a href="/<?php echo $this->request->data['CsvFile']['file'] ?>" target="_blank">Download</a>
							</div>
							<br><br>
							<?php
							}
						}
						
						//}
					}
					?> 
					<?php
					$associated = $model->getAssociated();
					if (!empty($associated) && is_array($associated)) {
						foreach ($associated as $mod => $assocType) {
							if ($assocType == 'hasAndBelongsToMany' && $mod != 'Relation') {
								$options = array(
									'div' => false,
									'multiple' => 'checkbox',
									'id' => $model->alias . $mod . $formId
								);
								if (!in_array($mod, $model->hiddenFormFields) && !in_array($mod, $model->developOnlyFields)) {
									echo '<div class="checkbox-group clearfix">' . $this->Form->input($mod, $options) . '</div>';
								}
							}
							
						}
					}
					?>
				</fieldset>
				<fieldset>
					<?php echo $this->fetch('formFields'); ?>
				</fieldset>
				
				<div class="upload-result alert alert-error" style="display:none; color:#b94a48;">
			
				</div>
				<div class="upload-result alert alert-success" style="display:none; color:#468847;">
			
				</div>
				
				<div class="upload-progress" style="display:none">
					<p>CSV Upload progress</p>
					<div id="progress" class="progress progress-success progress-striped">
					  <div class="bar"></div>
					</div>
				</div>
			</div>
			<?php
			if (!empty($associated) && is_array($associated)) {
					foreach ($associated as $mod => $assocType) {
						?>
						<div class="tab-pane" id="<?php echo $mod."IdTab"; ?>">
						<?php
						if($assocType == 'hasMany' && $model->hasInnerForm($mod)) {
							$asData = array();
							if(!empty($this->request->data[$mod])) {
								$asData = $this->request->data[$mod];
							}
							echo $this->element('Seed.General/general_inner_form',array(
								'parentModel' => $model,
								'model' => $model->$mod,
								'data' => $asData
							));
						}
						?>
						</div>
						<?php
					}
			}
			
			echo $this->Js->submit(__('Submit'), array(
				'buffer' => false,
				'id' => 'PageMediaSubmit' . $formId,
				'updateParent' => '#' . $formId,
				'updateListing' => 'pages',
				'class' => 'hidden general-form-alltabs-submit'
			));
			//ckeditor has been already compressed. Another compression gives en error
			$libsFolder = Configure::read('Seed.bower_assets_folder');
			echo $this->Html->script($libsFolder . '/ckeditor/ckeditor.js');
			?>

			<script type="text/javascript">
				$('.<?php echo $formId; ?> a').on('click', function(e) {
					e.preventDefault();
					$(this).tab('show');
				});
				$(document).ready(function(){
						var url = '/admin/homecredit/csvfiles/up';
					$('#<?php echo $formId; ?> .fileup').fileupload({
				   url: url,
				   dataType: 'json',
				   pasteZone:null,
				   submit: function(e, data) {
					   $('#<?php echo $formId; ?> .upload-result').hide();				   
					   $('#<?php echo $formId; ?> .upload-progress').fadeIn();
				   },
				   progressall: function (e, data) {
					   // Update the progress bar while files are being uploaded
					   var progress = parseInt(data.loaded / data.total * 100, 10);
					   $('#<?php echo $formId; ?> .upload-progress #progress .bar').css(
						   'width',
						   progress + '%'
					   );
				   },
				   always: function(e,data) {
					   if(data != 'undefined' && data.result != 'undefined') {
						   var message = null;
							if(data.result.result) {
							   message = $('#<?php echo $formId; ?> .upload-result.alert-success');
								$('#<?php echo $formId; ?> .current-file').show();
								$('#<?php echo $formId; ?> .current-file a').attr('href','/'+data.result.data.CsvFile.file);
						   } else {
							   message = $('#<?php echo $formId; ?> .upload-result.alert-error');
						   }
							message.html('<strong>'+data.result.message+'</strong>');
							message.show();
					   }
					   $('#<?php echo $formId; ?> .upload-progress').fadeOut();
					   updateFlashes();
				   }
			   });});
				
			</script>

		</div>
	</div>
	<?php echo $this->Form->end(); ?>

	<?php
	echo $this->fetch('formfooter');
	?>
</div>

<!-- FOOTER FORM -->

<?php
if (!isset($backUrl) || empty($backUrl)) {
	$backUrl = array('action' => 'index');
}
?>

<div class="form-footer">

	<?php
	echo $this->Js->link(
			__('Cancel'), $backUrl, array(
		'buffer' => false,
		'escape' => false,
		'updateParent' => '#' . $formId,
		'updateListing' => 'pages'
			)
	);
	?>

	<button data-formid="<?php echo $formId; ?>" class="general-form-submit-button"><?php echo __('Save'); ?></button>
	<div class="clear"></div>
</div>