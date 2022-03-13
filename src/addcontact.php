<?php

$con = mysqli_connect("localhost","root","MyNewPass","contact");
if(mysqli_connect_errno()){
    echo "Failed to connect to mysql:".mysqli_connect_errno();
}
$name = $_POST['cName'];
$email = $_POST['cEmail'];
$num = $_POST['cNum'];
$id=12345;
$sql="INSERT INTO `contact_data`(`user_id`,`name`,`number`,`email`) Values('$id','$name','$num','$email')";
$rs = mysqli_query($con,$sql);
if($rs){
    echo "contact inserted successfully" ;
}


?>