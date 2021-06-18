<?php
    session_start();
	require 'connect.php';
	$msnv = $_POST['msnv'];
	$hotennv = $_POST['hotennv'];
	$chucvu = $_POST['chucvu'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];

	$sql = "INSERT INTO nhanvien (msnv, hotennv, chucvu, diachi, sodienthoai) VALUES ('$msnv','$hotennv','$chucvu','$diachi','$sdt')";
	if($con -> query($sql)){
		header("location:ql_nhanvien.php");
	} else{
		echo "Ket noi that bai";
	}
	
	//Dong ket noi
	$con -> close();
?>