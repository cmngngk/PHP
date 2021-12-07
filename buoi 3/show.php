<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/show.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
	$ma = $_GET['ma'];
	$ket_noi = mysqli_connect('localhost','root','','buoi3_crud');
	mysqli_set_charset($ket_noi,'utf8');

	$sql = "select * from formdkingiu where ma = $ma";
	$ket_qua = mysqli_query($ket_noi,$sql);
	$bai_dki = mysqli_fetch_array($ket_qua);
	?>
	
	<div class="container">
		<div class="header">
			<h1>Infor của con sen thứ <?php echo $bai_dki['ma'] ?></h1>
		</div>
		<div class="main">
			<div class="image">
				<img src="<?php echo $bai_dki['anh'] ?>">
			</div>
			<div class="content">
				<p>
					<span class="infor">Họ tên:</span>  
					<?php echo $bai_dki['ten'] ?>
				</p>
				<p>
					<span class="infor">Giới tính:</span>  
					<?php echo $bai_dki['gioi_tinh'] ?>
				</p>
				<p>
					<span class="infor">Ngày sinh:</span>  
					<?php echo $bai_dki['ngay_sinh'] ?>
				</p>
				<p>
					<span class="infor">Mô tả bản thân:</span>
					<br>  
					<?php echo nl2br($bai_dki['mo_ta_ban_than']) ?>
				</p>
			</div>
				

		</div>
	</div>
</body>
</html>