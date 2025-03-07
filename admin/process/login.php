<?php

class login_class
{

    public function login($con, $username, $password)
    {
        session_start();

        
        
        // Sanitize user inputs
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        // Use prepared statement to prevent SQL injection
        $stmt = $con->prepare("SELECT * FROM `account` WHERE `username` = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $accountvalue = $result->fetch_assoc();
        
        // Check if username exists
        if ($accountvalue) {
            // Check if the password field is empty
            if (empty($password)) {
                echo '<script>alert("Password cannot be blank");</script>';
            } elseif (!password_verify($password, $accountvalue['password'])) {
                echo '<script>alert("Incorrect Password");</script>';
            } else {
                // Set session variables
                $_SESSION['Authapp'] = session_id();
                $_SESSION['name'] = $accountvalue['first_name'].' '.$accountvalue['middle_name'].' '.$accountvalue['last_name'];
                $_SESSION['branch'] = $accountvalue['branch'];
                $_SESSION['designation'] = $accountvalue['designation'];
                echo '<script>
                alert("Login Successfully");
                window.location.href="dashboard.php";
                </script>';
            }
        } else {
            echo '<script>alert("Username not found");</script>';
        }
        
        // Close connection
        $stmt->close();
        $con->close();
        
    }
}
