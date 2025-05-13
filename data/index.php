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


<?php include 'header.php';?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Tabel User</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <button type="button" class="btn btn-success"> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg>
<a href="tambah.php" style="color: white">
Tambah User
</a>
</button>
<br>
<br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
<tr>
<th class="table-primary"><center>Id</center></th>
<th class="table-primary"><center>Username</center></th>
<th width="%" class="table-primary"><center>Password</center></th>
<th class="table-primary"><center>Nama</center></th>
<th class="table-primary"><center>Action</center></th>

</tr>
</thead>
<tbody>
<?php
include_once 'koneksi.php';
$page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
    
    // Jumlah data per halaman
    $limit = 5;

    $limitStart = ($page - 1) * $limit;
              
    $SqlQuery = mysqli_query($koneksi, "SELECT * FROM users LIMIT ".$limitStart.",".$limit);
    
    $no = $limitStart + 1;
    
    while($row = mysqli_fetch_array($SqlQuery)){ 
?>
<!-- jangan lupa ini  -->
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['username'] ?></td>
<td><?= $row['password'] ?></td>
<td><?= $row['nama'] ?></td>
<td>

<button type="button" class="btn btn-warning">
    
<a style="color:white"  href="edit.php?id= <?= $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
Edit</a> </button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
  Delete
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
Konfirmasi Hapus Data ?
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger"><a style="color:white" href="hapus.php?id=<?= $row['id'] ?>">Hapus</a> </button> </button>
      </div>
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
<div align="right">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
    // Jika page = 1, maka LinkPrev disable
    if($page == 1){ 
    ?>        
      <!-- link Previous Page disable --> 
      <li class="page item"> <a a class="page-link" href="#">Previous</a></li>
    <?php
    }
    else{ 
      $LinkPrev = ($page > 1)? $page - 1 : 1;
    ?>
      <!-- link Previous Page --> 
      <li class="page-item"><a a class="page-link" href="index.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
    <?php
      }
    ?>

    <?php
    $SqlQuery = mysqli_query($koneksi, "SELECT * FROM users");        
    
    //Hitung semua jumlah data yang berada pada tabel Sisawa
    $JumlahData = mysqli_num_rows($SqlQuery);
    
    // Hitung jumlah halaman yang tersedia
    $jumlahPage = ceil($JumlahData / $limit); 
    
    // Jumlah link number 
    $jumlahNumber = 1; 

    // Untuk awal link number
    $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
    
    // Untuk akhir link number
    $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
    
    for($i = $startNumber; $i <= $endNumber; $i++){
      $linkActive = ($page == $i)? ' class="active"' : '';
    ?>
      <li<?php echo $linkActive; ?>><a a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php
      }
    ?>
    
    <!-- link Next Page -->
    <?php       
    if($page == $jumlahPage){ 
    ?>
      <li class="page-item"><a a class="page-link" href="#">Next</a></li>
    <?php
    }
    else{
      $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
    ?>
      <li class="page-item"><a a class="page-link" href="index.php?page=<?php echo $linkNext; ?>">Next</a></li>
    <?php
    }
    ?>
  </ul>
  </nav>
  </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Bootstrap core JavaScript-->


</html>
<?php include 'footer.php';?>