<?php
include 'connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Perform validation   
    // Add your validation logic here

    // Check if passwords match
    if ($password !== $confirmPassword) {
        // Handle password mismatch error
        echo "Passwords do not match!";
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO users (fname, lname, email, contact, department, password) 
            VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$department', '$password')";
    
    // Execute the query
    if (mysqli_query($connection, $sql)) {
        // Redirect to a welcome page or display a success message
        header("Location: welcomepage.html");
        exit;
    } else {
        // Handle database insertion error
        echo "Error: " . mysqli_error($connection);
        exit;
    }
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
            <form method="POST" >
                <div class="first-div">
                    <div class="first-first-div">
                        <label>First Name<span class="bg">*</span></label><br>
                        <input type="text" name="firstName" id="username"><br><br>
                    </div>
                    <div class="first-second-div">
                        <label>Last Name<span class="bg">*</span></label><br>
                        <input type="text" name="lastName"><br><br>
                    </div>
                </div>

                <label>Email<span class="bg">*</span> <br>
                    <input type="email" name="email" class="email" required>
                </label><br><br>
                <label>Phone Number<span class="bg">*</span> <br>
                    <input type="tel" name="phoneNumber" class="number">
                </label><br><br>
                <label>Department<span class="bg">*</span><br>
                    <input type="text" name="department" class="department">
                </label><br><br>
                <div class="second">
                    <div class="second-first">
                        <label> Password<span class="bg">*</span><br>
                            <input type="password" name="password" required>
                        </label><br><br>
                    </div>
                    <div class="second-second">
                        <label> Confirm Password<span class="bg">*</span><br>
                            <input type="password" name="confirmPassword" required>
                        </label><br><br>
                    </div>
                </div>

                <button type="submit" onclick="login()">Sign Up</button>
            </form>
          
        </div>
    </div>
    <div class="popup" id="popup">
        <img src="">
        <h2>Thank You</h2>
        <p class="pt">Your details has been successfully submitted. Thanks!</p>
        <button type="button">OK</button>
    </div>
    <script>
        let username = document.getElementById("username");
        function login()
        {
            if(login.username.value);
            
        }

/**document.write("Hello " + username + ", how are you today");

function login(loginForm){
    if(loginForm.username.value && loginForm.password.value);
    {
        var username=document.getElementById("username").value;
        document.write('<html><body><h2><center>')
        document.write(username);
        document.write('</center></h2></body></html>')
    }
    else
    alert("please Enter Your Username & Password");
}***/
    </script>

</body>
</html>
