<?php
if (@$log_tipeakun == "") {
    if ($req2 == "") {
        include 'zmain_page/home.php';
    } else

    if ($req2 == "masuk") {
        include 'zmain_page/masuk.php';
    } else

    if ($req2 == "lupa_password") {
        include 'zmain_page/lupa_password.php';
    } else

	if ($req2 == "blank") {
        include 'zmain_page/blank.php';
    } else {
        include 'zmain_page/404.php';
    }
}

elseif (@$log_tipeakun == "administrator") {
    if ($req2 == "") {
        include 'zmain_page/home.php';
    } else

    if ($req2 == "keluar") {
        include 'zmain_page/keluar.php';
    } else {
        include 'zmain_page/404.php';
    }
}

elseif (@$log_tipeakun == "umum") {
    if ($req2 == "") {
        include 'zmain_page/home.php';
    } else

    if ($req2 == "keluar") {
        include 'zmain_page/keluar.php';
    } else {
        include 'zmain_page/404.php';
    }
}
