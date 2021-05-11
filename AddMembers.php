<?php
require_once ('connection.php');
class User{

    public function AddMember(){
        global $conn;
            
        $sqlQuery = "UPDATE INTO member
                    (First_name, Last_name, email, username, password) 
                    VALUES 
                    (:First_name, :Last_name, :email, :username, :password)";

        $stmt = $conn->prepare($sqlQuery);
    
        $stmt->bindValue(':First_name', $_POST["First_name"]);
        $stmt->bindValue(':Last_name', $_POST["Last_name"]);
        $stmt->bindValue(':email', $_POST["email"]);
        $stmt->bindValue(':username', $_POST["username"]);
        $pwd_hashed = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $stmt->execute();
    }
    $user = new User();

$user->AddMember();

?>

