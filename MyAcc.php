<?php include('Con.php');
 ?>
<?php


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


if(isset($_POST['done']))
{
    $ch =array('1','2','3','4','5','6','7','8','9',"10","11","12","13","14","15","16","17","18");
    $indx=0;
    $s1="SELECT * FROM Product";
    $r1=mysqli_query($con,$s1);
    $size=$r1->num_rows;
    echo " SIZE IS ".$size."<br>";
 /*   for($i=0;$i<$size;$i=$i+1)
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
                echo "WHY BRO ".
                header("Location: Products3.php?error=Invalid Quantity");
            }
        }
      //  $indx=$indx+1;
    }

   // updateTrans();
  /* $a="SELECT * FROM Rel";
    $result1=mysqli_query($con,$a);
    $Trs=0;
    $id=0;
    if($result1->num_rows==0)
    {
        $Trs=1;
    }*/
 /*   else 
    {
        $sq="SELECT MAX(Trans_Num) FROM Rel";
        $re=mysqli_query($con,$sq);
        $Trs=$row["Trans_Num"];
        $Trs+=1;
    }*/
       /* for($i=0;$i<$size;$i++)
        {
            $indx='P';
            $indx2=$ch[$i];
            $indx1=$indx.$indx2;
            $var=$_POST[$indx1];
            if($_POST[$var]>0)
            {
                $sq="INSERT INTO Rel ('U_id','Pro_ID','Pro_Count','Trans_Num') VALUES ('$_SESSION['U_ID]','$var','$_POST[$var]','$Trs')";
                $rs=mysqli_query($con,$sq);
                if($con->multi_query($esql) === TRUE)
                {
                    echo "SUCCESS<br><br>";
                }
                else
                {
                    echo "Error: " . $esql . "<br>" . $con->error;
                }
                $Trs+=1;
            }
        }*/
    
}
 /*   if($_SESSION['U_ID']==="0")
    {
        header("Location: Validate.php?error=login is required");
        exit();
    }
    else
    {
        echo "CAME<br>";
    }
    if(isset($_POST['done']))
    {
        // session vearibales contains count of each variable while a customer buys a product.
        echo "NICE BUDDY"."<br>okay";
        $_SESSION["one"]=$_POST['1'];
        $_SESSION["two"]=$_POST['2'];
        $_SESSION["three"]=$_POST['3'];
        $_SESSION["four"]=$_POST['4'];
        $_SESSION["five"]=$_POST['5'];
        $_SESSION["six"]=$_POST['6'];
        echo $_SESSION["one"]." <br>";
        echo $_SESSION["two"]."<br>";
        echo $_SESSION["three"]."<br>";
        echo $_SESSION["four"]."<br>";
        echo $_SESSION["five"]."<br>";
        echo $_SESSION["six"]."<br>";
        // need transaction id intitially

        $sql="SELECT * FROM Rel";
        $result=$mysqli->query($sql);
        $total_rows = $result->num_rows;
        echo "TOTAL ROWS IN REL ARE ".$total_rows."<br>";


      //  $esql="INSERT INTO `UserInfo` (`Name`, `email`,`Pass`) VALUES ('$sname', '$smail', '$spass');"

        // THIS IS FRO TRANSACTION NUM.
        $transnum=1;
        if($total_rows>0)
        {
            $sql1="SELECT MAX(Trans_Num) FROM Rel";
            $result1=$mysqli->query($sql1);
            $row=mysqli_fetch_assoc($result1);
            $transid=$row['MAX(Trans_Num)'];
            $transnum=$transid+1;
        }
        echo "TRANS ID IS ".$transnum."<br>";
        if($_SESSION["one"])
        {
            echo "THANKS YOU<br>";
        }
        if($_SESSION["one"])
        {
            $U_ID=$_SESSION['U_ID'];
            $P_ID=1;
            $cnt=$_SESSION["one"];
            echo "U_ID IS".$U_ID." P_ID is ".$P_ID. " CNT IS ".$cnt." TRANS NUM IS ".$transnum."<br>"; 
            $sql2="INSERT INTO `Rel` (`U_ID`,`Pro_ID`,`Pro_Count`,`Trans_Num`) VALUES ('$U_ID','$P_ID','$cnt','$transnum');";
            if(mysqli_query($con,$sql2))
            {
                echo "THANKS HAMMAYA<br>";
            }
            else 
            {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
            }
        }
    }
     /*   if($_SESSION["two"])

        {
            $TWO=$_SESSION["two"];
            $sql="INSERT INTO 'Product' VALUES('two','$TWO');";
            if($con->multi_query($sql) === TRUE)
            {
                echo "SUCCESS"."<br>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
        if($_SESSION["three"])
        {
            $THREE=$_SESSION["three"];
            $sql="INSERT INTO 'Product' VALUES('three','$THREE');";
            if($con->multi_query($sql) === TRUE)
            {
                echo "SUCCESS"."<br>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
        if($_SESSION["four"])
        {
            $FOUR=$_SESSION["four"];
            $sql="INSERT INTO 'Product' VALUES('four','$FOUR');";
            if($con->multi_query($sql) === TRUE)
            {
                echo "SUCCESS"."<br>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
        if($_SESSION["five"])
        {
            $FIVE=$_SESSION["five"];
            $sql="INSERT INTO 'Product' VALUES('five','$FIVE');";
            if($con->multi_query($sql) === TRUE)
            {
                echo "SUCCESS"."<br>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
        if($_SESSION["six"])
        {
            $SIX=$_SESSION["six"];
            $sql="INSERT INTO 'Product' VALUES('six','$SIX');";
            if($con->multi_query($sql) === TRUE)
            {
                echo "SUCCESS"."<br>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
        

?>*/