<?php 
    $con = mysqli_connect("localhost","bffadmin","pa55word","bffbook");
    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }
    $query = "INSERT INTO test VALUES('1','Samantha')";
    $query = mysqli_query($con,$query);
?> 

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BFFBook</title>
</head>
<body>
    <h1>Welcome to BFFBook!</h1>
</body>
</html>