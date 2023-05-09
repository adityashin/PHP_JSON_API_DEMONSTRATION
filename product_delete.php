<?php
$conn = mysqli_connect('localhost','root','','php_json_api');
$id = $_GET['id'];
$sql = "delete from product where id='$id'";
$product = mysqli_query($conn,$sql);
$arr = array();
if($product==true){
$data['msg']="Data Deleted";
$data['status']='success';
array_push($arr,$data);
echo json_encode($arr);
}
?>