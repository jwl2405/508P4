<?php
require_once ('connection.php');


class User{
public function modifyUser()
    {
        global $conn;

        $sqlQuery = "UPDATE user
                     (email, username, password) 
                     VALUES
                     (:email, :changedText, :password)"; 

        $stmt = $conn->prepare($sqlQuery);

        $stmt->bindValue(':email', $_POST["email"]);
        $stmt->bindValue(':username', $_POST["changedText"]);
        $pwd_hashed = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $stmt->bindValue(':password', $pwd_hashed);
        $stmt->execute();
        header("Location: Login.php");
    }
}


$user = new User();

$user->modifyUser();


?>