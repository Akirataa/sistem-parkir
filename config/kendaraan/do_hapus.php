<?php

session_start();

if(!isset($_SESSION['login'])){
    header("location:../login.php");
    exit;
}

include "../config.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM kendaraan WHERE id='$id'");

if($query){
    echo "<script>alert('Terimakasih sudah parkir bakti idhata');</script>";
    header("location:../../admin/kendaraan.php");

}else{
    header("location:../../admin/kendaraan.php");
}
?>