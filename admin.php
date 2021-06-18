<?php
	session_start();
	
	if (isset($_SESSION['tendangnhap'])) {
		$ten = $_SESSION['tendangnhap'];
	} else {
		header("location:dang_nhap.php");
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="./css/style_adminn.css" type="text/css" >
        <title>Thêm sản phẩm</title>
        <style>
            body {
                background-image: url("./pic/bg.jpg");
                margin: 0;
                padding: 0;
            }
            h4 {
                font-family: Arial, Helvetica, sans-serif;
                color: red;
            }
        </style>
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
                <li><a href="sua_sp.php">Sửa Sản Phẩm</a></li>
                <li><a href="ds_sp.php">DS sản phẩm</a></li>
                <li><a href="ql_nhanvien.php">QL Nhân viên</a></li>
            </ul>
        </div>

        <div id = "wrap">
            <div id = "content">
                <form action = "xuly_themsp.php" method = "POST" enctype="multipart/form-data">
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
                            <input class = "but" type = "submit" name = "themsp" value = "Thêm sản phẩm"> 
                            <input class = "but" type = "reset" name = "lamlai" value = "Làm lại">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>