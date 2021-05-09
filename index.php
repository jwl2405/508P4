
/*<?php
require_once ('connection.php');

if (! empty($_SESSION['logged_in']))
{
    ?>

    <p>here is my super-secret content</p>
    <a href='Logout.php'>Click here to log out</a>

    <?php
}
else
{
    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
}
?>
