<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BFFBook</title>
</head>
<body>
    <form action="register.php">
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