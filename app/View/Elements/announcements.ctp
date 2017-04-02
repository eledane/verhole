
<?php
if(!empty($announcements)) {
	?>
	<section class="announcements">
		<div class="swiper-container swiper-container-vertical">
		  <div class="swiper-wrapper">
			  <?php
			  foreach($announcements as $an) {
				?>
				<div class="swiper-slide">
					<div class="swiper-slide-content">

					  <p>
						  <?php
						  $anText = h(strip_tags($an['Announcement']['name']));
						  if(!empty($an['Announcement']['link'])) {
							 ?><a data-toggle="modal" data-target="#Announcement<?php echo $an['Announcement']['id']; ?>" target="_blank" href="#"><?php echo $anText;?></a><?php
						  } else {
							echo $anText;
						  }
						  ?>
					  </p>
					</div>
				      </div>
				<?php

			  }

			  ?>
		  </div>
		  <a href="#" class="announcements-left"></a>
		  <a href="#" class="announcements-right"></a>
		</div>
		<div class="clearfix"></div>

	      </section>
	<?php
	foreach($announcements as $an) {
		?>
		<div id="Announcement<?php echo $an['Announcement']['id']; ?>" class="modal-announcement modal fade" role="dialog">
		<div class="modal-dialog">

		  <div class="modal-content">
		  	<button type="button" class="close" data-dismiss="modal">&times;</button>
		    <div class="modal-header">
		      <h4 class="modal-title"><?php echo $an['Announcement']['name'];?></h4>
		    </div>
		    <div class="modal-body">
		      <?php echo $an['Announcement']['description'];?>
		    </div>
		  </div>

		</div>
	      </div>
		<?php
	}
}
