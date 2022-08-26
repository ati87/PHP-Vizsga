<?php session_start();
if (isset($_SESSION['webpage_user_id'])) {

    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <link rel="icon" type="image/png" href="pics/favicon-32x32.png">
    <link rel="stylesheet" href="css/index.css?v=1">
</head>

<body>
    <div class="wrapper">
        <header>
            <?php include "php/user_login.php" ?>

            <nav>
                <label for="mobile-menu" class="mobile-menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <input type="checkbox" id="mobile-menu">
                <img src="pics/favicon-32x32.png" alt="icon" class="navImg">
                <ul class="nav">
                    <li><a href="index.php" class="icon-home">Főoldal</a></li>
                    <ul>
                        <li><a id="menu" class="pointer active">Termékek</a></li>
                        <li><a href="salgo.php" class="leNyilo menu1">Salgó polc</a></li>
                        <li><a href="raklaposallvanyr.php" class="leNyilo menu2 active">Raklapos állványrendszer</a>
                        </li>
                    </ul>
                    <li><a href="Szolgatatsok.php">Szolgáltatások</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                    <li><a href="webaruhaz.php">Webáruház</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="./php/user_register.php" method="POST" style="flex-direction:column; align-items: center">
                <?php include '../weboldal/php/errors.php' ?>


                <label for="userName">Felhasználó név:</label>
                <input type="text" id="userName" name="userName" style="width: 200px;">

                <label for="email">Email cím:</label>
                <input type="email" id="email" name="email" style="width: 200px;">

                <label for="password">Jelszó:</label>
                <input type="password" id="password" name="password_1" style="width: 200px;">

                <label for="password">Jelszó újra:</label>
                <input type="password" id="password" name="password_2" style="width: 200px;">

                <label for="firstName">Vezetéknév:</label>
                <input type="text" name="firstName" id="firstName" style="width: 200px;">

                <label for="lastName">Keresztnév</label>
                <input type="text" id="lastName" name="lastName" style="width: 200px;">

                <label for="number">Telefonszám</label>
                <input type="number" id="number" name="number" style="width: 200px;">


                <input type="submit" name="submit" value="Regisztráció" style="margin-top: 10px; width: 200px;">

            </form>



        </main>
        <footer>
            <div id="cookieWarning">
                <div class="cookieBox">
                    Ez az oldal sütiket használ. <br><br>
                    <button>Elfogadom.</button>
                </div>
            </div>
            <div class="footer">
                <div class="footer-menu">
                    <h3>Raktártechnika</h3>
                    <div>
                        <a href="index.php" class="icon-home">Főoldal</a>
                        <a class="pointer">Termékek</a>
                        <a href="salgo.php">Salgó polc</a>
                        <a href="raklaposallvanyr.php">Raklapos állványrendszer</a>
                        <a href="Szolgatatsok.php">Szolgáltatások</a>
                        <a href="kapcsolat.php">Kapcsolat</a>
                        <a href="webaruhaz.php">Webáruház</a>
                    </div>
                    <p>© 2022 Raktártechnika. Minden jog fenntartva.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/nav.js">

</script>

</html>