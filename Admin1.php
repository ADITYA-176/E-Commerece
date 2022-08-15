<?php
include('Con.php');

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
        <div style="margin-left: 5cm; margin-top:1cm;background: rgb(190, 190, 190);
        border-radius: 5px; width: 28cm; height: auto;">
    <?php    $sq="SELECT Max(Trans_Num) FROM Rel";
             $res=$con->query($sq);
             $row=mysqli_fetch_array($res);
             $size=$row[0];
    ?>
                <p style="font-size:40px ; margin-left:10cm;">
                    Transactions
                </p>

                <?php 
                    for($i=1;$i<=$size;$i++)
                    { 
                        ?>
                    <p style="font-size:30px; margin-left:10cm;">
                        Transaction No: <?php echo $i; ?>
                    </p>

                    <?php 
                    $sq="SELECT Date,Time,U_ID FROM Rel WHERE Trans_Num='$i'";
                    $res=$con->query($sq);
                    $row=mysqli_fetch_array($res);
                    $Date=$row[0];
                    $Time=$row[1];
                    $uid=$row[2];
                    $s1="SELECT Name FROM UserInfo WHERE U_Id='$uid'";
                    $res=$con->query($s1);
                    $r1=mysqli_fetch_array($res);
                    $name=$r1[0];
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
                    tr:hover {background-color: rgb(136, 136, 136);
            color: aquamarine;}
                    </style>
                    <div style="display: flex; flex-direction: row; margin-top:-1.2cm;">
                        <p style="font-size:24px; margin-left: 1cm;">
                            Date Of Purchase: <?php echo $Date ;?>
                        </p>
                        <p style="font-size: 24px; margin-left:7cm;">
                            Time Of Pruchase: <?php echo $Time ;?>
                        </p>
                    </div>
                    <p style="font-size:24px ; font-weight:bold; margin-left:1cm; margin-top:-0.2cm;">
                        Name Of Customer: <?php echo $name; ?>
                    </p>
                    <table  border="1px solid black !important" style="border-collapse:collapse !important ; margin-left: 1cm !important ;">
                        <tr>
                            <th style="width:1.7cm !important;"text-align:center;>
                                S.No 
                            </th>
                            <th style="width:4cm !important;"text-align:center;>
                                Product Name 
                            </th>
                            <th style="width:7cm !important;"text-align:center;>
                                Product Image 
                            </th>
                            <th style="width:4.5cm !important;"text-align:center;>
                                Product Price
                            </th>
                            <th style="width:4.5cm !important;"text-align:center;>
                                Product Quantity
                            </th>
                        </tr>
                    <?php 
                    $sq="SELECT Pro_ID,Pro_Count from Rel WHERE Trans_Num='$i'";
                    $res=$con->query($sq);
                    $sno=1;
                    $total=0;
                    while($row=mysqli_fetch_array($res))
                    {
                        $pid=$row[0];
                        $pcnt=$row[1];
                        $sq="SELECT Pro_Price,Pname FROM Product WHERE Productname='$pid'";
                        $r1=$con->query($sq);
                        $r2=mysqli_fetch_array($r1);
                        $pri=$r2[0];
                        $pn=$r2[1];
                        $total+=($pri*$pcnt);
                        ?>
                        
                            <tr>
                                <td>
                                    <p>
                                        <?php echo $sno; 
                                        $sno++;
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php 
                                            echo $pn;
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php 
                                    //    echo $pn ;
                                        $p1=$pid.".jpg";
                                  //      echo $p1;
                                        echo "<img style='width:15%;height:auto; border-radius:5px; margin-top:0.3cm; margin-bottom:0.3cm;' src='$p1'";
                              //          echo "<img src='".$p1'>";
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php 
                                        echo $pri;
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php 
                                        echo $pcnt;
                                        ?>
                                    </p>
                                </td>
                            </tr>
                        
<?php
                    }
                    ?>
                    <tr>
                        <td colspan="3">
                            Total Price
                        </td>
                        <td colspan="2">
                            <p>
                                <?php 
                                echo $total;
                                ?>
                            </p>
                        </td>
                    </tr>
                    </table>
                    <hr style=" margin-top: 1.5cm; 
                    margin-bottom: 1.5cm;
                    height:2px;border-width:0;color:rgb(59, 59, 59);background-color:rgb(59, 59, 59)">

                    <?php
                }
                    ?>


        </div>

</body>
</html>

