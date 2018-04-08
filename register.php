<?php

    $con = mysqli_connect("localhost","bffadmin","pa55word","bffbook");

    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }

    $fname = "";
    $lname = "";
    $email = "";
    $emailCon = "";
    $pword = "";
    $pwordCon = "";
    $date = "";

    $error_array = "";

    if(isset($_POST['registerButton'])) {
        // First Name
        $fname = strip_tags($_POST['registerFirstName']);
        $fname = str_replace(" ", "", $fname);
        $fname = ucfirst(strtolower($fname));
        // Last Name
        $lname = strip_tags($_POST['registerLastName']);
        $lname = str_replace(" ", "", $lname);
        $lname = ucfirst(strtolower($lname));
        // Email
        $email = strip_tags($_POST['registerEmail']);
        $email = str_replace(" ", "", $email);
        $email = ucfirst(strtolower($email));
        // Email Confirmation
        $emailCon = strip_tags($_POST['registerEmailConfirmation']);
        $emailCon = str_replace(" ", "", $emailCon);
        $emailCon = ucfirst(strtolower($emailCon));
        // Password Confirmation
        $pword = strip_tags($_POST['registerPassword']);
        // Password Confirmation
        $pwordCon = strip_tags($_POST['registerPasswordConfirmation']);
        // Date
        $date = date("Y-m-d");

        if($email == $emailCon) {
            if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $email = filter_var($email,FILTER_VALIDATE_EMAIL);
                $emailCheck = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");
                $numRows = mysqli_num_rows($emailCheck);
                if($numRows > 0) {
                    echo "Email address already in use!";
                }
            } else {
                echo "Invalid format!";
            }
        } else {
            echo "Emails do not match!";
        }

    }
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BFFBook</title>
    <style>
        body * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <form action="register.php" method="POST">
        <label for="registerFirstName">First Name: </label>
        <input type="text" name="registerFirstName" placeholder="First Name" required>
        <br>
        <label for="registerLastName">Last Name: </label>
        <input type="text" name="registerLastName" placeholder="Last Name" required>
        <br>
        <label for="registerEmailAddress">Email Address: </label>
        <input type="text" name="registerEmail" placeholder="Email Address" required>
        <br>
        <label for="registerEmailAddressConfirmation">Email Address Confirmation: </label>
        <input type="text" name="registerEmailConfirmation" placeholder="Email Address Confirmation" required>
        <br>
        <label for="registerPassword">Password: </label>
        <input type="password" name="registerPassword" placeholder="Password" required>
        <br>
        <label for="registerPasswordConfirmation">Password Confirmation: </label>
        <input type="password" name="registerPasswordConfirmation" placeholder="Password Confirmation" required>
        <br>
        <input type="submit" name="registerButton" value="Register">
    </form>
</body>
</html>