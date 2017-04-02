<section class="why-hc">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="first"><?php echo $this->StaticText->getStripped('aboutus-abouthcgroup - whyhc') ?></h2>
				<ul>
				<?php
					for ($i = 1;$i<4;$i++) {
				?>
						<li>
							<?php echo $this->StaticText->getStripped('abouthcgroup - whyhc ' . $i); ?>
						</li>
				<?php
					}
				?>
				</ul>
			</div>
		</div>
	</div>
</section>