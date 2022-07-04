<?php 
    include('Con.php');


    //
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="NewLogin.css">
        <title>Document</title>
    </head>
    <body>
        <di class="Img1">
            <a href="Web.php"><img src="Logo.png"></a>
        </di>



        
        <form action="Login.php" method="post">
            <h2>Login</h2>
            <div class="Login">
                <?php 
                    if(isset($_GET['error']))
                    { $flag=false;
                        ?>
                        
                        <p class="error" >
                        <?php echo $_GET['error'];?>
                        </p>
                    <?php } ?>
            <label for="name">User Name</label>
            <br>
            <input type="email" id="name" placeholder="email" name="email" value="">
            <br>
            <label for="password">Password </label>
            <br>
            <input type="password" id="password" placeholder="Password" name="password" value="">
            <br>
            <button type="submit" id="Enter">
                Login
            </button>
        </div>
        <div class="signup">
            <a href="Validate2.php">Create an account </a>
        </div>
        <div class="hme" style=" margin-left:5.3cm;background:rgb(62, 62, 62);  border-radius:5px;
         width:2cm; height:1cm;">
        <a href="Web.php" style=" font-size: 20px; color:bisque; text-decoration: none;"><p style="margin-top: 0px;">Home</p></a> 
        </div>
        </form>
    </body>
    </html>