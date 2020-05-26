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
    <title>HowToRus</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/browser-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="vendor/normalize.css">
    <link rel="stylesheet" href="pages/final.css">
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
            <a href="<?php if (!isset($_SESSION['username'])) echo "index.php"; else echo "homePage.php";?>" class="homelink"><img src="images/header/logo_44.png" alt="logo" class="header__logo"></a>
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link" href = "http://edu.susu.ru">E-SUSU</a>
                <p class="header__link">Welcome, <?php  echo $_SESSION['username'];  ?></p>
                <form action="login-logout/logout.php" method="post" id = "logout" class = "logout">
                    <button type="submit" class = "logout__button"name = "logout-submit">LOGOUT</button>
                </form>
            </div>
            <button class="header__button_mobile">hello</button>
        </div>
    </header>
    
    <main class="main">
        <section class="final">
            <div class="final__content">
                <p class = "final__rating">
                Your new rating at 
                <?php 
                if($_SESSION['rating']<100) echo 'Beginner ';
                elseif ($_SESSION['rating']>=100 && $_SESSION['rating']<200) echo 'Elementary ';
                else echo 'Pre-intermediate ';
                ?>
                after completing the quiz is:
                <?php echo $_SESSION['rating'];  ?>
                </p>
                <button class = "final__button"><a href="<?php if (!isset($_SESSION['username'])) echo "index.php"; else echo "homePage.php";?>" class="final__back">Back to homepage</a></button>
            </div>
        </section>
    </main>


    <footer class="footer">
        <p class="footer__copyright">&copy Stanislav Sosedov</p>
    </footer>
</body>
<script defer src="/burger.js"></script>
</html>