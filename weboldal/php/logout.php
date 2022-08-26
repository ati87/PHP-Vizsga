<?php
session_start();

unset($_SESSION['webpage_user_id']);

header('Location: ../index.php');
