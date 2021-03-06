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

if($lang === 'en') {
	$langArr = $en;
} else {
	$langArr = $cn;
}
if (!$page){
	$page = 'indexTrans';
}

$servername = "localhost";
$username = "c12hccnmcl";
$password = "hpQyhIX_70";
$dbname = "c12hccnmcl";
//require_once dirname(__FILE__) . '/../stories/db-config.php';



switch($page){
	case 'faq': $f = file_get_contents("faq.html"); break;
	case 'terms': $f = file_get_contents("terms.html"); break;
	case 'terms2': $f = file_get_contents("terms2.html"); break;
	case 'stories': $f = file_get_contents("stories.html");
		$story_id = filter_input(INPUT_GET,'story_id');
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$query = "SELECT * FROM mcl_stories";
		$result = $conn->query($query);
		$found_story = 0;
		$stories_thumbs = "";
		if ($result->num_rows > 0) {
			$c=0;
			while($row = $result->fetch_assoc()) {
				if ($row['id'] == $story_id){
					$found_story = 1;
					$f = str_replace('__story_id__', $story_id,$f);
					$f = str_replace('__stories_page_title__', $row['title'],$f);
					$f = str_replace('__stories_page_age__', $row['age'],$f);
					$f = str_replace('__stories_page_cause__', $row['cause'],$f);
					$f = str_replace('__stories_page_loan__', $row['loan'],$f);
					$f = str_replace('__stories_page_content__', $row['content'],$f);
					$f = str_replace('__stories_title_age__', $langArr['__stories_title_age__'], $f);
					$f = str_replace('__stories_title_cause__', $langArr['__stories_title_cause__'], $f);
					$f = str_replace('__stories_title_loan__', $langArr['__stories_title_loan__'], $f);
					$f = str_replace('__stories_title_years__', $langArr['__stories_title_years__'], $f);
					$f = str_replace('__stories_title_prev__', $langArr['__stories_title_prev__'], $f);
					$f = str_replace('__stories_title_next__', $langArr['__stories_title_next__'], $f);
					$f = str_replace('__stories_title_related_stories__', $langArr['__stories_title_related_stories__'], $f);
				}
				if ($c%5 == 0){
					if ($c!=0){
						$stories_thumbs .= '</div>';
					}
					$stories_thumbs .= '<div class="stories_slider stories_'.($c/5).'" id="'.($c/5).'">';
				}
				$stories_thumbs .= '<a class="storie_thumb" href="/fudai/index.php?page=stories&lang='.$lang.'&story_id='.$row['id'].'">
                        <img src="../stories/img/'.$row['id'].'/thumb.png">
                        <p class="thumb_top">' . mb_substr($row['cause'], 0, 64)  . '...</p>
                        <p class="thumb_bot">__stories_title_age__：'.$row['age'].' __stories_title_years__  __stories_item__ : ' . $row['item'] . '    __stories_title_loan__：'.$row['loan'].'元</p>
                    </a>';
				$stories_thumbs = str_replace('__stories_title_age__', $langArr['__stories_title_age__'], $stories_thumbs);
				$stories_thumbs = str_replace('__stories_title_cause__', $langArr['__stories_title_cause__'], $stories_thumbs);
				$stories_thumbs = str_replace('__stories_title_years__', $langArr['__stories_title_years__'], $stories_thumbs);
				$stories_thumbs = str_replace('__stories_title_loan__', $langArr['__stories_title_loan__'], $stories_thumbs);
				$stories_thumbs = str_replace('__stories_item__', $langArr['__stories_item__'], $stories_thumbs);
				$c++;
			}
			$stories_thumbs .= '</div>';
			$f = str_replace('__stories_thumbs__', $stories_thumbs,$f);
		}
		$conn->close();
		break;
	default: $f = file_get_contents("indexTrans.html");

		$str = file_get_contents('../config/settings.conf');
		$arr = unserialize($str);

		if ($arr['barEnabled']) {
			if ($lang == 'en') {
				$barTextStr
					= '<div class="info-bar">'
					. $arr['enBarText'] . '<span class="close-info-bar" style="color: white;position: absolute;top: 34%;right: 20px;font-weight: bold;cursor: pointer;">&nbsp;&nbsp;X</span></div>';
			} else {
				$barTextStr
					= '<div class="info-bar">'
					. $arr['cnBarText'] . '<span class="close-info-bar" style="color: white;position: absolute;top: 34%;right: 20px;font-weight: bold;cursor: pointer;">&nbsp;&nbsp;X</span></div>';
			}
			$f = str_replace('__barText__', $barTextStr, $f);
		}

		if ($arr['graphicalBarEnabled']) {
			if ($lang == 'en') {
				$graphicalBarContent
					= '<div class="graphic-bar">'
					. '<div data-event="time_click_MCL_iphone_promotion" data-toggle="modal" data-target="#iphone6Promotion" class="graphicalBarContentEn"> </div><span class="close-info-bar" >&nbsp;&nbsp;X</span></div>';
			}else{
				$graphicalBarContent
					= '<div class="graphic-bar">'
					. '<div data-event="time_click_MCL_iphone_promotion" data-toggle="modal" data-target="#iphone6Promotion" class="graphicalBarContentCh"> </div><span class="close-info-bar">&nbsp;&nbsp;X</span></div>';

			}
			$f = str_replace('__graphicalBar__', $graphicalBarContent, $f);
			$graphicBarContent = '';
			for($i=0,$size=count($langArr['__iPhonePromo__']);$i<$size;$i++){
				$graphicBarContent  .= '<p>'.$langArr['__iPhonePromo__'][$i].'</p>';
				
			}
			$f = str_replace('__iphonePromo__', $graphicBarContent, $f);
		}

		if ($arr['pause']){

			$f = str_replace('class="loanBtn"', 'class="loanBtn paused"', $f);
			$f = str_replace('__paused__', 'loanoff',$f);
			if ($lang == 'en'){

				$f = str_replace('__pausedText__', '<p style="font-size: 15px;">'.nl2br(rawurldecode($arr['enText'])).'</p>',$f);
				if (isset($arr['enButton'])){
					$f = str_replace('__loanButton__', nl2br(rawurldecode($arr["enButton"])),$f);
				}
			}else{

				$f = str_replace('__pausedText__', '<p style="font-size: 15px;">'.nl2br(rawurldecode($arr['cnText'])).'</p>',$f);
				if (isset($arr['cnButton'])){
					$f = str_replace('__loanButton__', nl2br(rawurldecode($arr["cnButton"])),$f);
				}
			}
		}else{
			$f = str_replace('__paused__', '',$f);
			$f = str_replace('__pausedText__', '',$f);
		}

		$dialogMainText = $arr['cnDialogText'];
		$dialogLeftButton = $arr['cnDialogLeftButton'];
		$dialogRightButton = $arr['cnDialogRightButton'];
		$dialogEnabled = $arr['textDialogEnabled'];

		if ($lang == 'en') {
			$dialogMainText = $arr['enDialogText'];
			$dialogLeftButton = $arr['enDialogLeftButton'];
			$dialogRightButton = $arr['enDialogRightButton'];
		}

		$f = str_replace('__popupInputLabel__', $dialogMainText, $f);
		$f = str_replace('__popupSubmitButtonYes__', $dialogLeftButton, $f);
		$f = str_replace('__popupSubmitButtonNo__', $dialogRightButton, $f);

		break;
}

if ($lang == 'en'){
	$f = str_replace('__engStyleSheet__',"<link rel='stylesheet' href='./assets/css/min/style_en.css' type='text/css' media='all' />",$f);
}else{
	$lang = 'cn';
	$f = str_replace('__engStyleSheet__',"",$f);
}

$f = str_replace('__langCode__',"lang=".$lang, $f);
$f = str_replace('__custom_css__', '',$f);


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
