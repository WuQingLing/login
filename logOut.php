<?php
session_start();

if(isset($_SESSION['logedin'])){
    $_SESSION = array();
    session_destroy();
}
echo "LogOut success!";
?>