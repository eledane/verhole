<div class="load-more-link">
<?php
echo $this->Js->link(
		$this->StaticText->getStripped('Load more articles'), $this->Html->getAbsoluteLangLink('/getArticles/' . $categoryId . '/' . $offset), array(
	'class' => 'more load-a',
	'buffer' => false,
	'success' => 'appendData(' . $categoryId . ',data);'
		)
);
?>
</div>