<?php

//tévesen megadott adatok kiírása
if (isset($_SESSION['errors'])) {
    if (count($_SESSION['errors']) > 0 ) {
  
    
    print("<div style='color:red; text-align:center; margin-bottom:5px'>");
    foreach ($_SESSION['errors'] as $error) {
        print("<p style= padding:5px>" . $error . '</p>');
    }
    print('</div>');
    // session_destroy();
    $_SESSION['errors'] = array();
}
}
?>