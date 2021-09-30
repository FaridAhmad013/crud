<?php 
session_start();

if(!$_SESSION['login']){
    echo "<script type='text/javascript'>
    alert('Maaf anda harus login terlebih dahulu!');
        window.location = '/index.php'
    </script>";
}