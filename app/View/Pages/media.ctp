<?php
//debug($pageData);die;
?>
<script type="text/javascript">
	function appendData(categoryId,data) {
			var section = $('.tab section[data-category-id='+categoryId+']');
			$('.load-more-link',section).remove();
			var _data = $(data).hide();
			$('.articles-list',section).append(_data);
			$(_data).show(700);
			$('html, body').animate({
				scrollTop: $(_data[0]).offset().top - $(".nav-main").height()
			}, 1500);
	}
	$(document).ready(function () {
		new mediaCenter().initMediaCenter();

	});
</script>
<section class="media-center">
	<?php
	if (!empty($pageData['modulesData']['detail'])) {
		echo $this->Element('pageHeading',
			array(
			    'doodle' => 'megafon.png',
			    'class' => 'megafon',
				'heading' => 'Media Center - heading',
				'background' => 'media-center.jpg',
			)
		);
	} else{
		echo $this->Element('pageHeading',
			array(
			    'doodle' => 'megafon.png',
			    'class' => 'megafon',
				'heading' => 'Media Center - heading',
				'background' => 'media-center.jpg',
				'tabs' => true
			)
		);
	}
	?>
	<div class="container">
		<?php if (!empty($pageData['modulesData']['detail'])) {
			echo $this->Element('articleDetail');
		} else {
			echo $this->Element('articleListing');
		} ?>
	</div>
</section>
