<?php
session_start();
if(isset($_SESSION["username"]))
{
    echo 'Login Success<br /> <h1>Welcome - '.$_SESSION["username"].'</h1>';
    include "index.php";
}
else
{
    header("location:pdo_login.php");
}

?>