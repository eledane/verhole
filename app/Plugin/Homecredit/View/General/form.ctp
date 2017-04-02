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
					<?php if ($displayMediaTab) { ?>
						<li>
							<a href='#<?php echo $mediaTabId; ?>'><?php echo __('Media'); ?></a>
						</li>
					<?php } ?>
					<?php if ($displayModuleTab) { ?>
						<li>
							<a href='#<?php echo $attachedModulesTabId; ?>'><?php echo __('Attach modules'); ?></a>
						</li>
						<?php
					}
					$associated = $model->getAssociated();
					if (!empty($associated) && is_array($associated)) {
						foreach ($associated as $mod => $assocType) {
							if($assocType == 'hasMany' && $model->hasInnerForm($mod)) {
								?>
								<li>
									<a href='#<?php echo $mod."IdTab"; ?>'><?php echo h(__($mod)); ?></a>
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
					foreach ($model->getFormFields() as $field => $type) {
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
						echo $this->Form->input($field, $options);
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
			?>
			<?php if ($displayMediaTab) { ?>
				<div class="tab-pane" id="<?php echo $mediaTabId; ?>">
					<?php
					$options = array('media' => $attachedMedia, 'uniqid' => $formId);
					if (isset($recordId)) {
						$options = array_merge(
								$options, array(
							'module' => $model->plugin,
							'model' => $model->alias,
							'item_id' => $recordId
								)
						);
					}
					echo $this->element('Media.mediaForm', $options);
					?>
				</div>
				<?php
			}

			if ($displayModuleTab) {
				?>
				<div class="tab-pane" id="<?php echo $attachedModulesTabId; ?>">
					<?php echo $this->element('Modules.modulesForm', array('data' => $requestData)); ?>
				</div>
				<?php
			}

			if ($this->fetch('additional_tabs_contents')) {
				echo $this->fetch('additional_tabs_contents');
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
	if(isset($rememberedParams)) {
		$backUrl += $rememberedParams;
	}
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
	<?php
	if($isPublished) {
	?>
		<button type="submit" form="<?php echo $formId; ?>" value="Submit" class="preview-button <?php echo $formId;?>">Preview</button>
	<?php
	}
	?>
	<div class="clear"></div>
</div>
<style>
	.form-footer button.preview-button {
		float:right;
		border: 1px solid #4a597f;
		color: #4a597f;
		text-transform: uppercase;
		font-size: 14px;
		border-radius: 2px;
		padding: 5px 30px;
		margin-right: 10px;
		display: inline-block;
		background: rgba(255, 255, 255, 0.2);
		font-family: 'Source Sans Pro', "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", "Helvetica, Arial, sans-serif";
		text-decoration: none;
		font-weight: 400;
		line-height: 20px;
	}
	.form-footer button.preview-button:hover {
		color: #17264c;
		border: 1px solid #17264c;
	}
</style>
<script>
	$('.preview-button.<?php echo $formId; ?>').on('click', function(e){
		$('#<?php echo $formId; ?>').attr('action', "<?php echo str_replace('/edit/', '/preview/', $this->here); ?>");
		$('#<?php echo $formId; ?>').attr('target','_blank');
	});
</script>