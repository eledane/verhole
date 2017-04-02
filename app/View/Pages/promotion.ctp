<?php



if(!empty($pageData['modulesData']['promotion'])){
//     echo '<!--';var_dump($pageData);echo '-->';
	if($pageData['modulesData']['promotion']['Promotion']['winter_promotion'] === true) {
		echo $this->Element('promotion-winter');
	} else if ($pageData['modulesData']['promotion']['Promotion']['url'] == '1607__') {
        echo $this->Element('../Pages/1607__');
	} else if ($pageData['modulesData']['promotion']['Promotion']['url'] == '1607') {
        echo $this->Element('../Pages/1607');
	} else if ($pageData['modulesData']['promotion']['Promotion']['url'] == 'onepercent__') {
        echo $this->Element('../Pages/onepercent__');
    } else if ($pageData['modulesData']['promotion']['Promotion']['url'] == 'onepercent') {
        echo $this->Element('../Pages/onepercent');
	} else {
		echo $this->Element('promotion-detail');
	}
} else {
	echo $this->Element('error');
}
