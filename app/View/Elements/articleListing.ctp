<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<?php
		if(!empty($pageData['modulesData']['articleCategories'])) {
		$articlesCategories = $pageData['modulesData']['articleCategories'];
		?>
		<div id="tabs-container" class="tabs-common">
			<ul class="tabs-menu">
				<div class="row">
					<?php $c=0; foreach($articlesCategories as $categories) { $c++; ?>
						<div class="col-xs-4 col-sm-4">
							<li><a href="#<?php echo $categories['ArticleCategory']['url'];?>" title="<?php echo $categories['ArticleCategory']['name'];?>"><?php echo $categories['ArticleCategory']['name'];?></a></li>
						</div>
					<?php } ?>
						<div class="col-xs-4 col-sm-4">
							<li><a href="#media-contacts" title="Media Contacts"><?php echo $this->StaticText->getStripped('Media Contacts'); ?></a></li>
						</div>
				</div>
			</ul>
			<?php
			if(!empty($pageData['modulesData']['tags'])) {
			?>
			<div class="articles-heading">
				<div class="media-filters">
					<h2 class="text-uppercase">
						<?php echo $this->StaticText->getStripped('Media Center - Category of interest'); ?>
					</h2>
					<div class="row">
						<div class="col-xs-6">
							<?php
								foreach($pageData['modulesData']['tags'] as $tag) {
								$tagName = $tag['ArticleTag']['name'];
							?>
								<div class="col-xs-12 checkbox-wrapper checkbox">
									<input type="checkbox" name="<?php echo $tagName; ?>" value="<?php echo $tagName; ?>" checked>
									<label for="<?php echo $tagName; ?>">
										<span></span><?php echo $tagName; ?>
									</label>
								</div>
							<?php
								}
							?>
						</div>
						<div class="col-xs-6 filter-img"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php
				}
				?>
				<div class="row">
					<div class="col-xs-12 articles-headline">
						<h2 class="color-light-gray bold fs-22">
							<?php 
								echo $this->StaticText->getStripped('Media Center - Articles');
							?>
						</h2>
						<?php
							echo $this->Html->image(
								$this->Doodle->renderPath('fantastic-media-center.png'),
								array(
									'class' => 'doodle fantastic-article'
								)
							);
						?>
					</div>
				</div>
			</div>
			<div class="tab">
				<?php $c=0; foreach($articlesCategories as $articles) { $c++; ?>
				<section data-category-id="<?php echo $articles['ArticleCategory']['id'];?>" id="<?php echo $articles['ArticleCategory']['url'];?>" class="tab-content">
					<div class="articles-list">
					<?php 
					$counter = 1;
					foreach ($articles["Article"] as $article) {
						echo $this->element('articlesListRow',array(
							'data' => $article,
							'page' => $pageData	
								));
						if($counter >= Configure::read('Article.items_per_page')) {
							break;
						}
						$counter++;
						
					}
					?>
					<?php
					//vracim si jeden zaznam navic, abch poznal jestli ma smysl strankovani
					if(count($articles["Article"]) > Configure::read('Article.items_per_page')) {
						echo $this->element('loadMoreArticlesLink',array(
							'categoryId' => $articles['ArticleCategory']['id'],
							'offset' => Configure::read('Article.items_per_page')
						));
					}
					?>
					</div>
				</section>
				<?php } ?>
				<section data-category-id="3" id="media-contacts" class="tab-content">
					<div class="row">
						<?php echo $this->Element('mediaCenter-contacts'); ?>
					</div>
				</section>
			</div>
		</div>
		<!-- TODO: Hot fix! -->
		<div class="row" style="display: none">
			<div class="col-xs-6">
				<a href="#" data-type="previous" class="color-extra-light-gray" title="<?php echo $this->StaticText->getStripped('Media - Previous'); ?>"><span class="arrow light-gray-left"></span><?php echo $this->StaticText->getStripped('Media - Previous'); ?></a>
			</div>
			<div class="col-xs-6 text-right">
				<a href="#" data-type="next" class="color-red" title="<?php echo $this->StaticText->getStripped('Media - Next'); ?>"><?php echo $this->StaticText->getStripped('Media - Next'); ?><span class="arrow dark-gray-right"></span></a>
			</div>
		</div>
		<?php } ?>
	</div>
</div>