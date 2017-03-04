<?php
$tdCss = 'padding: 10px; border: 1px solid #d7d7d7; ';
$headerCss = 'background-color: #f7c8ae; text-align: center; color: #fff; border:none ';
?>
<table cellpadding="0" cellspacing="0" style="width: 600px; margin: auto">
	<tr>
		<td style="<?php echo $tdCss . $headerCss ?>" colspan="2"><b>Thông tin liên hệ từ website</b></td>
	</tr>

	<?php if ($name != '') : ?>
	<tr>
		<td style="<?php echo $tdCss ?>">Họ và tên</td>
		<td style="<?php echo $tdCss ?>"><b><?php echo $name ?></b></td>
	</tr>
	<?php endif; ?>

	<?php if ($email != '') : ?>
	<tr>
		<td style="<?php echo $tdCss ?>">Email</td>
		<td style="<?php echo $tdCss ?>"><b><?php echo $email ?></b></td>
	</tr>
	<?php endif; ?>

	<?php if ($phone != '') : ?>
	<tr>
		<td style="<?php echo $tdCss ?>">Số điện thoại</td>
		<td style="<?php echo $tdCss ?>"><b><?php echo $phone ?></b></td>
	</tr>
	<?php endif; ?>

	<?php if ($subject != '') : ?>
	<tr>
		<td style="<?php echo $tdCss ?>">Tiêu đề</td>
		<td style="<?php echo $tdCss ?>"><b><?php echo $subject ?></b></td>
	</tr>
	<?php endif; ?>

	<?php if ($content != '') : ?>
	<tr>
		<td style="<?php echo $tdCss ?>">Nội dung</td>
		<td style="<?php echo $tdCss ?>"><b><?php echo $content ?></b></td>
	</tr>
	<?php endif; ?>

</table>