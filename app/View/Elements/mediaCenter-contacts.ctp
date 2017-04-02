<div class="media-contacts">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="text-uppercase">
					<?php echo $this->StaticText->getStripped('Media - Next'); ?>
				</h2>
				<?php
				$mediaContacts = $pageData['modulesData']['MediaContacts'];
				if(!empty($mediaContacts)) {
					foreach($mediaContacts as $mediaContact) {
						echo $this->Html->tag(
							'h3',
							$mediaContact['MediaContact']['name']
						);

						if($this->MediaContact->getLanguage()!== 'en'){
							echo $this->Html->tag(
								'div',
								'电话: <br> 邮箱: <br> 负责区域: ',
								array(
									'class' => 'contact-cathegory'
								)
							);
						} else{
							echo $this->Html->tag(
								'div',
								'Tel: <br> Email: <br> Region: ',
								array(
									'class' => 'contact-cathegory'
								)
							);
						}

						echo $this->Html->tag(
							'div',
							$mediaContact['MediaContact']['phone'].'<br>'.$mediaContact['MediaContact']['email'].'<br>'.$mediaContact['MediaContact']['region'],
							array(
								'class' => 'contact-value'
							)
						);
					}
				}
				?>
			</div>
		</div>
	</div>
</div>