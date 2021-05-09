<?php

// Display all errors, very useful for PHP debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Parameters of the MySQL connection 
$servername = "localhost";
$username = "lijw";
$password = "V00871287";
$database = "project_lijw";

try {
    // Establish a connection with the MySQL server
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

session_start();

if (isset($_SESSION['user_ID']))
{

    // If the page is receiving the email and password from the login form then verify the login data
    if (!isset($_POST['email']) && isset($_POST['password']))
    {
        $stmt = $conn->prepare("SELECT ID, password FROM user WHERE email=:email");
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->execute();
        $queryResult = $stmt->fetch();
        $pwd_plain = htmlspecialchars($_POST["password"]);
        // Verify password submitted by the user with the hash stored in the database

        echo $queryResult[1]; 

        if(!empty($queryResult) && password_verify($pwd_plain, $queryResult[1]))
        {
            // Create session variable
            $_SESSION['user_ID'] = $queryResult['ID'];
            
            echo "Working";
            header("Location: Home.php");
        } else {
            // Password mismatch
            echo "NotWorking";
            require('Login.php');
            exit();
        }
    }
    else
    {
        // Show login page
        require('Login.php');
        <form method="POST">
        Username: <input name="user" type="text"><br>
        Password: <input name="pass" type="text"><br><br>
        <input type="submit" value="submit">
        </form>

}
        exit();
    }
}


session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();




?>