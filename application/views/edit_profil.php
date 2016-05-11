<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profil</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/animate.css/animate.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/cuitter/css/style.css') ?>" />
    </head>
    <body>


        <div class="container container-fluid">
            <div class="row profil-body">
                <div class="col-md-12">
                    <div>
                        <a href="<?php echo base_url('profil') ?>">Kembali</a>
                    </div>
                    <h2>Edit Profil</h2>
                    <hr>

                    <form action="<?php echo base_url('profil/update') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Alamat Email" value="<?php echo $user->email ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" accept="image/jpeg,.png,.gif"/>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $user->id ?>" />
                            <input type="hidden" name="foto_lama" value="<?php echo $user->foto ?>" />
                            <input type="submit" class="btn btn-info" name="btn_update" value="Simpan" />
                        </div>
                    </form>

                </div>
            </div>

            <div class="row profil-footer">
                <div class="col-md-12">
                    <p>Copyright &copy; <?php echo Date('Y') ?> <a href="http://petanikode.com">Ardianta Pargo</a></p>
                </div>
            </div>
        </div>

    </body>
</html>
