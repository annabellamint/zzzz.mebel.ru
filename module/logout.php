<?php
//Выход
    require "include/db.php";
    unset($_SESSION['user']);
    header ('location:/registr.php');
?>
