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
                <p class="header__link">Welcome, <?php  echo $_SESSION['username'];  ?></p>
                <form action="login-logout/logout.php" method="post" id = "logout" class = "logout">
                    <button type="submit" class = "logout__button"name = "logout-submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </header>



    <main class="content">
        <section class="intro">
            <h1 class = "content__title">Pick your level</h1> 
            <p class = "content__subtitle">Your rating at
            <?php 
            if($_SESSION['rating']<100) echo 'Beginner is ';
            elseif ($_SESSION['rating']>=100 && $_SESSION['rating']<200) echo 'Elementary is ';
            else echo 'Pre-intermediate is ';
            echo $_SESSION['rating']; 
            ?></p>
            <div class="typecards">
                <a href = "wordtranslate.php.?n=1" class="cards__type">
                    <img class="cards__type__image" src="images/cards/language-white.svg" alt="icon">
                    <h2 class="cards__type__title">Translation</h2>
                </a>
                <a href = "pickapicture.php.?n=12" class="cards__type">
                    <img class="cards__type__image" src="images/cards/language-white.svg" alt="icon">
                    <h2 class="cards__type__title">Pictures</h2>
                </a>                           
                <a href = "#" class="cards__type">
                    <img class="cards__type__image" src="images/cards/learner-white.svg" alt="icon">
                    <h2 class="cards__type__title">Word</h2>
                </a>
                <a href = "#" class="cards__type">
                    <img class="cards__type__image" src="images/cards/brain-white.svg" alt="icon">
                    <h2 class="cards__type__title">1 of many</h2>
                </a>
            </div>
        </section>
    </main>



    <footer class="footer">
        <p class="footer__copyright">&copy Stanislav Sosedov</p>
    </footer>
</body>
</html>