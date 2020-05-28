<?php 
if (isset($_POST['signin-submit'])) {
    require '../db-connect.php';
    $username = $_POST['reg-username'];
    $email = $_POST['reg-email'];
    $password = $_POST['reg-password'];
    $passwordRepeat = $_POST['reg-password-repeat'];

    if (empty($username)||empty($email)||empty($password)||empty($passwordRepeat)) {
        header("Location: ../index.php?error=emptyFields");
        exit();
    }
    else if ($password != $passwordRepeat) {
        header("Location: ../index.php?error=passdontmatch");
        exit();
    }
    else {
        $sql = "SELECT username FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../index.php?error=usernametaken");
                exit();
            }
            else {
                $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?);";
                $stmt = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
else {
    header("Location: ../index.php");
    exit();
}