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

<div style="margin-left: 6cm; width: 26cm; height: auto; margin-top: 1cm; background: rgb(193, 193, 193);
border-radius: 5px;
" >
    <p style="margin-left:9.6cm ;font-size:45px; ">
        User Details
    </p>


<table style="margin-left: 5cm; margin-bottom:2cm;">
    <tr>
        <th style="width: 2cm ; height: 1cm;">
            SNo.
        </th>
        <th style="width: 3cm ; height: 1cm;">
            Email 
        </th>
        <th style="width: 3cm ; height: 1cm;">
            User Name 
        </th>
        <th style="width: 6cm; height: 1cm;">
            Total Transactions 
        </th>
        <th style="width: 4cm; height: 1cm;">
            Amount Spent 
        </th>
    </tr>
    
            <?php
      //
        $sq="SELECT U_id,Name,email FROM UserInfo";
        $res=mysqli_query($con,$sq);
        $p=1;
     //   echo $res->num_rows."Hey";
     $ans=0;
        while($row=mysqli_fetch_array($res))
        {
           ?> <tr>
            <?php 
            if($row[0]==23)
            {
                continue;
            }
            ?>
            <td>
                <?php
                echo $p;
                $p++; 
                ?>
            </td>
            
            <td>
                <form action="USER.php" method="post" target="_blank">
                    <input type="submit" 
                    value=<?php 
                    echo $row[2];
                    ?>
                    name="name"
                    >
                </form>
            </td>

            <td>
                
            <?php
                echo $row[1]; 
                ?>
                
            </input>
            </form>
            </td>
                
            <td>
            <?php
                $uid=$row[0];
             //   echo $uid."sd";
                    $sql="SELECT distinct(Trans_Num) from Rel where U_ID='$uid'";
                    $res1=mysqli_query($con,$sql);
                    echo $res1->num_rows;
                ?>
            </td>
            <td>
                
                <?php 
                $ss="SELECT * from Rel where U_ID='$uid'";
                $rez=mysqli_query($con,$ss);
            
       // echo $res->num_rows;
       $tot=0;
        while($rr=mysqli_fetch_array($rez))
        {
            $pid=$rr[1];
            $sq3="SELECT Pro_Price from Product where Productname='$pid'";
            $ree=mysqli_query($con,$sq3);
            $r2=mysqli_fetch_array($ree);
            $val=($rr[2]*$r2[0]);
            $tot+=$val;
        }
        $ans+=$tot;
        echo "     Rs ".$tot;
        
        ?>
            </td>
            </tr>
            <?php 
        }
        
        ?>
    
    <tr>
        <td colspan="3">
            Total 
        </td>
        <td>
            <?php
                echo "Rs. ".$ans;
            ?>
        </td>
    </tr>
    
</table>

<div style="height: 2cm;">

</div>


</div>



</body>
</html>