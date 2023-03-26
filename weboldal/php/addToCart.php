<?php
session_start();

// Ellenőrizzük, hogy az adatok megérkeztek-e az AJAX kérés során
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['img']) && isset($_POST['id']) && isset($_POST['number'])) {
    // Kinyerjük az adatokat az AJAX kérésből
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $id = $_POST['id'];
    $number = $_POST['number'];

    // Ha a kosár üres, akkor inicializáljuk
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Ellenőrizzük, hogy az adott termék már szerepel-e a kosárban
    $itemExists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $id) {
            // Ha a termék már szerepel a kosárban, növeljük a mennyiségét
            $item['number'] += $number;
            $itemExists = true;
            break;
        }
    }

    // Ha az adott termék még nem szerepel a kosárban, hozzáadjuk
    if (!$itemExists) {
        $item = array(
            'name' => $name,
            'price' => $price,
            'img' => $img,
            'id' => $id,
            'number' => $number
        );
        array_push($_SESSION['cart'], $item);
    }

    // Válasz visszaküldése az AJAX kérésnek
    echo "success";
}
