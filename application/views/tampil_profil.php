<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profil - <?php echo $user->nama ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/animate.css/animate.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/cuitter/css/style.css') ?>" />
    </head>
    <body>


        <div class="container container-fluid">
            <div class="row text-center">
                <div class="col-md-12 profil-header">
                    <img class="foto-profil img img-thumbnail img-circle" src="<?php echo base_url('assets/cuitter/img/profil') . "/" . $user->foto ?>" />
                    <h3><?php echo $user->nama ?></h3>
                    <p class="small"><?php echo $user->email ?></p>
                    <div>
                        <a href="<?php echo base_url('profil/edit') ?>">Edit</a> |
                        <a href="<?php echo base_url('login/logout') ?>">Keluar</a>
                    </div>
                </div>
            </div>

            <div class="row profil-body">
                <div class="col-md-12">

                    <div class="status">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <small class="label label-default">1 menit yang lalu</small>
                    </div>
                    <div class="status">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <small class="label label-default">3 hari yang lalu</small>
                    </div>
                    <div class="status">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <small>1 minggu yang lalu</small>
                    </div>
                    <div class="status">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <small class="label label-default">4 bulan yang lalu</small>
                    </div>
                    <div class="status">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <small class="label label-default">05 Juni 2011</small>
                    </div>

                </div>
            </div>

            <div class="row profil-footer">
                <div class="col-md-12">
                    <p>Copyright &copy; STMIK Bumigora Mataram</p>
                </div>
            </div>
        </div>

    </body>
</html>
