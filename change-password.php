<body style="background: url(https://st2.depositphotos.com/42965482/45370/v/600/depositphotos_453702612-stock-illustration-ecommerce-internet-shopping-promotion-campaign.jpg);background-size :100% 90%">  
</body>


<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Email:<input type="email" name="" value=""><br>
Old Password:<input  type="password" name="password" value="password"> <br>
New Password<input  type="password" name="new_password" value="new_password">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
{
$email = $_POST['email'];
$old_password = $_POST['password'];
$new_password = $_POST['new_password'];

//Call the function to change the password
changePassword( $email, $old_password, $new_password );
}
function changePassword( $email, $old_password, $new_password){

    //The status will be updated to true if successful.
    //This function returns boolean.
    $status = false;

    //The new password can't have spaces
    if( strpos( $new_password, " " ) !== false ){
        return $status;
    }

    //Read the file.
    $file = fopen( "info.txt", "r+", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES );
    $read = fread( $file, filesize( "info.txt" ));

    //Close the file
    fclose( $file );

    //Explode the data. There are two values which make up a user, so chunk into users.
    $data = array_chunk( explode( " ", $read ), 2 );

    //The names of each element (purely to make code easier)
    $keys = array(
            "email",
            "password"
        );

    //For every user in the data file.
    foreach( $data as $userID=>$user ){
        //Combine the user data with keys
        $user = array_combine( $keys, $user );

        //If the current credentials are correct
        if( $user["email"] == $email && $user["password"] == $old_password ){
            //Change the password on this user
            $user["password"] = $new_password;

            //Update the user record
            $data[$userID] = $user;

            //We have changed the user password, change status
            $status = true;

            //Since we updated the user, we don't need to proceed through the loop
            break 1;
        }
    }

    //This is the output data
    $outputData = array();

    //Since we broke the array into users, we need to put it back into a 1d array
    foreach($data as $userID=>$user){
        $outputData[] = implode( ' ', $user );
    }

    //Implode the array so we can put it back in the file
    $outputData = implode( " ", $outputData );

    //Write the data to the file.
    file_put_contents( "info.txt", $outputData );

    //Return the status, which will be true.
    return $status;
}
