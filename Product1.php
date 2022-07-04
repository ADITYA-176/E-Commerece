<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="UserInfo";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("Connect Failed due to ".mysqli_connect_error()); 
}
$b1=0;
$b2=0;
$b3=0;
$b4=0;
$b5=0;
$b6=0;
$_SESSION['U_ID']="0";

$_SESSION['fl']=0;

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
<a href="Web.php">
            <div class="logo">
            <img src="Logo.png" widht="1%" height="1%" alt="HTML tutorial" />

        </div>
        </a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li style="margin-top:7px;">
            <a href="Web.php" style="text-decoration:none; font-size:18px; margin-left: 1cm; margin-right: 20px;"> Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  style="color: rgb(49, 157, 229); font-size:18px;" href="User.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Buy
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Product1.php">Leds</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Product2.php">Decorative Lights</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Product3.php">Interior Lights</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: rgb(49, 157, 229); font-size:18px; margin-left:30cm" href="Validate.php">Login</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!>
<div class="bulbs">
    <form  method="POST">
        <script>
    function funp(p1)
    {
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
        <div class="bulb1">
        <img src="P1.jpg" class="img-fluid">
        <div class="Bor1"></div>
        <div class="font-head">
        <p> LED </p>
    </div>
        <br>
        <p> Candle </p>
        <p> * 8w </p>
        <p> * White </p>
        <div class="price">
        <p> RS. 60 </p>
        </div>
        <div class="set">
                <div class="Plus">
                <button type="button" onclick="funn(1)" class="But" id="but"> - </button>
                </div>
                <div class="Num">
                    <input type="text" value="0" id="1" name="1" size="4">
                </div>
                <div class="Minus">
                <button type="button" onclick="funp(1)" class="But" id="but"> + </button>
                </div>
                </div>
        </div>
        <div class="bulb2">
            <img src="Bulb2.jpg" class="img-fluid">
            <div class="Bor1"></div>
            <div class="font-head">
            <p> LED </p>
            </div>
            <br>
            <p> Candle </p>
            <p> * 18w </p>
            <p> * White </p>
            <div class="price">
            <p> RS. 160 </p>
            </div>
            <div class="set">
            <div class="Plus">
            <button type="button" onclick="funn(2)" class="But" id="but"> - </button>
                </div>
                <div class="Num">
                <input type="text" value="0" id="2" name="2" size="4">
                </div>
                <div class="Minus">
                <button type="button" onclick="funp(2)" class="But" id="but"> + </button>
                </div>
                </div>
            </div>
            <div class="hline">
             
        </div>
            <div class="bulb3">
                <img src="Bulb3.jpg" class="img-fluid" >
                <div class="Bor1"></div>
                <div class="font-head">
                <p> LED </p>
                </div>
                <br>
                <p> Candle </p>
                <p> * 6w </p>
                <p> * White </p>
                <div class="price">
                <p> RS. 40 </p>
                </div>
                <div class="set">
                <div class="Plus">
                <button type="button" onclick="funn(3)" class="But" id="but"> - </button>
                </div>
                <div class="Num">
                <input type="text" value="0" id="3" name="3" size="4">
                </div>
                <div class="Minus">
                <button type="button" onclick="funp(3)" class="But" id="but"> + </button>
                </div>
                </div>
                </div>
                <div class="bulb4">
        <img src="Bulb4.jpg" class="img-fluid">
        <div class="Bor1"></div>
        <div class="font-head">
        <p> LED </p>
        </div>
        <br>
        <p> Candle </p>
        <p> * 12w </p>
        <p> * White </p>
        <div class="price">
        <p> RS. 120 </p>
        </div>
        <div class="set">
        <div class="Plus">
        <button type="button" onclick="funn(4)" class="But" id="but"> - </button>
                </div>
                <div class="Num">
                <input type="text" value="0" id="4" name="4" size="4">
                </div>
                <div class="Minus">
                <button type="button" onclick="funp(4)" class="But" id="but"> + </button>
                </div>
                </div>
        </div>
        <div class="hline">
             
        </div>
       <div class="bulb5">
        <img src="Bulb5.jpg" class="img-fluid">
        <div class="Bor1"></div>
        <div class="font-head">
        <p> LED </p>
       </div>
        <br>
        <p> Candle </p>
        <p> * 10w </p>
        <p> * White </p>
        <div class="price">
        <p> RS. 90 </p>
       </div>
       <div class="set">
       <div class="Plus">
       <button type="button" onclick="funn(5)" class="But" id="but"> - </button>
                </div>
                <div class="Num">
                <input type="text" value="0" id="5" name="5" size="4">
                </div>
                <div class="Minus">
                <button type="button" onclick="funp(5)" class="But" id="but"> + </button>
                </div>
                </div>
        </div>
        <div class="bulb6">
        <img src="Bulb6.jpg" class="img-fluid">
        <div class="Bor1"></div>
        <div class="font-head">
        <p> LED </p>
        </div>
        <br>
        <p> Candle </p>
        <p> * 15w </p>
        <p> * White </p>
        <div class="price">
        <p> RS. 140 </p>
    </div>
    <div class="set">
    <div class="Plus">
    <button type="button" onclick="funn(6)" class="But" id="but"> - </button>
                </div>
                <div class="Num">
                <input type="text" value="0" id="6" name="6" size="4">
                </div>
                <div class="Minus">
                <button type="button" onclick="funp(6)" class="But" id="but"> + </button>
                </div>
                </div>
        </div>
        <input type="button" onclick="check()"  style="width:2.5cm; height:1.5cm; margin-left:2cm" name="done" value="Buy">
    </form>
    </div>
        <script src="JS.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
