<?php
if ($log_tipeakun == "") {
    include 'zmain_view/aside.php';
} elseif ($log_tipeakun == "administrator") {
    include 'zmain_view/aside_admin.php';
} elseif ($log_tipeakun == "umum") {
    include 'zmain_view/aside_mhs.php';
}
