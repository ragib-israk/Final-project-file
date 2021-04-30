<body style="background: url(https://image.freepik.com/free-vector/user-rating-feedback-customer-reviews-cartoon-web-icon-e-commerce-online-shopping-internet-buying-trust-metrics-top-rated-product_335657-778.jpg);background-size :100% 120%">  

</body> 


<!DOCTYPE html>
<html>
<head>
	<title>search product</title>
</head>
<body>

<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="search" value="">
<input  type="submit" name="done" value="search">  
<input  type="submit" name="back" value="Back">
</form>
<?php
$file = 'Productlist.txt';
$searchfor ="";
if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
           $name=$_REQUEST['search'];
           $searchfor = $name;
           if(isset($_POST["back"]))
           {
           	 echo "<script>location.href='Welcompage.php'</script>";
           }

    

           
        }

$contents = file_get_contents($file);

$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if(preg_match_all($pattern, $contents, $matches)){
   echo "Found matches:\n";
   echo implode("\n", $matches[0]);
}
else{
   echo "No matches found";
}
?>
 
<?php
    if(isset($_POST["back"]))
{
	echo "<br>";
    echo "<script>location.href='Welcompage.php'</script>";
}
?>                 

</body>
</html>