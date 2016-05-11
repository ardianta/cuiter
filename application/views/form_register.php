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
                <div class="col-md-5 form-register text-center animated slideInDown">
                    <h2>Buat akun Cuitter-mu!</h2>
                    <p>Cuit, Cuiit~ Ayo gabung! atau <a href="<?php echo base_url('login') ?>">login di sini</a>.<p>

                        <hr>

                    <form class="form" action="<?php echo base_url('register/simpan') ?>" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="Nama lengkap" /><br>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Username" /><br>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" /><br>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Alamat Eamil" /><br>
                        </div>
                        <input class="btn btn-info btn-lg" style="width:100%" type="submit" name="btn_simpan" value="Daftar" />
                    </form>

                </div>
            </div>
        </div>

    </body>
</html>
