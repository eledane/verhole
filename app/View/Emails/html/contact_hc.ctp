<?php
/**
 * Email tpl sending to homecredit from leave form
 */
?>
<style> a:hover { text-decoration: none; } </style>
<table width="100%" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
		<td bgcolor="#ffffff">

			<table width="600" align="center" border="0" cellpadding="0" cellspacing="0"
				   style="margin:0 auto;text-align: center;">
				<tbody>
				<tr>
					<td align="left">
						<a href="<?php echo Router::url('/', true); ?>">
							<img src="<?php echo Router::url('/img/logo-hc-main.png', true); ?>" width="151" height="91"
								 alt=""/>
						</a>
					</td>
				</tr>
				<tr>
					<td align="left">
						<br/>

						<h1 style="font-family: arial, sans-serif; font-size: 20px"><?php echo $this->StaticText->getStripped('Admin Email - Heading text'); ?> <a href="<?php echo $FooterUrl?>" style="font-family: arial, sans-serif; font-size: 20px"></a><?php echo $FooterUrl?></h1>

						<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;text-align: left;">
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Leave contact form - My full name') ;?>:</td>
								<td><?php echo __(h($name)); ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Leave contact form - My e-mail address'); ?>:</td>
								<td><?php echo __(h($email)); ?></td>
							</tr>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Leave contact form - My phone number'); ?>:</td>
								<td><?php echo __(h($phone)); ?></td>
							</tr>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Leave contact form - Client comment'); ?>:</td>
								<td><?php echo __(h($client_comment)); ?></td>
							</tr>
							<?php
								if(!empty($section)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Admin Email - Section'); ?>:</td>
								<td><?php echo __(h($section)); ?></td>
							</tr>
							<?php
								}
							?>
							<?php
								if(!empty($calculator_type)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Admin Email - Calculator type'); ?>:</td>
								<td><?php echo __(h($calculator_type)); ?></td>
							</tr>
							<?php
								}
							?>
							<?php
								if(!empty($promotion_name)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Admin Email - Promotion name'); ?>:</td>
								<td><?php echo __(h($promotion_name)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($loan_amount)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Calculator - Amount of the loan in VNĐ'); ?>:</td>
								<td><?php echo __(h($loan_amount)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($repayment_length)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Calculator - Length of repayment in months'); ?>:</td>
								<td><?php echo __(h($repayment_length)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($documents)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Calculator - Documents'); ?>:</td>
								<td><?php echo __(h($documents)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($interested_in)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - I’m interested in'); ?>:</td>
								<td><?php echo __(h($interested_in)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($work_income)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - Work income'); ?>:</td>
								<td><?php echo __(h($work_income)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($parttime_income)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - Part-time job income'); ?>:</td>
								<td><?php echo __(h($parttime_income)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($rents)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - House rent'); ?>:</td>
								<td><?php echo __(h($rents)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($food)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - Food'); ?>:</td>
								<td><?php echo __(h($food)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($children_cost)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - Children cost'); ?>:</td>
								<td><?php echo __(h($children_cost)); ?></td>
							</tr>
							<?php
								}
							?>

							<?php
								if(!empty($other_expenses)) {
							?>
							<tr style="font-family: arial, sans-serif">
								<td><?php echo $this->StaticText->getStripped('Can I afford it - Other personal expenses'); ?>:</td>
								<td><?php echo __(h($other_expenses)); ?></td>
							</tr>
							<?php
								}
							?>

						</table>
						<br/><br/><br/>
						<hr style="border: 0;height: 1px; background-color: #ddd; margin: 20px 0 20px 0;">

						<p style="font-family: arial, sans-serif; font-size: 12px; color: #ccc;">
							<a style="color: #ccc" href="<?php echo $FooterUrl;?>"><?php echo $FooterUrl;?></a> |
							<a style="color: #ccc" href="tel:<?php echo $this->StaticText->getStripped('Footer - phone - link'); ?>"><?php echo $this->StaticText->getStripped('Footer - phone - text'); ?></a> |
							<a style="color: #ccc" href="mailto:<?php echo $FooterMail;?>"><?php echo $FooterMail;?></a>
						</p>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>


