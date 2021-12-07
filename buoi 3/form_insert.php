<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/form_insert.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<form method="post" action="process_insert.php">
		<div class="container">
			<div class="header">
				<h1>Đăng ký để trở thành con sen của mình ;-;</h1>
				<p class="desc">Vui lòng điền thông tin nghiêm túc, không cợt nhả!!</p>
			</div>

			<div class="main">		
				<div class="item">
					<label>Học Và Tên:</label>
					<input type="text" name="ten" required>
				</div>
				<div class="item">
					<label">Giới Tính:</label>
					<div class="gender">
					    <input type="radio" name="gioi_tinh" id="nam" value="nam">
						<label>Nam</label>
						<span class="checkmark"></span>
					</div>
					<div class="gender">
					    <input type="radio" name="gioi_tinh" id="nu" value="nu">
					    <label>Nữ</label>
					    <span class="checkmark"></span>
					</div>
					<div class="gender">
					    <input type="radio" name="gioi_tinh" id="bede" value="bede">
					    <label>Bê Đê</label>
					    <span class="checkmark"></span>
				    </div>
				</div>
				<div class="item">
					<label>Ngày Sinh:</label>
					<input type="date" name="ngay_sinh">
				</div>
				<div class="item">
					<label>Mô tả bản thân:</label>
					<textarea rows="1" name="mo_ta_ban_than"></textarea>
				</div>
				<div class="item">
					<label>Link ảnh:</label>
					<input type="text" name="anh">
	    		</div>
	    	</div>
	    	<div class="button">
				<button type="submit">Đăng ký</button>
			</div>
		</div>			
	</form>
</body>
</html>