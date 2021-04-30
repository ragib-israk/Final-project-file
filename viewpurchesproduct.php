<body style="background: url(http://s3-eu-west-1.amazonaws.com/userlike-cdn-blog/checkout-elements/checkout-boy.jpg);background-size :100% 120%">  

</body> 
<body style="background: url(https://pas-wordpress-media.s3.amazonaws.com/content/uploads/2020/06/05095746/bigstock-Online-Shopping-On-Internet-E-346190662-min-653x300.jpg);background-size :100% 90%">  
</body>




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
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form  method="POST">
    <h1>Registertion-form</h1>
        <table>
        <tr>
            <td><label>firstName: </label></td>
            <td><input type="text" name="fname" value=""></td>
        </tr>

        <tr>
            <td><label>lastname: </label></td>
            <td><input type="text" name="lname" value=""></td>
        </tr>
        
        
        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gender" value="Male">male</td>
        </tr>


        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gender" value="Female">female</td>
        </tr> 

        <tr>
            <td><label>Date of Birth: </label></td>
            <td><input type="date" name="dof" value=""></td>
        </tr>

        <tr>
            <td><label>Address: </label></td>
            <td><input type="text" name="add" value=""></td>
        </tr>
<tr>
            <td><label>UserName: </label></td>
            <td><input type="text" name="uname" value=""></td>
        </tr>


        
        <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="password" value=""></td>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="email" name="mail" value=""></td>
        </tr>
        <tr>
            <td><label>Mobile Number: </label></td>
            <td><input type="text" name="mobo" value="" ></td>
        </tr>   
<tr>
            <td><label>RecoveryEmail: </label></td>
            <td><input type="email" name="rmail" value="" ></td>
        </tr>    




        <tr>
            
            <td align="right">
                 <input type="submit" name="set" value="Submit"> 
                    <input type="reset" name="" value="Reset">
                    <input  type="submit" name="done" value="Back">  
        
        </tr>
        </table>

    
    
    </form>

</body>
</html>
