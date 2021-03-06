<?php
    session_start();
    if(isset($_SESSION['username'])) {
        header("Location: homePage.php?loggedin");
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
    <link rel="stylesheet" href="pages/FAQ.css">
    <!-- Next line should be deleted when is sent to production-->
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body class="page">



    <header class="header">
        <div class="header__links_mobile">
            <a class="header__link_mobile">FAQ</a>
            <a class="header__link_mobile" href = "http://edu.susu.ru">E-SUSU</a>
            <a class="header__link_mobile">You're not logged in</a>
        </div>
        <div class="header__content">
            <a href="<?php if (!isset($_SESSION['username'])) echo "index.php"; else echo "homePage.php";?>" class="homelink"><div class="header__logo"></div></a>
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link" href = "http://edu.susu.ru">E-SUSU</a>
                <a class="header__link">You're not logged in</a>
            </div>
            <span class="header__button_mobile"></span>
        </div>
    </header>



    <main class="content">
        <section class="guest-info">
            <div class="infoblock">
                <h1 class = "infoblock__title">Quick Guide</h1>
                <p class = "infoblock__subtitle">That's a service to practice your skills at Russian language and get some good grades at SUSU.</p>
                <div class="infoblock__container">
                    <ul class="infoblock__instructions">
                        <li>Signup using the form on the main page.</li>
                        <li>Starting with ‘Begginer’ course, select the task type.</li>
                        <li>Complete a block of tasks to increase your overall rating.</li>
                        <li>Show your results to your teacher.</li>
                        <li>Get some good grades!</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p class="footer__copyright">&copy Stanislav Sosedov</p>
    </footer>
</body>
<script defer src="/burger.js"></script>
</html>