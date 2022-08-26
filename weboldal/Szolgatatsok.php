<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktártechnika - Szolgáltatások</title>
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
                        <li><a href="salgo.php" class="leNyilo menu1">Salgó polc</a></li>
                        <li><a href="raklaposallvanyr.php" class="leNyilo menu2">Raklapos állványrendszer</a></li>
                    </ul>
                    <li><a href="Szolgatatsok.php" class="active">Szolgáltatások</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                    <li><a href="webaruhaz.php">Webáruház</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="cimsorH1">
                <h1>Raktártechnikai állványrendszerek</h1>
            </div>
            <div class="main-box">

             <a href="pics/SzolgaltatasokMain1.jpg"> <img src="pics/SzolgaltatasokMain1.jpg" class="Img" alt="Szolgáltatások"></a>  
                <h2>Szolgáltatások</h2>
                <section>
                    <p>Társaságunk vállalja raktár- és múzeumtechnológiai projektek kivitelezését. Ezen belül közösen a
                        megrendelővel elvégezzük a tervezést, a helyszíni felmérést, alternatív javaslatokat dolgozunk
                        ki a
                        feladat megoldására.</p>
                    <p>Tudjuk biztosítani a termékek telepítési helyszínre szállítását, és a
                        szerelést, beüzemelést.
                        Átadás-átvétel keretében elvégezzük a terheléspróbákat és jegyzőkönyvezzük.</p>
                    <p>A saját gyártású raktártechnikai rendszerekre vonatkozóan vállaljuk az MSZ EN 15635:2009-es
                        szabványban megkövetelt éves felülvizsgálat elvégzését, biztosítjuk a szervizhátteret.</p>
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