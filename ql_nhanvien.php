
<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "with=device-width, inital-scale=1.0">
	<title>Quản lý nhân viên</title>
	<link rel = "stylesheet" href = "./css/style_adminn.css">
</head>
<body>
    <div id="frame-top">
        <div id="logo">
            <a href="#">
                <img src="./pic/logoip.png" alt="">
            </a>
        </div>
        <div id="A">
            <p>QUẢN LÝ CỬA HÀNG</p>
        </div>
    </div>
    <div id="frame-menu">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="admin.php">Thêm Sản Phẩm</a></li>
            <li><a href="sua_sp.php">Sửa Sản Phẩm</a></li>
			<li><a href="ds_sp.php">DS sản phẩm</a></li>
			
        </ul>
    </div>
	<div id = "wrap">
	<div id = "title">
	    <h2>Quản lý nhân viên</h2>
	</div>
		<p>Vui lòng điền đầy đủ thông tin bên dưới để sửa sản phẩm</p><br>
	<div id = "content">
		<form method = "POST" enctype="multipart/form-data" action="xuly_qlnv.php">
			<table>
            <tr>
					<td>Mã số nhân viên</td>
					<td><input type="text" name="msnv"></td>
				</tr>
				<tr>
					<td>Họ tên nhân viên</td>
					<td><input type = "text" name ="hotennv"></td>
				</tr>
				
				<tr>
					<td>Chức vụ</td>
					<td><input type="text" name="chucvu"></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="diachi"></td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input type="text" name="sdt"><br></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input class = "but" type = "submit" name = "update" value = "Cập nhật"> 
					<input class = "but" type = "reset" name = "lamlai" value = "Làm lại">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id = "footer">
	<div>
	</div>
</body>
</html>
