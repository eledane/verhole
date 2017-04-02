<?php
$cookie_name = 'mlcuid';
if (!isset($_COOKIE[$cookie_name])) {
    $key = '1dbd35d21ece4dbba0b66a5eca13a283';
    $key = strtoupper($key);
    $cookie_value = md5(time());
    $time = time() + (60*60*24*30*12);
    $pageName = strtoupper('FUDAI');
    $pageName = strtoupper(md5($pageName));
    $pageName = $pageName.$key;
    $pageName = strtoupper(md5($pageName));
    setcookie($cookie_name, $cookie_value, $time); // 12 months
    setcookie('mlckid', $key, $time);
    setcookie('mlchsh', $pageName, $time);
}

include('en.php');
include('cn.php');

$lang = filter_input(INPUT_GET,'lang');
$page = filter_input(INPUT_GET,'page');

if (!$page){
    $page = 'indexTrans';
}

switch($page){
    case 'faq': $f = file_get_contents("faq.html"); break;
    case 'terms': $f = file_get_contents("terms.html"); break;
    case 'terms2': $f = file_get_contents("terms2.html"); break;
    default: $f = file_get_contents("indexTrans.html");
                     
            $str = file_get_contents('../config/settings.conf');
            $arr = unserialize($str);
            
            if ($arr['pause']){
                $f = str_replace('__paused__', 'loanoff',$f);
                if ($lang == 'en'){
                    $f = str_replace('__pausedText__', '<p style="font-size: 15px;">'.nl2br(rawurldecode($arr['enText'])).'</p>',$f); 
                    if ($arr['enButton']){
                        $f = str_replace('__loanButton__', nl2br(rawurldecode($arr["enButton"])),$f); 
                    }
                }else{
                    $f = str_replace('__pausedText__', '<p style="font-size: 15px;">'.nl2br(rawurldecode($arr['cnText'])).'</p>',$f); 
                    if ($arr['cnButton']){
                        $f = str_replace('__loanButton__', nl2br(rawurldecode($arr["cnButton"])),$f); 
                    }                   
                }
            }else{
                $f = str_replace('__paused__', '',$f);
                $f = str_replace('__pausedText__', '',$f);
            }
            
            break;
}

if ($lang == 'en'){
    $f = str_replace('__engStyleSheet__',"<link rel='stylesheet' href='./assets/css/style_en.css' type='text/css' media='all' />",$f);
}else{
    $lang = 'cn';
    $f = str_replace('__engStyleSheet__',"",$f);
}

$f = str_replace('__langCode__',"lang=".$lang, $f);


$stat = preg_match_all ('/__[^_]*__/',$f,$texts);

foreach ($texts[0] as $pattern){     
    if ($lang == 'en'){
        $f = str_replace($pattern, $en[$pattern],$f);
    }else{
        $f = str_replace($pattern, $cn[$pattern],$f);
    }
}

echo $f;        
?>