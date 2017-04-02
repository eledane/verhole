<?php
$i = 1;
?>

<div class="clearfix"></div>
<?php
foreach ($category['Download'] as $download) {
	$path = $this->Media->getFileByName($download['moduleMedia'], 'attachment');
	$file = new File($path);
	$ext = $file->ext();
	$size = $file->size();
	$size = round($size / 1000000, 2);
	$extImage = Configure::read('Files.icons');
	$extImage = $extImage['default'];
	if (array_key_exists($ext, Configure::read('Files.icons'))) {
		$extImage = Configure::read('Files.icons');
		$extImage = $extImage[$ext];
	}
	?>
		<div class="row document-row">
			<div class="col-xs-12 col-md-6 document-download">
				<div class="document-download-wrapper">
					<div class="row">
						<div class="col-xs-2 icon">
							<i class="fa fa-file-pdf-o fa-2x"></i>
						</div>
						<div class="col-xs-10">
							<h2><?php echo $download['name']; ?></h2>
							<?php
							if (!empty($download['description'])) {
								?>
								<p>
									<?php echo $download('description'); ?>
								</p>
							<?php
							}
							?>
							<a href="/<?php echo $path; ?>" title="<?php echo $download['name']; ?>" download="/<?php echo $path; ?>">
								Download
								<span>(<?php echo $ext . ', ' . $size . 'MB'; ?>)</span>
							</a>
						</div>
					</div>

				</div>
			</div>
	<?php
		if($i % 2 === 0) {
			echo '<div class="cleaner"></div>';
		}
		$i++;
	?>
	</div>
<?php
		}
?>