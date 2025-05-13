<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
<h3>Edit Data User</h3>
<br>
<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$qPilih = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($koneksi, $qPilih);
$row = mysqli_fetch_assoc($result);
?>
<form action="edit.php?id=<?= $row['id'] ?>" method="POST">
<label>Username</label>
<input type="text" name="username" value="<?= $row['username'] ?>">
<br>
<label>Password</label>
<input type="text" name="password" value="<?= $row['password'] ?>">
<br>
<label>Nama</label>
<input type="text" name="nama" value="<?= $row['nama'] ?>">
<br>
<button name="update" value="update">Simpan</button>
</form>
<?php
if (isset($_POST['update'])) {
include_once 'koneksi.php';
$username = $_POST['username'];
$password = password_hash ($_POST['password'], PASSWORD_DEFAULT);
$nama = $_POST['nama'];
$q = "UPDATE users SET username = '$username', password = '$password', nama = '$nama' WHERE id = '$id'";
$result = mysqli_query($koneksi, $q);
if ($result) {
header('location: index.php');
}
}
?>
</body>
</html>