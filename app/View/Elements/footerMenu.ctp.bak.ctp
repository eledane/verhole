<footer>
    <div class="footer-content bg-dotted-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 links">
                    <div class="row">
                        <div class="col-md-11">

							<div class="row min-375">
								<div class="col-xs-4">
									<ul>
                            <?php
                            if(!empty($pageData['menus'])) {
                            $menu = Hash::extract($pageData['menus'],'{n}[url=/footer-menu/].children');
                            if(!empty($menu)) {
                                $menu = $menu[0];
                            }
								$c = 0;
                                foreach($menu as $menuitem) {
									if ($c == ceil(sizeof($menu)*(1/3)) || $c == ceil(sizeof($menu)*(2/3))) {
										echo '
</ul>
																		</div>
																		<div class="col-xs-4">
<ul>
										';
									}
                                    ?>
                                    <li class="<?php echo $menuitem['class']; ?>"><?php
                                        echo $this->Html->link($menuitem['name'],array(
                                            'pageurl' => $menuitem['Page']['tree_slug']
                                        ), array('title' => $menuitem['name']));
                                        ?></li>
                                <?php
									$c++;
                                }
                                }
                                ?>
									</ul>
								</div>
							</div>


							<div class="row max-374">
								<div class="col-xs-6">
									<ul>
                            <?php
                            if(!empty($pageData['menus'])) {
								$c = 0;
                                foreach($menu as $menuitem) {
									if ($c == ceil(sizeof($menu)/2)) {
										echo '
</ul>
																		</div>
																		<div class="col-xs-6">
<ul>
										';
									}
                                    ?>
                                    <li><?php
                                        echo $this->Html->link($menuitem['name'],array(
                                            'pageurl' => $menuitem['Page']['tree_slug']
										), array('title' => $menuitem['name']));
                                        ?></li>
                                <?php
									$c++;
                                }
                                }
                                ?>
									</ul>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 social-call-us">
                    <div class="row">
                        <div class="col-sm-5 social">
                            <strong><?php echo $this->StaticText->getStripped('Footer - Get Social'); ?></strong>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="icon facebook anti-adBlock">
                                        <a href="https://www.facebook.com/homecreditvn" target="_blank" title="Home Credit Vietnam"></a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="icon twitter anti-adBlock">
                                        <a href="https://twitter.com/homecreditvn" target="_blank" title="Home Credit Vietnam"></a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="icon linkedin anti-adBlock">
                                        <a href="https://www.linkedin.com/company/home-credit-vietnam" target="_blank" title="Home Credit Vietnam"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1 call-us">
                            <strong><?php echo $this->StaticText->getStripped('Footer - Call Us'); ?></strong>
                            <div class="row">
                                <div class="col-xs-12 color-green">
                                    <div class="icon phone"></div>
                                    <a href="tel:<?php echo $this->StaticText->getStripped('Footer - phone - link'); ?>"><?php echo $this->StaticText->getStripped('Footer - phone - text'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg-dotted-dark-gray">
        <div class="container">
            <p>&copy; <?php echo $this->StaticText->getStripped('Footer - 2014 Home Credit All Rights Reserved'); ?>.</p>
        </div>
    </div>
</footer>

<?php
    if (isset($pageData['modulesData']['promotion']['Product']['product_category_id'])) {
        $id = $pageData['modulesData']['promotion']['Product']['product_category_id'];
        $calculatorType = array_search($id,Configure::read('ProductCategory'));
        if($calculatorType === 'electronics') {
            $calculatorType = 'consumer durables';
        }
    } elseif (isset($pageData['modulesData']['category']['ProductCategory']['id'])) {
        $id = $pageData['modulesData']['category']['ProductCategory']['id'];
        $calculatorType = array_search($id,Configure::read('ProductCategory'));
        if($calculatorType === 'electronics') {
            $calculatorType = 'consumer durables';
        }
    } else {
        $calculatorType = '';
    }
    if (empty($pageData['modulesData']['promotion']) && $pageData['is_frontpage'] === true) {
        $calculatorType = 'cashloans';
    }
?>
<script>
    var calculatorType = '<?php echo $calculatorType; ?>';
</script>


