<?php
$categories = $pageData['modulesData']['Downloads'];
?>

<section class="documents-download">
	<?php
	if (empty($pageData['modulesData']['categoryDetail'])) {
		echo $this->Element('pageHeading',
			array(
			    'doodle' => 'documents-arrow-down.png',
			    'class' => 'd-arrow-down',
				'heading' => 'Documents - headline',
				'background' => 'documents.jpg'
			)
		);
	} else {
		$subheading = $pageData['modulesData']['categoryDetail']['DownloadCategory']['name'];
		echo $this->Element('pageHeading',
			array(
				'heading' => 'Documents - headline',
				'background' => 'documents.jpg',
				'sub' => $subheading
			)
		);
	}
	?>

	<div class="container">
		<?php echo $this->Element('documentCategory',
			array(
				'pricelists' => false
			)
		); ?>
	</div>
</section>
