<?php
// Title		: Sistem Informasi ... 
// Date			: ...
// Update		: ...
// Editor 	: L9kyuu
// Email 		: admin@buildapp.my.id
$versi_app 	= "0.13";
date_default_timezone_set('Asia/Makassar'); // Ganti dengan timezone yang sesuai

include 'zmain_config/pengaturan.php';
include 'api/koneksi_baru.php';
include 'api/koneksi_lama.php';
include 'zmain_config/tgl_indo.php';
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'zmain_view/header.php'; ?>
<!-- /.Head -->

<body class="sidebar-mini layout-footer-fixed sidebar-collapse">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo $link_logo ?>" alt="ini logo" height="300" width="300" />
    </div> -->
    <!-- Navbar -->
    <?php include 'zmain_view/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'zmain_view/menu.php' ?>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <?php include 'zmain_page/page.php' ?>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php include 'zmain_view/footer.php' ?>
    <!-- /.footer -->