<?php
@session_start();
// Untuk Koneksi
$domain = "template-main.test";
include 'api/route.php';

// Link untuk tampilan
$link_logo = WEB_ROOT."/zmain_file/web/logo.png";
$link_web = WEB_ROOT;

// Untuk Menu (ganti namaapp menjadi nama aplikasi)
$log_username = @$_SESSION['log_username_namaapp'];
$log_tipeakun = @$_SESSION['log_tipe_akun_namaapp'];
