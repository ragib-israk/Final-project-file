<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Registration</title>
</head>
<body >

    <?php
        $firstName = $lastName = $email = $gender = $userName = $password = $dateofbirth = $address= $mobilenumber= $recoveryEmail= "";
        $count = 0;

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if($firstName = $_POST['fname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($lastName = $_POST['lname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($email = $_POST['email']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($recoveryEmail = $_POST['rmail']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }


            if(isset($_POST['gender'])) 
            {
                $gender = $_POST['gender'];
                $count++;
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }  
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($userName = $_POST['uname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($password = $_POST['password']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if($dateofbirth = $_POST['dof']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if($address = $_POST['add']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($mobilenumber = $_POST['mobo']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if ($count >= 7)
            {
            $filepath = "info.txt";
            $f = fopen($filepath,'a');
            fwrite($f,"$userName,$password,$firstName,$lastName,$email,$gender,$recoveryEmail,$dateofbirth,$address,$mobilenumber\n");
            fclose($f);
            }
            if(isset($_POST["set"]))
            {
				echo "<script>location.href='login.php'</script>";
		}
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h1 style="text-align: center;">Registertion-form</h1>
     
            <legend style="text-align: center;">:</legend>

                      First Name  <input type="text" name="fname" value="">
                      
                      Last Name <input type="text" name="lname" value="" >
                        
                        Gender
  
                        Gender<input type="radio" name="gender" value="Male" >  Male 
                        Gender<input type="radio" name="gender" value="Female" > Female

                        Date Of Birth <input type="date" name="dof" value="">
 
                        Address  <input type="text" name="add" value="">

                        Mobile Number <input type="text" name="mobo" value="">

                        UserName  <input type="text" name="uname" value="">

                        Password <input type="password" name="password" value="">

                         Email <input type="email" name="email" id="" value="">

                         RecoveryEmail <input type="email" name="rmail" id="" value="">


                    <input type="submit" name="set" value="Submit"> 
                    <input type="reset" name="" value="Reset">
                    <input  type="submit" name="done" value="Back">  
            
    </form>  

<?php
if(isset($_POST["done"]))
{
    echo "<script>location.href='login.php'</script>";
    
}
?>
</body>
</html>