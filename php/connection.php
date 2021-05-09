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

// if (isset($_POST['RegisterScreen'])) {
//     $username = $_POST['userid'];
//     $email = $_POST['emailid'];
//     $password = $_POST['pswrd'];

//     $sql_u = "SELECT * FROM users WHERE username='$userid'";
//   	$sql_e = "SELECT * FROM users WHERE email='$emailid'";
//     $sql_e = "SELECT * FROM users WHERE password='$pswrd'";

//   	$res_u = mysqli_query($conn, $sql_u);
//   	$res_e = mysqli_query($conn, $sql_e);
//         $query = "INSERT INTO users (username, email, password) 
//       	    	  VALUES ('$username', '$email', '$pswrd ','".md5($password)."')";
//            $results = mysqli_query($db, $query);
//            echo 'Saved!';
//            exit();
// }

//     if(isset($_POST['Login'])){
//         $email = $_POST['emailid'];
//         $password = $_POST['password'];

//         $result1 = mysql_query("SELECT username, password FROM Users WHERE username = '".$name."' AND  password = '".$password."'");

//         if(mysql_num_rows($result1) > 0 )
//         { 
//             $_SESSION["logged_in"] = true; 
//             $_SESSION["naam"] = $name; 
//         }
//         else
//         {
//             echo 'The username or password are incorrect!';
//         }

//     }


// If the user_ID session is not set, then the user has not logged in yet


if (!isset($_SESSION['user_ID']))
{
    // If the page is receiving the email and password from the login form then verify the login data
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $stmt = $conn->prepare("SELECT ID, password FROM user WHERE email=:email");
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->execute();
        $queryResult = $stmt->fetch();
        $pwd_plain = htmlspecialchars($_POST["password"]);
        // Verify password submitted by the user with the hash stored in the database

        if(!empty($queryResult) && password_verify($pwd_plain, $queryResult[0]))
        {
            // Create session variable
            $_SESSION['user_ID'] = $queryResult['ID'];
            
            // Redirect to URL 
            //header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
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
        exit();
    }
}




?>