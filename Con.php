
<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="UserInfo";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("Connect Failed due to ".mysqli_connect_error()); 
}
echo "Succes connecting to database";
?>


<?php
    //echo 
?>