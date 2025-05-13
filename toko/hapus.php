<?php
include 'koneksi.php';
$id = $_GET['id'];
$qPilih = "DELETE FROM toko WHERE id = $id";
$result = mysqli_query($koneksi, $qPilih);
if ($result) {
header('location: index.php');
}