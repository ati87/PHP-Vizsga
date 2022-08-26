<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       
        $email = $_POST['email'];
        $ppassword = $_POST['password'];
        require_once('./conf.php');
        $conn = mysqli_connect($server, $user, $password, $db);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT id, email, jelszo FROM admin1 WHERE email = '".$email."'";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            print(mysqli_error($conn) . ' ' . mysqli_errno($conn));
        } else {
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                
                if(password_verify($ppassword, $row['jelszo'])){
                    
                    //igen email és jelszó megfelelő
                    $_SESSION['admin_user_id'] = $row['id'];
                    header('Location: index.php');
                }else{
                    print('Nem megfelelő jelszó!'); 
                }
            }else{
                print('Nem létezik a felhasználó vagy "túllétezik"');
            }
        }
        mysqli_close($conn);
    } else {
        print('nem megfelelő email cím');
    }
}