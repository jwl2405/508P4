<?php
require_once ('connection.php');


class User{
public function SignOut()
    {
        global $conn;

        // Unset all of the session variables.
        $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $conn = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $conn["path"], $conn["domain"],
                $conn["secure"], $conn["httponly"]
            );
        }

        session_destroy();
        header("Location: Home.php");

    }
}

?>