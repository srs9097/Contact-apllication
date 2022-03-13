<?php
$con = mysqli_connect("localhost","root","MyNewPass","contact");
$user=$_POST['username'];
$flag=false;
$passowrd=$_POST['password'];
$qry="SELECT `user_id`,`password` FROM `user_data`" ;
$_SESSION['id']= $user;
$rs=mysqli_query($con,$qry);
//echo mysqli_fetch_array($rs);
while($row1=mysqli_fetch_array($rs))
{   
    if($user == $row1["user_id"] && $passowrd == $row1["password"])
    {
        $flag=true;
        
        
    }
}
if($flag){
    header("Location:http://localhost:3000/addcontacts.html");
}
else{
    echo "check user name and password";
}
?>
