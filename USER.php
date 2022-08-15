<?php
include('Con.php');
//include('Users.php');
check();

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
<style>
        .navbar 
        {
            display: flex;
            flex-direction: row;
            width: 38.1cm;
            height: 1.6cm;
            margin-left: -7px;
            background:rgb(232, 232, 232);
        }
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
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
        height: 0.8cm;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    th 
    {
        border-bottom: 1px solid black;
    }
    tr:hover {background-color: rgb(136, 136, 136);
color: aquamarine;}
    </style>
    <div class="logo">
    <img src="Logo.png" style="margin-left: 15cm;" width="16%" height="auto" alt="HTML tutorial" />

    </div>

    <div class="navbar">
        <a href="Admin.php" style="text-decoration: none;">
        <p style="margin-left: 1cm; font-size: 20px;  color: rgb(49, 157, 229);">
            AddItems
        </p>
        </a>
        <a href="Admin1.php" style="text-decoration: none;">
        <p style="margin-left:1cm ;  font-size: 20px;  color: rgb(49, 157, 229);">
            Transactions
        </p>
        <a href="Users.php" style="text-decoration: none;">
            <p style="margin-left:1cm ;  font-size: 20px;  color: rgb(49, 157, 229);">
                Users
            </p>
        </a>
        </a>
        <a href="Login.php" style="text-decoration:none ;">
        <p style="margin-left:25.5cm ;  font-size: 20px; color: rgb(49, 157, 229); ">
            Logout
        </p>
        </a>
    </div>
<!! NAV BAR >


        <div style="width: 25cm; height:auto; background-color: rgb(205, 205, 205);
        margin-left: 5.9cm; margin-top: 1cm; border-radius:;">
            
            <p style="margin-left: 9.6cm ; font-size:36px ;">
                User Details
            </p>

            <div style="border: 2px solid black; width: 15cm; height: auto
            ; margin-left:5cm; border-radius: 5px;">

<h1 style="margin-left:4.7cm ; margin-top:0cm; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 
'Trebuchet MS', sans-serif; font-weight: 600;"> 
    Account Details   </h1>

            <form action="updateAdmin.php" method="POST">

                <div style="margin-left: 5.8cm; margin-top: 0.5cm; font-size: 18px; color: rgb(255, 5, 117); font-weight: 700;">
                    <?php 
                                if(isset($_GET['error']))
                                { $flag=false;
                                    ?>
                                    
                                    <p class="error" >
                                    <?php echo $_GET['error'];?>
                                    </p>
                                <?php } ?>
                    </div>

                 
                    <?php 
                $email=$_POST['name'];
                $_SESSION['usermail']=$email;

              //  echo $email." IS ";

                $sq="SELECT * FROM UserInfo where email='$email'";
                $res=mysqli_query($con,$sq);
                $row=mysqli_fetch_array($res);
                $pass=$row[2];
                $uid=$row[3];
                $sq1="SELECT distinct(Trans_Num) from Rel where U_ID='$uid'";
                $res1=mysqli_query($con,$sq1);
                
            //    echo $row[0];
              //  echo $email;
                 ?>

            <div style="display: flex; flex-direction:row; align-items: center; 
            margin-left: 4.5cm;">
            <p>
                User Name 
            </p>
            <p style="margin-left:1.3cm ;">
                <input type="text" style="border-radius: 5px;" name="uname"
                value=<?php 
                echo $row[0];
                ?>
                >
            </p>
            </div>


            <div style="display: flex; flex-direction:row; align-items: center; 
            margin-left: 4.5cm;">
            <p>
                Email 
            </p>
            <p style="margin-left:1.3cm ; text-decoration:underline;">
            <?php 
                echo $email;
                ?>
            </p>
            </div>


            <div style="display: flex; flex-direction:row; align-items: center; 
            margin-left: 4.5cm;">
            <p>
                Password  
            </p>
            <p style="margin-left:1.5cm ;">
                <input type="text" style="border-radius: 5px;" name="Pass"
                value=<?php 
                echo $row[2];
                ?>  
                >
            </p>
            </div>

            <div style="display: flex; flex-direction:row; 
            margin-left: 4.5cm;">
            <p>
                Total Transactions 
            </p>
            <p style="margin-left:0.3cm ;">
                <?php
                echo $res1->num_rows;
                ?>
            </p>
            </div>

            <input type="submit" value="save" style="margin-left:7cm ; margin-bottom:0.5cm; 
            width:2cm; height:1cm; border-radius:5px; font-size:19px;">

            </form>

            </div>


            <div style="margin-top: 2cm; border-top: 2px solid black;">

                <h1 style="margin-left: 9cm; margin-top: 1cm;">
                    Transaction History
                </h1>
                
                <?php 
                $i=1;
                while($row1=mysqli_fetch_array($res1))
                {
                    ?>
                    <div style="margin-left:3cm; font-size:30px; margin-top:2cm;">
                        <?php 
                        if($i!=1)
                        {
                            echo "
                                <div style='border-top:2px solid black; margin-left:-3cm; 
                                margin-bottom:1cm;'>
                                </div>
                            ";
                        }
                    echo "Transaction Number :".$i."<br>";
                    $i++;
                    ?>
                    <?php
                         $Tran=$row1[0];
                         $sq="SELECT Date,Time FROM Rel WHERE Trans_Num='$Tran'";
                         $r1=$con->query($sq);
                         $r2=mysqli_fetch_array($r1);
 
                     //    $re1=$con->query($sq);
                         echo "  Date Of Purchase: ".$r2[0]." ";
                         echo "Time Of Purchase: ".$r2[1]." ";
                    ?>
                    <?php
                   // echo $i;
                 //   $i++;
                 //echo "FE";
                   $Tran=$row1[0];
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
                   

                   <table border="1px solid black !important" style="border-collapse:collapse !important ; 
                   margin-left: -0.5cm !important ; font-size:20px;">
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
                        $trsid=$row1[0];
                      //  echo $trsid."is";
                        $ss="SELECT * FROM Rel WHERE Trans_Num='$trsid'";
                        $resul=mysqli_query($con,$ss);
                     //   echo $res1->num_rows."are";
                            $sno=1;
                            $TotalPrice=0;
                   while($r1=mysqli_fetch_array($resul))
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




                    
                    </div>


                <?php 
                }
                ?>


            </div>


            <div style="height: 2cm;">
            </div>

            

        </div>


</body>
</html>