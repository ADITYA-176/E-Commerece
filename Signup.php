//<!/*
//INSERT INTO `AUTH` (`Name`, `Password`, `Fid`) VALUES ('Aditya', 'Password', '1'); */>
<?php include('Con.php');

$_SESSION['fl']=0;

?>
<?php   

/*
session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="UserInfo";


    $con=mysqli_connect($server,$username,$password,$db);
    if(!$con)
    {
        die("Connect Failed due to ".mysqli_connect_error()); 
    }
    echo "Success connecting to the database";*/
  //  echo "<br><br>";

    $dsql="SELECT * FROM UserInfo";
    $dresult=mysqli_query($con,$dsql);
    if(mysqli_num_rows($dresult)===0)
    {
        $sname="Admin";
        $smail="Admin123@Admin.com";
        $spass="Admin123";
        $esql="INSERT INTO `UserInfo` (`Name`, `email`,`Pass`) VALUES ('$sname', '$smail', '$spass');";
        if($con->multi_query($esql) === TRUE)
        {
            echo "SUCCESS<br><br>";
        }
        else
        {
            echo "Error: " . $esql . "<br>" . $con->error;
        }
        echo "CAME<br><br>";
    }
    $uname=$_POST['username'];
    $pass=$_POST['Password'];
    $email=$_POST['email'];
    $repass=$_POST['re-password'];
    $_SESSION['USERNAME']=$uname;

  //  echo $pass." ".$repass." ".$uname." ".$email;
    echo "<br>";


    $check=strcmp($pass,$repass);


    echo $check." ";
    $flag=true;


    if(strlen($uname)===0)
    {
        header("Location: Validate2.php?error=username is required");
        exit();
    }
    if(strlen($pass)===0  )
    {
        header("Location: Validate2.php?error=Password is required");
        exit();
    }
    if(strlen($email)===0  )
    {
        header("Location: Validate2.php?error=email is required");
        exit();
    }
    if(strlen($repass)===0  )
    {
        header("Location: Validate2.php?error=Re-enter Password");
        exit();
    }
    if($check!== 0  )
    {
        header("Location: Validate2.php?error=Passwords dont match");
        exit();
    }

    $sql= "select * from UserInfo where email='$email'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0 )
    {
        header("Location: Validate2.php?error=email already exits");
        exit();
    }
    else 
    {
        $sql1="INSERT INTO `UserInfo` (`Name`, `email`,`Pass`) VALUES ('$uname', '$email', '$pass');";
        if($con->multi_query($sql1) === TRUE )
        {
            $sq="SELECT MAX(U_id) FROM UserInfo";
            $res=$con->query($sq);
            
            $rw=mysqli_fetch_array($res);
            $uid=$rw[0];
            $_SESSION['fl']=1;
            $_SESSION['USERNAME']=$uname;
            $_SESSION['email']=$email;
            $_SESSION['Password']=$pass;
            $_SESSION['U_ID']=$uid;
            echo "THERE";
            echo $uid."SDSDF";
            header("Location: Products1.php");
        }

    }
    ?>