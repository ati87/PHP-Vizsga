<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktártechnika - Kapcsolat</title>
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
                        <li><a id="menu" class="pointer">Termékek</a></li>
                        <li><a href="salgo.php" class="leNyilo menu1 active">Salgó polc</a></li>
                        <li><a href="raklaposallvanyr.php" class="leNyilo menu2">Raklapos állványrendszer</a></li>
                    </ul>
                    <li><a href="Szolgatatsok.php">Szolgáltatások</a></li>
                    <li><a href="kapcsolat.php" class="active">Kapcsolat</a></li>
                    <li><a href="webaruhaz.php">Webáruház</a></li>
                    
                </ul>
            </nav>
        </header>
        <main>
            <div class="cimsorH1">
                <h1>Raktártechnikai állványrendszerek</h1>
            </div>
            <div class="main-box">
                <h2>Kapcsolat</h2>
                <section class="connection">
                    <div class="map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1347.6222705000068!2d19.066633532707165!3d47.504628643947285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb727d6ab3c387aec!2zUFJPT0tUQVTDgVMgS8OWWlBPTlQ!5e0!3m2!1shu!2shu!4v1651852579266!5m2!1shu!2shu"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="availability">
                        <h3>Raktártechnika elérhetőségei:</h3>
                        <ul>
                            <li class="icon-home">Székhely: 1055 Budapest, Raktártechnika utca 1.</li>
                            <li class="icon-phone">Telefon: <a href="tel:+06666666">06 666 666</a></li>
                            <li class="icon-mail">Email: <a href="mailto:raktar@raktar.hu">raktar@raktar.hu</a></li>
                            <li></li>
                        </ul>
                    </div>
                </section>
            </div>



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