<?php

App::uses('File', 'Utility');

class ArticlesShell extends AppShell {

	public $uses = array('Homecredit.Article');
	protected $file = "";
	protected $fileFullPath = "";
	protected $skip = 0;

	public function import() {
		Configure::write('Config.language','zho');
		$this->validateParams();
		$file = fopen($this->fileFullPath, "r");
		if ($file) {
			$counter = 0;
			$dataSource = $this->Article->getDataSource();
			$dataSource->begin();
			try {
				while (($line = fgetcsv($file,10000,";")) !== false) {
					if($counter < intval($this->skip)) {
						$counter++;
						continue;
					}
					// process the line read.
					$this->Article->create();
					if(!$this->Article->save($this->formatArticleData($line))) {
						throw new Exception("Unable to save row ".$counter);
					} else {
						echo $counter." ";
					}
					$counter++;
				}
				$dataSource->commit();
				echo "\n#####################\nAll done\n##########################\n";
			}  catch (Exception $e) {
				echo "\n".$e->getMessage()."\n";die();
				$dataSource->rollback();
			}
			fclose($file);
		} else {
			echo "\nUnable to read file\n";die();
		}
	}

	private function validateParams() {
		if (empty($this->args) || count($this->args)!= 2) {
			echo "\nMissing arguments : filename and number of lines to be skipped\n";
			die();
		}
		$this->file = $this->args[0];
		$this->fileFullPath = ROOT . DS . $this->file;
		if (!file_exists($this->fileFullPath)) {
			echo "\nFile not found\n";
			die();
		}
		$this->skip = $this->args[1];
	}
	
	private function slugifyName($name) {
		return strtolower(trim(preg_replace('~[^\\pL\d]+~u', '-', $name),'-'));
	}
	
	private function getMysqlDate($date) {
		return date('Y-m-d H:i:s',  strtotime($date));
	}
	
	private function formatContent($content) {
		return nl2br($content);
	}
	
	private function getCategory($name) {
		$category = $this->Article->ArticleCategory->find('first',array(
			'conditions' => array(
				'name' => $name
			)
		));
		
		if(!empty($category)) {
			return $category['ArticleCategory']['id'];
		}
		throw new Exception("Category ".$name." not found");
	}
	
	private function getTag($name) {
		$tag = $this->Article->ArticleTag->find('first',array(
			'conditions' => array(
				'name' => $name
			)
		));
		if(empty($tag)) {
			throw new Exception("Tag ".$name." not found");
		}
		return $tag['ArticleTag']['id'];
	}
	
	private function trimWhitespaces($text) {
		return trim($text);
	}

	private function formatArticleData($file) {
		$article = array(
			'Article' => array(
				'name' => $file[3],
				'url' => $this->slugifyName($file[3]),
				'perex' => $this->trimWhitespaces($this->formatContent($file[5])),
				'content' =>  $this->trimWhitespaces($this->formatContent($file[4])),
				'article_category_id' => $this->getCategory($file[0]),
				'chinese_only' => false,
				'published' => $this->getMysqlDate($file[2]),
			),
			'ArticleTag' => array(
				'ArticleTag' => array(
					$this->getTag($file[1])
				)
			)
		);
		return $article;
	}
}
