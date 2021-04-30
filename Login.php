<body style="background: url(https://static.vecteezy.com/system/resources/previews/001/829/266/non_2x/flat-cartoon-character-illustration-for-technology-industrial-revolution-4-0-industry-e-commerce-mobile-app-makes-easy-and-benefit-for-manufacturers-shipping-to-get-order-from-customer-free-vector.jpg);background-size :100% 120%">  

</body> 


<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<?php
    $uname = $password = "";
    $flag = 0;
    $filepath = "info.txt";
    $f = fopen($filepath,'r');
 
    if ($_SERVER["REQUEST_METHOD"] =="POST" )
    {
        if(empty($_POST['uname'])) 

            {
                $unameErr = "Please Fill Up the UserName";
            }
            else
            {
                $uname = $_POST['uname'];
            }

        if(empty($_POST['password'])) 

            {
                $passwordErr = "Please Fill Up the Password";
            }
            else
            {
                $password = $_POST['password'];
            }



            while($row = fgets($f)) {

                list($userName,$password,$firstName,$lastName,$email,$gender,$recoveryEmail,$MobileNumber,$Address) = explode( ",", $row );
                
        
                if($userName == $uname && $password == $password){
                    $flag++;
                    echo "<script>location.href='Welcompage.php'</script>";
                    break;
                }
        
              
        
            }

            if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='registation.php'</script>";
        }
        
           
        
            else
            {
                $msg = "Try Again";
                echo "Unsuccessful! " .$msg;
            }


    }




    session_unset();
    session_destroy();
    fclose($f);


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1 style="text-align: center;">Login</h1>
         <legend style="text-align: center;">Login Info</legend>
             UserName <input type="text" name="uname" value="">

            Password <input type="password" name="password" value="" >              

    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="fpwd" value="Forget Password">
    <br> <br> <input type="submit" name="signup" value="Signup">
    
</form>
    
</body>
</html>