<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $password = $_POST['password'];
 
    // Prepare the SQL statement with placeholders
    $sql = "SELECT * FROM users WHERE fname=? AND password=?";
    $statement = mysqli_prepare($connection, $sql);
    
    if ($statement) {
        // Bind the parameters to the placeholders
        mysqli_stmt_bind_param($statement, "ss", $fname, $password);

        // Execute the prepared statement
        mysqli_stmt_execute($statement);

        // Get the result
        $result = mysqli_stmt_get_result($statement);

        if (mysqli_num_rows($result) > 0) {
            // Authentication successful
            $users = mysqli_fetch_assoc($result);
            header("Location: view.html");
            exit;
        } else {
            // Authentication failed
            echo "Invalid name or password!";
        }
    } else {
        // Error preparing the statement
        echo "Error: " . mysqli_error($connection);
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginForm.css">
</head>
<body>
    <div class="main-div">

        <p> Welcome to My Visitor's app,<br> Sign
        in to Continue.</p><br><br>

        <p>Don't have an account?<a href="signup.php"> Create account<br>
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