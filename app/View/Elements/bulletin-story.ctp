<section class="bulletin-story">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>
					<?php
					echo $data['Post']['name']
					?>
				</h2>
				<?php
				echo $data['Post']['perex'];
				echo $data['Post']['content']
				?>
			</div>
		</div>
		<?php
		$videostring = $data['Post']['youku_video'];
		$videostring = substr($videostring, 0, strpos($videostring, "==") + 2);
		$videostring = strstr($videostring, 'v_show/id_');
		$videostring = str_replace('v_show/id_', '', $videostring);
		if (!empty($videostring)):
			?>
			<div class="row">
				<div class="col-xs-12">
					<iframe height="400" width="100%" src="http://player.youku.com/embed/<?php echo $videostring; ?>"
							frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<?php
		endif;
		?>
		<?php
		$baiduVideo = $data['Post']['baidu_video'];
		if (!empty($baiduVideo)):
			?>
			<div class="row baidu-video">
				<div class="col-xs-12">
					<?php echo $baiduVideo; ?>
				</div>
			</div>
			<?php
		endif;
		?>
		<?php
		$qqVideo = $data['Post']['qq_video'];
		if (!empty($qqVideo)):
			$qqvideo = strstr($qqVideo, 'vid=');
			$qqvideo = str_replace('vid=', '', $qqvideo);
			//debug($qqvideo);
			?>
			<div class="row qq-video">
				<div class="col-xs-12">
						<object width="500" height="418">
							<param name="movie" value="http://video.qq.com/res/qqplayerout.swf?vid=<?php echo $qqvideo; ?>"></param>
							<param name="allowFullScreen" value="true"></param>
							<param name="allowscriptaccess" value="never"></param>
							<param name="allownetworking" value="internal"></param>
							<param name="flashvars" value="" />
							<embed src="http://video.qq.com/res/qqplayerout.swf?vid=<?php echo $qqvideo; ?>" type="application/x-shockwave-flash" allowscriptaccess="never" allownetworking="internal" allowfullscreen="true" width="500" height="418" flashvars=""></embed>
						</object>
				</div>
			</div>
			<?php
		endif;
		?>
		<div class="row share-wrapper">
			<div class="col-xs-5">
				<p class="share-header"><?php echo $this->StaticText->getStripped('Media center - Share header'); ?></p>
				<?php echo $this->element('sharingButton', array('post' => $data['Post'])) ?>
				<?php echo $this->element('sharingButton-QQ', array('post' => $data['Post'])) ?>
				<?php echo $this->element('sharingButton-baidu', array('post' => $data['Post'])) ?>
				<span class="wechat-icon">
					<img src="/img/icon-wechat.png">
					<div class="wechat-popup">
						<img
							src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&amp;data=<?php echo Router::url($this->here, true); ?>">
						<?php echo $this->StaticText->getStripped('Share with friends'); ?>
					</div>
				</span>
			</div>
		</div>
	</div>
</section>