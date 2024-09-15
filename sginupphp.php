<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("location: signup.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("location: signup.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("location: signup.php?error=Username already exists");
            exit();
        } else {
            // $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
            $sql2 = "INSERT INTO users (user_name, password) VALUES ('$uname', '$pass')";
            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
                echo "Registration Successful!";
                header("location: index.php");
                exit();
            } else {
                header("location: signup.php?error=Unknown error occurred");
                exit();
            }
        }
    }
} else {
    header("location: signup.php");
    exit();
}
?>