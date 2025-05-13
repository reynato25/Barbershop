<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>
<h3>Data User</h3>
<a href="tambah.php">
Tambah User
</a>
<br>
<br>
<table border="1">
<thead>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Nama</th>
<th>Action</th>

</tr>
</thead>
<tbody>
<?php
include_once 'koneksi.php';
$q = "SELECT * FROM users";
$result = mysqli_query($koneksi, $q);
while ($row = mysqli_fetch_assoc($result)) {
?>
<!-- jangan lupa ini  -->
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['username'] ?></td>
<td><?= $row['password'] ?></td>
<td><?= $row['nama'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>">edit</a>
<a href="hapus.php?id=<?= $row['id'] ?>">hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>
