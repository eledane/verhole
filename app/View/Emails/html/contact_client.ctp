<?php
/**
 * Email tpl sending to client from leave form
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

						<h1 style="font-family: arial, sans-serif; font-size: 20px"><?php echo $this->StaticText->getStripped('Client contact email - Heading'); ?></h1>

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


