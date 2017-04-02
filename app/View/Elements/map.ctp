<?php
if(empty($type)) {
	$type = '';
}
?>
<div class="call-to-action-box">
    <?php echo $this->staticText->getStripped('Map - Headline'); ?>
	<div class="search-button-head init">
		<i class="fa fa-search"></i>
	</div>
</div>
<section class="map">
    <div class="map-calculator calculator-switch-wrapper">
        <div class="calculator-switch-button">
            <input class="calculator-switch map-calculator-switch-pos map-calculator-switch" type="radio">
            <label for="calculator-switch-posl" class="map-calculator-switch-label label-for-posl"><?php echo $this->StaticText->getStripped('Calculator - switch position 1'); ?></label>
            <input class="calculator-switch map-calculator-switch-wcl map-calculator-switch fake" type="radio">
            <label for="calculator-switch-wcl" class="map-calculator-switch-label label-for-wcl"><?php echo $this->StaticText->getStripped('Calculator - switch position 2'); ?></label>
        </div>
    </div>
    <div class="map-overlay active">
        <div class="search-box">
            <div class="text-center color-white bold mt100">
                <?php echo $this->staticText->getStripped('Map - Find nearest POS'); ?>
            </div>
            <div class="form-group">
                <div class="map-select region-select">
                    <select id="region-select" data-type="<?php echo $type; ?>">
                        <option value="null"><?php echo $this->staticText->getStripped('Map - Select province') ?></option>
                    </select>
                </div>
                <div class="map-select town-select">
                    <select id="town-select">
                        <option value="null"><?php echo $this->staticText->getStripped('Map - Select city') ?></option>
                    </select>
                </div>
                <div class="map-button text-center">
                    <button class="hide-btn btn btn-danger disabled"><?php echo $this->staticText->getStripped('Map - Find') ?></button>
                </div>
            </div>
        </div>
    </div>
	<button class="btn btn-danger btn-touch"><img src="/img/icon-touch.png" alt="" /></button>
	<!--button class="btn red btn-gps"><img src="/img/gps-location.png" alt="" /></button-->
    <button class="btn btn-zoom btn-zoom-in">+</button>
    <button class="btn btn-zoom btn-zoom-out">-</button>
    <button class="btn-search show-btn"><img src="/img/map-search.jpg" alt="" /></button>
    <div class="map-info-box">

        <div id="map-top-controls" class="hidden">

			<div class="submit hidden-md hidden-lg open-checkboxes"><?php echo $this->StaticText->getStripped('Map - Options'); ?></div>
            <div id="type-selector" class="controls hidden">
                <div class="form-group">
                    <div class="submit hidden-sm hidden-xs"><span><?php echo $this->StaticText->getStripped('Map - Options'); ?></span></div>
                    <div class="checkbox first">
                        <label>
                            <div class="checkbox-item" id="checkbox_0"></div><span><?php echo $this->StaticText->getStripped('Map - Cash loan'); ?></span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <div class="checkbox-item" id="checkbox_1"></div><span><?php echo $this->StaticText->getStripped('Map - Electronic shops'); ?></span>
                        </label>
                    </div>
                </div>

            </div>
        </div>
        <div id="markers-list">
					<div class="result-number">
						<?php echo $this->StaticText->getStripped('Map - Found'); ?> <span id="count-of-search-items">0</span> <?php echo $this->StaticText->getStripped('Map - results'); ?> <i>&nbsp;</i>
					</div>
            <div class="maps-div-scroll-wrap">
                <div class="maps-div-scroll">

                </div>
            </div>
        </div>
        <div class="detail-panel">

        </div>
    </div>

    <div id="map-canvas"></div>
    <div id="map-container"></div>
</section>
