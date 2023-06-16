<?php
$Name = $_POST['Name'];
$Password = $_POST['Password'];

echo $Name."<>".$Password;

$server = "localhost";
$username ="root";
$password ="";
$dbname ="visitors";

$connection =mysqli_connect('localhost','root','visitors');

if($connection){
echo"<br> CONNECTED SUCCESSFULLY";

}
else{
    echo "CONNECTION FAILED";
}
/*$sql = "INSERT INTO user (Name,Password) VALUES ('Name','Password')";
 
if($insertData){
    echo "<br> Inserted Successfully";
}
else{
    echo "<br> Insert failed";
}*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="main-div">

        <p> Welcome to My Visitor's app,<br> Sign
        in to Continue.</p><br><br>

        <p>Don't have an account?<a href="signup.html"> Create account<br>
        It takes less than a minute.</a></p><br><br>

 <form method="POST">
    <label>Name <br><input type="text"></label><br><br>

    <label>Password<br><input type="password"></label><br><br>

    <a href="recoveryPage.html" class="center">Forgot Password?</a><br><br>

    <button type="submit"><a href="view.html" class="sign-in">Sign in</a></button>


 </form>       
    </div>
</body>
</html>