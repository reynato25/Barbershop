<!DOCTYPE html>
<html>
<head>
<title>Tambah</title>
</head>
<body>
<h3>Tambah Data User</h3>
<br>
<form action="tambah.php" method="POST">
<label>Username</label>
<input type="text" name="username">
<br>
<label>Password</label>
<input type="text" name="password">
<br>
<label>Nama</label>
<input type="text" name="nama">
<br>
<button name="tambah" value="tambah">Simpan</button>
</form>
<?php
if (isset($_POST['tambah'])) {
include_once 'koneksi.php';
$username = $_POST['username'];
$password =   password_hash ($_POST['password'], PASSWORD_DEFAULT);

$nama = $_POST['nama'];
$q = "INSERT INTO users (id, username, password, nama) VALUES (NULL, '$username', '$password', '$nama')";
$result = mysqli_query($koneksi, $q);
if ($result) {
header('location: index.php');
}
}

?>
</body>
</html>
