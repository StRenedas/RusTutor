<?php 
    session_start();
    // Once on deploy, uncomment the string below.
    #if(!isset($_POST['username'])) header("Location: index.php")

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="">Your new rating after completing the quiz: <?php echo $_SESSION['rating'] ?></p>
</body>
</html>