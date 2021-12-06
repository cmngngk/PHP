<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
	<form method="post" action="process.php">
	<div class="container">
		<div class="header">
			<h1>Đăng ký nhận người yêu miễn phí</h1>
			<p class="desc">Vui lòng điền đúng thông tin để được phát người yêu!</p>
		</div>

		<div class="main">
		
			<div class="item">
				<label>Học Và Tên:</label>
				<input type="text" name="ten">
			</div>
			<div class="item">
				<label">Giới Tính:</label>
				<div class="gender">
				    <input type="radio" name="gioi_tinh" id="nam" value="Nam">
					<label>Nam</label>
					<span class="checkmark"></span>
				</div>
				<div class="gender">
				    <input type="radio" name="gioi_tinh" id="nu" value="Nữ">
				    <label>Nữ</label>
				    <span class="checkmark"></span>
				</div>
				<div class="gender">
				    <input type="radio" name="gioi_tinh" id="buedue" value="buedue">
				    <label>Buê Đuê</label>
				    <span class="checkmark"></span>
			    </div>
			</div>
			<div class="item">
				
				<label>Email:</label>
				<input type="Email" name="email">
			</div>
			<div class="item">
				<label>Mật Khẩu:</label>
				<input type="password" name="mat_khau">
			</div>
			<div class="item">
				<label>Ngày Sinh:</label>
				<input type="date" name="ngay_sinh">
			</div>
			<div class="item">
				<label>Địa Chỉ:</label>
				<input type="text" name="dia_chi">
			</div>
			<div class="item">
				<label>Sở Thích:</label>
				<input type="text" name="so_thich">
			</div>
			
	    
	    </div>
	    <div class="button">
			<button>Đăng Ký</button>
		</div>
	</div>
	</form>
</body>
</html>