<?php
session_start();
require_once('./conf.php');
$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//TERMÉK TÖRLÉSE
//a törlésnél nem kerül végleges törlésre, hanem a státuszt állítjuk át
// 0=látható; 1=nem látható; 2=törölt
if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete'];
    $query_delete = "UPDATE termek SET statusz='2' WHERE termek_id='$delete_id' LIMIT 1";
    $delete_result = mysqli_query($conn, $query_delete);

    if ($delete_result) {
        $_SESSION['message'] = "Termék törlése sikeres";
        header('Location: index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Termék törlése sikertelen";
        header('Location:index.php');
        exit(0);
    }
}


//TERMÉK SZERKESZTÉSE

if (isset($_POST['termek_update'])) {
    $cikkszam = $_POST['article_number'];
    $termek_id = $_POST['termek_id'];
    $termekNev = $_POST['name'];
    $mennyiseg = $_POST['quantity'];
    $mennyEgyseg = $_POST['unit'];
    $kep = '';
    $kategoria = $_POST['category'];
    $leiras = $_POST['description'];
    $nettoAr = $_POST['price'];
    $tol = $_POST['from'];
    $ig = $_POST['to'];
    $termekar_id = $_POST['termekar_id'];

    if ($_FILES['picture']['error'] === 0) {
        if (copy($_FILES['picture']['tmp_name'], './img/' . $_FILES['picture']['name'])) {
            $kep = $_FILES['picture']['name'];
        }
    }
    if (strlen($kep) > 0) {
        //feltoltottek képet
        $query = "UPDATE termek SET Cikkszam='$cikkszam', Megnevezes='$termekNev', Darabszam ='$mennyiseg', Mennyisegi_egyseg ='$mennyEgyseg', 
        Kep='$kep', Kategoria='$kategoria', Leiras='$leiras'  WHERE termek_id='$termek_id' ";
    } else {
        //nem töltöttek fel képet
        $query = "UPDATE termek SET Cikkszam='$cikkszam', Megnevezes='$termekNev', Darabszam ='$mennyiseg', Mennyisegi_egyseg ='$mennyEgyseg', 
        Kategoria='$kategoria', Leiras='$leiras'  WHERE termek_id='$termek_id' ";
    }

    $termek_result = mysqli_query($conn, $query);

    $query2 = "UPDATE termekar SET nettoAr = '$nettoAr', Tol = '$tol', Ig = '$ig' WHERE termekar_id ='$termekar_id'";
    $termekar_result = mysqli_query($conn, $query2);




    if ($termek_result) {
        $_SESSION['message'] = "Termék szerkesztése sikeres";
        header('Location: termek-edit.php?id=' . $termekar_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Termék szerkesztése sikertelen";
        header('Location: termek-edit.php?id=' . $termekar_id);
        exit(0);
    }
}


//TERMÉK FELTÖLTÉSE

if (isset($_POST['termek_insert'])) {
    $cikkszam = $_POST['article_number_insert'];
    $termekNev = $_POST['name_insert'];
    $mennyiseg = $_POST['quantity_insert'];
    $mennyEgyseg = $_POST['unit_insert'];
    $kep = "";
    $statusz = $_POST['status_insert'];
    $kategoria = $_POST['category_insert'];
    $leiras = $_POST['description_insert'];
    $nettoAr = $_POST['price_insert'];
    $tol = $_POST['from_insert'];
    $ig = $_POST['to_insert'];

    if ($_FILES['picture_insert']['error'] === 0) {
        if (copy($_FILES['picture_insert']['tmp_name'], './img/' . $_FILES['picture_insert']['name'])) {
            $kep = $_FILES['picture_insert']['name'];
        }
    }
    if (strlen($kep) > 0) {
        //feltoltottek képet
        $query = "INSERT INTO termek (Cikkszam, Megnevezes, Darabszam, Mennyisegi_egyseg, Kep, Kategoria, Leiras, Statusz)
    VALUES ('$cikkszam', '$termekNev', ' $mennyiseg', '$mennyEgyseg', '$kep', '$kategoria', '$leiras', '$statusz')";
    } else {
        $query = "INSERT INTO termek (Cikkszam, Megnevezes, Darabszam, Mennyisegi_egyseg, Kategoria, Leiras, Statusz)
        VALUES ('$cikkszam', '$termekNev', ' $mennyiseg', '$mennyEgyseg', '$kategoria', '$leiras', '$statusz')";
    }

    $termek_result = mysqli_query($conn, $query);
    $last_termek_id = mysqli_insert_id($conn);

    if ($termek_result) {
        $query2 = "INSERT INTO termekar (nettoAr, Tol, Ig, termek_id)
        VALUES ('$nettoAr', '$tol', '$ig', '$last_termek_id')";

        $termekar_result = mysqli_query($conn, $query2);


        $_SESSION['message'] = "Termék feltöltése sikeres";
        header('Location: termek-edit.php?id=' . $termekar_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Termék feltöltése sikertelen";
        header('Location: termek-edit.php?id=' . $termekar_id);
        exit(0);
    }
}
