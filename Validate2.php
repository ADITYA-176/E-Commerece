    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="NewSignup.css">
        <title>Sign Up</title>
    </head>
    <body>
    <di class="Img1">
            <a href="Web.html"><img src="Logo.png"></a>
        </di>
        <form action="Signup.php" method="post">
        <h2>
            Sign Up
        </h2>
        <div class="Signup">
                <?php 
                    if(isset($_GET['error']))
                    { ?>
                        <p class="error" >
                        <?php echo $_GET['error'];?>
                        </p>
                    <?php } ?>
            <input type="text" id="username" placeholder="username" name="username" value="">
            <br>
            <input type="email" id="email" placeholder="email" name="email" value="">
            <br>
            <input type="password" id="Password" placeholder="Password" name="Password" value="">
            <br>
            <input type="password" id="re-password" placeholder="Re-Enter Password" name="re-password" value="">
            <br>
            <button type="submit" id="submit" > Submit </button>
        </form>
        <br>
        <div class="login">
        <a href="Validate.php">Already have an account</a>
        </div>
        
        <div class="hme" style="margin-top: 0.4cm; margin-left:5.3cm;background:rgb(62, 62, 62);  border-radius:5px;
        width:2cm; height:1cm;">
       <a href="Web.html" style=" font-size: 20px; color:bisque; text-decoration: none;"><p style="margin-top: 0px;">Home</p></a> 
       </div>
        </div>
    </body>
    </html>