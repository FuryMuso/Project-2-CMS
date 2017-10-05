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
    <title>CMS Login</title>
</head>
<h1>Login Page</h1>
<form method="POST" action="../Project-2-CMS/home-form.php">
    <div>
        <h2>Username:</h2>
        <input type="text" name="Username">
    </div>
    <div>
        <h2>Password:</h2>
        <input type="password" name="Password">
    </div>
    <div>
        <p><br></p>
        <input type="submit" value="Home">
    </div>
</form>
</body>
</html>