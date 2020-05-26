<?php
if (isset($_POST['login-submit'])) {
    require '../db-connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)||empty($password)) {
        header("Location: ../index.php?error=emptyFields");
        exit();
    }
    else {
        $sql = "SELECT * FROM `users` WHERE username = ?;";
        $statement = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($statement, 's', $username);
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);
            if ($row = mysqli_fetch_assoc($result)) {
                if ($password != $row['password']) {
                    header("Location: ../index.php?error=wrongpass");
                    exit();
                }
                else if ($password == $row['password']) {
                    session_start();
                    $_SESSION['userid'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['rating'] = $row['rating'];
                    header("Location: ../homePage.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error=wrongpass");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../index.php");
    exit();
}