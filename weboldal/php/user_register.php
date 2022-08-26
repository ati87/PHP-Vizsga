<?php
session_start();

$username = "";
$email = "";
$_SESSION['errors'] = array();

if (isset($_POST['submit'])) {
    require_once('./conf.php');
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['userName']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);

    if (empty($username)) {
        array_push($_SESSION['errors'], "Felhasználónév megadása kötelező");
    }
    if (empty($email)) {
        array_push($_SESSION['errors'], "Email megadása kötelező");
    }
    if (empty($password_1)) {
        array_push($_SESSION['errors'], "Jelszó megadása kötelező");
    }
    if ($password_1 != $password_2) {
        array_push($_SESSION['errors'], "A két jelszó nem egyezik meg");
    }


    $user_check_query = "SELECT * FROM felhasznalo_reg WHERE Email='$email'  LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['Felhasznalo_nev'] === $username) {
            array_push($_SESSION['errors'], "A felhasználónév már létezik");
        }
        if ($user['Email'] === $email) { // ha létezik a felhasználó
            array_push($_SESSION['errors'], "Az email cím már létezik.");
        }
    }

    if (count($_SESSION['errors']) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO felhasznalo_reg (Felhasznalo_nev, Email, Jelszo) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Ön most már bejelentkezett";
        header('Location: ../index.php');
    } else {
        header('Location: ../register.php');
    }
}
