<?php
if (isset($_POST['tambah'])) {
include_once 'koneksi.php';
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$perusahaan = $_POST['perusahaan'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$pembayaran = $_POST['pembayaran'];
$status = $_POST['status'];

$q= "INSERT INTO toko (id, nama, no_ktp, perusahaan, email, telp, alamat, pembayaran, status) VALUES ('$id', '$nama', '$no_ktp', '$perusahaan','$email', '$alamat', '$telp', '$pembayaran', '$status')";
$result = mysqli_query($koneksi, $q);
if ($result) {
header('location: index.php');
}
}
?>

<?php
  if(isset($_POST["upload"]))
  {
      $temp = "upload/";
      if (!file_exists($temp))
        mkdir($temp);
 
      $fileupload      = $_FILES['fileupload']['tmp_name'];
      $ImageName       = $_FILES['fileupload']['name'];
      $ImageType       = $_FILES['fileupload']['type'];
 
      if (!empty($fileupload)){
        // mengacak angka untuk nama file
        $acak = rand(00000000, 99999999);
 
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt       = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = $acak.'.'.$ImageExt;
 
        move_uploaded_file($_FILES["fileupload"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
 
        echo "<script>alert('Berhasil diupload'); location='index.php'</script>";
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
<title>Tambah</title>
</head>
<body>
<?php 
include 'header.php';?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Data User</h1>


<!-- DataTales Example -->
 <div class="row">

                        
<div class="card mb-4">
                                <div class="card-header">
                                    Tambah Data
                                </div>
                                <div class="card-body">
                                    
                                

                                <form action="tambah.php" method="POST">
<label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control" id="nama" name="nama">
<br>
<label for="ktp">No. KTP</label> 
<input type="text" class="form-control" id="ktp" name="no_ktp"> 

<br>
<label for="fileupload">Upload Foto KTP</label> 
<input type="file" class="form-control" id="fileupload" name="fileupload"> 

<br>
<label for="perusahaan">Nama Toko</label> 
<input type="text" class="form-control" id="perusahaan" name="perusahaan"> 
<br>

<label for="email">Email</label>
<input type="text" class="form-control" id="email" name="email">
<br>

<label for="telp" class="form-label" >No Telp</label>
<input type="text" class="form-control" id="telp" name="telp"> 
<br>

<label for="alamat" class="form-label" >Alamat Toko</label>
<input type="text" class="form-control" id="alamat" name="alamat"> 
<br>

<label for="text" class="form-label" >Pilihan Transaksi</label>
<select class="form-select" name="pembayaran" aria-label="Default select example">
  <option name="pembayaran" selected>Select</option>
  <option name="pembayaran" value="BCA">BCA</option>
  <option name="pembayaran" value="Mandiri">Mandiri</option>
  <option name="pembayaran" value="BNI">BNI</option>
</select>
<br>
<input type="hidden" class="form-control" id="status" name="status" value="PENDING"> 


<button type="submit" class="btn btn-primary" name="tambah" value="tambah">Simpan</button>
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