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
    <link href="User.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User</title>
</head>
<body>
<a href="Web1.php">
            <div class="logo">
            <img src="Logo.png" widht="1%" height="1%" alt="HTML tutorial" />

        </div>
        </a>
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
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: rgb(49, 157, 229); display:inline; font-size:18px; margin-left:25cm" href="MyAcc.php">My Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="color: rgb(49, 157, 229); display:inline; font-size:18px;  margin-left:1cm;" href="Login.php">Logout</a>
          </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<form action="Acc.php" method="POST">
    <script>
        function funp(p1)
        {
            //alert("CAME ra\n");
           var x=document.getElementById(p1).value;
            x++;
            document.getElementById(p1).value=x;
        }
        function funn(p1)
        {
            var x=document.getElementById(p1).value;
            if(x>0)
            {
                x--;
            }
            document.getElementById(p1).value=x;
        }
    </script>
    
    <?php

//echo "CAME";
    $sq="SELECT * FROM Product WHERE Pro_ID>18 ";
    $re=mysqli_query($con,$sq);
    $size=$re->num_rows;
   // echo $size;
   $cnt=1;
    for($i=19;$i<=(18+$size);$i+=2)
    {   
        ?>
        <div style="display:flex; flex-direction:row;">
  <?php      
            $j=$i ;
            $sq="SELECT Productname,Pro_Price,Pname from Product where Pro_ID='$j'";
            $res=$con->query($sq);
            $row=mysqli_fetch_array($res);
            $ig=$row[0];
            $img=$row[0].'.jpg';
            $pn=$row[2];
            $pri=$row[1];
            ?>
            <style>
                .items 
                {
                    width:10cm;
                    height:12cm;
                    margin-left:4cm;
                    margin-top:2.4cm;
                    display: flex;
                    flex-direction: column;
                }
                .items:hover 
                {
                    box-shadow: 0px 0px 3px 3px rgb(184, 181, 181);
                }
            </style>
            <div class="items" >
                <?php
                echo "<img style='width:7cm; border-bottom:2px solid black; height:7cm; border-radius:5px; margin-left:1.4cm;' src='".$img."'>";
         ?>    <p style="margin-left:1.5cm ; margin-top:1cm; font-size:20px;">
            <?php 
                echo "* ".$pn;
                ?>
            </p>
            <?php
                echo "<br>";
                ?>
                <p style="margin-left:1.5cm ; margin-top: -0.6cm; font-size:20px;" >
                    <?php
                echo "Rs. ".$pri;

                


                ?>
                </p>

                <div style="display: flex; flex-direction:row; margin-left: 1.8cm;">
    
                <input  style="margin-left: 1.9cm; width: 1.5cm;" type="number" value="0" id="2" class="NUM"  name=
                <?php
               echo $ig;
                ?>
                 size="4">

                </div>

            </div>


            <!  COMPLETED FIRS PIC >

        <?php   
         $j+=1;
       // echo $j." BDSFS" .$size;
            if($j<=(18+$size))
            {
         //       echo "CAME\n";
                ?>

                <div style="display:flex; flex-direction:row;">
  <?php      

           // echo $j;
            $sq1="SELECT Productname,Pro_Price,Pname from Product where Pro_ID='$j'";
            $re=$con->query($sq1);
            $ro=mysqli_fetch_array($re);
            $ig1=$ro[0];
            $img1=$ro[0].'.jpg';
           // echo $img1;
            $pn1=$ro[2];
            $pri1=$ro[1];
           // echo $img;
            ?>
            <style>
                .items 
                {
                    width:10cm;
                    height:12cm;
                    margin-left:6cm;
                    margin-top:2.4cm;
                    display: flex;
                    flex-direction: column;
                }
                .items:hover 
                {
                    box-shadow: 0px 0px 3px 3px rgb(184, 181, 181);
                }
            </style>
            <div class="items" >
                <?php
                echo "<img style='width:7cm; border-bottom:2px solid black; height:7cm; border-radius:5px; margin-left:1.4cm;' src='".$img1."'>";
         ?>    <p style="margin-left:1.5cm ; margin-top:1cm; font-size:20px;">
            <?php 
                echo "* ".$pn1;
                ?>
            </p>
            <?php
                echo "<br>";
                ?>
                <p style="margin-left:1.5cm ; margin-top: -0.6cm; font-size:20px;" >
                    <?php
                echo "Rs. ".$pri1;
                ?>
                </p>
                <div style="display: flex; flex-direction:row; margin-left: 1.8cm;">
                    
                    <input  style="margin-left: 1.9cm; width: 1.5cm;"type="number" value="0" id="2" class="NUM" name=
                    <?php
                    echo $ig1;
                    ?>
                     size="4">
                  
                    </div>
            </div>

            <?php 
            }
            ?>
            



            
     <?php  } ?>
    </div>
        </div>
        
            <input type="submit" value="Buy" name="done" style=" width:2cm; height:1cm; margin-left: 32.8cm; ">
</form>
<script src="JS.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>