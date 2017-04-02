<?php
$lang = '';
if($contactPage['Page']['locale'] === 'eng'){
	$lang = 'en/';
}
?>

<section class="about-us">
	<div class="container-fluid">
		<div class="row even about-us-item">
			<?php 
				echo $this->element('about-us-heading');
			?>
		</div>
		
		<div class="row even about-us-item prod-loan">
			<?php 
				echo $this->element('product-loan');
			?>
		</div> 
					
		<div class="row odd about-us-item wicl">
			<?php 
				echo $this->element('cash-loan');
			?>
		</div>
		
		<?php 
			echo $this->element('responsible-lending');
		?>
		
		<?php 
			echo $this->element('stay-in-touch');
		?>
		
		<div class="clearfix"></div>
  
		<div class="row">
			<div class="visible-xs-block visible-sm-block hidden-md hidden-lg">
				<?php
				echo $this->Element('testimonials');
				?>
			</div>
			<div class="hidden-sm hidden-xs visible-md-block visible-lg-block">
				<?php echo $this->Element('testimonials-desktop'); ?>
			</div>
		</div>
		
	</div>
</section>
