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
    <link rel="stylesheet" href="./css/index.css">
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
            text-align: center;
        }

        #customers .align-right {
            text-align: right;
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
        .button-cart{
            cursor: pointer;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
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
        }
        .btn:hover{
            color: red;
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
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                ?>

                    <table id="customers">
                        <tr>

                            <th>Megnevezes</th>
                            <th>Kép</th>
                            <th>Nettó ár</th>
                            <th>Rendelt mennyiség</th>
                            <th>Nettó összesen</th>
                            <th>Termék törlése</th>
                        </tr>
                        <?php
                        $total = 0;
                        foreach ($_SESSION['cart'] as $item) {
                            $subtotal = $item['price'] * $item['number'];
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><?php print($item['name']); ?></td>
                                <td><a href="../adminoldal/img/<?php print($item['img']) ?>  "><img src="../adminoldal/img/<?php print($item['img']) ?>" alt="" class="img-fluid" style="height:50px ;"></a></td>
                                <td> <?php print(number_format($item['price'], 0, ',', ' ')); ?> HUF</td>
                                <td><?php print($item['number']); ?></td>
                                <td><?php print(number_format($subtotal, 0, ',', ' ')); ?> HUF</td>
                                <td>
                                    <form action="./php/code.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                        <input class="btn" type="submit" name="delete" value="Törlés">
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td class="align-right" colspan="6">Összesen nettó:<b> <?php print(number_format($total, 0, ',', ' ')); ?></b> HUF</td>
                        </tr>
                    </table>


                <?php
                } else {
                    print('<div class="empty-cart"><b>A kosár taralma üres.</b></div>');
                }
                ?>



            </div>
            <?php
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            ?>
                <button  class="button-cart" id="empty-cart">Kosár ürítése</button>
            <?php
            }
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
    document.getElementById("empty-cart").onclick = function() {
        if (confirm("Biztosan törölni szeretné a kosár tartalmát?")) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "php/empty_cart.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText); // ha a szerver visszaküld valamilyen választ, akkor az itt jelenik meg
                    location.reload(); // oldal újratöltése
                }
            };
            xhr.send();
        }

    };
</script>

</html>