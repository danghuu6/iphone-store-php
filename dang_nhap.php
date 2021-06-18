<!DOCTYPE html>
<html>
	<head>
		<meta charset = UTF-8>
		<title>Đăng nhập</title>
		<link rel = "stylesheet" type = "text/css" href = "./css/style_dangnhap.css" media = "screen" />
	</head>
	<body>
	<div id = "wrap">
		<div id = "title">
			<h3>Vui lòng đăng nhập vào tài khoản của bạn</h3><br>
			<h4>Hoặc <a href = "dang_ky.php">đăng ký</a></h4><br><br>
		</div>
		<div id = "content">
			<form name = "formA" action = "xuly_dangnhap.php" method = "POST" onsubmit = "return test_login()">
				<table>
					<tr>
						<th>Tên đăng nhập:</th>
						<td><input type = "text" name = "tendangnhap" id = "idten"><br>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<p id = "tentb" style = "color:Red"></b>
						</td>
					</tr>
					<tr>
						<th>Mật khẩu:</th>
						<td><input type = "password" name = "matkhau" id = "idmk"><br>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<p id = "mktb" style = "color:Red"></p>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input class = "but" type = "reset" value = "Xóa">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class = "but" type = "submit" value = "Đăng nhập"></td>
					</tr>
			</table>
		</form>
		</div>
	</div>
	<script>
		function test_login() {
			var ten = document.getElementById("idten").value;
			var mk = document.getElementById("idmk").value;
			var status = true;
			if (ten == "") {
				document.getElementById("tentb").innerHTML = "Tên không được bỏ trống";
				status = false;
			} else {
				document.getElementById("tentb").innerHTML = "";
				status = true;
			}
			if (mk == "") {
				document.getElementById("mktb").innerHTML = "Mật khẩu không được bỏ trống";
				status = false;
			} else {
				document.getElementById("mktb").innerHTML = "";
				status = true;
			}
			return status;
		}
	</script>
	</body>
</html>