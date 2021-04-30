<body style="background: url(https://theonebrief.com/wp-content/uploads/2018/11/DigitizationConsumerism_Website_image-1000x589.png);background-size :100% 120%"> 
</body>







 <?php
        $Creditcard = $Nagad= $Bkash= $Debitcard= "";
        $count = 0;

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {


            if($Creditcard = $_POST['Credit card']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($Nagad = $_POST['Nagad']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($Bkash = $_POST['Bkash']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }


           
            if($Debitcard = $_POST['Debit card']) 
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
            fwrite($f,"$Creditcard,$Nagad,$Bkash,$Debitcard,\n");
            fclose($f);
            }
            if(isset($_POST["set"]))
            {
                echo "<script>location.href='login.php'</script>";
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
    <h1>makepayment</h1>
        <table>
        <tr>
            <td><label>Creditcard: </label></td>
            <td><input type="text" name="Creditcard" value=""></td>
        </tr>

        <tr>
            <td><label>Nagad: </label></td>
            <td><input type="text" name="Nagad" value=""></td>
        </tr>
        
        
        

        

        <tr>
            <td><label>Bkash: </label></td>
            <td><input type="text" name="Bkash" value=""></td>
        </tr>
<tr>
            <td><label>Debitcard: </label></td>
            <td><input type="text" name="Debitcard" value=""></td>
        </tr>


        
       
      
            
            <td align="right">
                 <input type="submit" name="set" value="Submit"> 
                   
                    <input  type="submit" name="done" value="Back">  
        
        </tr>
        </table>

    
    
    </form>

</body>
</html>