<?php
session_start();
require_once 'db-connect.php';
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if (isset($_GET['submit'])) {
    // Get question number and an answer from the submitted form.
    $number = $_GET['number'];
    $answer_given = $_GET['answer'];
    $next = $number+1;

    // Get total number of questions.
    $total_query = "SELECT * FROM `questions` WHERE `type` = 1 ORDER BY `id` DESC LIMIT 1;";
    $total_results = mysqli_query($connection, $total_query);
    $total = mysqli_fetch_assoc($total_results);
    $total = $total['id'];

    // Get the answer from DB.
    $answer_query = "SELECT * FROM `answer` WHERE question_id = $number;";
    $answer_result = mysqli_query($connection, $answer_query);
    $answer = mysqli_fetch_assoc($answer_result);

    if ($answer_given == $answer['value']) {
        // Get a number of points for correct answer for a particular question.
        $points_query = "SELECT * FROM `questions` WHERE id = $number;";
        $points_result = mysqli_query($connection, $points_query);
        $points = mysqli_fetch_assoc($points_result);
        $current_question_points = $points['points'];
        $_SESSION['score']+=$current_question_points;
    }
    if ($number == $total) {
        $user = $_SESSION['userid'];
        $rating_query = "SELECT * FROM `users` WHERE `user_id` = $user;";
        $rating_result = mysqli_query($connection, $rating_query);
        $rating = mysqli_fetch_assoc($rating_result);
        $current_user_rating = $rating['rating'];
        $rating_to_update = $current_user_rating+$_SESSION['score'];
        #echo $current_user_rating.'<br/>';
        #echo $_SESSION['score'];
        $update_rating_query = "UPDATE `users` SET `rating` = $rating_to_update WHERE `user_id` = $user;";
        mysqli_query($connection, $update_rating_query);
        $_SESSION['score'] = 0;
        $_SESSION['rating'] = $rating_to_update;
        header("Location: final.php");
        exit();
    }
    else header("Location: wordtranslate.php.?n=".$next);
}