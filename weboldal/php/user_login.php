
<div class="login">

<form action="./php/login.php" method="post"
<?php
    
    if(isset($_SESSION['webpage_user_id'])){
        print("style='display:none'");
    }
            ?>

>
    <label for="email">Bejelenltkezés:</label>
    <input type="email" id="email" name="email" placeholder="Email cím">
    <input type="password" id="password" name="password" placeholder="Jelszó">
    <input type="submit" name="submit" id="submit" value="Belépés">
    <a href="register.php" id="reg" class="register">Regisztráció</a>
   
 
</form>
   <?php
    
        if(isset($_SESSION['webpage_user_id'])){
            
            print('<div class="logout">');
            print('<a class="register icon-basket" href="./php/logout.php">Kosár</a>');
            print('<a class="register" href="./php/logout.php">Kijelentkezés</a>');
            print('</div>');
        }
       
        

    ?>
</div>