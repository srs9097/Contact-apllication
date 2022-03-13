<?php
$con = mysqli_connect("localhost","root","MyNewPass","contact");
$count = 1;
$email = $_POST['sEmail'];
$pass = $_POST['sPassword'];
$sec = $_POST['sSecret'];
$sql="INSERT INTO `user_data`(`id`,`user_id`,`password`,`secretkey`) Values('$count','$email','$pass','$sec')";
$count=$count+1;
$rs = mysqli_query($con,$sql);

if($rs){
    echo "contact inserted successfully" ;
    echo $count;
}
?>