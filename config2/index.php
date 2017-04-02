<?php
$str = file_get_contents('settings.conf');
$arr = unserialize($str);

echo '<html>'
. '<link rel="stylesheet" type="text/css" href="style.css">'
. '<script src="jquery-1.11.3.min.js"></script>'
. '<script src="script.js"></script>'
. '<head>'
        . '</head>'
        . '<body>'
        . '<button type="button" id="pausebutton" class="pausebutton '.($arr['pause']? "green": "red").'">'.($arr['pause']? "UNPAUSE": "PAUSE").'</button>'        
        . '<div id="error"></div>'
        . '<input type="hidden" id="newVal" value="'.($arr['pause']?"0":"1").'">'
        . '<input type="text" id="cnButton" name="cnButton" placeholder="Button Text cn" value="'.rawurldecode($arr['cnButton']).'"><br/><br/>'
        . '<textarea cols="50" rows="10" placeholder="在这里留言..." id="cnText" maxlength="300">'.rawurldecode($arr['cnText']).'</textarea>'
        . '<br/>'
        . '<br/>'
        . '<input type="text" id="enButton" name="enButton" placeholder="Button Text en"  value="'.rawurldecode($arr['cnButton']).'"><br/><br/>'
        . '<textarea cols="50" rows="10" placeholder="Message here..." id="enText" maxlength="300">'.rawurldecode($arr['enText']).'</textarea>'
        . '</body>'
        . '</html>';

//fclose($settings);