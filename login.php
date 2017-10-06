<?php
include_once('loginprocess.php');
if(isLoggedIn()) {
    header('Location: home-form.php');
}

?>

<!DOCTYPE html>
<html lang = en>
<body>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet">
    <link href="login.css" type="text/css" rel="stylesheet">
    <title>CMS Login</title>
</head>
<h1>Login Page</h1>
<form method="POST" action="../Project-2-CMS/home-form.php">
    <div class="loginField">
        <h2>Username:</h2>
        <input type="text" name="Username">
    </div>
    <div class="loginField">
        <h2>Password:</h2>
        <input type="password" name="Password">
    </div>
    <div class="loginButton">
        <input type="submit" value="Acquiesce">
    </div>
</form>
</body>
</html>