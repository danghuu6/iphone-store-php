<?php
    require 'connect.php';
    $sql='select * from hanghoa';
    $arr=array();
    $result=$con->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("mssp"=>$row["mshh"],"tensp"=>$row["tenhh"],"gia"=>$row["gia"],"soluong"=>$row["soluonghang"],"hinh"=>$row["hinh"]);
        array_push($arr,$temp);
    }
     $con->close();
?>