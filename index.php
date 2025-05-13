
	


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<?php include 'header.php';?>

<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'barbershop');
// mengambil user terdaftar
$data_barang = mysqli_query($koneksi,"SELECT * FROM users");

// menghitung user terdaftar
$jumlah_barang = mysqli_num_rows($data_barang);

// mengambil data pegawai
$data_pegawai = mysqli_query($koneksi,"SELECT * FROM pegawai");

// menghitung pegawai terdaftar
$jumlah_pegawai = mysqli_num_rows($data_pegawai);

// mengambil pesanan data
$data_jasa = mysqli_query($koneksi,"SELECT * FROM jasa");

// menghitung total pesanan
$jumlah_jasa = mysqli_num_rows($data_jasa);

// mengambil pesanan data
$data_marketplace = mysqli_query($koneksi,"SELECT * FROM toko");

// menghitung total pesanan
$jumlah_marketplace = mysqli_num_rows($data_marketplace);
?>



                    <!-- Content Row -->
                   <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User Terdaftar :</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $jumlah_barang; ?></b></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
<!-- Earnings (Annual) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pegawai:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $jumlah_pegawai; ?></b></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pesanan:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $jumlah_jasa; ?></b></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Marketplace Terdaftar:</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><b><?php echo $jumlah_marketplace; ?></b></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        


<!-- /.container-fluid -->
</div>
</div>
</div>
                        


                   
                
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ('footer.php');