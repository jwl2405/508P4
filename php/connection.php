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

//$sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

/*
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);


*/
// Start or resume session variables
session_start();


// If the user_ID session is not set, then the user has not logged in yet
/*
if (!isset($_SESSION['user_ID']))
{
    // If the page is receiving the email and password from the login form then verify the login data
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $stmt = $conn->prepare("SELECT ID, password FROM user WHERE email=:email");
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->execute();
        
        $queryResult = $stmt->fetch();
        
        // Verify password submitted by the user with the hash stored in the database
        if(!empty($queryResult) && password_verify($_POST["password"], $queryResult['password']))
        {
            // Create session variable
            $_SESSION['user_ID'] = $queryResult['ID'];
            
            // Redirect to URL 
            header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        } else {
            // Password mismatch
            require('Home.php');
            exit();
        }
    }
    else
    {
        // Show login page
        require('Home.php');
        exit();
    }
}

*/



?>