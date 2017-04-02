<?php
$imgPath = '/img/loan-process/';
$images = array(
    'mobile.jpg',
    'map.jpg',
    'id-card.jpg',
    'hc-stand.jpg'
);
?>
<section class="loan-process-desktop">
    <div class="container">

        <h2 class="title"><?php echo $this->StaticText->getStripped('Loan Process WCL - title'); ?></h2>

        <div class="row">

            <?php
            for ($i = 0; $i < 4; $i++) {
                ?>
                <div class="col-xs-3 text-center lp-step<?php echo $i+1 ?>">
                    <div class="img-wrapper" style="background-image: url('<?php echo $imgPath . $images[$i] ?>');">
                    </div>
                    <div class="step-info">
                        <div class="vertical-align">
                            <div class="content-wrapper">
                                <?php
                                $descr = 'Loan Process WCL - Step ' . ($i + 1) . ' - description';
                                ?>
                                <p>
                                    <?php echo $this->StaticText->getStripped($descr); ?>
                                    <?php
                                    if ($i == 2) {
                                        ?>
                                      <span class="ttip-container">
												<span class="ttip">
														<span class="glyphicon glyphicon-info-sign fs-18"></span>
													</span>
													<span>
														<span class="glyphicon glyphicon-remove"></span>
                                                        <?php echo $this->StaticText->getStripped('Loan Process WCL - Step 3 - tooltip'); ?>
													</span>
												</span>
                                    <?php
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <a href="" class="btn btn-success scroll-to-form">
                    <span><?php echo $this->StaticText->getStripped('Schedule appointment'); ?></span>
                </a>
            </div>
        </div>

    </div>
</section>
