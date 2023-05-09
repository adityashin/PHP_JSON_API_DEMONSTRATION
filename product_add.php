<?php
$conn = mysqli_connect('localhost','root','','php_json_api');
$name = $_POST['name'];
$Mname = $_POST['mname'];
$price = $_POST['price'];
$sql = "insert into product(name,Mname,price) values('$name','$Mname','$price')";
$arr = array();
$product = mysqli_query($conn,$sql);
if($product==true){
    $data['msg']='Data Added';
    $data['status']='Success';
    array_push($arr,$data);
    echo json_encode($arr);
}else{
    $data['msg']='Data Not Submitted';
    $data['status']='Fail';
    array_push($arr,$data);
    echo json_encode($arr);
}

?>