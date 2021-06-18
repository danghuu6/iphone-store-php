<?php
    require 'connect.php';
    $sql='select * from hanghoa';
    $arr=array();
    $result=$con->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("hinh"=>$row["hinh"],"ten"=>$row["tenhh"],"gia"=>$row["gia"],"nhom"=>$row["manhom"]);
        array_push($arr,$temp);
    }
     $con->close();

     $ip12='ip12';
     $ip11='ip11';
     $lt01='lap01';
?>