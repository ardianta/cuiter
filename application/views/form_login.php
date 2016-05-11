<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register Cuitter</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/animate.css/animate.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/cuitter/css/style.css') ?>" />
    </head>
    <body>


        <div class="container">
            <div class="row">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="col-md-5 form-register text-center animated slideInDown">
                    <h2>Masuk ke Cuitter</h2>
                    <p>Belum punya akun? <a href="<?php echo base_url('register') ?>">Daftar di sini</a></p>

                        <hr>

                    <form class="form" action="<?php echo base_url('login/proseslogin') ?>" method="post">

                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Username" /><br>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" /><br>
                        </div>
                        <input class="btn btn-info btn-lg" style="width:100%" type="submit" name="btn_login" value="Masuk" />
                    </form>

                </div>
            </div>
        </div>

    </body>
</html>
