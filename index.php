<?php
    session_start();
    if(isset($_SESSION['username'])) {
        header("Location: homePage.php?notloggedin");
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
    <link rel="stylesheet" href="pages/index.css">
    <!-- Next line should be deleted when is sent to production-->
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body class="page">
    <header class="header">
        <div class="header__links_mobile">
            <a class="header__link_mobile" href = "FAQ.php">FAQ</a>
            <a class="header__link_mobile" href = "http://edu.susu.ru">E-SUSU</a>
            <a class="header__link_mobile">You're not logged in</a>
        </div>
        <div class="header__content">
            <a href="<?php if (!isset($_SESSION['username'])) echo "index.php"; else echo "homePage.php";?>" class="homelink"><div class="header__logo"></div></a>
            <div class="header__links">
                <a class="header__link" href = "FAQ.php">FAQ</a>
                <a class="header__link" href = "http://edu.susu.ru">E-SUSU</a>
                <a class="header__link">You're not logged in</a>
            </div>
            <span class="header__button_mobile"></span>
        </div>
    </header>
    <main class="content">
        <section class="introduction">
            <div class="signin">
                <form class="signin__form" name="signin" action="/login-logout/register.php" method="POST">
                    <div class="signin__title">Sign Up</div>

                    <input type="text" class="signin__input" name="reg-username" id="username" placeholder="Login:" minlength = "6" maxlength = "25">

                    <input type="email" class="signin__input" name="reg-email" id="email" placeholder="Email:" required>

                    <input type="password" class="signin__input" name="reg-password" id="password" placeholder="Password:" minlength = "6" maxlength = "25">

                    <input type="password" class="signin__input" name="reg-password-repeat" id="password-repeat" placeholder="Repeat password:" minlength = "6" maxlength = "25">

                    <button class="signin__submit" name = 'signin-submit' type="submit" id="register-submit" >SIGN UP</button>
                </form>
            </div>
            <div class="signup">
                <form class="signup__form" name="signup" action="/login-logout/login.php" method="POST">
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
<script defer src="/burger.js"></script>
</html>