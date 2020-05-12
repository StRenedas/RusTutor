<?php
    session_start();
    include 'db-connect.php';
    $number = (int) $_GET['n'];

    $query = "SELECT * FROM `questions` WHERE id = $number;";
    $result = mysqli_query($connection, $query);
    $question = mysqli_fetch_assoc($result);
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
    <link rel="stylesheet" href="pages/wordtranslate.css">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
    <header class="header">
        <div class="header__content">
            <img src="images/header/logo_44.png" alt="logo" class="header__logo">
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link" href="http://edu.susu.ru">E-SUSU</a>
                <a class="header__link">Profile</a>
                <p class="header__link">Welcome, <?php  echo $_SESSION['username'];  ?></p>
                <form action="login-logout/logout.php" method="post" id="logout" class="logout">
                    <button type="submit" class="logout__button" name="logout-submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </header>


    <main class="content">
        <section class="task">
            <p class="task__description">Translate the highlighted word into Russian</p>
            <p class = "task__text"><?php echo $question['value']?></p>
            <p><?php echo $answer['value']?></p>
            <p><?php echo $question['points']?></p>
            <form class = "task__form" action="process.php" method="GET">
                <input class="task__number" type = "hidden" name = 'number' value = '<?php echo $number?>'>
                <input class="task__answer" type = "text" name = "answer">
                <button class="task__accepted" type = "submit" name="submit">Next</button>
            </form>
        </section>


        <footer class="footer">
            <p class="footer__copyright">&copy Stanislav Sosedov</p>
        </footer>
    </main>



</body>
</html>