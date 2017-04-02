<?php
if(!empty($pageData['modulesData']['faq_detail'])){
	echo $this->Element('faq-detail');
} else {
	//echo $this->Element('faq-list');
	echo $this->Element('Faq/faq-sections');
}
echo $this->Element('info');
?>
