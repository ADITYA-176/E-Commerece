<?php
include('Con.php');

check();

$var1=$_POST['prname'];
echo $var1." IS ";
$sq="SELECT * FROM Product WHERE Pname='$var1'";
$res=mysqli_query($con,$sq);
//echo 
echo $res->num_rows."ARE ";
if($res->num_rows!=0)
{
   // echo "CAME REY\n";
    header("Location: Admin.php?error=Assign a Different Name To Product");
}
else 
{
   // echo "Came";
    $sq="SELECT Max(Pro_ID) from Product";
   // echo "Came";
    $res=$con->query($sq);
   // echo "Came";
    $row=mysqli_fetch_array($res);
// echo "Came";
    $Id=$row[0]+1;
    $id1=$Id;
    $var='P'.strval($Id);
    $pir=$_POST['price'];
    //echo $var."DUDE";
   // echo "Came";
   // echo $Id." WHY ";
    //$id1='P'+('0'+$Id);
   // echo $id1." BRO ";
   $sq="INSERT INTO `Product` (`Productname`,`Pro_ID`,`Pro_Price`,`Pname`) VALUES ('$var','$id1','$pir','$var1')";
   if($con->multi_query($sq) === TRUE)
    {
        header("Location: Admin.php?error=Successfully Added The Item");
                echo "SUCCESS<br><br>";
    }
    else
    {
        echo "Error: " . $esql . "<br>" . $con->error;
    }
   
}

?>
