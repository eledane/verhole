<?php

App::uses('SessionHelper', 'View/Helper');

class MediaContactHelper extends SessionHelper {

	public function getLanguage(){
		$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
		if ($language !== 'en') {
			$language = 'zh';
		}

		return $language;
	}

	public function listMediaContacts(){
		$mediaContacts = array(
			array(
				array(
					'name' => 'Bright Wang',
					'tel' => '+86 20 87686510',
					'email' => 'Bright.Wang@homecredit.cn',
					'region' => 'Guangdong/Fujian'
				),
				array(
					'name' => 'Saiken Yu',
					'tel' => ' +86 18670056545',
					'email' => 'Saiken.Yu@homecredit.cn',
					'region' => 'Hunan/Hubei/Henan/Jiangxi'
				),
				array(
					'name' => 'Vera Sun',
					'tel' => ' +86 28 86703061',
					'email' => 'Vera.sun@homecredit.cn',
					'region' => 'Sichuan/Chongqing'
				),
				array(
					'name' => 'Eric Guo',
					'tel' => '+86 10 6463 7942-135',
					'email' => 'Eric.guo@homecredit.cn',
					'region' => 'Beijing/Tianjin'
				),
				array(
					'name' => 'Mirror Wang',
					'tel' => '+86 755 21515960-2057',
					'email' => 'Mirror.Wang@homecredit.cn',
					'region' => 'Tianjin'
				)
			),
			array(
				array(
					'name' => 'Bright Wang 王亮',
					'tel' => '+86 20 87686510',
					'email' => 'Bright.Wang@homecredit.cn',
					'region' => '广东/福建'
				),
				array(
					'name' => 'Saiken Yu 喻晗',
					'tel' => '+86 18670056545',
					'email' => 'Saiken.Yu@homecredit.cn',
					'region' => '湖南/湖北/河南/江西'
				),
				array(
					'name' => 'Vera Sun 孙雪',
					'tel' => '+86 28 86703061',
					'email' => 'Vera.sun@homecredit.cn',
					'region' => '四川/重庆'
				),
				array(
					'name' => 'Eric Guo 郭军辉',
					'tel' => '+86 10 6463 7942-135',
					'email' => 'Eric.guo@homecredit.cn',
					'region' => '天津/北京'
				),
				array(
					'name' => 'Mirror Wang 王静',
					'tel' => '+86 755 21515960-2057',
					'email' => 'Mirror.Wang@homecredit.cn',
					'region' => '天津'
				)
			)
		);

		if ($this->getLanguage() !== 'en') {
			return $mediaContacts[1];
		} else{
			return $mediaContacts[0];
		}
	}

}