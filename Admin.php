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
        .hey:hover
        {
            background: rgb(104, 191, 220);
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
        </a>
        <a href="Login.php" style="text-decoration:none ;">
        <p style="margin-left:27.5cm ;  font-size: 20px; color: rgb(49, 157, 229); ">
            Logout
        </p>
        </a>
    </div>
   <div style="background:rgb(164, 164, 164); margin-left:13cm; margin-top: 1.5cm; width:12cm;  border-radius:5px;height: 10cm; padding: 0.3cm;">
    <div></div>
        <div style="margin-top: 0.5cm; margin-left:4.5cm;">
            <p style="margin-top: 0.5cm; font-size: 24px;"> Add Item </p>
        </div>   
        <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0)">
        <div>
            <form action="ord.php" method="post">
             <div style="margin-left:2cm ;">   <?php 
                    if(isset($_GET['error']))
                    { $flag=false;
                        ?>
                        
                        <p class="error" >
                        <?php echo $_GET['error'];?>
                        </p>
                    <?php } ?>
             </div>
                <div style="display:flex; flex-direction: row; margin-left: 2cm; margin-top: 0.5cm;">
                    <label style="font-size: 20px;" for="pr">Item Name :</label>
                    <input style="margin-left: 16px; border-radius: 5px; height: 25px; margin-top: -4px;" type="text" for="pr" name="prname" placeholder="Item Name" />
                </div>
                <div style="display:flex; flex-direction: row; margin-left: 2cm; margin-top: 0.5cm;">
                    <label style="font-size: 20px; " for ="price">Enter Price :</label>
                    <input style="margin-left: 14px; height: 25px; margin-top: -4px; border-radius: 5px;" type="number" for="price" name="price" placeholder="Item Price" />
                </div>
                    <input class="hey"style="margin-left: 5.5cm; border-radius:5px ; width: 1.8cm; height: 1cm; margin-top: 0.6cm;"type="submit" value="Add" name="done"/>
            </form>
        </div> 
   </div>

</body>
</html>