<?php
	session_start();
	if(isset($_POST['update'])) {
		$mshh = $_POST['mshh'];
        $tenhh = $_POST['tenhh'];
        $gia = $_POST['giahh'];
        $soluong = $_POST['soluonghang'];
        $manhom = $_POST['manhom'];
        $file = $_FILES['hinh'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'],'./pic/'.$file_name);
        $mota = $_POST['mota'];

		require 'connect.php';
		$sql = "UPDATE hanghoa SET tenhh = '$tenhh', motahh = '$mota', gia = '$gia', hinh = '$file_name' WHERE mshh = '$mshh'";
		$con -> query($sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "with=device-width, inital-scale=1.0">
	<title>Sửa sản phẩm</title>
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
			<li><a href="ds_sp.php">DS sản phẩm</a></li>
			<li><a href="ql_nhanvien.php">QL Nhân viên</a></li>
        </ul>
    </div>
	<div id = "wrap">
	<div id = "title">
	    <h2>Sửa sản phẩm</h2>
	</div>
		<p>Vui lòng điền đầy đủ thông tin bên dưới để sửa sản phẩm</p><br>
	<div id = "content">
		<form method = "POST" enctype="multipart/form-data">
			<table>
            <tr>
					<td>Mã hàng hóa</td>
					<td><input type="text" name="mshh"></td>
				</tr>
				<tr>
					<td>Tên hàng hóa</td>
					<td><input type = "text" name ="tenhh"></td>
				</tr>
				<tr>
					<td>Giá hàng hóa</td>
					<td><input type = "text" name = "giahh"> (.000 VNĐ)</td>
				</tr>
				<tr>
					<td>Số lượng hàng hóa</td>
					<td><input type="text" name="soluonghang"></td>
				</tr>
				<tr>
					<td>Mã nhóm</td>
					<td><input type="text" name="manhom"></td>
				</tr>
				<tr>
					<td>Hình sản phẩm</td>
					<td><input type = "file" name = "hinh"></td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><textarea name = "mota" rows = "5" cols = "40"></textarea></td>
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
