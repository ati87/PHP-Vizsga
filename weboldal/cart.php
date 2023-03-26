<?php session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktártechnika</title>
    <link rel="icon" type="image/png" href="pics/favicon-32x32.png">
    <link rel="stylesheet" href="./css/index.css?v=1">
</head>

<body>
    <div class="wrapper">
        <header>

            <?php include "php/user_login.php";
            ?>


            <nav>
                <label for="mobile-menu" class="mobile-menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <input type="checkbox" id="mobile-menu">
                <img src="pics/favicon-32x32.png" alt="icon" class="navImg">
                <ul class="nav">

                    <li><a href="index.php" class="icon-home active">Főoldal</a></li>
                    <ul>
                        <li><a id="menu" class="pointer">Termékek</a></li>
                        <li><a href="salgo.php" class="leNyilo menu1">Salgó polc</a></li>
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
                <h1>Kosár tartalma</h1>
            </div>
            <div class="main-box">
                <?php
                if (isset($_SESSION['cart'])) {
                    foreach($_SESSION['cart'] as $item) {
                        print($item['name']);
                        print("  -  ".$item['number']." db");
                        print("  -  ".$item['price']." Ft");
                        print('<br>');

                    }
                ?>


                    <!--
                    <table id="customers">
                        <tr>

                            <th>Megnevezes</th>
                            <th>Kép</th>
                            <th>Kategoria</th>
                            <th>Leiras</th>
                            <th>Nettó ár</th>
                            <th>Vásárolni kívánt mennyiség</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><?php print($row['Megnevezes']); ?></td>
                            <td><a href="../adminoldal/img/<?php print($row['Kep']) ?>  "><img src="../adminoldal/img/<?php print($row['Kep']) ?>" alt="" class="img-fluid" style="height:100px ;"></a></td>
                            <td><?php print($row['Kategoria']); ?></td>
                            <td><?php print($row['Leiras']); ?></td>
                            <td><?php print($row['nettoAr']); ?> HUF</td>
                        </tr>
                -->



                    <?php
                    print_r('<br>');
                    print_r($_SESSION['cart']);
                    print_r('<br>');
                    print_r('<br>');
                    var_dump($_SESSION['cart']);
                } else {
                    print("A kosár taralma üres");
                }
                    ?>



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