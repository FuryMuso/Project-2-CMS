<?php
session_start();
    function logMeOut() {
        unset($_SESSION['loggedIn']);
        header('Location: login.php');
    }

logMeOut();

?>

