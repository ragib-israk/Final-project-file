<body style="background: url(https://retailminded.com/wp-content/uploads/2018/07/omnichannel-1-1.jpg);background-size :100% 120%"> 


<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>


<?php
    $firstName = $lastName = $email = $gender = $userName = $password = $recoveryEmail = "";
    $uname = $password = $unameErr = $passwordErr = $msg = "";
    $flag = 0;
    $filepath = "info.txt";
    $f = fopen($filepath,'r') or die("fail to open file");
    
   
    session_unset();
    session_destroy();
    fclose($f);


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <center>
    <h2>Profile</h2>
        <table>
        <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" value="" >
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="text" name="gender" value="">
                    </td>
                </tr>

                    <td>
                        UserName 
                    </td>
                    <td>
                        <input type="text" name="uname" value="">
                    </td>
                    </tr>

                    <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Email
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="">
                    </td>
                    </tr>

                    <tr>
                    <td>
                        Recovery Email
                    </td>
                    <td>
                        <input type="email" name="remail" value="">
                    </td>
                     </tr>

                     

    </table>
    <input  type="submit" name="back" value="Back">
    <input  type="submit" name="update" value="update">

    <?php
    if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcompage.php'</script>";
}
if(isset($_POST["update"]))
{
    echo "<script>location.href='reg.php'</script>";
}

?>
    
    
    
                    

</form>
    
</body>
</html>
</body> 