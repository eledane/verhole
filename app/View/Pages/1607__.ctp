<?php

$lang = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages')); 

if($lang == 'en') {
?>
<div class="en _1607">
    <div class="section_1607">
        <img src="/img/1607/banner1.jpg">
    </div>
</div>
<?php
} else {
?>

<div class="zh _1607">
    <div class="section_1607">
        <img src="/img/1607/banner1.jpg">
    </div>
</div>


<?php
}
?>
