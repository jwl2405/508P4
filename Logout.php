<?php
require_once ('connection.php');

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:Login.php');
}
echo 'You have been logged out. <a href="/">Go back</a>';
?>