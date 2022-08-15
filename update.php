<?php include('Con.php');
check();
 ?>

 <?php

 $uname=$_POST['uname'];
 $pass=$_POST['pass'];
 $email=$_SESSION['email'];

$sq="UPDATE UserInfo SET name='$uname', Pass='$pass' where email = '$email'  ";
if ($con->query($sq) === TRUE) {
    $_SESSION['USERNAME']=$uname;
    $_SESSION['Password']=$pass;
    echo "Record updated successfully";
    header("Location: General.php?error=Successfully Updated The details");
                echo "SUCCESS<br><br>";
  } else {
    echo "Error updating record: " . $con->error;
    header("Location: General.php?error=Error $con->error");
                echo "SUCCESS<br><br>";
  }

/*
 
 
*/

 ?>