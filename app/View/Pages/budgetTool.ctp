<?php
/*echo $this->Message->getError(); echo $this->Message->getSuccess();*/
?>

<script type="text/javascript">
	var errorMsg = {
		IncorrectNumber : '<?php echo $this->StaticText->getStripped("Can I afford it - error message - incorrect number"); ?>',
		EmptyNumber : '<?php echo $this->StaticText->getStripped("Can I afford it - error message - empty field"); ?>',
		EmptyField : '<?php echo $this->StaticText->getStripped("Can I afford it - error message - empty field"); ?>',
		MinValue : '<?php echo $this->StaticText->getStripped("Can I afford it - error message - minimum value"); ?>'
	}
</script>
<section class="budget-tool">
<?php

	echo $this->Element('pageHeading',
		array(
			'heading' => 'Can I afford it - Headline',
			'background' => 'budget-planner.jpg',
		)
	);

    echo $this->element('budget-planner-form');
?>
</section>

<script type="text/javascript" src="/vendor/autoNumeric/autoNumeric.js"></script>
<script type="text/javascript">
	$(document).ready(function () {$('.form-number').autoNumeric('init', { aSep: defaultThousandSeparator, mDec: 0 });});
</script>

