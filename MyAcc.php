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
  //  echo " SIZE IS ".$size."<br>";
    for($i=0;$i<$size;$i=$i+1)
    {
        $indx='P';
        $indx2=$ch[$i];
        $indx1=$indx.$indx2;
       // echo " VAR IS ".$indx1."<br>";
        $vari=$_POST[$indx1];
        $ele=fun($vari);
      //  echo $vari."Hey <br>";
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
         //   echo $var."<br> AIS ";
            if($var>0)
            {
               $v1=$_SESSION['U_ID'];
        //       echo " PLZ ".$v1;
          //     echo $v1." ".$indx1." ".$var." ".$Trs;
              
            $sq="INSERT INTO `Rel` (`U_ID`,`Pro_ID`,`Pro_Count`,`Trans_Num`) VALUES ('$v1','$indx1','$var','$Trs')";
                if($con->multi_query($sq) === TRUE)
                {
             //       echo "SUCCESS<br><br>";
                }
                else
                {
              //      echo "Error: " . $esql . "<br>" . $con->error;
                }
                //$Trs+=1;
            }
        }
    
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="top">
        <img src="Logo.png" style="width: 17%; height: auto; margin-left: 15cm; ">
    </div>
    <div class="basicinfo" style="width: 24cm; margin-left:7cm; background:rgb(228, 228, 228);border-radius: 5px; height: auto;">
        <h1 style="margin-left:8cm ; margin-top:1cm;"> Account Details </h1>
        <style>
            td 
            {
                border-bottom: 1px solid black;
            }
            tr:hover {background-color: rgb(136, 136, 136);
            color: aquamarine;}
        </style>
        <table border="5px solid black" style="margin-left:0.7cm ; border-radius:10px;" >
            <tr style="border-bottom: 1px solid black;">
                <td style="border: 5px None black; width: 10cm;  text-align: center; border-bottom: 1px solid black ;">
                    <p style="font-size: 20px ;">
                    Name :
                    </p>
                    

                </td>
                <td style="border: 5px None black; width: 12cm; text-align: center; border-bottom: 1px solid black; border-left: 1px solid black;">
                 <p style="font-size: 20px;">   <?php echo $_SESSION['USERNAME']; ?> </p>
                </td>
            </tr>
            <div class="cls" style="border-right:100px solid black">
                 
            </div>
            <tr>
                <td style="border: 5px None black; width: 10cm; text-align: center;  ">
                    <p style="font-size: 20px;">
                    E-Mail:
                    </p> 
                </td>
                <td  style="border: 5px None black; width: 12cm; text-align: center; border-left: 1px solid black; ">
                   <p style="font-size: 20px;"> <?php echo $_SESSION['email']; ?>
                    </p>
                </td>
            </tr>
        </table>
        <div class="Transcations">
            <p style="margin-left:6cm ; font-size:40px;">
                Transaction History 
            </p>
            <?php
                $var=$_SESSION['U_ID']."IS ";
              //  echo $var;
                $sq="SELECT DISTINCT(Trans_Num) FROM Rel WHERE U_ID='$var'";
                $res=mysqli_query($con,$sq);
                $rows=$res->num_rows;
               // echo "TOTAL ROWS ARE ".$rows." Hey ";
               $re=$con->query($sq);
            $i=1;
              while($row=mysqli_fetch_array($re))
              {
                    ?>
                    <p style="font-size:24px; margin-left:1cm;">

                        Transaction No:<?php  echo $i."<br> "; 
                        $Tran=$row[0];
                        $sq="SELECT Date,Time FROM Rel WHERE Trans_Num='$Tran'";
                        $r1=$con->query($sq);
                        $r2=mysqli_fetch_array($r1);

                    //    $re1=$con->query($sq);
                        echo "  Date Of Purchase: ".$r2[0]." ";
                        echo "Time Of Purchase: ".$r2[1]." ";
                        echo "<br>";
                        // TIME STAMP ?>

              </p>
              <?php
                   // echo $i;
                 //   $i++;
                 //echo "FE";
                   $Tran=$row[0];
                   $sq="SELECT * FROM Rel WHERE Trans_Num='$Tran'";
                   $re1=$con->query($sq);
                   //  Serial Num Product Name Product Image Product Price Product Quauntity  
          //         echo "WHy ";
                   ?>
                   <style>
                    th,td 
                    {
                        text-align:center;
                    }
                    </style>
                    <table border="1px solid black" style="border-collapse:collapse; margin-left: 1cm;">
                            <tr>
                                <th style="width:1.7cm;"text-align:center;>
                                    S.No 
                                </th>
                                <th style="width:4cm;" text-align:center; >
                                    Product Name 
                                </th>
                                <th  style="width:7cm;" text-align:center; > 
                                    Product Image 
                                </th>
                                <th  style="width:4cm;" text-align:center; >
                                    Product Price (Rs)
                                </th>
                                <th  style="width:4cm;" text-align:center; >
                                    Product Quantity
                                </th>
                            </tr>
                <?php
                            
                            $sno=1;
                            $TotalPrice=0;
                   while($r1=mysqli_fetch_array($re1))
                   {
                        $uid=$r1['U_ID'];
                        $Pid=$r1['Pro_ID'];
                        $Prcnt=$r1['Pro_Count'];
                        $Trid=$r1['Trsc_ID'];
                        $Trnum=$r1['Trans_Num'];
                        $dt=$r1['Date'];
                        $ti=$r1['Time'];
                        $dt1=strtotime($dt);

                      //     $dt=strtotime($row[0]);
                       // echo "DATE IS ".date('m/d/y',$dt1)."<br>";
//                          echo $uid." ".$Pid." ".$Prcnt." ".$Trid." ".$Trnum." ".$dt." ".$ti;
                       // echo $Pid;
                        $s="SELECT Pname,Productname,Pro_Price FROM Product WHERE Productname='$Pid'";
                        $rz=$con->query($s);
                        $rw=mysqli_fetch_array($rz);
                        $ProName = $rw[0]; 
                        $Proimg = $rw[1];
                        $ProPrice = $rw[2];
                        $TotalPrice+=($ProPrice*$Prcnt);
            //            echo $ProName." ".$Proimg." ".$ProPrice;
              //          echo "<br>";
                   /*    */ ?>

                        <tr>
                            <td>
                                <?php echo $sno; 
                                $sno+=1;
                                ?>
                            </td>
                            <td>
                            
                                <?php echo $ProName; ?>

                            </td>
                            <td>

                                <?php echo "<img style='width:35%;height:auto; border-radius:5px; margin-top:0.3cm; margin-bottom:0.3cm;' src='".$Proimg.".jpg'"; ?>
                            </td>
                            <td>
                                <?php echo $ProPrice; ?>
                            </td>
                            <td>
                                <?php echo $Prcnt; ?>
                            </td>
                        </tr>
                    

                    
                    <?php

                    
                   }?>
                <tr>
                    <td colspan="3" style="height:1cm ;">
                        Total Amount
                    </td>
                    <td colspan="2">
                        <?php 
                        echo $TotalPrice;
                        ?>
                    </td>
                    
                </tr>

                </table>
                <br>
                <br>
                <?php
                   $i++;
                  // echo "END <br>";
              }
            ?>
        </div>
    </div>
    
</body>
</html>