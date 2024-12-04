<?php 
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Anda Harus Login Terlebih Dahulu!');
            document.location.href ='login.php';
          </script>";
}

$id = $_SESSION["idUser"];
$biodata = query("SELECT * FROM users WHERE idUser = '$id'")[0];
?>

