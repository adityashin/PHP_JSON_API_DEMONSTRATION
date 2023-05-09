<?php
$conn = mysqli_connect('localhost','root','','php_json_api');
$id = $_GET['id'];
$name = $_POST['name'];
$mname = $_POST['mname'];
$price = $_POST['price'];
$sql = "update product set name='$name',Mname='$mname',price ='$price' where id='$id'";
$product = mysqli_query($conn,$sql);
$arr = array();
if($product==true){
    $data['msg']='Data Updated';
    $data['status']='Success';
    array_push($arr,$data);
    echo json_encode($arr);
}else{
    $data['msg']='Data NOt Updated';
    $data['status']='Un-Success';
    array_push($arr,$data);
    echo json_encode($arr);

}
?>