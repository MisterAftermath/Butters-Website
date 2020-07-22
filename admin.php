<!DOCTYPE html>
<?php

    $username = "admin";
    $password = "adminpass";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: success.php");
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
           
            $_SESSION['loggedin'] = true;
            header("Location: https://www.youtube.com/watch?v=0JgF4CMXU9M");
        
    }
}


?>
<div class="bg-image"></div>

<div class="bg-text">
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/butters-circle.png">
    <title>Forms</title>

</head>

<body>

    <div>
        <!-- The Butters' Logo-->
        
        <a href="./index.php">
            <img src="./img/butters-circle.png" alt="The official logo of the Butters" class="center logo">
        </a>
    </div>

    <div>
        <!-- Top navigation bar -->

        <p class="center">
        <a href="./index.php" class="navigationLink" ">Home</a> <a href="./about.php" class="navigationLink">About us</a> <a href="./admin.php" class="navigationLink "style="text-decoration: underline;">Admin</a>
        </p>
    </div>

    <hr>

    <h1 class="login" style="font-family: 'Nunito', sans-serif;">
        Administrator Login
    </h1>

    <form method="post" action="admin.php">
           <h1  class="login" style="font-family: 'Nunito', sans-serif;">Username</h1>
            <input type="text" name=username style="font-family: 'Mukta' sans-serif;" placeholder="Enter Username"><br/>
            <h1  class="login" style="font-family: 'Nunito', sans-serif;">Password</h1>
            <input type="password" name="password" style="font-family: 'Mukta' sans-serif;" placeholder="Enter Password"><br/>
            <input type="submit" value="Login!">
        
        <br>
        <a href="https://www.youtube.com/watch?v=FZqVk-9lqls" class="forgot">Forgot your password?</a>


    </form>
</div>
</body>
</html>