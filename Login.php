<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include('Con.php'); ?>
<?php
/*
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
echo "Succes connecting to database";*/
echo "<br><br>";


$email=$_POST['email'];
$pass=$_POST['password'];
$flag=true;

echo "userdata".$email." ".$pass;
 if(strlen($email)===0)
{
    header("Location: Validate.php?error=email is required");
    exit();
}

if(strlen($pass)===0)
{
    header("Location: Validate.php?error=Password is required");
    exit();
}
?>
<script> 
function login1()
{
    alert("CAME REY\n");
}
</script>
<?php
$sql="SELECT * FROM UserInfo WHERE email='$email'";

$_SESSION['U_ID']="0";


$result=mysqli_query($con,$sql);


if($result->num_rows===1)
{
    echo "WENT";
    $row=mysqli_fetch_assoc($result);
    $repass=$row["Pass"];
    echo "REPASS ".$row["Pass"]."<br>";
    $user_name=$row["Name"];
    echo "Name ".$row["Name"]."<br>";
    $user_id=$row["U_id"];
    echo "U_id ".$row["U_id"]."<br>";
    $_SESSION['USERNAME']=$user_name;
    echo $_SESSION['USERNAME']." us name IS";
    $_SESSION['email']=$email;
    $_SESSION['Password']=$pass;
    $_SESSION['U_ID']=$user_id;
    echo "<br> UID  ".$_SESSION['U_ID']." U_ID <br>";
    
    if($repass!==$pass)
    {
        header("Location: Validate.php?error=Passwords dont match");
        exit();
    }
    else
    {
  
  /*      echo "CAMESdsadDS\n";
$z=23;
$sql="SELECT * FROM UserInfo WHERE U_id=23";
$result=mysqli_query($con,$sql);
        echo "CAMESzzDS<br>";
echo $result->num_rows."<br> im srry <br>";
 if($result->nums_rows===1)
 {
    echo "<br>CAMESDS";
 }*/

      //  echo "PASS WORD IS ".$_SESSION['USERNAME'];
      
     //   echo "<script> login1() </script>";
     //
 /*    $a="SELECT * FROM UserInfo";
    $result1=mysqli_query($con,$a);

    echo $result1->num_rows."<br> HEY <br>";*/
  //  echo "CAME\n";
     header("Location: Products1.php");
    }
}
else
{

    header("Location: Validate.php?error=Invalid email");
    exit();
}


?>
<script src="JS.js"></script>

</body>
</html>