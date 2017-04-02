<?php
if(!empty($promotions)) {

	foreach($promotions as $promo) {
		?>
		<div>
			<?php
			$img = $this->Media->getImagePathByName($promo['Promotion']['moduleMedia'],'background');
			$imgThumb = $this->Media->getThumb($this->Media->getImagePathByName($promo['Promotion']['moduleMedia'],'background'),20);
			?>
			<img src="/<?php echo $img; ?>">
			<img src="/<?php echo $imgThumb; ?>">
			<h3><?php echo $promo['Promotion']['title']; ?></h3>
			<h4><?php echo $promo['Promotion']['subtitle']; ?></h4>
			<?php echo $promo['Promotion']['description']; ?>
			<br>
			<?php echo $promo['Product']['name']; ?>
			<br>
			<?php echo $this->CurrencyNumber->formattedPrice($promo['Product']['price']); ?>
		</div>
		<?php
	}
}