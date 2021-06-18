<?php
	session_start();
	unset($_SESSION['tendangnhap']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name = "viewport" content = "with=device-width, inital-scale=1.0">
		<title>Đăng xuất</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		#wrap {
			width: 700px;
			margin: auto;
			text-align: center;
		}
		#content {
			margin: 50px;
			padding: 10px;
		}
		h3 {
			color: #660000;
		}
		a {
			background-color: #660000;
			color: White;
			border: 1px solid;
			text-decoration: none;
			padding: 5px;
		}
	</style>
	</head>
	<body>
	<div id = "wrap">
	<div id = "content">
		<h3>Bạn đã đăng xuất</h3><br>
		</h4>Bấm vào <a href = "dang_nhap.php">ĐĂNG NHẬP</a> để đăng nhập lại. Hoặc về <a href = "index.php">TRANG CHỦ</a>. Cảm ơn!</h4>
	</div>
		<img src = "./pic/thankyou.gif" alt = "thank you">
	</div>
	</body>
</html>