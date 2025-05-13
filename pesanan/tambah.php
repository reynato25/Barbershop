<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include 'koneksi.php';
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM jasa");
	$data = mysqli_fetch_array($query);
	$kodeBarang = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeBarang, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "BRG";
	$kodeBarang = $huruf . sprintf("%03s", $urutan);
	?>

<?php
if (isset($_POST['tambah'])) {
include_once 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_booking = $_POST['tgl_booking'];
$waktu_booking = $_POST['waktu_booking'];
$lokasi = $_POST['lokasi'];
$paket = $_POST['paket'];
$harga = $_POST['harga'];
$pembayaran = $_POST['pembayaran'];
$tgl_pesan = $_POST['tgl_pesan'];

$q= "INSERT INTO jasa (id, nama, tgl_booking, waktu_booking, lokasi, paket, harga, pembayaran, tgl_pesan) VALUES ('$id', '$nama', '$tgl_booking', '$waktu_booking','$lokasi', '$paket', '$harga', '$pembayaran', '$tgl_pesan')";
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
<title>Tambah</title>
</head>
<body>
<?php 
include 'header.php';?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Data Pesanan</h1>


<!-- DataTales Example -->
 <div class="row">

                        
<div class="card mb-4">
                                <div class="card-header">
                                    Tambah Data
                                </div>
                                <div class="card-body">
                                    
                                

                                <form action="tambah.php" method="POST">
                                <input type="hidden" name="id" required="required" value="<?php echo $kodeBarang ?>" readonly>
<br>
<label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control" id="nama" name="nama">
<br>
<label for="dt">Tanggal Booking</label> 
<input type="date" class="form-control" id="dt" name="tgl_booking"> 

<br>
<label for="time">Waktu Booking</label> 
<input type="time" class="form-control" id="time" name="waktu_booking"> 
<br>

<label for="lokasi">Lokasi</label>
<select class="form-select" name="lokasi" aria-label="Default select example">
  <option name="lokasi" selected>Select</option>
  <option name="lokasi" value="Barbershop Yuda Rancak Bana">Barbershop Yuda Rancak Bana</option>
  <option name="lokasi" value="Barber Shop A'Ujang">Barber Shop A'Ujang</option>
</select>
<br>
<label for="text" class="form-label" >Pilih Paket</label>
<select class="form-select" name="paket" id="paket" aria-label="Default select example">
  <option name="paket" data-harga="25000" data-discount="0" value="Cukur Dewasa">Cukur Dewasa</option>
  <option name="paket" data-harga="20000" data-discount="0" value="Cukur Anak">Cukur Anak</option>
  <option name="paket" data-harga="30000" data-discount="0" value="Cukur Botak">Cukur Botak</option>
  <option name="paket" data-harga="35000" data-discount="0" value="Cukur Rambut Jenggot">Cukur Rambut + Jenggot</option>
  <option name="paket" data-harga="40000" data-discount="0" value="Cukur Rambut + Cuci Kepala">Cukur Rambut + Cuci Kepala</option>
  <option name="paket" data-harga="70000" data-discount="0" value="Cukur Rumah Pribadi">Cukur Rumah Pribadi</option>
</select>
<br>


<label for="harga">Harga</label>
      <input type="text" name="harga" id="harga" class="form-control name="harga" readonly />
      <br>
<label for="text" class="form-label" >Pilihan Transaksi</label>
<select class="form-select" name="pembayaran" aria-label="Default select example">
  <option name="pembayaran" selected>Select</option>
  <option name="pembayaran" value="BCA">BCA</option>
  <option name="pembayaran" value="Mandiri">Mandiri</option>
  <option name="pembayaran" value="BNI">BNI</option>
</select>
<br>
<input type="hidden" name="tgl_pesan" value="<?php
// Return current date from the remote server
$date = date('d-m-y h:i:s');
echo $date;
?>"> 

<br>
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


<script>
  $('#paket').on('change', function(){
  // ambil data dari elemen option yang dipilih
  const harga = $('#paket option:selected').data('harga');
  const discount = $('#paket option:selected').data('discount');
  
  // kalkulasi total harga
  const totalDiscount = (harga * discount/100)
  const total = harga - totalDiscount;
  
  // tampilkan data ke element
  $('[name=harga]').val(harga);
  $('[name=discount]').val(totalDiscount);
  
  $('#total').text(`Rp ${total}`);
});
</script>


