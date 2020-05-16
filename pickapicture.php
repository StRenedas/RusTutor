<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: index.php?notloggedin");
        exit();
    }
    include 'db-connect.php';
    $number = (int) $_GET['n'];

    $query = "SELECT * FROM `questions` WHERE id = $number and `type` = 2;";
    $result = mysqli_query($connection, $query);
    $question = mysqli_fetch_assoc($result);

    $choices_query = "SELECT * FROM `options` WHERE question_id = $number UNION ALL SELECT * FROM `answer` WHERE question_id = $number ORDER BY RAND();";
    $choices_result = mysqli_query($connection, $choices_query);

    $answer_query = "SELECT * FROM `answer` WHERE question_id = $number;";
    $answer_result = mysqli_query($connection, $answer_query);
    $answer = mysqli_fetch_assoc($answer_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HowToRus</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/browser-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="vendor/normalize.css">
    <link rel="stylesheet" href="pages/pickapicture.css">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body class = "page">
    <header class="header">
        <div class="header__content">
            <a href="<?php if (!isset($_SESSION['username'])) echo "index.php"; else echo "homePage.php";?>" class="homelink"><img src="images/header/logo_44.png" alt="logo" class="header__logo"></a>
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link" href="http://edu.susu.ru">E-SUSU</a>
                <p class="header__link">Welcome, <?php  echo $_SESSION['username'];  ?></p>
                <form action="login-logout/logout.php" method="post" id="logout" class="logout">
                    <button type="submit" class="logout__button" name="logout-submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </header>


    <main class="content">
        <section class="task">
            <p class = "task__text"><?php echo $question['value']?></p>
            <p><?php echo $question['points']?></p>
            <form class = "task__form" action="picture_process.php" method="GET">
                <input class="task__number" type = "hidden" name = 'number' value = '<?php echo $number?>'>
                <div class="task__allpictures">
                <?php while($choices = mysqli_fetch_assoc($choices_result)):?>
                    <div class="task__choice">
                        <input type="radio" name="choice" value="<?php echo $choices['value'];?>" id = "choice">
                        <label class = "radio-label" for="choice"><img class = "radio-image" src="<?php echo $choices['value'];?>" alt=""></label>
                    </div>
                <?php endwhile; ?>
                </div>
                <button class="task__accepted" type = "submit" name="submit-picture">Next</button>
            </form>
        </section>


        
    </main>


    <footer class="footer">
        <p class="footer__copyright">&copy Stanislav Sosedov</p>
    </footer>


</body>
</html>