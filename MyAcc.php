<?php include('Con.php');
check();
 ?>
<?php




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
    <link href="User.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <style>
        ul li 
        {
            display: inline;
        }
    </style>
    <div class="top">
        <img src="Logo.png" style="width: 17%; height: auto; margin-left: 15cm; ">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li style="margin-top:7px;">
            <a href="Web1.php" style="text-decoration:none; font-size:18px; margin-left: 1cm; margin-right: 20px;"> Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  style="color: rgb(49, 157, 229); font-size:18px;" href="User.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Buy
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Products1.php">Leds</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Products2.php">Decorative Lights</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Products3.php">Interior Lights</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Products4.php">New Products</a></li>
          </ul>
          <li class="nav-item" style="margin-top:7px; ">
            <a class="nav-link active" aria-current="page" style="color: rgb(49, 157, 229); display:inline; font-size:18px; margin-top: 5px; margin-left:0.8cm;" href="General.php">General</a>
        </li>
          <li class="nav-item" style="margin-top:7px; ">
          <a class="nav-link active" aria-current="page" style="color: rgb(49, 157, 229); display:inline; font-size:18px; margin-left:22cm" href="MyAcc.php">My Account</a>
        </li>
        <li class="nav-item" style="margin-top:7px; ">
            <a class="nav-link active" aria-current="page" style="color: rgb(49, 157, 229); display:inline; font-size:18px;  margin-left:1cm;" href="Login.php">Logout</a>
          </li>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<!!! NAV > 



    <div class="basicinfo" style="width: 24cm; margin-left:7cm; background:rgb(228, 228, 228);border-radius: 5px; height: auto;">
        <h1 style="margin-left:8cm ; margin-top:1cm;"> Account Details   </h1>
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
                <td style="border: 5px None black; width: 10cm; text-align: center; border-bottom: 1px solid black; ">
                    <p style="font-size: 20px;">
                    E-Mail:
                    </p> 
                </td>
                <td  style="border: 5px None black; width: 12cm; text-align: center; border-bottom: 1px solid black; border-left: 1px solid black; ">
                   <p style="font-size: 20px;"> <?php echo $_SESSION['email']; ?>
                    </p>
                </td>
                
            </tr>


            <div class="cls" style="border-right:100px solid black">
                 
            </div>
            



        </table>
        <div class="Transcations" style="margin-top:1.7cm ;">
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
                    * 
                    {
                        font-family: 'PT Sans', sans-serif;

;
                    }
                    th,td 
                    {
                        text-align:center;
                        border-right: 1px solid black;
                        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    }
                    th 
                    {
                        border-bottom: 1px solid black;
                    }
                    
                    </style>
                    <table border="1px solid black !important" style="border-collapse:collapse !important ; margin-left: 1cm !important ;">
                            <tr>
                                <th style="width:1.7cm !important;"text-align:center;>
                                    S.No 
                                </th>
                                <th style="width:4cm !important ;" text-align:center; >
                                    Product Name 
                                </th>
                                <th  style="width:7cm !important;" text-align:center; > 
                                    Product Image 
                                </th>
                                <th  style="width:4cm !important;" text-align:center; >
                                    Product Price (Rs)
                                </th>
                                <th  style="width:4cm !important;" text-align:center; >
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
    <script src="JS.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>