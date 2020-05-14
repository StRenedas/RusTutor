<?php 
    include_once 'db-connect.php';
   /* $q_query = "SELECT * FROM `questions` WHERE `type` = 3;";
    $q_results = mysqli_query($connection, $q_query);
    while ($q = mysqli_fetch_assoc($q_results)) {
        echo $q['value'];
    }

    $a_query = "SELECT * FROM `answer` WHERE `question_id` = 17;";
    $a_results = mysqli_query($connection, $a_query);
    $a = mysqli_fetch_assoc($a_results);
    $a = $a['value'];
    echo $a;
    $words = explode(' ', $a);
    for ($i = 0; $i < sizeof($words);  $i++) {
        echo '<h1 draggable = "true">'.$words[$i].'</h1>';
    }*/


    
    /*$total_query = "SELECT * FROM `questions` WHERE `type` = 2 ORDER BY `id` DESC LIMIT 1;";
    $total_results = mysqli_query($connection, $total_query);
    $total = mysqli_fetch_assoc($total_results);
    $total = $total['id'];*/

    $q_query = "SELECT * FROM `questions` WHERE `type` = 4;";
    $q_results = mysqli_query($connection, $q_query);
    while ($q = mysqli_fetch_assoc($q_results)) {
        echo $q['value'].'<br/>';
    }
    $choices_query = "SELECT * FROM `options` WHERE question_id = 18 UNION ALL SELECT * FROM `answer` WHERE question_id = 18 ORDER BY RAND();";
    $choices_result = mysqli_query($connection, $choices_query);
    while ($choices = mysqli_fetch_assoc($choices_result)) {
        echo $choices['value'].'<br/>';
    }
    

?>

 