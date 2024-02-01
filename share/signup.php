<?php
$uname=$_POST['uname'];
$upass1=$_POST['upass1'];
$upass2=$_POST['upass2'];
$user_type=$_POST['user_type'];
if($upass1!=$upass2){
    echo "passwordm mismatch";
    die;
}
include_once"connection.php";

$cipher_text = md5($upass1);
$status=mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$cipher_text','$user_type')");
if($status){
    echo "signup success!";
}
else{
    echo "signup Failed";
    echo mysqli_error($conn);
} 
?>