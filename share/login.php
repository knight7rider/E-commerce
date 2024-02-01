<?php
session_start();
$_SESSION["login_status"] = false;

$uname=$_POST["uname"]; 
$upass=$_POST["upass"];
$cipher_text = md5($upass);

include_once "connection.php";

$sql_obj=mysqli_query($conn, "select*from user where username='$uname'and password='$cipher_text'");
$no_of_records=mysqli_num_rows($sql_obj);
if($no_of_records==0){
    echo 'invalid credentials';
    die;
}
echo "login success";
$row=mysqli_fetch_assoc($sql_obj);
print_r($row);

$_SESSION["login_status"] = true;
$_SESSION['userid']=$row['userid'];
$_SESSION['username']=$row['username'];
$_SESSION['usertype']=$row['usertype'];
if($row['usertype']=='vender'){
    header("location:../vender/home.php");
}
elseif($row['usertype']=='customer'){
    header("location:../customer/home.php");

}
?>