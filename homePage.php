<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: index.php?notloggedin");
        exit();
    }
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
    <link rel="stylesheet" href="pages/homePage.css">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body class="page">
    <header class="header">
        <div class="header__content">
            <img src="images/header/logo_44.png" alt="logo" class="header__logo">
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link" href = "http://edu.susu.ru">E-SUSU</a>
                <!--<a class="header__link"><a href = "http://edu.susu.ru">E-SUSU</a></a>-->
                <a class="header__link">Profile</a>
                <p class="header__link">Welcome, <?php  echo $_SESSION['username'];  ?></p>
                <form action="logout.php" method="post" id = "logout" class = "logout">
                    <button type="submit" class = "logout__button"name = "logout-submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </header>



    <main class="content">
        <section class="intro">
            <h1 class = "content__title">Pick your level</h1> 
            <p class = "content__subtitle">Your rating at %Beginner% is 14%</p>
            <div class="cards">
                <a href = "beginnerLevel.php" class="cards__item cards__item_level_easy">
                    <img class="cards__image" src="images/cards/language-white.svg" alt="icon">
                    <h2 class="cards__title">Beginner</h2>
                    <p class="cards__subtitle">Russian language basics</p>
                </a>                   
                <a href = "#" class="cards__item cards__item_level_med">
                    <img class="cards__image" src="images/cards/learner-white.svg" alt="icon">
                    <h2 class="cards__title">Elementary</h2>
                    <p class="cards__subtitle">Making a step forward</p>
                </a>
                <a href = "#" class="cards__item cards__item_level_hard">
                    <img class="cards__image" src="images/cards/brain-white.svg" alt="icon">
                    <h2 class="cards__title">Pre-Intermediate</h2>
                    <p class="cards__subtitle">Not a game now!</p>
                </a>
            </div>
        </section>
    </main>



    <footer class="footer">
        <p class="footer__copyright">&copy Stanislav Sosedov</p>
    </footer>
</body>
</html>