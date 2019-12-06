<?php
    include 'permission.php';
    //checkLogout();
    if (isset($_SESSION['USERNAME'])){
        unset($_SESSION['USERNAME']);
        unset($_SESSION['LEVEL']);
        header('Location: index.php');
    }
?>