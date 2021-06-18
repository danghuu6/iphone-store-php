<!DOCTYPE html>
<html>
	<head>
		<meta charset = UTF-8>
		<meta name = "viewport" content = "with=device-width, inital-scale=1.0">
		<title>Đăng ký</title>
		<style>
			h2, p{
				text-align: center;
			}
			h2 {
				color: #660000;
			}
			td {
				width: 150px;
				padding: 5px;
			}
			table {
				padding: 30px;
				color: #660000;
				margin: auto;
				border: 5px solid #660000;
			}
			td p {
				text-align: left;
				color: Red;
			}
		</style>
	</head>
	<body>
<script>
		function test_myform() {
		var ten = document.getElementById("idten").value;
		var mk = document.getElementById("idmk").value;
		var mk2 = document.getElementById("idmk2").value;
		var status = false;
		if (ten == "") {
			document.getElementById("tentb").innerHTML = "Tên đăng nhập không được để trống";
			status = false;
		}
        if (mk == "") {
			document.getElementById("mktb").innerHTML = "Mật khẩu không được để trống";
			status = false;
		}
        else if(mk != mk2){
			document.getElementById("mk2tb").innerHTML = "Nhập lại mật khẩu chưa đúng, vui lòng xem lại.";
            status = false;
		}else{
			document.getElementById("mk2tb").innerHTML = "";
		}
        return status;
    }
</script>
		<h2>Đăng ký tài khoản mới</h2>
		<p>Vui lòng điền đầy đủ thông tin bên dưới để đănng ký tài khoản mới</p>
		<form action = "xuly_dangky.php" method = "POST" enctype="multipart/form-data" name = "formB" onsubmit = "return test_myform()">
			<table>
				<tr>
					<td>Tên đăng nhập</td>
					<td><input type = "text" name = "tendangnhap" ></td>
				</tr>
				<tr>
					<td></td>
					<td><p id = "tentb"></p></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type = "password" name = "matkhau" id = "idmk"></td>
				</tr>
				<tr>
					<td></td>
					<td><p id = "mktb"></p></td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu</td>
					<td><input type = "password" name = "matkhau" id = "idmk2"></td>
				</tr>
				<tr>
					<td></td>
					<td><p id = "mk2tb"></p></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type = "submit" value = "Đăng ký">
						<input type = "reset" value = "Làm lại">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>