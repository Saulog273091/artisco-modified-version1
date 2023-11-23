<?php

session_start();
unset($_SESSION['emailAdd']);
unset($_SESSION['passWord']);


header("location:LogIn.php");
session_destroy();

?>