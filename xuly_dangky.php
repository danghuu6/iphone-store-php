<?php
	require 'connect.php';
	
	$ten = $_POST['tendangnhap'];
	$mk = $_POST['matkhau'];
	$mk = md5($mk);

	$sql = "INSERT INTO users (tendangnhap, matkhau) VALUES ('$ten', '$mk')";
	if($con -> query($sql)){
		header("location:dang_nhap.php");
		echo "dang ky thanh cong";
	} else{
		echo "Ket noi that bai";
	}
	//Dong ket noi
	$con -> close();
?>