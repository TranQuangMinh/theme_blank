<?php
	$headersite = 'background: #d9467a;color: #fff;padding: 10px 15px;font-size: 20px;';
	$table = 'width: 100%; text-align: left';
	$td = 'padding: 6px 12px; border: 1px solid #efefef';
?>
<div style="max-width: 800px;">
	<div style="<?php echo $headersite ?>">Thông tin liên hệ từ khách hàng</div>
	<table style="<?php echo $table ?>" cellpadding="0" cellspacing="0">
		<tr>
			<th style="<?php echo $td ?>" >Họ tên</th>
			<td style="<?php echo $td ?>" ><?php echo $post['name'] ?></td>
		</tr>
		<tr>
			<th style="<?php echo $td ?>" >Số điện thoại</th>
			<td style="<?php echo $td ?>" ><?php echo $post['phone'] ?></td>
		</tr>
		<tr>
			<th style="<?php echo $td ?>" >Email</th>
			<td style="<?php echo $td ?>" ><?php echo $post['email'] ?></td>
		</tr>
		<tr>
			<th style="<?php echo $td ?>" >Tin nhắn</th>
			<td style="<?php echo $td ?>" ><?php echo $post['content'] ?></td>
		</tr>
		<tr>
			<th style="<?php echo $td ?>" >Dịch vụ</th>
			<td style="<?php echo $td ?>" ><?php echo $post['service'] ?></td>
		</tr>
		<tr>
			<th style="<?php echo $td ?>" >Ngày giờ</th>
			<td style="<?php echo $td ?>" ><?php echo $post['date'] ?></td>
		</tr>
	</table>
</div>