<div class="content-wrapper">
    <?php
    $link = $link_web . "/lupa_password";
    if (isset($_POST['reset'])) {
        $nim = $_POST['nim'];

        $cek = $db->tampildata2("count(*) as jumlah", "tb_mahasiswa where nim='$nim'")->fetch_array();
        $cek2 = $cek['jumlah'];
    }
    ?>
    <!-- Main content -->
    <?php if (@$cek2 > 0) { ?>
        <section class="content">
            <div class="container-fluid hold-transition login-page" style="height: 80vh;">
                <div class="login-box">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="<?php echo $link_web . "/lupa_password"; ?>" class="h1"><b>LPM</b> Sistem</a>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Silahkan Copy Text Dibawah ini dan kirimkan ke bagian LPM UNISM</p>
                            <p>
                                Assalamualaikum Wr.Wb <br>
                                Nim : <?php echo $nim ?><br>
                                Nama : <?php echo $db->lihatdata("tb_mahasiswa", "nama", "nim", $nim); ?><br>
                                Alumni : <?php echo $db->lihatdata("tb_mahasiswa", "idta", "nim", $nim); ?><br><br>

                                Saya ingin reset password : <br><?php echo $link_web . "/reset_password_acc" ?><br>
                                Terima kasih.

                            </p>
                            <p class="mt-3 mb-1">
                                <a href="<?php echo $link_web . "/masuk"; ?>">Login</a>
                            </p>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="content">
            <div class="container-fluid hold-transition login-page" style="height: 80vh;">
                <div class="login-box">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="<?php echo $link_web . "/lupa_password"; ?>" class="h1"><b>LPM</b> Sistem</a>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Kamu Lupa Password?, kamu bisa mereset password dengan memasukkan NIM</p>
                            <form action="<?php $link ?>" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" name="reset" class="btn btn-primary btn-block">Minta Reset Password</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <p class="mt-3 mb-1">
                                <a href="<?php echo $link_web . "/masuk"; ?>">Login</a>
                            </p>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</div>