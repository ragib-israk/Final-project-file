<body style="background: url(https://previews.123rf.com/images/unitonevector/unitonevector1904/unitonevector190402430/121213326-online-shopping-e-commerce-vector-banner-concept-female-shopaholic-with-purchases-in-cart-cartoon-ch.jpg);background-size :100% 120%">  

</body> 

<?php
$row_number = 1;    // Number of the line we are deleting
$file_out = file("info.txt"); // Read the whole file into an array

//Delete the recorded line
unset($file_out[$row_number]);

//Recorded in a file
file_put_contents("info.txt", implode("", $file_out));
echo "Done";
?>
<form method ="POST">
<input  type="submit" name="back" value="Back">
</form>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcompage.php'</script>";
}
