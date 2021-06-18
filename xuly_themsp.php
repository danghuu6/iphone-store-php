<?php
	require 'connect.php';
	$mshh = $_POST['mshh'];
	$tenhh = $_POST['tenhh'];
	$gia = $_POST['giahh'];
	$soluong = $_POST['soluonghang'];
	$manhom = $_POST['manhom'];
	$file = $_FILES['hinh'];
	$file_name = $file['name'];
	move_uploaded_file($file['tmp_name'],'./pic/'.$file_name);
	$mota = $_POST['mota'];

	$sql = "INSERT INTO hanghoa VALUES ('$mshh', '$tenhh', '$gia', '$soluong', '$manhom', '$file_name','$mota')";
	if($con -> query($sql)){
		header("location:them_sp.php");
	} else{
		echo "Ket noi that bai";
	}
	
	//Dong ket noi
	$con -> close();
?>