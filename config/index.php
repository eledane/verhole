<?php

$fs = dirname(__FILE__) . '/settings.conf';

if (!file_exists($fs)) {
	die('Configuration file not found');
}

$config = unserialize(file_get_contents('settings.conf'));

if (!empty($_POST)) {

	if (isset($_POST['bar-text-form'])) {
		$keys = array('cnBarText', 'enBarText', 'barEnabled','graphicalBarEnabled');
	} elseif (isset($_POST['dialog-text'])) {
		$keys = array('cnDialogText', 'enDialogText', 'cnDialogLeftButton', 'cnDialogRightButton', 'enDialogLeftButton', 'enDialogRightButton', 'textDialogEnabled');
	} elseif (isset($_POST['loan-form'])) {
		$keys = array('maxLoansPerDay');
	} elseif (isset($_POST['loan-reset-form'])) {
		file_put_contents(dirname(__FILE__) . '/../fudai/current-loans-counter', 0);
	} else {
		$keys = array('cnButton', 'enButton', 'cnText', 'enText', 'pause');
	}

	foreach ($keys as $key) {
		if (empty($_POST[$key])) {
			$config[$key] = '';
		} else {
			$config[$key] = $_POST[$key];
		}
	}

	file_put_contents($fs, serialize($config));
}

