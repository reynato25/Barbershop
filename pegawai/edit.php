<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$qPilih = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($koneksi, $qPilih);
$row = mysqli_fetch_assoc($result);
?>

<?php
if (isset($_POST['update'])) {
include_once 'koneksi.php';
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tgl_lahir'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];

$q = "UPDATE pegawai SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', tgl_lahir = '$tgl_lahir', status = '$status', pekerjaan = '$pekerjaan', alamat = '$alamat' WHERE id = '$id'";
$result = mysqli_query($koneksi, $q);
if ($result) {
header('location: index.php');
}
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Custom styles for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
<style>
a:link {
 
  
  text-decoration: none;
}
</style>

<head>
<title>Edit</title>
</head>
<body>
<?php 
include 'header.php';?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Data Pegawai</h1>


<!-- DataTales Example -->
 <div class="row">

                        
<div class="card mb-4">
                                <div class="card-header">
                                    Edit Data
                                </div>
                                <div class="card-body">


<form action="edit.php?id=<?= $row['id'] ?>" method="POST">
<div class="mb-3">
<label for="text" class="form-label" >Nama</label>
<input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>">
</div>

<div class="mb-3">
<label for="text" class="form-label" >Jenis Kelamin</label>
<select class="form-select" name="jenis_kelamin" aria-label="Default select example">
  <option name="jenis_kelamin" selected>Pilih Kelamin</option>
  <option name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>
  <option name="jenis_kelamin" value="Perempuan">Perempuan</option>
</select>
</div>


<div class="mb-3">
<label for="text" class="form-label" >Tanggal Lahir</label> <br>
<input type="date" id="birthday" name="tgl_lahir">
</div>


<div class="mb-3"> 
<label for="text" class="form-label" >Status</label>
<select class="form-select" name="status" aria-label="Default select example">
  <option name="status" selected>Status Karyawan</option>
  <option name="status" value="AKTIF">AKTIF</option>
  <option name="status" value="TIDAK AKTIF">TIDAK AKTIF</option>
</select>
</div>


<div class="mb-3">
<label for="text" class="form-label" >Pekerjaan</label>
<input type="text" name="pekerjaan" class="form-control" value="<?= $row['pekerjaan'] ?>">
</div>
<div class="mb-3">
<label for="text" class="form-label" >Alamat</label>
<input type="text" name="alamat" class="form-control" value="<?= $row['alamat'] ?>">
</div>

<button type="submit" class="btn btn-primary" name="update" value="update">Simpan</button>
</form>
</div>
 </div>
</div>
</div>
</div>



</body>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
</html>
<?php include 'footer.php';?>
</html>