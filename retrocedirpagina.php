<?php
    @session_start();
    if($_SESSION['tipus']=="Bibliotecari"){
        header('Location: '."espaibibliotecari.php");
    }
    if($_SESSION['tipus']=="Admin"){
        header('Location: '."espaiadmin.php");
    }
?>