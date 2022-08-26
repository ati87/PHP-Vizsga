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
                        <h4>Termék hozzáadása
                            <a href="index.php" class="btn btn-danger float-end">Vissza</a>
                        </h4>
                    </div>
                    <div class="card-body">
                       

                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                   
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="">Cikkszám</label>
                                            <input type="text" name="article_number_insert"  required class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Termék neve</label>
                                            <input type="text" name="name_insert"  required class="form-control">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="">Mennyiseg</label>
                                            <input type="text" name="quantity_insert"  required class="form-control">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="">Mennyiseg egység</label>
                                            <input type="text" name="unit_insert"  required class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Katgória</label>
                                            <input type="text" name="category_insert" required class="form-control">
                                        </div>

                                        <div class="col-md-5 mb-3">
                                            <label for="">Státusz: 0 = a weboldalon látható; 1 = a weboldalon nem látható</label>
                                            <input type="number" name="status_insert" min="0" max="1"  required class="form-control">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="">Leírás</label>
                                            <textarea type="text" name="description_insert" rows="4" class="form-control"> </textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Nettó ár</label>
                                            <input type="text" name="price_insert"  required class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Mettől meddig</label>
                                            <input type="date" name="from_insert"  required class="form-control">
                                            <input type="date" name="to_insert" required class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Kép (fontos, hogy a cikkszám legyen a fájl neve)</label>
                                            <input type="file" name="picture_insert"  class="form-control">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="termek_insert" class="btn btn-primary">Termék feltöltése</button>
                                        </div>
                                    </div>
                                </form>                                                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>