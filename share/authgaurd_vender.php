<html>
    <body>
        <script>
           function checklogout(){
           res=confirm("are you asure want to logout?")
          }
       </script>
    </body>

</html>>
<?php
session_start();
include "authgaurd_style.html";
if(!isset($_SESSION["login_status"]))
{
    echo "you skipped the login.....";


    echo "<a href='../share/frontend.html'>signup here....</a>";
    die;
}
if($_SESSION["login_status"]==false)
{
    echo "login failed  ";
    echo "<a href='../share/frontend.html'>  login here....</a>";
    die;
}
if($_SESSION['usertype']!='vender'){
    echo "unauthorised access for this usertype";
    die;
}

$userid = $_SESSION['userid'];
$username=$_SESSION['username'];
$usertype=$_SESSION['usertype'];


echo "<div class='userbanner'>
<div class='userid'>$userid</div>
<div class='username'>$username</div>
<div class='usertype'>$usertype</div>
<div class='logout'><a onclick='checklogout()'>Logout</a></div>
</div>";

?>