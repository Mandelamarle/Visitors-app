<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Department = $_POST['Department'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];

echo $FirstName."<>".$LastName."<>".$Email."<>".$PhoneNumber."<>".$Department."<>".$Password."<>".$ConfirmPassword;

$server = "localhost";
$username ="root";
$password ="";
$dbname = "visitors' app";

$connection = mysqli_connect($server,$username,$password,$dbname);

if($connection){
    echo "<br> CONNECTED SUCCESSFULLY";
}
else{
    echo "CONNECTION FAILED";
}
$sql = "INSERT INTO user (FirstName,LastName,Email,PhoneNumber,Department,Password,ConfirmPassword)
VALUES ('$FirstName','$LastName','$Email','$PhoneNumber','$Department','$password','confirmpassword')";

$insertData = mysqli_query($connection,$sql);

if($insertData){
    echo "<br> Inserted Successfully";
}
else{
    echo "<br> Insert failed";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="main-div">
<h1>Sign up</h1>
<p>Enter your details to create an account with my Visitor's app.</p><br>

<div class="form">
    <form method="POST">
        <div class="first-div"> 
        <div class="first-first-div">
            <label>First Name*</label><br><input type="text"><br><br>
        </div>    
        <div class="first-second-div">
            <label>Last Name*</label><br> <input type="text"><br><br>
        </div>
        </div>


        
        <label>Email* <br><input type="email" class="email"></label><br><br>
        <label>Phone Number* <br><input type="tel" class="number" required></label><br><br>
        <label>Department*<br> <input type="text" class="department"></label> <br><br>
        <div class="second">
            <div class="second-first">
                <label> Password*<br> <input type="password" required>
                </label><br><br>
            </div>
            <div class="second-second">
                <label> Confirm Password*<br> <input type="password" required>
                </label><br><br>
            </div>
        </div>
        
       
        <button type="submit"><a href ="welcomepage.html">SignUp</a></button>
    </form>

</div>

    </div>
</body>
</html>