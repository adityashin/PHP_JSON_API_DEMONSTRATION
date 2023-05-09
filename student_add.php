<?php
include('config.php');
$name = $_POST['name'];
$class = $_POST['class'];
$marks = $_POST['marks'];
$sql = "insert into student(name,class,marks) values('$name','$class','$marks')";
$student = mysqli_query($conn,$sql);
if($student==true){
    $data['msg']='Student Added';
    $data['status']='Success';
    
}
?>