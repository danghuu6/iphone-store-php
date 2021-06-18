<?php
	session_start();
	if (isset($_SESSION['tendangnhap'])) {
		$ten = $_SESSION['tendangnhap'];
	} else {
		header("location:dang_nhap.php");
	}
	//Tao ket noi
	require 'connect.php';
	//Viet CSDL
	$sql = "SELECT * FROM users WHERE tendangnhap = '$ten'";
	//Truy van
	$result = $con -> query($sql);
	//Xu ly ket qua
	$row = $result -> fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="./css/style_index.css" type="text/css" >
        <title>Shop bán hàng đa cấp xuyên quốc gia</title>
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
			.table{
				width: 300px;
				height: 100%;
				margin-top: 10px;
				margin-left: auto;
				margin-right: auto;
			}
			.tr{
				width: 300px;
				height: 100%;
				text-align: center;
				color: red;
			}
			.td{
				border: 2px solid #D3DC1F;
			}

        </style>
    </head>
    <body>
        <div id="frame-top">
            <div id="logo">
                <a href="index.php">
                    <img src="./pic/logoip.png" alt="">
                </a>
            </div>
            <div id="A">
                <div id="B">
                   
                </div>
                <div id="C">
						<b>Xin chao, <?php echo $row['tendangnhap']?>!</b>
						<a href="dang_xuat.php">Đăng xuất</a>
                </div>
            </div>
        </div>
        <div id="frame-menu">
            <div id="content-menu">
                <a href="index.php">
				<div class="slide-text"><marquee scrollamount="5"; scrolldelay="120";>Cảm ơn bạn đã xem ghé thăm shop</marquee></div>
                </a>
            </div>
        </div>
        <table class="table">
                    <tr class="tr">
                    <?php
                       require 'nhom_sp.php';
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$ip12){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
														<td> 
															<img src='./pic/".$arr[$i]["hinh"]."' width='300px' height='300px'>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' >Mua hàng ngay</button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
        </table>
        <table class ="table">
                    <tr class="tr">
                    <?php
                       require 'nhom_sp.php';
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$ip11){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
														<td> 
															<img src='./pic/".$arr[$i]["hinh"]."' width='300px' height='300px'>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' >Mua hàng ngay</button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
        </table>
        <table class ="table">
                    <tr class="tr">
                    <?php
                       require 'nhom_sp.php';
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$lt01){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
														<td> 
															<img src='./pic/".$arr[$i]["hinh"]."' width='300px' height='300px'>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' >Mua hàng ngay</button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
        </table> 
    </body>
</html>