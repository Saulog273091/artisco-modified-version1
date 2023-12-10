<?php

session_start();
// unset($_SESSION['emailAdd']);
// unset($_SESSION['passWord']);
session_unset();

header("location:LogIn.php");
session_destroy();

?>