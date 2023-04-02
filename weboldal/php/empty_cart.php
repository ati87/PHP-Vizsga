<?php
    session_start();
    unset($_SESSION['cart']);
    echo "A kosár tartalma sikeresen törölve lett.";
  //  header("Location: ./cart.php");
    
    exit();
?>