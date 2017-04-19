<?php
$imgPath = '/img/loan-process/';
$images = array(
    'dream-bubbles.png',
    'id-card.png',
    'hc-stand2.png',
    'calendar.png'
);
?>
<section class="loan-process desktop bg-greenish">
    <h2 class="title text-center"><?php echo $this->StaticText->getStripped('Loan Process POS Loan - title'); ?></h2>

    <div class="container no-loop">
        <div class="row">

            <?php
            for ($i = 0; $i < 4; $i++) {
                ?>
                <div class="col-xs-3 text-center">
                    <div class="img-wrapper" style="background-image: url('<?php echo $imgPath . $images[$i] ?>');">
                    </div>
                    <div class="step-info">
                        <div class="vertical-align">
                            <div class="content-wrapper">
                                <?php $descr = 'Loan Process POS Loan - Step ' . ($i + 1) . ' - description'; ?>
                                <p>
                                    <?php echo $this->StaticText->getStripped($descr); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>

</section>

