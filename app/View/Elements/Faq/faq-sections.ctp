<?php
	function mfp($a, $b) {
		return $a["ordering"] - $b["ordering"];
	}
?>
<div class="container-fluid">
	<div class="row">

			<?php
				echo $this->Element('pageHeading',
					array(
						'heading' => 'FAQ - title',
						'background' => 'faq.jpg',
					)
				);
			?>

			<div class="tabpanel tabs-common">
			   <div class="container">
				<ul class="nav nav-tabs tabs-menu-faqSecti" role="tablist">

					<?php 
						$class = 'current';
						$addClass = false;
						$tabWidth = count($pageData['modulesData']['faq_sections']);
						$soucet = 100/$tabWidth;
						$i = 0;
						if(!empty($this->params->query)) {
							$section = array_key_exists('section', $this->params->query) ? $this->params->query['section'] : '';
						}

					foreach($pageData['modulesData']['faq_sections'] as $faqSection) { 
						$i++;
						if($addClass === false && empty($section)) {
							$class = 'active';
							$addClass = true;
						} elseif ($addClass === false && ($section === $faqSection['FaqSection']['title'])) {
							$class = 'active';
							$addClass = true;
						} elseif ($addClass === true) {
							$class = '';
						}

					?>

					<div class="col-xs-6" style="width: <?php echo $soucet; ?>%">
						<li role="presentation" class="<?php echo $class; ?>" data-id="<?php echo $i; ?>">
							<a class="" href="#<?php echo $faqSection['FaqSection']['url']; ?>" aria-controls="<?php echo $faqSection['FaqSection']['url']; ?>" role="tab" data-toggle="tab">

							<?php echo $faqSection['FaqSection']['title']; ?>
							</a>
						</li>
					</div>

					<?php };?>        <!--puvodni-->

				</ul>
				<div class="tab-content faqPage">

						<?php

						$addClass3 = false;
						$i2 = 0;

						foreach($pageData['modulesData']['faq_sections'] as $faqSection) {
							$i2++;
                            
                            
                            //debug($pageData);
							if(!empty($this->params->query)) {
								$section = array_key_exists('section', $this->params->query) ? $this->params->query['section'] : '';
							}
                            
							if($addClass3 === false && empty($section)) {
								$class3 = 'active';
								$addClass3 = true;
							} elseif ($addClass3 === false && ($section === $faqSection['FaqSection']['title'])) {
								$class3 = 'active';
								$addClass3 = true;
							} elseif ($addClass3 === true) {
								$class3 = '';
							} else {
								$class3 = '';
							}
						?>
							<div role="tabpanel" class="tab-pane fade in <?php echo $class3; ?>" id="<?php echo $faqSection['FaqSection']['url']; ?>" data-id="<?php echo $i2; ?>">	

			<div class="col-xs-12 col-sm-4 col-md-3 faqWrapp">
                                <?php
                                    if(!empty($faqSection['FaqCategory'])) {
                                        foreach($faqSection['FaqCategory'] as $faqCategory) {

                                            if($faqCategory['hot_question_category'] === true && $faqCategory['show_in_faq_page'] === true) {
                                                
                                            //debug($faqCategory['faq_section_id']);
                                                

                                                echo $this->Html->link(
                                                    '<i></i>'.
                                                    $faqCategory['title'].'<span></span>',
                                                    array(
                                                        'pageurl' => $faqPage['Page']['tree_slug'] . '/' . $faqCategory['url']
                                                    ),
                                                    array(
                                                        'title' => $faqCategory['title'],
                                                        'class' => 'btn btn_white visible-xs active hot-question-link',
                                                        'escape' => false,
							'onclick' => "stm_clicki('send', 'event', 'FAQ分类', 'Click', '申请相关');",
                                                    )
                                                );
                                                echo $this->Html->link(
                                                    '<i></i>'.
                                                    $faqCategory['title'].'<span></span>',
                                                    array(
                                                        'pageurl' => $faqPage['Page']['tree_slug'] . '/' . $faqCategory['url']
                                                    ),
                                                    array(
                                                        'title' => $faqCategory['title'],
                                                        'class' => 'btn btn_white hidden-xs desktop-faq-category active hot-question-link',
                                                        'data-toggle-category' => $faqCategory['id'],
                                                        'escape' => false,
							'onclick' => "stm_clicki('send', 'event', 'FAQ分类', 'Click', '申请相关');",
                                                    )
                                                );
                                            }
                                        }
				$sorted = $faqSection['FaqCategory'];
				  usort($sorted, "mfp");
                                        foreach($sorted as $faqCategory) {
                                            if($faqCategory['hot_question_category'] !== true && $faqCategory['show_in_faq_page'] === true) {
                                              // echo $nu; 
                                               //var_dump($faqCategory['id']);
						$click_event = '';
						if( $faqCategory['id']== 16){
						 $click_event = "stm_clicki('send', 'event', 'FAQ分类', 'Click', '费用相关');";
						}elseif( $faqCategory['id']== 18){
						 $click_event = "stm_clicki('send', 'event', 'FAQ分类', 'Click', '还款相关');";
						}elseif( $faqCategory['id']== 20){
						 $click_event = "stm_clicki('send', 'event', 'FAQ分类', 'Click', '业务办理');";
						}elseif( $faqCategory['id']== 21){
						 $click_event = "stm_clicki('send', 'event', 'FAQ分类', 'Click', '与商家相关');";
						}elseif( $faqCategory['id']== 22){
						 $click_event = "stm_clicki('send', 'event', 'FAQ分类', 'Click', '提前还款');";
						}elseif( $faqCategory['id']== 24){
						 $click_event = "stm_clicki('send', 'event', 'FAQ分类', 'Click', '特殊情况');";
						}

                                                
                                                echo $this->Html->link(
                                                    '<i></i>'.
                                                    $faqCategory['title'].'<span></span>',
                                                    array(
                                                        'pageurl' => $faqPage['Page']['tree_slug'] . '/' . $faqCategory['url']
                                                    ),
                                                    array(
                                                        'title' => $faqCategory['title'],
                                                        'class' => 'btn btn_white visible-xs ',
                                                        'escape' => false,
							'onclick' => $click_event,
                                                    )
                                                );
                                                echo $this->Html->link(
                                                    '<i></i>'.
                                                    $faqCategory['title'].'<span></span>',
                                                    array(
                                                        'pageurl' => $faqPage['Page']['tree_slug'] . '/' . $faqCategory['url']
                                                    ),
                                                    array(
                                                        'title' => $faqCategory['title'],
                                                        'class' => 'btn btn_white hidden-xs desktop-faq-category ',
                                                        'data-toggle-category' => $faqCategory['id'],
                                                        'escape' => false,
							'onclick' => $click_event,
                                                    )
                                                );
                                            }

                                        }
                                    }
                                ?> 
			 </div> <!--faqWrapp-->
							 
							 
							 
							 
							 <!--center box-->
							 <div class="col-xs-6 col-sm-6 col-md-6 hidden-xs">
								<?php
								foreach($faqSection['FaqCategory'] as $faqCategory) {
									if($faqCategory['hot_question_category'] === true && $faqCategory['show_in_faq_page'] === true) {
										$questions = $this->Faq->getQuestions($faqCategory['id']);
									?>
										<div class="faqWrapp" data-category='<?php echo $faqCategory['id']; ?>' style="display:block;">
									<?php
										$questions_filtered = array();
										foreach($questions as $question) {
											$texts = $question[0];
											array_push($question['Faq'], $texts);
											array_push($questions_filtered, $question['Faq']);
										}
										$sorted = $questions_filtered;
										usort($sorted, "mfp");
										foreach($sorted as $question) {
										 $imgId = $question['id'];
										 $images = $this->Faq->getQuestionImages($imgId);
										 $question = $question[0];
										 $title = $question['Faq__i18n_title'];
										 $answer = $question['Faq__i18n_answer'];

										 $sub_event_one = '';
									if( $imgId == 165 ){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '捷信能提供哪些商品分期业务');";										
									}elseif( $imgId == 158){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '捷信的业务流程是什么');";										
									}elseif( $imgId == 166){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '请问在哪里能办理你们的分期贷款呢');";										
									}elseif( $imgId == 167){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '想办捷信的分期，但是被拒绝了，怎么回事');";										
									}elseif( $imgId == 169){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '申请现金贷款的流程是什么');";										
									}elseif( $imgId == 171){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '办理商品贷，会得到什么文件');";										
									}elseif( $imgId == 172){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '为什么要详细阅读贷款合同');";										
									}elseif( $imgId == 173){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '再次申请贷款的条件是什么');";										
									}elseif( $imgId == 174){
									$sub_event_one = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我需要满足什么条件可以申请到我需要的现金贷款金额');";										
									}
									?>
										<div class="tabWrap" onclick="<?php echo $sub_event_one;?>">
											<div id="tabInn" class="tabInn"><?php echo h($title); ?></div>
											<div class="tab-answer">
												<?php
													echo $answer;
												?>
											</div>
										</div>
									 <?php
										}
									?>
									</div>
									<?php
									}
								} 
								foreach($faqSection['FaqCategory'] as $faqCategory) {
									if($faqCategory['hot_question_category'] !== true && $faqCategory['show_in_faq_page'] === true) {
										$questions = $this->Faq->getQuestions($faqCategory['id']);
									?>
										<div class="faqWrapp" data-category='<?php echo $faqCategory['id']; ?>' style="display:none;">
									<?php
										$questions_filtered = array();
										foreach($questions as $question) {
											$texts = $question[0];
											array_push($question['Faq'], $texts);
											array_push($questions_filtered, $question['Faq']);
										}

										$sorted = $questions_filtered;
										usort($sorted, "mfp");
										foreach($sorted as $question) {
										 $imgId = $question['id'];
										 $images = $this->Faq->getQuestionImages($imgId);
										 $question = $question[0];
										 $title = $question['Faq__i18n_title'];
										 $answer = $question['Faq__i18n_answer'];

										$sub_event_two = '';

										if( $imgId == 159 ){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '办理捷信的分期付款收取哪些费用');";
										}elseif( $imgId == 113){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '捷信的逾期还款违约金是怎样收取的');";
										}elseif( $imgId == 114){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '请问使用捷信分期买东西首付要给多少呢');";
										}elseif( $imgId == 115){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '首付会算在分期的期数里吗');";
										}elseif( $imgId == 160){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '捷信贷款的利息是怎么计算的');";
										}elseif( $imgId == 116){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '为什么我要支付保险费用');";
										}elseif( $imgId == 117){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '客户服务费是什么');";
										}elseif( $imgId == 118){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '客户服务费是是如何收取的');";
										}elseif( $imgId == 119){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '贷款管理费是什么');";
										}elseif( $imgId == 120){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '贷款管理费是是如何收取的');";
										}elseif( $imgId == 121){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '灵活还款服务包是什么');";
										}elseif( $imgId == 122){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '灵活还款服务包的费用如何收取');";
										}elseif( $imgId == 123){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '再次申请贷款的费用有哪些');";
										}elseif( $imgId == 150){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如果我办理了两笔贷款但是绑定了不同的银行卡，那我应该往哪个卡存钱');";
										}elseif( $imgId == 125){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '卡上有钱，为什么不扣');";
										}elseif( $imgId == 126){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '通过邮政还款，还完后发现还款信息有误，比如附言写错等，应该怎么办');";
										}elseif( $imgId == 127){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '这个月工资晚发了几天，可以延期还款吗');";
										}elseif( $imgId == 161){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '在哪里可以查询我的剩余还款金额还有多少');";
										}elseif( $imgId == 128){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我如何能查询我的贷款还款日期是多少号');";
										}elseif( $imgId == 162){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我怎么偿还贷款呢?(即还款渠道)');";
										}elseif( $imgId == 108){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '逾期过还能办理捷信业务吗');";
										}elseif( $imgId == 129){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我如何查询付款是否成功到达公司呢');";
										}elseif( $imgId == 130){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我的贷款的还款期限是多长时间');";
										}elseif( $imgId == 131){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '还款前，我能够更改合同吗');";
										}elseif( $imgId == 132){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如果我没有按时还款，我会遇到什么问题呢');";
										}elseif( $imgId == 133){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如果我没有按时偿还贷款，那么对我的信用记录会有什么影响吗');";
										}elseif( $imgId == 163){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如何更改银行代扣预留信息');";
										}elseif( $imgId == 134){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如何取消银行代扣');";
										}elseif( $imgId == 135){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如何恢复银行代扣');";
										}elseif( $imgId == 136){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如果我想要所有文件的复印件，我应该怎样做');";
										}elseif( $imgId == 137){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我要更改手机号码怎么做');";
										}elseif( $imgId == 138){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我要更改姓名怎么做');";
										}elseif( $imgId == 139){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我的收款账号有问题该怎么做');";
										}elseif( $imgId == 140){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '如果商品有质量问题，那应该怎样处理呢');";
										}elseif( $imgId == 141){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我如何退货和退货后对我的贷款有什么影响');";
										}elseif( $imgId == 142){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我怎样才能退货给到商家呢');";
										}elseif( $imgId == 143){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '关于零售商更多的信息我在哪里可以找到');";
										}elseif( $imgId == 144){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '可以提前还款么');";
										}elseif( $imgId == 145){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '什么是提前还款费');";
										}elseif( $imgId == 146){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '为什么我要支付提前还款费');";
										}elseif( $imgId == 164){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我的提前还款金额是什么');";
										}elseif( $imgId == 147){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我如何查询是否有资格申请提前还款');";
										}elseif( $imgId == 149){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '我想取消提前还款怎么办');";
										}elseif( $imgId == 182){
										$sub_event_two = "stm_clicki('send', 'event', 'FAQ问题', 'Click', '家里出现借款人逮捕如何还款');";
										}
									?>
										<div class="tabWrap" onclick="<?php echo $sub_event_two; ?>">
											<div id="tabInn" class="tabInn"><?php echo h($title); ?></div>
											<div class="tab-answer">
											<?php
												echo $answer;
											?>
											</div>
										</div>
									 <?php
										}
									?>
									</div>
									<?php
									}
								} 
							?>
							

							
							
							 </div>


							 <!--pravy box na image-->
							 
							 
							 
							 
							 <div class="faqWrapp forImage col-xs-12 col-sm-2 col-md-3">
								 <?php
								 	foreach($faqSection['FaqCategory'] as $faqCategory) {
								 		if($faqCategory['hot_question_category'] === true && $faqCategory['show_in_faq_page'] === true) {
											$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
											if ($language !== 'en') {
												$img = $this->Media->getImagePathByName($faqCategory['moduleMedia'], 'category-image-zh');
											} else {
												$img = $this->Media->getImagePathByName($faqCategory['moduleMedia'], 'category-image-en');
											}
											if(!empty($img)) {
											?>
												<img src="/<?php echo h($img);?>" alt="<?php h($faqCategory['title']); ?>" class="img-responsive" data-category-image='<?php echo $faqCategory['id']; ?>' style="display:block;">
											<?php
											}
										}
								 	}
								 	foreach($faqSection['FaqCategory'] as $faqCategory) {
								 		if($faqCategory['hot_question_category'] !== true && $faqCategory['show_in_faq_page'] === true) {
											$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
											if ($language !== 'en') {
												$img = $this->Media->getImagePathByName($faqCategory['moduleMedia'], 'category-image-zh');
											} else {
												$img = $this->Media->getImagePathByName($faqCategory['moduleMedia'], 'category-image-en');
											}
											if(!empty($img)) {
											?>
												<img src="/<?php echo h($img);?>" alt="<?php h($faqCategory['title']); ?>" class="img-responsive" data-category-image='<?php echo $faqCategory['id']; ?>' style="display:none;">
											<?php
											}
										}
								 	}
								 ?>
							 </div>
							 
							 
							 
							 <!--pravy box na image-->
							 
							 
							 
							 
							 
							 <!--center box-->
							 
							 
							 
							 
							 
							 
							 
							 
							 <div class="clearfix"></div> 
							</div>  
						<?php
						}
						?>
				</div>
				</div>
				<div class="col-sm-6 col-sm-offset-3 faq-hlp">
					<div class="contact-faq">
						<h3><?php echo $this->staticText->getStripped('FAQ detail - havent found'); ?></h3>
						<?php
						echo $this->Html->link(
							$this->StaticText->getStripped('Button - Contact us'),
							array(
								'pageurl' => $contactPage['Page']['tree_slug']
							),
							array(
								'class' => 'btn btn-success'
							)
						);
						?>
					</div>
				</div>
			</div> <!--tabpanels-->
	</div>
</div>
