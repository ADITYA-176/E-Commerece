<?php include('Con.php');
check();
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



<div style="margin-left: 9cm; margin-right:5cm; background:rgb(191, 191, 191); margin-top: 1.5cm; width: 20cm; height: 10cm;">

    <?php

    $username=$_SESSION['USERNAME'];
    $email=$_SESSION['email'];
    $pass=$_SESSION['Password'];

   // echo $username." ".$email." ".$pass."<br> hey";

    ?>

    <h1 style="margin-left:5.8cm ; margin-top:cm; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> Account Details   </h1>

    <form style="display: flex; flex-direction:column" action="update.php" method="post">

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

        <div style="margin-left:5.5cm ;  display: flex; flex-direction: row;
        
        ">
            <p>
                User Name 
            </p>
            <div >
                <input type="text " style="border-radius:5px; margin-left:0.2cm;
                font-family:'Times New Roman', Times, serif; color:rgb(255, 0, 132);"
                 name="uname" value=
                <?php 
                    echo $username;
                ?>
                >
            </div>

        </div>
        <div style="margin-left: 5.5cm;  display: flex; flex-direction: row;">
            <p>
                Email
            </p>
     
        <div style="margin-left:1.3cm ; font-family:'Times New Roman', Times, serif; color:rgb(255, 0, 132); text-decoration:underline;">       <?php echo $email; ?>
            </div>

    </div>
    <div style="margin-left: 5.5cm; margin-top:0cm;">
      <label for="pass"> Password  </label>
      <input style=" border-radius:5px; margin-left: 0.4cm; font-family:'Times New Roman', Times, serif; color:rgb(255, 0, 132);  " type="text" name="pass" value=<?php echo $pass; ?> >    
    </div>
    <div style="margin-left:5.5cm; margin-top:0.5cm; display: flex; flex-direction: row;">
        <p > 
            Total Transactions : 
        </p>
        <div style="font-family:sans-serif; color:rgb(255, 0, 132); ">
        <?php
        $uid=$_SESSION['U_ID'];
        $sql="SELECT distinct(Trans_Num) from Rel where U_ID='$uid'";
        $res=mysqli_query($con,$sql);
        echo $res->num_rows;
        ?>
        </div>
    </div>
    <div style="margin-top: 0cm; display:flex;flex-direction: row;">
        <p style="margin-left: 5.5cm;">
            Total Amount Spent:   
        </p>
        <div style="font-family:sans-serif; color:rgb(255, 0, 132); margin-left: 0.2cm; ">
        <?php
        echo "    ";
        $sql="SELECT * from Rel where U_ID='$uid'";
        $res=mysqli_query($con,$sql);
        $tot=0;
       // echo $res->num_rows;
        while($row=mysqli_fetch_array($res))
        {
            $pid=$row[1];
           // echo $pid."<br>";
            $sq1="SELECT Pro_Price from Product where Productname='$pid'";
            $re=mysqli_query($con,$sq1);
            $r1=mysqli_fetch_array($re);
            $val=($row[2]*$r1[0]);
            $tot+=$val;
        }
        
        echo "     Rs ".$tot." <br>";

        ?>
        </div>
    </div>
    <div>
        <input type="submit"  value="save" style=" margin-left: 8.4cm; width:1.7cm; height:1cm; font-size: 18px;
        border-radius: 5px;
        ">
    </div>
    </form>

</div>




<script src="JS.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>