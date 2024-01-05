<?php

// session_start();

// if (!isset($_SESSION['isLogin']))
// header('location: login.php');

session_start();

if (isset($_SESSION["islogin"])) {
    header("Location: login.php");
    exit;

}

?>