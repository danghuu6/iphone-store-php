<?php
	session_start();
	require 'connect.php';
	//Lay du lieu
	$ten = $_POST['tendangnhap'];
	$mk = md5($_POST['matkhau']);
	
	
	$_SESSION['tendangnhap'] = $ten;	
	//Viet CSDL	
	$sql = "SELECT * FROM users WHERE tendangnhap = '$ten' and matkhau = '$mk'";
	//Truy van
	
	$result = mysqli_query($con,$sql);
	if (mysqli_num_rows($result) > 0){
		$_SESSION['tendangnhap'] = $ten;	
		header("location:hang_hoa.php");
	} else if($ten == 'admin' && $mk == md5('12345')){
		header("location:admin.php");
	}
	else{
		header("location:dang_nhap.php");
	}

    $row = $result -> fetch_assoc();

	//Dong ket noi
	$con -> close();
?>