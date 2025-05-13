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
 
  color: white
  text-decoration: none;
}
</style>
<title>Home</title>
</head>
<body>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
<tr>
<th class="table-primary"><center>No</center></th>
<th class="table-primary"><center>Nama</center></th>
<th class="table-primary"><center>No. KTP</center></th>
<th class="table-primary"><center>File KTP</center></th>
<th class="table-primary"><center>Nama Toko</center></th>
<th class="table-primary"><center>Email</center></th>
<th class="table-primary"><center>No Telp</center></th>
<th class="table-primary"><center>Alamat</center></th>
<th class="table-primary"><center>Pembayaran</center></th>
<th class="table-primary"><center>Status</center></th>

</tr>
</thead>
<tbody>
<?php
include_once 'koneksi.php';

              
    $SqlQuery = mysqli_query($koneksi, "SELECT * FROM toko");
    
    
    
    while($row = mysqli_fetch_array($SqlQuery)){ 
?>
<!-- jangan lupa ini  -->
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nama'] ?></td>
<td><?= $row['no_ktp'] ?></td>
<td><img src="upload/<?php echo ['fileupload'] ?>"</td>
<td><?= $row['perusahaan'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['telp'] ?></td>
<td width="200px"><?= $row['alamat'] ?></td>
<td><?= $row['pembayaran'] ?></td>
<td><?= $row['status'] ?></td>

    </div>
  </div>
</div>
</td>
</tr>
<?php
}
?>
</tbody>
</table>

  
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Bootstrap core JavaScript-->


</html>


<script>
		window.print();
	</script>