<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktártechnika - Salgó polc</title>
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
                        <li><a href="salgo.php" class="leNyilo menu1 active">Salgó polc</a></li>
                        <li><a href="raklaposallvanyr.php" class="leNyilo menu2">Raklapos állványrendszer</a></li>
                    </ul>
                    <li><a href="Szolgatatsok.php">Szolgáltatások</a></li>
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

             <a href="pics/SalgoMain1.jpg"> <img src="pics/SalgoMain1.jpg" class="ImgSalgo" alt="Salgó polc" ></a>  
                <h2>Mire használható egy Salgó polc?</h2>
                <section>
                    <p class="salgoSection"><b>Salgó polc</b> okkal többnyire raktárakban és ipari létesítményekben
                        lehet
                        találkozni, hiszen
                        strapabíróak és könnyen tisztíthatóak, de nem csak arra alkalmasak, hogy egy munkahelyen
                        használjuk őket. Valószínűleg nehéz lehet elképzelni, de az otthonokban is kiválóan
                        használhatóak, mi több, akár dizájnelemként is funkcionálhatnak!

                        Az otthoni felhasználású <b>Salgó polcok</b> egyrészt a kamrában, tárolóban, vagy a garázsban
                        jelenthetnek nagy segítséget, hiszen a rendszerezés kellékei mindenhol, így az otthonunkban is.
                        Általánosan elmondható, hogy a legtöbben erre használnának egy <b>Salgó polcot</b>, vagy
                        polcrendszert,
                        de ők valószínűleg csak azokat a Salgó termékeket ismerik, amik a legáltalánosabbak, vagyis a
                        szürke porfestett, vagy a horganyzott változatokat. Tény, hogy ezek nem nyújtanak túl izgalmas
                        látványt, ám érdemes tudni, hogy akár egyéni színekben, illetve színkombinációkban is
                        rendelhetőek. Az ipari felhasználásra rímel az ipari, másik nevén az indusztriális
                        lakberendezési stílus, amiben a <b>Salgó polcrendszerek</b> tökéletesen megférnek a más, ipari
                        stílusú
                        bútorokkal.</p>
                    <p>Mivel a <b>Salgó polcokat</b> többféle méretben és igény szerinti beosztásban lehet beszerezni,
                        illetve
                        összerakni, akár egy szimpla tárolóként, akár térelválasztóként is fel lehet használni, és mivel
                        a szín is szabadon választható a RAL skála alapján, gyakorlatilag bármilyen térben
                        elhelyezhetőek, csupán a körülöttük lévő bútorokat kell figyelembe venni. Egy semleges
                        árnyalatban minden passzol hozzájuk, egy határozottabb szín pedig a lakás fókuszpontjává is
                        teheti őket; gondoljunk egy fekete, vagy fehér, illetve egy sárga polcrendszerre!</p>
                    <p>Vásároljon Ön is <b>Salgó polcot</b> az otthonába, és ne csak a tároló helyiségekbe, hanem a
                        lakótérbe
                        is! A tartósságuk mindenképpen jobb, mint a bármilyen egyéb anyagból készült bútoroké, a dizájn
                        pedig különlegessé teszi az otthonát! Amennyiben kérdése lenne a <b>Salgó polcokról</b>, vagy a
                        rendelés menetéről, kérjük, vegye fel velünk a kapcsolatot megadott elérhetőségeink egyikén!</p>
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