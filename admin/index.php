<?php 

include '../config/koneksi.php';

// Menghitung total santri
$sql_total = "SELECT COUNT(*) AS total FROM tbl_data_santri";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_santri = $row_total['total'];

// Menghitung santri aktif
$sql_aktif = "SELECT COUNT(*) AS aktif FROM tbl_data_santri WHERE status = 'Aktif'";
$result_aktif = $conn->query($sql_aktif);
$row_aktif = $result_aktif->fetch_assoc();
$santri_aktif = $row_aktif['aktif'];

// Menghitung santri tidak aktif
$sql_tidak_aktif = "SELECT COUNT(*) AS tidak_aktif FROM tbl_data_santri WHERE status = 'Tidak Aktif'";
$result_tidak_aktif = $conn->query($sql_tidak_aktif);
$row_tidak_aktif = $result_tidak_aktif->fetch_assoc();
$santri_tidak_aktif = $row_tidak_aktif['tidak_aktif'];


$sql = "SELECT * FROM tbl_data_santri";
$result = $conn->query($sql);

$santriData = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $santriData[] = $row; 
    }
} else {
    echo "Tidak ada data santri";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="data_santri.php" class="nav-link">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>
          Data Santri
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="tahun_ajaran.php" class="nav-link">
        <i class="nav-icon fas fa-calendar-alt"></i>
        <p>
          Tahun Ajaran
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="impor_ekspor.php" class="nav-link">
        <i class="nav-icon fas fa-exchange-alt"></i>
        <p>
          Impor / Ekspor
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="backup.php" class="nav-link">
        <i class="nav-icon fas fa-hdd"></i>
        <p>
          Backup
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
  </ul>
</nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<!-- Main content -->
<section class="content">
  <div class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
       <!-- small box -->
<div class="small-box bg-info">
  <div class="inner">
    <h3><?= $total_santri ?></h3>
    <p>Total Santri</p>
  </div>
  <div class="icon">
    <i class="ion ion-person"></i> <!-- Changed to a person icon -->
  </div>
</div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-6">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3><?= $santri_aktif ?></h3>
      <p>Aktif</p>
    </div>
    <div class="icon">
      <i class="ion ion-checkmark"></i> <!-- Changed to a checkmark icon -->
    </div>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-6">
  <!-- small box -->
  <div class="small-box bg-danger">
    <div class="inner">
      <h3><?= $santri_tidak_aktif ?></h3>
      <p>Tidak Aktif</p>
    </div>
    <div class="icon">
      <i class="ion ion-close"></i> <!-- Changed to a close icon -->
    </div>
  </div>
</div>

      <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Tabel Santri -->
    <div class="card mt-4">
      <div class="card-header">
        <h3 class="card-title">Daftar Santri</h3>
        <div class="card-tools">
          <input type="text" id="searchInput" class="form-control" placeholder="Cari Nama...">
        </div>
      </div>
      <div class="card-tools mt-2 ml-3">
  </select>
</div>
      <div class="card-body">
      <table id="santriTable" class="table table-bordered ">
      <select id="rowCount" class="form-control mb-2" style="width: auto;">
    <option value="10">10</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
    <option value="500">500</option>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Nomor WA</th>
            </tr>
          </thead>
          <tbody id="santriTableBody">
            <?php if (!empty($santriData)): ?>
              <?php $no = 1; ?>
              <?php foreach ($santriData as $row): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= htmlspecialchars($row['nama_lengkap']) ?></td>
                  <td><?= htmlspecialchars($row['alamat']) ?></td>
                  <td class="<?= ($row['status'] == ' Aktif') ? 'text-success' : 'text-danger' ?>">
                    <?= htmlspecialchars(ucfirst($row['status'])) ?>
                  </td>
                  <td>
                    <a href="https://wa.me/<?= htmlspecialchars($row['no_wa']) ?>" target="_blank">
                      <i class="fab fa-whatsapp"></i> <?= htmlspecialchars($row['no_wa']) ?>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="text-center">Tidak ada data santri</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container -->
</section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="main.js" ></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

</body>
</html>
