<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aplikasi Pemilihan Smartphone</title>
        <meta name="description" content="Aplikasi Pemilihan Smartphone">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>

    <body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
          <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="./">PSTBK</a>
              <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="admin.php"> <i class="menu-icon "></i>HOME </a>
                </li>
                <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                  <li class="">
                    <a href="tabelsmartphone_admin.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Tabel Smarthphone</a>
                  </li>
                  <li class="">
                    <a href="tabelkriteria_admin.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Tabel Kriteria</a>
                  </li>
                  <li class="">
                    <a href="setting_tabelkriteria_admin.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon "></i>Setting Tabel Kriteria</a>
                  </li>

              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">5</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                        <i class="fa fa-check"></i>
                                        <p>Server #1 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="#">
                                        <i class="fa fa-info"></i>
                                        <p>Server #2 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-5" href="#">
                                        <i class="fa fa-warning"></i>
                                        <p>Server #3 overloaded.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-email"></i>
                                    <span class="count bg-primary">9</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-5" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-3" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="login_admin.php"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-id"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="language">
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-fr"></span>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-es"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-it"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Setting tabel Kriteria</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="admin.php">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Setting Tabel Kriteria</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<!-- kriteriagaming -->
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                      <div class="col-lg">
                          <div class="card">
                              <div class="card-header">
                                  <strong class="card-title">Edit Kriteria Gaming</strong>
                              </div>
                              <div class="card-body card-block">
                                  <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-sm-5"><label for="kodegaming" class=" form-control-label">Code</label></div>
                                        <div class="col col-sm-6">

                                          <select id="kodegaming" name="kodegaming">
                                            <?php
                                             //Membuat koneksi ke database SPK
                                             $kon = mysqli_connect("localhost",'root',"","SPK");
                                             if (!$kon){
                                                die("Koneksi database gagal:".mysqli_connect_error());
                                             }

                                             //Perintah sql untuk menampilkan semua data pada tabel brand
                                              $sql="select distinct kode from kriteria_gaming ";

                                              $hasil=mysqli_query($kon,$sql);
                                              $no=0;
                                              while ($data = mysqli_fetch_array($hasil)) {
                                              $no++;
                                             ?>
                                              <option value="<?php echo $data['kode'];?>"><?php echo $data['kode'];?></option>
                                            <?php
                                            }
                                            ?>
                                          </select>

                                        </div>
                                    </div>

                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="kriteriagaming" class=" form-control-label">Kriteria</label></div>
                                          <div class="col col-sm-6">
                                            <input type="text" name="kriteriagaming" value=" ">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="bobotgaming" class=" form-control-label">Bobot</label></div>
                                          <div class="col col-sm-6">
                                            <input type="text" name="bobotgaming" value="">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="costbenefit" class=" form-control-label">Cost/Benefit</label></div>
                                          <div class="col col-sm-6">
                                            <input type="text" name="costbenefitgaming" value="">

                                          </div>
                                      </div>

                                      </div>
            </div>

                              <div class="card-footer">
                                <input type=submit class="btn btn-primary btn-sm" name="Editgaming" value="Edit">
                              </div>


                              </form>
                          </div>
                      </div>
                    </div>
                </div><!-- .animated -->

                <!-- Kriteria sosmed/fotografi -->
                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
                          <div class="col-lg">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Edit Kriteria Sosmed / fotografi</strong>
                                  </div>
                                  <div class="card-body card-block">
                                      <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-sm-5"><label for="kodesosmedfotografi" class=" form-control-label">Code</label></div>
                                            <div class="col col-sm-6">

                                              <select id="kodesosmedfotografi" name="kodesosmedfotografi">
                                                <?php
                                                 //Membuat koneksi ke database SPK
                                                 $kon = mysqli_connect("localhost",'root',"","SPK");
                                                 if (!$kon){
                                                    die("Koneksi database gagal:".mysqli_connect_error());
                                                 }

                                                 //Perintah sql untuk menampilkan semua data pada tabel brand
                                                  $sql="select distinct kode from kriteria_sosmed_fotografi ";

                                                  $hasil=mysqli_query($kon,$sql);
                                                  $no=0;
                                                  while ($data = mysqli_fetch_array($hasil)) {
                                                  $no++;
                                                 ?>
                                                  <option value="<?php echo $data['kode'];?>"><?php echo $data['kode'];?></option>
                                                <?php
                                                }
                                                ?>
                                              </select>

                                            </div>
                                        </div>

                                          <div class="row form-group">
                                              <div class="col col-sm-5"><label for="kriteriasosmedfotografi" class=" form-control-label">Kriteria</label></div>
                                              <div class="col col-sm-6">
                                                <input type="text" name="kriteriasosmedfotografi" value=" ">
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-sm-5"><label for="bobotsosmedfotografi" class=" form-control-label">Bobot</label></div>
                                              <div class="col col-sm-6">
                                                <input type="text" name="bobotsosmedfotografi" value="">
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-sm-5"><label for="costbenefitsosmedfotografi" class=" form-control-label">Cost/Benefit</label></div>
                                              <div class="col col-sm-6">
                                                <input type="text" name="costbenefitsosmedfotografi" value="">

                                              </div>
                                          </div>

                                          </div>
                </div>

                                  <div class="card-footer">
                                    <input type=submit class="btn btn-primary btn-sm" name="Editsosmedfotografi" value="Edit">
                                  </div>


                                  </form>
                              </div>
                          </div>
                        </div>
                    </div><!-- .animated -->
                <!-- Kriteria sosmed/fotografi -->

                <!-- Kriteria Streaming -->
                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
                          <div class="col-lg">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Edit Kriteria Streaming</strong>
                                  </div>
                                  <div class="card-body card-block">
                                      <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-sm-5"><label for="kodestreaming" class=" form-control-label">Code</label></div>
                                            <div class="col col-sm-6">

                                              <select id="kodestreaming" name="kodestreaming">
                                                <?php
                                                 //Membuat koneksi ke database SPK
                                                 $kon = mysqli_connect("localhost",'root',"","SPK");
                                                 if (!$kon){
                                                    die("Koneksi database gagal:".mysqli_connect_error());
                                                 }

                                                 //Perintah sql untuk menampilkan semua data pada tabel brand
                                                  $sql="select distinct kode from kriteria_streaming ";

                                                  $hasil=mysqli_query($kon,$sql);
                                                  $no=0;
                                                  while ($data = mysqli_fetch_array($hasil)) {
                                                  $no++;
                                                 ?>
                                                  <option value="<?php echo $data['kode'];?>"><?php echo $data['kode'];?></option>
                                                <?php
                                                }
                                                ?>
                                              </select>

                                            </div>
                                        </div>

                                          <div class="row form-group">
                                              <div class="col col-sm-5"><label for="kriteriastreaming" class=" form-control-label">Kriteria</label></div>
                                              <div class="col col-sm-6">
                                                <input type="text" name="kriteriastreaming" value=" ">
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-sm-5"><label for="bobotstreaming" class=" form-control-label">Bobot</label></div>
                                              <div class="col col-sm-6">
                                                <input type="text" name="bobotstreaming" value="">
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-sm-5"><label for="costbenefitstreaming" class=" form-control-label">Cost/Benefit</label></div>
                                              <div class="col col-sm-6">
                                                <input type="text" name="costbenefitstreaming" value="">

                                              </div>
                                          </div>

                                          </div>
                                        </div>

                                  <div class="card-footer">
                                    <input type=submit class="btn btn-primary btn-sm" name="Editstreaming" value="Edit">
                                  </div>


                                  </form>
                              </div>
                          </div>
                        </div>
                    </div><!-- .animated -->
                    <!-- Kriteria Streaming -->

                    <!-- Kriteria internal -->
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">
                              <div class="col-lg">
                                  <div class="card">
                                      <div class="card-header">
                                          <strong class="card-title">Edit Internal</strong>
                                      </div>
                                      <div class="card-body card-block">
                                          <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5"><label for="Kodeinternal" class=" form-control-label">Kode </label></div>
                                                <div class="col col-sm-6">

                                                  <select id="Kodeinternal" name="Kodeinternal">
                                                    <?php
                                                     //Membuat koneksi ke database SPK
                                                     $kon = mysqli_connect("localhost",'root',"","SPK");
                                                     if (!$kon){
                                                        die("Koneksi database gagal:".mysqli_connect_error());
                                                     }

                                                     //Perintah sql untuk menampilkan semua data pada tabel brand
                                                      $sql="select distinct Kode from internal ";

                                                      $hasil=mysqli_query($kon,$sql);
                                                      $no=0;
                                                      while ($data = mysqli_fetch_array($hasil)) {
                                                      $no++;
                                                     ?>
                                                      <option value="<?php echo $data['Kode'];?>"><?php echo $data['Kode'];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                  </select>

                                                </div>
                                            </div>

                                              <div class="row form-group">
                                                  <div class="col col-sm-5"><label for="internal" class=" form-control-label">Internal</label></div>
                                                  <div class="col col-sm-6">
                                                    <input type="text" name="internal" value=" ">
                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-sm-5"><label for="Bobotinternal" class=" form-control-label">Bobot</label></div>
                                                  <div class="col col-sm-6">
                                                    <input type="text" name="Bobot" value=" ">
                                                  </div>
                                              </div>
                                            </div>

                                      <div class="card-footer">
                                        <input type=submit class="btn btn-primary btn-sm" name="EditInternal" value="Edit">
                                      </div>


                                      </form>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- .animated -->
                        <!-- Kriteria Internal -->

                        <!-- Kamera Utama -->
                        <div class="content mt-3">
                            <div class="animated fadeIn">
                                <div class="row">
                                  <div class="col-lg">
                                      <div class="card">
                                          <div class="card-header">
                                              <strong class="card-title">Edit Kamera Utama</strong>
                                          </div>
                                          <div class="card-body card-block">
                                              <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-sm-5"><label for="Kodekamera" class=" form-control-label">Kode </label></div>
                                                    <div class="col col-sm-6">

                                                      <select id="Kodekamera" name="Kodekamera">
                                                        <?php
                                                         //Membuat koneksi ke database SPK
                                                         $kon = mysqli_connect("localhost",'root',"","SPK");
                                                         if (!$kon){
                                                            die("Koneksi database gagal:".mysqli_connect_error());
                                                         }

                                                         //Perintah sql untuk menampilkan semua data pada tabel brand
                                                          $sql="select distinct Kode from kamera_utama ";

                                                          $hasil=mysqli_query($kon,$sql);
                                                          $no=0;
                                                          while ($data = mysqli_fetch_array($hasil)) {
                                                          $no++;
                                                         ?>
                                                          <option value="<?php echo $data['Kode'];?>"><?php echo $data['Kode'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                      </select>

                                                    </div>
                                                </div>

                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="kamerautama" class=" form-control-label">Kamera Utama</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="kamerautama" value=" ">
                                                      </div>
                                                  </div>
                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="Bobotkamera" class=" form-control-label">Bobot</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="Bobotkamera" value=" ">
                                                      </div>
                                                  </div>
                                                </div>

                                          <div class="card-footer">
                                            <input type=submit class="btn btn-primary btn-sm" name="Editkamera" value="Edit">
                                          </div>
                                          </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- .animated -->
                        <!-- kamera Utama -->

                        <!-- Layar -->
                        <div class="content mt-3">
                            <div class="animated fadeIn">
                                <div class="row">
                                  <div class="col-lg">
                                      <div class="card">
                                          <div class="card-header">
                                              <strong class="card-title">Edit Layar</strong>
                                          </div>
                                          <div class="card-body card-block">
                                              <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-sm-5"><label for="Kodelayar" class=" form-control-label">Kode </label></div>
                                                    <div class="col col-sm-6">

                                                      <select id="Kodelayar" name="Kodelayar">
                                                        <?php
                                                         //Membuat koneksi ke database SPK
                                                         $kon = mysqli_connect("localhost",'root',"","SPK");
                                                         if (!$kon){
                                                            die("Koneksi database gagal:".mysqli_connect_error());
                                                         }

                                                         //Perintah sql untuk menampilkan semua data pada tabel brand
                                                          $sql="select distinct Kode from layar ";

                                                          $hasil=mysqli_query($kon,$sql);
                                                          $no=0;
                                                          while ($data = mysqli_fetch_array($hasil)) {
                                                          $no++;
                                                         ?>
                                                          <option value="<?php echo $data['Kode'];?>"><?php echo $data['Kode'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                      </select>

                                                    </div>
                                                </div>

                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="layar" class=" form-control-label">Layar</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="layar" value=" ">
                                                      </div>
                                                  </div>
                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="BobotLayar" class=" form-control-label">Bobot</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="Layar" value=" ">
                                                      </div>
                                                  </div>
                                                </div>

                                          <div class="card-footer">
                                            <input type=submit class="btn btn-primary btn-sm" name="EditLayar" value="Edit">
                                          </div>


                                          </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- .animated -->
                        <!-- Layar -->

                        <!-- Ram -->
                        <div class="content mt-3">
                            <div class="animated fadeIn">
                                <div class="row">
                                  <div class="col-lg">
                                      <div class="card">
                                          <div class="card-header">
                                              <strong class="card-title">Edit RAM</strong>
                                          </div>
                                          <div class="card-body card-block">
                                              <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-sm-5"><label for="Koderam" class=" form-control-label">Kode </label></div>
                                                    <div class="col col-sm-6">

                                                      <select id="Koderam" name="Koderam">
                                                        <?php
                                                         //Membuat koneksi ke database SPK
                                                         $kon = mysqli_connect("localhost",'root',"","SPK");
                                                         if (!$kon){
                                                            die("Koneksi database gagal:".mysqli_connect_error());
                                                         }

                                                         //Perintah sql untuk menampilkan semua data pada tabel brand
                                                          $sql="select distinct Kode from ram ";

                                                          $hasil=mysqli_query($kon,$sql);
                                                          $no=0;
                                                          while ($data = mysqli_fetch_array($hasil)) {
                                                          $no++;
                                                         ?>
                                                          <option value="<?php echo $data['Kode'];?>"><?php echo $data['Kode'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                      </select>

                                                    </div>
                                                </div>

                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="ram" class=" form-control-label">RAM</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="ram" value=" ">
                                                      </div>
                                                  </div>
                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="Bobotram" class=" form-control-label">Bobot</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="ram" value=" ">
                                                      </div>
                                                  </div>
                                                </div>

                                          <div class="card-footer">
                                            <input type=submit class="btn btn-primary btn-sm" name="EditRAM" value="Edit">
                                          </div>


                                          </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- .animated -->
                        <!-- Ram -->

                        <!-- Procesor -->
                        <div class="content mt-3">
                            <div class="animated fadeIn">
                                <div class="row">
                                  <div class="col-lg">
                                      <div class="card">
                                          <div class="card-header">
                                              <strong class="card-title">Edit Processor</strong>
                                          </div>
                                          <div class="card-body card-block">
                                              <form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-sm-5"><label for="Processor" class=" form-control-label">Processor </label></div>
                                                    <div class="col col-sm-6">

                                                      <select id="Processor" name="Processor">
                                                        <?php
                                                         //Membuat koneksi ke database SPK
                                                         $kon = mysqli_connect("localhost",'root',"","SPK");
                                                         if (!$kon){
                                                            die("Koneksi database gagal:".mysqli_connect_error());
                                                         }

                                                         //Perintah sql untuk menampilkan semua data pada tabel brand
                                                          $sql="select distinct processor from prosesor";

                                                          $hasil=mysqli_query($kon,$sql);
                                                          $no=0;
                                                          while ($data = mysqli_fetch_array($hasil)) {
                                                          $no++;
                                                         ?>
                                                          <option value="<?php echo $data['processor'];?>"><?php echo $data['processor'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                      </select>

                                                    </div>
                                                </div>

                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="performa" class=" form-control-label">Performa</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="performa" value=" ">
                                                      </div>
                                                  </div>
                                                  <div class="row form-group">
                                                      <div class="col col-sm-5"><label for="Bobotprocessor" class=" form-control-label">Bobot</label></div>
                                                      <div class="col col-sm-6">
                                                        <input type="text" name="processor" value=" ">
                                                      </div>
                                                  </div>
                                                </div>

                                          <div class="card-footer">
                                            <input type=submit class="btn btn-primary btn-sm" name="EditProcessorr" value="Edit">
                                          </div>


                                          </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- .animated -->
                        <!-- Procesor -->



            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="assets/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/lib/data-table/datatables-init.js"></script>


        <script type="text/javascript">
          $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
          });
        </script>

    </body>

</html>
