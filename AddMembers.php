<?php
require_once ('connection.php');
class User{

    public function AddMembers(){
        global $conn;
        $var = $_SESSION['user_ID'];
            
        $sqlQuery = "INSERT INTO member
                                 (First_name, Last_name, email, username, password, ID) 
                                 VALUES (:nameF, :nameL, :email, :username, :password, ID)";
        
        $stmt = $conn->prepare($sqlQuery);
    
        $stmt->bindValue(':nameF', $_POST["nameF"]);
        $stmt->bindValue(':nameL', $_POST["nameL"]);
         $stmt->bindValue(':email', $_POST["email"]);
        $stmt->bindValue(':username', $_POST["username"]);
        $stmt->bindValue(':password', $_POST["password"]);
        $stmt->execute();
    }
    $user = new User();

$user->AddMember();

?>