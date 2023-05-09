<?php
$conn = mysqli_connect('localhost','root','','php_json_api');
$sql = "select * from product ";
$product = mysqli_query($conn,$sql);
$arr = array();
while ($pro=mysqli_fetch_array($product)) {
    $data['id']=$pro['id'];
    $data['name']=$pro['name'];
    $data['mname']=$pro['Mname'];
    $data['price']=$pro['price'];
    array_push($arr,$data);
}
echo json_encode($arr);
?>