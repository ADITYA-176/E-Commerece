<?php include('Con.php');
check();
 ?>

 <?php

 $uname=$_POST['uname'];
 $pass=$_POST['Pass'];
 echo $uname." ".$pass." ";
 $email=$_SESSION['usermail'];

$sq="UPDATE UserInfo SET name='$uname', Pass='$pass' where email = '$email'  ";
if ($con->query($sq) === TRUE) {
    echo "Record updated successfully";
    header("Location: USER.php?error=Successfully Updated The details");
                echo "SUCCESS<br><br>";
  } else {
    echo "Error updating record: " . $con->error;
    header("Location: General.php?error=Error $con->error");
                echo "SUCCESS<br><br>";
  }

/*
 
 
*/

 ?>