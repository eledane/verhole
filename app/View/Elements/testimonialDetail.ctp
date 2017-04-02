<div class="testimonials-detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2><?php echo $data['Testimonial']['name'] . ', ' . $data['Testimonial']['city']; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 description">
				<h3>
					<?php echo $data['Testimonial']['description']; ?>
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<p>
					<?php echo $data['Testimonial']['content']; ?>
				</p>
			</div>
		</div>
	</div>
</div>