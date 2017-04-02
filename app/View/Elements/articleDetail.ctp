<article xmlns="http://www.w3.org/1999/html">
	<h1><?php echo $pageData['modulesData']['detail']['Article']['name'];?></h1>
	<div class="description bold">
		<?php echo $pageData['modulesData']['detail']['Article']['perex'];?>
	</div>
	<section class="content">
		<?php echo $pageData['modulesData']['detail']['Article']['content'];?>
	</section>
	<div class="row">
		<div class="col-xs-12">
			<span class="color-extra-light-gray"><?php echo $this->StaticText->getStripped('Media center - Posted on'); ?> <strong><?php echo date("Y.m.d" ,strtotime($pageData['modulesData']['detail']['Article']['created']));?></strong></span>
		</div>
	</div>
	<div class="row share-wrapper">
		<div class="col-xs-5">
			<p class="share-header"><?php echo $this->StaticText->getStripped('Media center - Share header'); ?></p>
			<?php echo $this->element('sharingButton', array('post' => $pageData['modulesData']['detail']['Article'])) ?>
			<?php echo $this->element('sharingButton-QQ', array('post' => $pageData['modulesData']['detail']['Article'])) ?>
			<?php echo $this->element('sharingButton-baidu', array('post' => $pageData['modulesData']['detail']['Article'])) ?>
			<span class="wechat-icon">
				<img src="/img/icon-wechat.png">
				<div class="wechat-popup">
					<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&amp;data=<?php echo Router::url($this->here, true); ?>">
					<?php echo $this->StaticText->getStripped('Share with friends'); ?>
				</div>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 back-to-media">
			<?php echo $this->Html->link(
				'<span class="arrow dark-gray-left"></span>'.$this->StaticText->getStripped('Media - Back to media'),
				array('pageurl' => $pageData['tree_slug'] . "#" . $pageData['modulesData']['detail']['ArticleCategory']['url']),
				array('class' => 'color-red','escapeTitle' => false)
			);
			?>
		</div>
	</div>
</article>