<?php
if(!empty($userData)) {
?>
<div class="preview-mode">
	<span class="seed-icon">
	<img class="seed-logo" src="/seed/img/seed/seed-logo.png" alt="">
	- <strong>Preview mode</strong>
	</span>
	<div class='preview-list' style='display: none;'> 
		<br>
		<p class='seed-decription'>All unsaved and unpublished changes are shown in Preview mode. Log out from Seed administration or open the page in incognito/private mode to quit previews.<p>
		<br>
		<?php
		$previews = $this->Preview->getAllPreviews();
		if(!empty($previews)) {
		?>
		<span class='seed-changes'>Unsaved changes</span>
		
		<ul>
		<?php
		foreach($previews as $modelName => $preview) {
			foreach($preview as $id => $previewData) {
				?>
				<li>
					<span class='model'>
						<?php
						echo $modelName;
						?>
					</span>
					  - 
					<span class='name'>
						<?php
						$previewName = "";
						if(!empty($previewData[$modelName]['name'])) {
							$previewName =  $previewData[$modelName]['name'];
						}
						if(!empty($previewData[$modelName]['title'])) {
							$previewName =  $previewData[$modelName]['title'];
						}
						echo $previewName;
						?>
					</span>
					<span class='discard'>
						<?php
						echo $this->Form->create('Preview',array(
						    'type' => 'post',
						    'url' => $this->Html->getAbsoluteLangLink('/admin/preview/discard/')
						));
						echo $this->Form->input('model',array(
							'type' => 'hidden',
							'value' => $modelName
						));
						echo $this->Form->input('lang',array(
							'type' => 'hidden',
							'value' => Configure::read('Config.language')
						));
						echo $this->Form->input('id',array(
							'type' => 'hidden',
							'value' => $id
						));
						echo $this->Form->input('redirect',array(
							'type' => 'hidden',
							'value' => $this->here
						));
						echo $this->form->submit('Discard');
						echo $this->Form->end();
						?>
					</span>
				</li>
				<?php
			}
		}
		?>
		</ul>
		<?php
		}
		?>
	</div>
</div>
<style>
	.preview-mode {
		position : fixed;
		z-index : 9999;
		background-color : black;
		color:white;
		top: 0;
		left: 0;
		width: 300px;
		min-height: 40px;
		padding: 5px;
	}
	.seed-logo {
		display:inline-block;
	}
	.preview-mode .seed-icon {
		cursor : pointer;
	}
	.seed-decription {
		font-size : 10px;
	}
	.seed-changes {
		font-weight: bold;
	}
	.preview-list input[type=submit] {
		margin:6px; 
		background:#f00; 
		border:0 none;
		cursor:pointer;
	    }
</style>
<script>
	$('.preview-mode .seed-icon').click(function(e){
		$('.preview-mode .preview-list').toggle();
	});
</script>
<?php
}