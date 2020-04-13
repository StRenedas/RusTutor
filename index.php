<?php
    session_start();
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
    <link rel="stylesheet" href="pages/index.css">
</head>
<body class="page">
    <header class="header">
        <div class="header__content">
            <img src="images/footer/logo_44.png" alt="logo" class="header__logo">
            <div class="header__links">
                <a class="header__link">FAQ</a>
                <a class="header__link">E-SUSU</a>
                <a class="header__link">You're not logged in</a>
            </div>
        </div>
    </header>
    <main class="content">
        <section class="guest-info">
            <div class="infoblock">
                <h1 class = "infoblock__title">Quick Guide</h1>
                <p class="infoblock__subtitle">That's a service to practice your skills at russian<br> language and get some good grades at SUSU.</p>
                <div class="infoblock__container">
                    <ul class="infoblock__instructions">
                        <li>Get your login from your teacher.</li>
                        <li>Starting with ‘Begginer’ course, select the task type.</li>
                        <li>Complete a block of tasks to increase your overall rating.</li>
                        <li>Show your results to your teacher.</li>
                        <li>Get some good grades!</li>
                    </ul>
                </div>
            </div>
            <div class="signup">
                <form class="signup__form" name="signup" action="login.php" method="POST">
                    <div class="signup__title">Sign In</div>

                    <input type="text" class="signup__input" name="username" id="username" placeholder="Login:" minlength = "6" maxlength = "25">
                    <span class="error" id="error-username"></span>

                    <input type="password" class="signup__input" name="password" id="password" placeholder="Password:" minlength = "6" maxlength = "25">
                    <span class="error" id="error-password"></span>

                    <button class="signup__submit" name = 'login-submit' type="submit" id="submit" disabled = "disabled" >SUBMIT</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p class="footer__copyright">&copy Stanislav Sosedov</p>
    </footer>
</body>
<script defer src="/homePageScript.js"></script>
</html>











<!--    <div class="signup">
            <div class="container">
                <img src="" alt="">
                <form class="signup__form" name="signup">
                    <input type="text" class="signup__input" name="username" id="username" placeholder="Enter name:">
                    <span class="error" id="error-username"></span>

                    <input type="password" class="signup__input" name="password" id="password" placeholder="Password">
                    <span class="error" id="error-password"></span>

                    <button class="signup__submit" type="submit" id="submit">OK</button>
                </form>
            </div>

        <footer class="footer">
            <div class="footer__content">
                <div class="footer__container">
                    <a href="https://edu.susu.ru/" target="_blank">
                        <img class="footer__link-logo" src="images/footer/logo_44.png" alt="logo">
                    </a>
                    <a href="https://www.instagram.com/susu.official/" target="_blank">
                        <img class="footer__link-icon" src="images/footer/instagram-icon.svg" alt="icon">
                    </a>
                    <a href="https://vk.com/susu4you" target="_blank">
                        <img class="footer__link-icon" src="images/footer/vk-icon.svg" alt="icon">
                    </a>
                </div>
                <p class="footer__copyright">&copy; Stanislav Sosedov</p>
            </div>
        </footer>
        </div>-->
