<body style="background: url(https://www.revuze.it/wp-content/uploads/2020/03/online-reviews-1024x496.png);background-size :100% 95%"> 
</body>










 <?php
        $Best = $Average= $Worst="";
        $count = 0;

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if($fBest = $_POST['Best']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($Average = $_POST['Average']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($Worst = $_POST['Worst']) 
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
            fwrite($f,"$Credit card,$Nagad,$Bkash,$Debit card,\n");
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
    <h1>Givereview</h1>
        <table>
        <tr>
            <td><label>Best: </label></td>
            <td><input type="text" name="Best" value=""></td>
        </tr>

        <tr>
            <td><label>Average: </label></td>
            <td><input type="text" name="Average" value=""></td>
        </tr>
        
        
        

        

        <tr>
            <td><label>Worst: </label></td>
            <td><input type="text" name="Worst" value=""></td>
        </tr>



        
       
      
            
            <td align="right">
                 <input type="submit" name="set" value="Submit"> 
                   
                    <input  type="submit" name="done" value="Back">  
        
        </tr>
        </table>

    
    
    </form>

</body>
</html>









