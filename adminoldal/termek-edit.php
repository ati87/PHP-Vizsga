<?php
session_start();
if (!isset($_SESSION['admin_user_id'])) {
    header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/datatables.min.css" />
    <title>Termék szerkesztése</title>
</head>

<body>
    <div class="container-fluid px-4">
        <div class="row mt-4">
            <div class="col-md-12">
                <?php
                require_once('./message.php');
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Termék szerkesztése
                            <a href="index.php" class="btn btn-danger float-end">Vissza</a>
                        </h4>
                    </div> 
                    <div class="card-body">
                        <?php
                        require_once('./conf.php');
                        $conn = mysqli_connect($server, $user, $password, $db);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        if (isset($_GET['id']) && isset($_GET['arId'])) {
                            $termek_id = (int)$_GET['id'];
                            $termekar_id = (int)$_GET['arId'];
                            print($termek_id."---".$termekar_id);
                            $termek_edit = "SELECT  termek.*, termekar.* FROM termek LEFT JOIN termekar 
                            ON termekar.termekar_id = '$termekar_id' WHERE termek.termek_id='$termek_id'";



                            $termek_result = mysqli_query($conn, $termek_edit);
                            if (mysqli_num_rows($termek_result) > 0) {
                                $row = mysqli_fetch_array($termek_result)
                        ?>

                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name='termek_id' value="<?php print($row['termek_id']) ?>">
                                    <input type="hidden" name='termekar_id' value="<?php print($row['termekar_id']) ?>">
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="">Cikkszám</label>
                                            <input type="text" name="article_number" value="<?php print($row['Cikkszam']) ?>" required class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Termék neve</label>
                                            <input type="text" name="name" value="<?php print($row['Megnevezes']) ?>" required class="form-control">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="">Mennyiseg</label>
                                            <input type="text" name="quantity" value="<?php print($row['Darabszam']) ?>" required class="form-control">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="">Mennyiseg egység</label>
                                            <input type="text" name="unit" value="<?php print($row['Mennyisegi_egyseg']) ?>" required class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Katgória</label>
                                            <input type="text" name="category" value="<?php print($row['Kategoria']) ?>" required class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Leírás</label>
                                            <textarea type="text" name="description" rows="4" class="form-control"><?php print($row['Leiras']) ?> </textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Nettó ár</label>
                                            <input type="text" name="price" value="<?php print($row['nettoAr']) ?>" required class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Mettől meddig</label>
                                            <input type="date" name="from" value="<?php print($row['Tol']) ?>" required class="form-control">
                                            <input type="date" name="to" value="<?php print($row['Ig']) ?>" required class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Kép</label>
                                            <input type="file" name="picture" value="<?php print($row['Kep']) ?>" class="form-control">
                                            <img src="./img/<?php print($row['Kep']) ?>" alt="" style=" margin:10px; min-height:100px; max-height:200px">

                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="termek_update" class="btn btn-primary">Termék frissítése</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                            } else {
                            ?>
                                <h4>Nem talált rekordot</h4>
                        <?php
                            }
                           
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>