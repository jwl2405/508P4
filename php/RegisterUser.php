<?php
require_once ('connection.php');


class User{
public function addUser()
    {
        global $conn;
        
        $sqlQuery = "INSERT INTO user
                     (email, username, password) 
                     VALUES
                     (:email, :username, :password)"; 
        
        $stmt = $conn->prepare($sqlQuery);
    
        $stmt->bindValue(':email', $_POST["email"]);
        $stmt->bindValue(':username', $_POST["username"]);
        $pwd_hashed = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $stmt->bindValue(':password', $pwd_hashed);
        $stmt->execute();
        header("Location: login.php");
    }  

/*
public function addGym(){
    global $conn;
        
    $sqlQuery = "INSERT INTO user
                 (email, username, pwd) 
                 VALUES
                 (:email, :username, :pwd)"; 
    
    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindValue(':email', $_POST["email"]);
    $stmt->bindValue(':username', $_POST["username"]);
    $stmt->bindValue(':pwd', $_POST["pwd"]);
    $stmt->execute();
}
public function addGrocery(){
    global $conn;
        
    $sqlQuery = "INSERT INTO user
                 (email, username, pwd) 
                 VALUES
                 (:email, :username, :pwd)"; 
    
    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindValue(':email', $_POST["email"]);
    $stmt->bindValue(':username', $_POST["username"]);
    $stmt->bindValue(':pwd', $_POST["pwd"]);
    $stmt->execute();
}
*/
}


$user = new User();

$user->addUser();


?>