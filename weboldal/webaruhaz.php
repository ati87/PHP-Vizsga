<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raktártechnika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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

                    <li><a href="index.php" class="icon-home">Főoldal</a></li>
                    <ul>
                        <li><a id="menu" class="pointer">Termékek</a></li>
                        <li><a href="salgo.php" class="leNyilo menu1">Salgó polc</a></li>
                        <li><a href="raklaposallvanyr.php" class="leNyilo menu2">Raklapos állványrendszer</a></li>
                    </ul>
                    <li><a href="Szolgatatsok.php">Szolgáltatások</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                    <li><a href="webaruhaz.php" class="active">Webáruház</a></li>

                </ul>
            </nav>
        </header>

        <main>
            <div class="cimsorH1">
                <h1>Raktártechnikai állványrendszerek</h1>
            </div>
            <table>
                <?php
                require_once('../weboldal/php/conf.php');
                $conn = mysqli_connect($server, $user, $password, $db);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT termek.*, termekar.*
                          FROM termek LEFT JOIN termekar ON termek.termek_id = termekar.termek_id WHERE NOW() BETWEEN Tol and Ig ";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    print(mysqli_error($conn) . ' ' . mysqli_errno($conn));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="main-box">
                            <tr>
                                <td><?php print($row['Megnevezes']); ?></td>

                                <td><?php print($row['Mennyisegi_egyseg']); ?></td>
                                <td><a href="../adminoldal/img/<?php print($row['Kep']) ?>  "><img src="../adminoldal/img/<?php print($row['Kep']) ?>" alt="" class="img-fluid" style="height:100px ;"></a></td>
                                <td><?php print($row['Kategoria']); ?></td>
                                <td><?php print($row['Leiras']); ?></td>
                                <td><?php print($row['nettoAr']); ?> HUF</td>


                            </tr>
                        </div>
                <?php
                    }
                }
                //zárni kell
                mysqli_close($conn);
                ?>
            </table>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
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