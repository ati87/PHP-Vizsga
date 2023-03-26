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
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: orangered;
            color: white;
        }

        .btn.btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
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
            <table id="customers">
                <tr>

                    <th>Megnevezes</th>
                    <th>Kép</th>
                    <th>Kategoria</th>
                    <th>Leiras</th>
                    <th>Nettó ár</th>
                    <?php
                    if (isset($_SESSION['webpage_user_id'])) {
                    ?>
                        <th>Vásárolni kívánt mennyiség</th>
                        <th></th>
                    <?php } ?>
                </tr>
                <?php
                require_once('../weboldal/php/conf.php');
                $conn = mysqli_connect($server, $user, $password, $db);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                //az oldalon történő lapozáshoz (foly. az oldal alján)
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $num_per_page = 05;
                $start_from = ($page - 1) * 05;

                //termékek betöltése
                $sql = "SELECT termek.*, termekar.*
                FROM termek 
                LEFT JOIN termekar 
                ON termek.termek_id = termekar.termek_id 
                WHERE NOW() BETWEEN termekar.Tol AND termekar.Ig
                LIMIT $start_from, $num_per_page";

                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    print(mysqli_error($conn) . ' ' . mysqli_errno($conn));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                        <tr>
                            <td><?php print($row['Megnevezes']); ?></td>
                            <td><a href="../adminoldal/img/<?php print($row['Kep']) ?>  "><img src="../adminoldal/img/<?php print($row['Kep']) ?>" alt="" class="img-fluid" style="height:100px ;"></a></td>
                            <td><?php print($row['Kategoria']); ?></td>
                            <td><?php print($row['Leiras']); ?></td>
                            <td><?php print($row['nettoAr']); ?> HUF</td>
                            <?php

                            if (isset($_SESSION['webpage_user_id'])) {
                            ?>
                                <td>
                                    <form action="webaruhaz.php" method="post" class="cart-form">

                                        <input type="hidden" name='name' value="<?php print($row['Megnevezes']); ?>">
                                        <input type="hidden" name='price' value="<?php print($row['nettoAr']); ?>">
                                        <input type="hidden" name='img' value="<?php print($row['Kep']); ?>"">
                                        <input type="hidden" name='id' value="<?php print($row['termek_id']); ?>">


                                        <input type="number" name="number" min=0 max="<?php print($row['Darabszam']); ?>">
                                </td>
                                <td>
                                    <button class="btn btn-info" style="background-color:gray !important ;" type="submit" name="addToCart" value="<?php print($row['termek_id']); ?>">Kosárba</button>
                                    </form>
                                </td>
                            <?php
                            }
                            ?>

                        </tr>

                <?php

                    }
                }


                
                ?>
            </table>

            <?php
            //az oldalon történő lapozáshoz
            $pr_query = "SELECT termek.*, termekar.*
   FROM termek LEFT JOIN termekar ON termek.termek_id = termekar.termek_id";
            $pr_result = mysqli_query($conn, $pr_query);
            $total_record = mysqli_num_rows($pr_result);

            $total_page = ceil($total_record / $num_per_page);

            for ($i = 1; $i <= $total_page; $i++) {
                print("<a href='webaruhaz.php?page=" . $i . "'class=btn btn-primary' class='btn'>$i</a>");
            }

            //zárni kell
            mysqli_close($conn);
            ?>
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

<script>
    const forms = document.querySelectorAll('.cart-form');

    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            console.log(form);
            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();

            xhr.open('POST', 'php/addToCart.php');
            xhr.send(formData);
        });
    });
</script>

</html>