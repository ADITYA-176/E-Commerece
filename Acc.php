<?php

include('Con.php');
check();

/*
echo "THANK YOU";
echo $_POST['done'];
echo $_POST['P1'];*/

/*
echo isset($_POST['done'])."  ARECSDC ".$_POST['done'] ."SDA ";
$_POST['done']=null;
if(isset($_POST['done']))
{
    echo "CAME\n";
}
echo isset($_POST['done'])." ARE ";*/





if(isset($_POST['done']))
{
  echo $_POST['P1']." ".$_POST['P2']." ".$_POST['P3']." ".$_POST['P4']." ";
  function fun($c)
{
    $d=strval($c);
 //   echo "<br> THE VAL IS ".$d."<br>";
    for($i1 =0;$i1<strlen($d);$i1++)
    {
   //     echo "<br> CHAR is ".$d[$i1]."<br>";
        if(!($d[$i1]>='0'&&$d[$i1]<='9'))
        {
            return 1;
        } 
    }
    return 0;
}

  echo "CAME";
    $ch =array('1','2','3','4','5','6','7','8','9',"10","11","12","13","14","15","16","17","18");
    $indx=0;
    $s1="SELECT * FROM Product";
    $r1=mysqli_query($con,$s1);
    $size=$r1->num_rows;
    echo " SIZE IS ".$size."<br>";
    for($i=0;$i<$size;$i=$i+1)
    {
        $indx='P';
        $indx2=$ch[$i];
        $indx1=$indx.$indx2;
        echo " VAR IS ".$indx1."<br>";
        $vari=$_POST[$indx1];
        $ele=fun($vari);
        echo $vari."Hey <br>";
        if($_POST[$vari]<0||$ele===1)
        {
            if($i<6)
            {
                header("Location: Products1.php?error=Invalid Quantity");
            }
            else if($i<12)
            {
                header("Location: Products2.php?error=Invalid Quantity");
            }
            else 
            {
             //   echo "WHY BRO ".
                header("Location: Products3.php?error=Invalid Quantity");
            }
        }
      //  $indx=$indx+1;
    }

   // updateTrans();
   $a="SELECT * FROM Rel";
    $result1=mysqli_query($con,$a);
    $Trs=0;
    $id=0;
    if($result1->num_rows==0)
    {
  //      echo "CASSDFSDFASFDSAFSDFFSDA";
        $Trs=1;
    }
    else 
    {
        $sq="SELECT MAX(Trans_Num) FROM Rel";
        $re=$con->query($sq);
        $row = mysqli_fetch_array($re);
     //   echo $row['MAX(Trans_Num)']." WILL BE<br>";
        $Trs=($row['MAX(Trans_Num)'])+1;
   //     echo $Trs."SFDSFDF";
      //  $Trs+=1;
    }
  //  echo " ID IS ".$id." TRS IS ".$Trs;
//   echo $_SESSION['USERNAME']." PZ<br>" ;
  //echo $_SESSION['email']." PZ<br>" ;
  ///echo $_SESSION['Password']." PZ<br>" ;
  //echo $_SESSION['U_ID']." PS <br>";
        for($i=0;$i<$size;$i++)
        {
            $indx='P';
            $indx2=$ch[$i];
            $indx1=$indx.$indx2;
            $var=$_POST[$indx1];
            echo $var."<br> AIS ";

            if($var>0)
            {
               $v1=$_SESSION['U_ID'];
               echo "EHY ";
        //       echo " PLZ ".$v1;
          //     echo $v1." ".$indx1." ".$var." ".$Trs;
              
               $sq="INSERT INTO `Rel` (`U_ID`,`Pro_ID`,`Pro_Count`,`Trans_Num`) VALUES ('$v1','$indx1','$var','$Trs')";
                if($con->multi_query($sq) === TRUE)
                {
                    echo "SUCCESS<br><br>";
                }
                else
                {
                    echo "Error: " . $esql . "<br>" . $con->error;
                }
              //  $_POST[$indx1]=0;
                //$Trs+=1;
            }
        }

 //   $_POST['done']=NULL;

    }

header("Location: MyAcc.php");


?>
