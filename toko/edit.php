<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$qPilih = "SELECT * FROM toko WHERE id = $id";
$result = mysqli_query($koneksi, $qPilih);
$row = mysqli_fetch_assoc($result);
?>

<?php
if (isset($_POST['update'])) {
include_once 'koneksi.php';
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$perusahaan = $_POST['perusahaan'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$pembayaran = $_POST['pembayaran'];
$status = $_POST['status'];
$q = "UPDATE toko SET nama = '$nama', no_ktp = '$no_ktp', perusahaan = '$perusahaan', email = '$email', telp = '$telp', alamat = '$alamat', pembayaran = '$pembayaran', status = '$status' WHERE id = '$id'";
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
<h1 class="h3 mb-2 text-gray-800">Edit Data Marketplace</h1>


<!-- DataTales Example -->
 <div class="row">

                        
<div class="card mb-4">
                                <div class="card-header">
                                    Edit Data
                                </div>
                                <div class="card-body">


<form action="edit.php?id=<?= $row['id'] ?>" method="POST">
<label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control" id="nama" name="nama" value =<?= $row['nama'] ?>>
<br>
<label for="ktp">No. KTP</label> 
<input type="text" class="form-control" id="ktp" name="no_ktp" value =<?= $row['no_ktp'] ?>> 

<br>
<label for="fileupload">Upload Foto KTP</label> 
<input type="file" class="form-control" id="fileupload" name="fileupload"> 

<br>
<label for="perusahaan">Nama Toko</label> 
<input type="text" class="form-control" id="perusahaan" name="perusahaan" value =<?= $row['perusahaan'] ?>> 
<br>

<label for="email">Email</label>
<input type="text" class="form-control" id="email" name="email" value =<?= $row['email'] ?>>
<br>

<label for="telp" class="form-label" >No Telp</label>
<input type="text" class="form-control" id="telp" name="telp" value =<?= $row['telp'] ?>> 
<br>

<label for="alamat" class="form-label" >Alamat Toko</label>
<input type="text" class="form-control" id="alamat" name="alamat" value =<?= $row['alamat'] ?>> 
<br>

<label for="text" class="form-label" >Pilihan Transaksi</label>
<select class="form-select" name="pembayaran" aria-label="Default select example">
  <option name="pembayaran" selected>Select</option>
  <option name="pembayaran" value="BCA">BCA</option>
  <option name="pembayaran" value="Mandiri">Mandiri</option>
  <option name="pembayaran" value="BNI">BNI</option>
</select>
<br>

<label for="text" class="form-label" >Status</label>
<select class="form-select" name="status" aria-label="Default select example">
<option name="status" selected>Select</option>
  <option name="status" value="PENDING">PENDING</option>
  <option name="status" value="DIBATALKAN">DIBATALKAN</option>
  <option name="status" value="TERDAFTAR">TERDAFTAR</option>
</select>
<br>

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
