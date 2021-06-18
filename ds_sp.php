<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="./css/style_adminn.css" type="text/css" >
        <title>Danh sách sản phẩm</title>
        <style>
            body {
                background-image: url("./pic/bg.jpg");
                margin: 0;
                padding: 0;
			}
			.lay-sp{
				height: auto;
				width: 75%;
				float: right;
			}
			.lay-sp #table{
				width:850px;
				border-collapse:collapse;
				border:1px solid black;
				margin-left: auto;
				margin-right: auto;
			}
			#table input{
				width:auto;
				border :none;
			}
			#table th,td{
				border: 3px solid black;
			}
			#table tr:nth-child(odd){
				background-color: #96b4cf;
			}
			#table tr td a{
				text-decoration: none;
				color: red;
			}
			#table tr th a{
				text-decoration: none;
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
				<li><a href="admin.php">Thêm sản phẩm</a></li>
				<li><a href="sua_sp.php">Sửa Sản Phẩm</a></li>
                <li><a href="ql_nhanvien.php">QL Nhân viên</a></li>
            </ul>
        </div>

        <div class="lay-sp">
            <table id="table">
                <tr>
                    <th>MSSP</th>
                    <th>Tên SP</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ảnh minh họa</th>
                    <th>Ghi chú</th>
                </tr>
                <?php
                    include "xuly_laysp.php";
                    for($i=0;$i<count($arr);$i++){
                        $line="<tr>
                                <td>".$arr[$i]["mssp"]."</td>
                                <td>".$arr[$i]["tensp"]."</td>
                                <td>".$arr[$i]["gia"]."</td>
                                <td>".$arr[$i]["soluong"]."</td>
                                <th><img src='./pic/".$arr[$i]["hinh"]."' width='100px' height='100px'></th>
                                <td>
                                <button type='submit' name='s_submit'><a href='xoa_sp.php?id=".$arr[$i]["mssp"]."'>Xóa</a></button></td>
                                    </tr>";
                        echo($line);
                    } 
                ?>
            </table>
        </div>
    </body>
</html>