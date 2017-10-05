<?php
/**
* variables declared as $username & $password
*
* @param $username
* @param $password
*
* return as 'dan' and 'hi'
*/

$userThing = $_POST["Username"];
$passThing = $_POST["Password"];

session_start();

function loginChecking($userThing, $passThing) {

    $username = 'FuryMuso88';
    $password = 'CheatthePoly!2917';

    if ($_SESSION['loggedIn'] !== 1) {
        if ($username !== $userThing || $password !== $passThing) {
            header('Location: login.php');
        } else {
            $_SESSION['loggedIn'] = 1;
            header('Location: home-form.php');
        }
    }
}

if(!empty($userThing) && !empty($passThing)) {
    loginChecking($userThing, $passThing);
}


function isLoggedIn() {
    session_start();
    if ($_SESSION['loggedIn'] == 1) {
        return true;
    }
    return false;
}