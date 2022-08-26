<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktártechnika - Raklapos állványrendszer</title>
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
            <div class="cimsorH1">
                <h1>Raktártechnikai állványrendszerek</h1>
            </div>
            <div class="main-box">
                <h2>Mire használhatóak a Raklapos állványrendszerek?</h2>
            <a href="pics/RaklaposallvanyrMain1.jpg"><img src="pics/RaklaposallvanyrMain1.jpg" class="ImgRaklapos" alt="Raklapos állványrendszer"></a>    

                <section>
                    <p>A klasszikus <b>raklapos állvány</b> továbbra is a legjobban elterjedt tárolórendszer raklatolt
                        áruk
                        esetén - minden modern technológia ellenére, melyeket a raktározási és komissiózási területeken
                        egyre inkább alkalmaznak.</p>
                    <p>Minden egyes raklap könnyen hozzáférhető, és az állvány felállítását könnyen lehet módosítani és
                        kiegészíteni. A rugalmasság és a viszonylag alacsony befektetési költségek teszik ezt a tároló
                        rendszert a raktározás és komissiózás elkerülhetetlen összetevőjévé</p>
                    <p>A <b>raklapos állványrendszer</b> a praktikus kellékeivel optimális tárolást biztosít még a
                        legkülönfélébb méretű raktározási egységek számára is.</p>
                    <p>A leginkább használt forma a többhelyes tárolás, egymás mellett állványmezőnkét 2–4 raklappal. A
                        készenléti, ill. tartalékraktár számára és az egész raklapos raktározáshoz a raklapokat
                        hosszirányba raktározzák be. Annak érdekében, hogy a darabok kigyűjtéséhez jobb hozzáféréssel
                        rendelkezzünk, rendszerint a haránt irányú beraktározást helyezik előnybe.</p>
                    <p>A <b>raklapos állvány</b> különböző kivitelekben érhető el, míg a leggyakrabban a széles folyosós
                        raktárt, a keskeny folyosós raktárt és a gördíthető raklapos állványt használják.</p>
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