<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: index.php?notloggedin");
        exit();
    }
    include 'db-connect.php';
    $number = (int) $_GET['n'];

    $query = "SELECT * FROM `questions` WHERE id = $number and `type` = 4;";
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
    <link rel="stylesheet" href="pages/onefrommany.css">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body class = "page">
    <header class="header">
        <div class="header__links_mobile">
            <a class="header__link_mobile">FAQ</a>
            <a class="header__link_mobile" href = "http://edu.susu.ru">E-SUSU</a>
            <p class="header__link_mobile">Welcome, <?php  echo $_SESSION['username'];  ?></p>
        </div>
        <div class="header__content">
            <a href="<?php if (!isset($_SESSION['username'])) echo "index.php"; else echo "homePage.php";?>" class="homelink"><div class="header__logo"></div></a>
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link" href="http://edu.susu.ru">E-SUSU</a>
                <p class="header__link">Welcome, <?php  echo $_SESSION['username'];  ?></p>
                <form action="login-logout/logout.php" method="post" id="logout" class="logout">
                    <button type="submit" class="logout__button" name="logout-submit">LOGOUT</button>
                </form>
            </div>
            <span class="header__button_mobile"></span>
        </div>
    </header>


    <main class="content">
        <section class="task">
            <p class="task__description">Pick a right definition to a word</p>
            <div class="task__text-wrapper">
                <p class = "task__text"><?php echo $question['value']?></p>
            </div>
            <p class = "task__points">Points for this task: <?php echo $question['points']?></p>
            <form class = "task__form" action="oneof_process.php" method="GET">
                <input class="task__number" type = "hidden" name = 'number' value = '<?php echo $number?>'>
                <select class="task__select" name = "choice-selected">
                    <?php while($choices = mysqli_fetch_assoc($choices_result)):?>
                        <option class="task__option" value="<?php echo $choices['value'];?>" name = "option-selected"><?php echo $choices['value'];?></option>
                    <?php endwhile; ?>
                </select>
                <button class="task__accepted" type = "submit" name="submit-option">Next</button>
            </form>
        </section>


        <footer class="footer">
            <p class="footer__copyright">&copy Stanislav Sosedov</p>
        </footer>
    </main>



</body>
<script defer src="/burger.js"></script>
</html>