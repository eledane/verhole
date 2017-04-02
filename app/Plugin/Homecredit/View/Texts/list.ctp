<?php
$this->extend('Seed.General/admin_header');

$this->start('header');
	echo $this->element($headerElement,array('title' => $title));
$this->end();

//vlevo v headeru bude seznam actions
$this->start('left');
	if ($actions) {
		$additionalClass = '';
		$multiple = false;
		if (count($actions) > 1) {
			$additionalClass = 'multiple';
			$multiple = true;
		} ?>
		<ul class="actions <?php echo $additionalClass; ?>">
		<?php if ($multiple) { ?>
			<li class="null-value">
				<span><?php echo __('Actions'); ?></span>
			</li>
		<?php } ?>
		<?php foreach($actions as $action) { ?>
			<li>
				<?php
				$icon = '';
				if (isset($action['icon'])) {
					
					$icon = '<i class="icon-'.$action['icon'].'"></i>';
					
				}
				echo $this->Html->link(
					"$icon ".__($action['title']),
					$action['url'],
					array(
						'escape' => false
					)); 
				?>
			</li>
		<?php } ?>
		</ul>
		<?php
	}
$this->end();

//id slouzici k identifikaci obsahu, na zaklade toho se jde nahoru a updatuje se cely blok
$uniqid = uniqid('content_');
?>

<div class="<?php echo $controllerName; ?> index" id="<?php echo $uniqid; ?>">
	
	<?php
	echo $this->element('Seed.refresh-link', array(
		'controllerName' => $controllerName,
		'uniqid' => $uniqid
	));
	?>
	<table cellpadding="0" cellspacing="0" class="uninitialized listing" data-module-name="<?php
		echo $moduleName;
	?>" data-model-name="<?php 
		echo $alias;
	?>" data-page-index="<?php
		//echo $this->Paginator->param('page');
	?>">
		<thead>
			<tr>
				<?php
				$this->Paginator->options(array(
					//tohle nevim proc, ale musi tam byt oboji, jinak to nefacha
					'updateParent' => '#'.$uniqid,
					'update' => '#'.$uniqid,
//					'buffer' => false
				));
				foreach ($fields as $field => $type) {
					if($type!='text' || $displayTextFieldsInListing) {
						?>
						<th>
						<?php
						if(array_key_exists($field, $assocDisplayFields)) {
							echo $this->Paginator->sort($assocDisplayFields[$field]['model'].'.'.$assocDisplayFields[$field]['displayField'],h(__($assocDisplayFields[$field]['model'])));
						} else {
							echo $this->Paginator->sort($field);
						}
						?>
						</th>
						<?php 
					}
				} 
				?>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$even = false;

		// no record? print it into TR with colspan = $fields + 1 -> #cols
		if(empty($data)){
			echo '<tr><td class="no-record" colspan="'.( count($fields) +1 ).'">'.__('No records found.').'</td></tr>';
		}
		foreach ($data as $key => $item) {
			$item = $item[$alias];	
			$itemAssoc = $data[$key];
			if ($even) {
				$rowClass = "even";
			} else {
				$rowClass = "odd";
			}
			?>
			<tr class="<?php echo $rowClass; ?>" data-id="<?php echo $item['id']; ?>" data-ordering="<?php echo (isset($item['ordering'])?$item['ordering']:""/*(($this->Paginator->param('current')-1)+intval($key))*/); ?>">
				<?php
				foreach ($fields as $field => $type) {
					if($type!='text' || $displayTextFieldsInListing) {
						
						?>
						<td>
						<?php
							$fieldText = $item[$field];
							
							if($type == "boolean") {
								$fieldText = ($fieldText=="1"?__("yes"):__("no"));
							}
					
							if(array_key_exists($field, $assocDisplayFields)) {
								if(!empty($itemAssoc[$assocDisplayFields[$field]['model']]) && !empty($itemAssoc[$assocDisplayFields[$field]['model']]['id'])) {
									$fieldText = $itemAssoc[$assocDisplayFields[$field]['model']][$assocDisplayFields[$field]['displayField']];
								}
							}
							if($type == "string_wysiwyg") {
								$fieldText = strip_tags(html_entity_decode($fieldText,null,'UTF-8'));
							}
							$maxLength = 50;
							if(strlen($fieldText)>$maxLength) {
								$fieldText = mb_substr($fieldText,0,$maxLength,'UTF-8').'...';
							}
							echo $fieldText;
							
						?>&nbsp;
						</td>
						<?php 	
					}
				}
				?>
				<td class="actions">
					<?php 
					if(!isset($disabledActions) || !in_array('admin_view',$disabledActions)) {
						echo $this->Html->link('', 
							array(
								'action' => 'view', 
								$item['id']
							), array(
								'class' => 'view'
							)); 
					}
					if(!isset($disabledActions) || !in_array('admin_edit',$disabledActions)) {
						echo $this->Html->link('', 
								array(
									'action' => 'edit', 
									$item['id']
								), array(
									'class' => 'edit'
								)); 
					}
					
					if(!isset($disabledActions) || !in_array('admin_delete',$disabledActions)) {
						echo $this->Form->create($alias, Array("class" => 'list-form-delete')); 
						echo $this->Form->input('id',array('value' => $item['id']));
						echo $this->Js->submit('', array(
							'buffer' => false,
							'updateParent' => '#' . $uniqid,
							'updateListing' => $controllerName,
							'url' => array(
								'controller' => $controllerName,
								'action' => 'delete',
							),
							'confirm' => __('Are you sure you want to delete record #%s', $item['id']),
							'class' => 'delete'
						));
						?>
						<?php 
						echo $this->Form->end(); 
					}
					?>
					<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $module['Module']['id']), null, __('Are you sure you want to delete # %s?', $module['Module']['id']));  ?>
				</td>
			</tr>
			<?php
			$even = !$even;
		}
		?>

		</tbody>
	</table>
	<p class="paginator">
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total')
		));

		?>
		<span class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));

		?>
		</span>

	</p>
	
</div>

<?php echo $this->Js->writeBuffer(); ?>