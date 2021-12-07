<?php 
	$ket_noi = mysqli_connect('localhost','root','','buoi3_crud');
	mysqli_set_charset($ket_noi,'utf8');
	$sql = "select * from formdkingiu";
	$ket_qua = mysqli_query($ket_noi,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container"> 	
		<div class="register">
			<a href="form_insert.php"> Ấn vào đây để đăng ký làm con sen của mình ;-; </a>
		</div>
		
		<div class="main">
			<p class="header">
				Danh sách con sen tương lai
			</p>
			<div class="main-container">											
				<?php foreach ($ket_qua as $tung_bai_dki) { ?>
				<a href="show.php?ma=<?php echo $tung_bai_dki['ma'] ?>">
				<div class="item">	
					<div class="avatar">
						<img src="<?php echo $tung_bai_dki['anh'] ?>"> 
					</div>
					<div class="content">
						<div class="name">
							
							<?php echo $tung_bai_dki['ten'] ?> 
						</div>
						
						<div class="desc">
							Giới tính: 
							<?php echo $tung_bai_dki['gioi_tinh'] ?>
                       		<br>
                       		Ngày sinh: 
							<?php echo $tung_bai_dki['ngay_sinh'] ?>
                       		<br>
							Mô tả bản thân:
							<?php echo $tung_bai_dki['mo_ta_ban_than']?>
						</div>
					</div>
				</div>
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>