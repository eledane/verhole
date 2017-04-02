<?php
$counter = 1;
$more = count($articles) > Configure::read('Article.items_per_page');
foreach($articles as $article) {
	echo $this->element('articlesListRow',array(
								'data' => $article['Article'],
								'page' => $page['Page'],
								'hasMore' => $more,
								'newOffset' => $newOffset
		));
	if($counter >= Configure::read('Article.items_per_page')) {
		break;
	}
	$counter++;
}
if($more){
	echo $this->element('loadMoreArticlesLink',array(
		'categoryId' => $categoryId,
		'offset' => $newOffset
	));
}