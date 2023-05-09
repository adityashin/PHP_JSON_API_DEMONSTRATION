<?php
$conn = mysqli_connect('localhost','root','','php_json_api');
$id =$_GET['id'];
$sql = "select * from product where id='$id'";
$product = mysqli_query($conn,$sql);
$pro = mysqli_fetch_all($product);
$arr = array();

$data ['data']=$pro;
array_push($arr,$data);
echo json_encode($arr);


?>