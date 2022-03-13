<?php 

$con = mysqli_connect("localhost","root","MyNewPass","contact");
$user=$_GET['userid'];
$qry="SELECT `user_id`,`password` FROM `user_data`";
$flag=false;
$rs=mysqli_query($con,$qry);
while($row1=mysqli_fetch_array($rs))
{   
    if($user == $row1["user_id"])
    {
        $flag=true;
        $passowrd=$row1["password"];        
    }
}
if($flag){
echo "your password is:";
echo $passowrd;
}
else{
    echo "check your user name/Id";
}
?>