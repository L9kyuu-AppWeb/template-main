<?php
unset($_SESSION['log_username_namaapp']);
unset($_SESSION['log_tipe_akun_namaapp']);

echo $db->alert("Proses Keluar Berhasil", "$link_web");
exit();

?>