$currentLoansCounter = file_get_contents(dirname(__FILE__) . '/../fudai/current-loans-counter');

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
</head>
<body>
<?php
if ($config['pause']) {
	$class = 'success';
	$label = 'UNPAUSE';
	$pause = 0;
} else {
	$class = 'danger';
	$label = 'PAUSE';
	$pause = 1;
}
?>
<h2 class="text-center" style="font-weight:bold">Fudai page control panel</h2>
<div class="container">
	<div class="col-md-offset-2 col-md-8">
		<h3 style="font-weight:bold">Pause Dialog & Bar</h3>
		<form method="post">
			<div class="form-group">
				<label for="cnButton">CN button text</label>
				<input type="text" name="cnButton" class="form-control" id="cnButton" placeholder="CN button text" value="<?php echo rawurldecode($config['cnButton']);?>">
			</div>
			<div class="form-group">
				<label for="cnText">CN Text</label>
				<textarea name="cnText" class="form-control" id="cnText" placeholder="CN Text"><?php echo rawurldecode($config['cnText']);?></textarea>
			</div>
			<hr>
			<div class="form-group">
				<label for="cnButton">EN button text</label>
				<input type="text" name="enButton" class="form-control" id="enButton" placeholder="EN button text 2" value="<?php echo rawurldecode($config['enButton']);?>">
			</div>
			<div class="form-group">
				<label for="cnText">EN Text</label>
				<textarea name="enText" class="form-control" id="enText" placeholder="EN Text"><?php echo rawurldecode($config['enText']);?></textarea>
			</div>
			<div class="text-center">
				<input type="hidden" name="pause" value="<?php echo $pause;?>">
				<button type="submit" class="btn btn-lg btn-<?php echo $class;?>"><?php echo $label;?></button>
			</div>
		</form>
	</div>
	<div class="col-md-offset-2 col-md-8">
		<form method="post">
			<input type="hidden" name="bar-text-form" value="1">
			<div class="form-group">
				<div class="col-md-6">
					<label for="cnBarText">CN BAR text</label>
					<input type="text" name="cnBarText" class="form-control" id="cnBarText" placeholder="CN BAR text" value="<?php echo htmlentities($config['cnBarText']);?>">
					
				</div>
				<div class="col-md-6">
					<label for="enBarText">EN BAR text</label>
					<input type="text" name="enBarText" class="form-control" id="enBarText" placeholder="EN BAR text" value="<?php echo htmlentities($config['enBarText']);?>">
					
				</div>
				<div class="col-md-12 text-center">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="barEnabled" <?php if ($config['barEnabled']):?>checked<?php endif;?>> Is bar text enabled?
						</label>
					</div>
				</div>
				<div class="col-md-12 text-center">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="graphicalBarEnabled" <?php if ($config['graphicalBarEnabled']):?>checked<?php endif;?>> 
							Is graphical bar enabled?
						</label>
					</div>
				</div>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-lg btn-primary">Save bar text</button>
			</div>
		</form>
	</div>
	<!--
	<h2 class="text-center" style="font-weight:bold">Pause Dialog & Bar</h2>
	<div class="col-md-offset-2 col-md-8">
		<form method="post">
			<input type="hidden" name="dialog-text" value="1">
			<div class="form-group">
				<div class="col-md-12">
					<label for="cnDialogText">CN dialog text</label>
					<input type="text" name="cnDialogText" class="form-control" id="cnDialogText" value="<?php echo rawurldecode($config['cnDialogText']);?>">
				</div>
				<div class="col-md-12">
					<label for="enDialogText">EN dialog text</label>
					<input type="text" name="enDialogText" class="form-control" id="enDialogText" value="<?php echo rawurldecode($config['enDialogText']);?>">
				</div>
				<div class="col-md-6">
					<label for="cnDialogLeftButton">CN dialog left button</label>
					<input type="text" name="cnDialogLeftButton" class="form-control" id="cnDialogLeftButton" value="<?php echo rawurldecode($config['cnDialogLeftButton']);?>">
				</div>
				<div class="col-md-6">
					<label for="cnDialogRightButton">CN dialog right button</label>
					<input type="text" name="cnDialogRightButton" class="form-control" id="cnDialogRightButton" value="<?php echo rawurldecode($config['cnDialogRightButton']);?>">
				</div>
				<div class="col-md-6">
					<label for="enDialogLeftButton">EN dialog left button</label>
					<input type="text" name="enDialogLeftButton" class="form-control" id="enDialogLeftButton" value="<?php echo rawurldecode($config['enDialogLeftButton']);?>">
				</div>
				<div class="col-md-6">
					<label for="enDialogRightButton">EN dialog right button</label>
					<input type="text" name="enDialogRightButton" class="form-control" id="enDialogRightButton" value="<?php echo rawurldecode($config['enDialogRightButton']);?>">
				</div>
			</div>
			<div class="col-md-12 text-center">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="textDialogEnabled" <?php if ($config['textDialogEnabled']):?>checked<?php endif;?>> Is text dialog enabled?
					</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="text-center" style="padding: 40px 0;">
					<button type="submit" class="btn btn-lg btn-primary">Save dialog configuration</button>
				</div>
			</div>
		</form>
	</div>
	-->

	<hr>
	<div class="col-md-offset-2 col-md-8">
		<h3 style="font-weight:bold">Activations</h3>
		<form method="post">
			<input type="hidden" name="loan-form" value="1">
			<div class="form-group">
				<div class="col-md-6">
					<label for="maxLoansPerDay">Max number of activations:</label>
					<input type="text" name="maxLoansPerDay" class="form-control" id="maxLoansPerDay" placeholder="e.g.: 30" value="<?php echo rawurldecode($config['maxLoansPerDay']);?>">
				</div>
			</div>
			<div class="col-md-12">
				<div class="text-center" style="padding: 40px 0;">
					<button type="submit" class="btn btn-lg btn-primary">Save Number</button>
				</div>
			</div>
		</form>
	</div>

	<div class="col-md-offset-2 col-md-8">
		<form method="post">
			<input type="hidden" name="loan-reset-form" value="1">
			<div class="form-group">
				<div class="col-md-6">
					<label for="maxLoansPerDay">Number of activations: <?php echo $currentLoansCounter ?></label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="text-center" style="padding: 40px 0;">
					<button type="submit" class="btn btn-lg btn-primary" onclick="confirm('Are you sure?');">Reset Today's Counter</button>
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>

