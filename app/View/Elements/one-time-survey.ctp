<div class="modal fade" id="oneTimeSurvey" tabindex="-1" role="dialog" data-backdrop="static">
	<script type="text/javascript">
	<?php
		$survey_texts = array(
			$this->StaticText->getStripped("Survey - share text 1"),
			$this->StaticText->getStripped("Survey - share text 2"),
			$this->StaticText->getStripped("Survey - share text 3"),
			$this->StaticText->getStripped("Survey - share text 4"),
		);
		$survey_text1 = urlencode(str_replace("'", "`", html_entity_decode(strip_tags($survey_texts[0]))));
		$survey_text2 = urlencode(str_replace("'", "`", html_entity_decode(strip_tags($survey_texts[1]))));
		$survey_text3 = urlencode(str_replace("'", "`", html_entity_decode(strip_tags($survey_texts[2]))));
		$survey_text4 = urlencode(str_replace("'", "`", html_entity_decode(strip_tags($survey_texts[3]))));
	?>
		var SURVEY_SHARE_TEXTS = [
			'<?php echo $survey_text1; ?>',
			'<?php echo $survey_text2; ?>',
			'<?php echo $survey_text3; ?>',
			'<?php echo $survey_text4; ?>'
		];
	</script>
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<?php
					echo $this->Form->create('oneTimeSurvey', array(
						'inputDefaults' => array(
							'label' => false,
							'div' => false,
						),
						'class' => 'form-horizontal',
						'role' => 'form'
					));

					$this->Form->unlockField('trigger');
					echo $this->Form->hidden('trigger', array('value' => 'time'));
					$this->Form->unlockField('score');
					echo $this->Form->hidden('score', array('value' => 0));
					$this->Form->unlockField('shared');
					echo $this->Form->hidden('shared', array('value' => 0));
					$this->Form->unlockField('social_networks');
					echo $this->Form->hidden('social_networks', array('value' => ''));
				?>
					<div class="step-1">
						<div class="row">
							<div class="col-xs-12">
								<h3><?php echo $this->StaticText->getStripped('Survey - step 1 - headline'); ?></h3>
							</div>
						</div>
						<div class="button-group">
							<div class="col-sm-4 text-center">
								<a class="btn btn-not-finished" data-action="not_finished"><span><?php echo $this->StaticText->getStripped('Survey - step 1 - button not finished'); ?></span></a>
							</div>
							<div class="col-sm-4 text-center">
								<a class="btn btn-refuse" data-action="refuse"><span><?php echo $this->StaticText->getStripped('Survey - step 1 - button refuse'); ?></span></a>
							</div>
							<div class="col-sm-4 text-center">
								<a class="btn btn-continue" data-action="continue"><span><?php echo $this->StaticText->getStripped('Survey - step 1 - button continue'); ?></span></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="step-2" style="display: none;">
						<div class="text-center">
							<h3><?php echo $this->StaticText->getStripped('Survey - step 2 - headline'); ?></h3>
						</div>
						<div class="visible-xs">
							<div id="oneTimeSurveySliderMobile">
								<div class="hearth-container">
									<div class="hearth">
									</div>
								</div>
								<div class="actual-value">
								</div>
								<a class="prev" data-slide="prev"></a>
								<a class="next" data-slide="next"></a>
							</div>
						</div>
						<div class="col-xs-12 slider-container hidden-xs">
							<div id="oneTimeSurveySlider"></div>
							<div class="survey-flash survey-10" style="display:none;">
								<object width="320" height="350" data="/img/one-time-survey/flash/heart_explode_animation.swf">
									<param name="wmode" value="transparent">
								</object>
							</div>
							<div class="survey-flash survey-9" style="display: none;">
								<object width="120" height="120" data="/img/one-time-survey/flash/heart_beat_animation.swf">
									<param name="wmode" value="transparent">
								</object>
							</div>
						</div>
						<div class="col-xs-3 hidden-xs text-left like-not">
							<?php echo $this->StaticText->getStripped('Survey - step 2 - slider low rating'); ?>
						</div>
						<div class="col-xs-12 col-sm-6 text-center">
							<a class="btn btn-submit" data-action="vote"><?php echo $this->StaticText->getStripped('Survey - step 2 - submit'); ?></a>
						</div>
						<div class="col-xs-3 hidden-xs text-right like-lot">
							<?php echo $this->StaticText->getStripped('Survey - step 2 - slider high rating'); ?>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="step-3-comment" style="display: none;">
						<div class="col-xs-12 text-center">
							<h3><?php echo $this->StaticText->getStripped('Survey - step 3 - comment headline'); ?></h3>
						</div>
						<div class="col-xs-12 text-center comment">
							<?php
								$this->Form->unlockField('comment');
								echo $this->Form->textarea('comment', array('placeholder' => $this->StaticText->getStripped('Survey - step 3 - placeholder')));
							?>
						</div>
						<div class="col-xs-12 text-center">
							<button class="btn btn-submit" type="submit" data-action="send"><?php echo $this->StaticText->getStripped('Survey - step 3 - submit'); ?></button>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="step-3-share" style="display: none;">

						<div class="clearfix"></div>
						

						<div class="row survey-share">
							<div class="col-xs-12 text-center thank-you">
								<img src="/img/one-time-survey/thank-you.png" alt="Thank you">
								<div class="thank-you-message"><strong><?php echo $this->StaticText->getStripped('Survey - thank you headline'); ?></strong></div>
								<div class="thank-you-message-share"><?php echo $this->StaticText->getStripped('Survey - thank you text'); ?></div>
							</div>
							<?php
								$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
								if ($language !== 'en') {
									$langClass = 'zh';
								} else {
									$langClass = '';
								}
							?>
							<div class="col-xs-12 text-center share-bottom <?php echo $langClass; ?>">
								<div class="clearfix text-center"><h4><?php echo $this->StaticText->getStripped('Survey - share CTA'); ?></h4></div>

								<div class="col-xs-6 col-sm-3">
									<a class="share-button wechat hidden-xs" type="button" data-share="wechat">
										<img class="share_wechat">
										<?php echo $this->StaticText->getStripped('WeChat'); ?>
									</a>
									<a class="share-button wechat visible-xs wechat-mobile" href="http://weixin.qq.com/r/XXUhLkTEz3qwh1VNnyB5" data-share="wechat">
										<img class="share_wechat">
										<?php echo $this->StaticText->getStripped('WeChat'); ?>
									</a>
								</div>

								<div class="col-xs-6 col-sm-3">
									<a target="_blank" href="#" class="share_qzone share-button" data-share="qzone">
										<?php echo $this->StaticText->getStripped('QQ'); ?>
									</a>
								</div>

								<div class="col-xs-6 col-sm-3">
									<a target="_blank" href="#" class="share_weibo share-button" data-share="weibo">
										<?php echo $this->StaticText->getStripped('Sina Weibo'); ?>
									</a>
								</div>

								<div class="col-xs-6 col-sm-3">
									<a target="_blank" href="#" class="share_baidu share-button" data-share="baidu">
										<?php echo $this->StaticText->getStripped('Baidu Tieba'); ?>
									</a>
								</div>

								<div class="text-center col-xs-12">
									<button class="btn btn-submit" type="submit" data-action="send_no_thank_you"><?php echo $this->StaticText->getStripped('Survey - finish'); ?></button>
								</div>
							</div>
							
							<!--
							<div class="col-md-8 col-md-offset-2 text-center share-icons">
								<div class="col-xs-4">
									<button class="wechat-icon share-button" type="button" data-share="wechat">
										<img src="/img/icon-wechat-big.png">
										<img class="share_wechat">
									</button>
									<?php echo $this->StaticText->getStripped('WeChat'); ?>
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="#" class="share_weibo share-button" data-share="weibo">
										<img src="/img/icon-weibo-big.png" alt="weibo"/>
									</a> <br>
									<?php echo $this->StaticText->getStripped('Weibo'); ?>
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="#" class="share_baidu share-button" data-share="baidu">
										<img src="/img/icon-baidu-big.png" alt="baidu"/>
									</a> <br>
									<?php echo $this->StaticText->getStripped('Baidu'); ?>
								</div>
							</div>
							-->

						</div>

						<div class="clearfix"></div>

					</div>

					<div class="step-4" style="display: none;">
						<div class="text-center thank-you">
							<img src="/img/one-time-survey/thank-you.png" alt="Thank you">
							<div class="thank-you-message"><strong><?php echo $this->StaticText->getStripped('Survey - THANK YOU'); ?></strong>, <?php echo $this->StaticText->getStripped('Survey - for being true with me I will be'); ?> <strong><?php echo $this->StaticText->getStripped('Survey - better for you.'); ?></strong></div>
						</div>
					</div>

				<?php echo $this->Form->end(); ?>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	<div class="clearfix"></div>
</div><!-- /.modal -->
