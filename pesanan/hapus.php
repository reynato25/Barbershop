<?php
include 'koneksi.php';
$id = $_GET['id'];
$qPilih = "DELETE FROM jasa WHERE id = $id";
$result = mysqli_query($koneksi, $qPilih);
if ($result) {
header('location: index.php');
}