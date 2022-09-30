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
                            <h1>Tabel Smarthphone</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="admin.php">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Tabel Smarthphone</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                      <div class="col-lg">
                          <div class="card">
                            <div class="card-header">
                                  <strong class="card-title">Insert Tabel Smarthphone</strong>
                            </div>
                            <div class="card-body card-block">
                              <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                                <?php
                                $id = "";
                                $nama = "";
                                $brand = "";
                                $ram="";
                                $internal="";
                                $processor="";
                                $kamera_utama="";
                                $layar="";
                                $harga = "";
                                $baterai = "";
                                $kon = mysqli_connect("localhost",'root',"","spk");
                                if (isset($_GET['id_editbrg'])) 
                                {
                                  $id_handphone = $_GET['id_editbrg'];
                                  $database = "SELECT id_handphone, nama, brand, harga, ram, internal, upper(processor) as processor, kamera_utama, upper(layar) as layar, baterai FROM handphone where id_handphone='$id_handphone'";
                                  $query = mysqli_query($kon,$database);
                                  while ($a = mysqli_fetch_array($query)) {
                                    $id = $a['id_handphone'];
                                    $nama = $a['nama'];
                                    $brand = $a['brand'];
                                    $harga = $a['harga'];
                                    $ram = $a['ram'];
                                    $internal = $a['internal'];
                                    $processor = $a['processor'];
                                    $kamera_utama = $a['kamera_utama'];
                                    $layar = $a['layar'];
                                    $baterai = $a['baterai'];
                                  }
                                }
                                ?>
                                <input type="text" name="id_update" value="<?php echo $id; ?>" hidden >
                                <div class="row form-group">
                                    <div class="col col-sm-5"><label for="Nama" class=" form-control-label">Nama</label></div>
                                    <div class="col col-sm-6">
                                      <input type="text" name="nama" value="<?php echo $nama; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="brand" class=" form-control-label">Brand</label></div>
                                  <div class="col col-sm-6">
                                    <select id="brand" name="brand">
                                      <?php
                                        //Membuat koneksi ke database spk
                                        $kon = mysqli_connect("localhost",'root',"","spk");
                                        if (!$kon){
                                        die("Koneksi database gagal:".mysqli_connect_error());
                                        }
                                        //Perintah sql untuk menampilkan semua data pada tabel brand
                                        $sql="select distinct brand from handphone";
                                        $hasil=mysqli_query($kon,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                          $no++;
                                      ?>
                                      <option value="<?php echo $data['brand'];?>" <?php if ($data['brand']==$brand) {
                                        echo "selected";
                                      } ?>> <?php echo $data['brand'];?> </option>
                                      <?php
                                        }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="harga" class=" form-control-label">Harga</label></div>
                                  <div class="col col-sm-6">
                                    <input type="text" name="harga" value=<?php echo $harga; ?>>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="RAM" class=" form-control-label">RAM</label></div>
                                  <div class="col col-sm-6">
                                    <select id="ram" name="ram">
                                      <?php
                                      //Membuat koneksi ke database spk
                                        $kon = mysqli_connect("localhost",'root',"","spk");
                                        if (!$kon){
                                        die("Koneksi database gagal:".mysqli_connect_error());
                                        }
                                      //Perintah sql untuk menampilkan semua data pada tabel brand
                                        $sql="select ram from ram ";
                                        $hasil=mysqli_query($kon,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                          $no++;
                                        ?>
                                        <option value="<?php echo $data['ram'];?>"<?php if ($data['ram']==$ram) {
                                        echo "selected";
                                      } ?>><?php echo $data['ram'];?></option>
                                        <?php
                                          }
                                        ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="internal" class=" form-control-label">Internal</label></div>
                                  <div class="col col-sm-6">
                                    <select id="internal" name="internal">
                                      <?php
                                      //Membuat koneksi ke database spk
                                      $kon = mysqli_connect("localhost",'root',"","spk");
                                      if (!$kon){
                                        die("Koneksi database gagal:".mysqli_connect_error());
                                      }
                                       //Perintah sql untuk menampilkan semua data pada tabel brand
                                      $sql="select internal from internal ";
                                      $hasil=mysqli_query($kon,$sql);
                                      $no=0;
                                      while ($data = mysqli_fetch_array($hasil)) {
                                        $no++;
                                      ?>
                                      <option value="<?php echo $data['internal'];?>"<?php if ($data['internal']==$internal) {
                                        echo "selected";
                                      } ?>><?php echo $data['internal'];?></option>
                                      <?php
                                        }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="Processor" class=" form-control-label">Processor</label></div>
                                  <div class="col col-sm-6">
                                    <select id="processor" name="processor">
                                      <?php
                                      //Membuat koneksi ke database spk
                                      $kon = mysqli_connect("localhost",'root',"","spk");
                                      if (!$kon){
                                        die("Koneksi database gagal:".mysqli_connect_error());
                                      }
                                      //Perintah sql untuk menampilkan semua data pada tabel brand
                                      $sql="select upper(processor) as processor from prosesor ";
                                      $hasil=mysqli_query($kon,$sql);
                                      $no=0;
                                      while ($data = mysqli_fetch_array($hasil)) {
                                        $no++;
                                      ?>
                                      <option value="<?php echo $data['processor'];?>"<?php if ($data['processor']==$processor) {
                                        echo "selected";
                                      } ?>><?php echo $data['processor'];?></option>
                                      <?php
                                        }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="KameraUtama" class=" form-control-label">Kamera Utama</label></div>
                                  <div class="col col-sm-6">
                                    <select id="kamera_utama" name="kamera_utama">
                                      <?php
                                        //Membuat koneksi ke database spk
                                        $kon = mysqli_connect("localhost",'root',"","spk");
                                                 if (!$kon){
                                                    die("Koneksi database gagal:".mysqli_connect_error());
                                                 }

                                                 //Perintah sql untuk menampilkan semua data pada tabel brand
                                                  $sql="select kamera_utama from kamera_utama ";

                                                  $hasil=mysqli_query($kon,$sql);
                                                  $no=0;
                                                  while ($data = mysqli_fetch_array($hasil)) {
                                                  $no++;
                                                 ?>
                                                  <option value="<?php echo $data['kamera_utama'];?>"<?php if ($data['kamera_utama']==$kamera_utama) {
                                        echo "selected";
                                      } ?>><?php echo $data['kamera_utama'];?></option>
                                                <?php
                                                }
                                                ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="layar" class=" form-control-label">Layar</label></div>
                                  <div class="col col-sm-6">
                                    <select id="layar" name="layar">
                                                <?php
                                                 //Membuat koneksi ke database spk
                                                 $kon = mysqli_connect("localhost",'root',"","spk");
                                                 if (!$kon){
                                                    die("Koneksi database gagal:".mysqli_connect_error());
                                                 }

                                                 //Perintah sql untuk menampilkan semua data pada tabel brand
                                                  $sql="select upper(layar) layar from layar";

                                                  $hasil=mysqli_query($kon,$sql);
                                                  $no=0;
                                                  while ($data = mysqli_fetch_array($hasil)) {
                                                  $no++;
                                                 ?>
                                                  <option value="<?php echo $data['layar'];?>" <?php if ($data['layar']==$layar) {
                                        echo "selected";
                                      } ?>> <?php echo $data['layar'];?> </option>
                                                <?php
                                                }
                                                ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col col-sm-5"><label for="KapasitasBaterai" class=" form-control-label">Kapasitas Baterai</label></div>
                                  <div class="col col-sm-6">
                                    <input type="text" name="kapasitas_baterai" value=<?php echo $baterai; ?>>
                                  </div>
                                </div>

                              <div class="card-footer">
                                <input type=submit class="btn btn-primary btn-sm" name="Input" value="Input">
                                <?php
                                // Check If form submitted, insert form data into users table.
                                try {
                                
                                if(isset($_POST['Input'])) {
                                  $nama = $_POST['nama'];
                                  $brand = $_POST['brand'];
                                  $harga = $_POST['harga'];
                                  $ram = $_POST['ram'];
                                  $internal = $_POST['internal'];
                                  $processor = $_POST['processor'];
                                  $kamera_utama = $_POST['kamera_utama'];
                                  $layar = $_POST['layar'];
                                  $kapasitas_baterai = $_POST['kapasitas_baterai'];

                                if (!$kon){
                                  die("Koneksi database gagal:".mysqli_connect_error());
                                }
                                // Insert user data into table
                                $result = mysqli_query($kon, "INSERT INTO handphone(nama,brand,harga,ram,internal,processor,kamera_utama,layar,baterai) VALUES('$nama','$brand','$harga','$ram','$internal','$processor','$kamera_utama','$layar','$kapasitas_baterai')");

                                }
                                }

                                //catch exception
                                catch(Exception $e) {
                                  echo 'Message: ' .$e->getMessage();
                                }
                                ?>
                                
                                <input type=submit class="btn btn-primary btn-sm" name="Update" value="Update">
                                  <?php
                                try {
                                
                                if(isset($_POST['Update'])) {
                                  $id_update = $_POST['id_update'];
                                  $nama = $_POST['nama'];
                                  $brand = $_POST['brand'];
                                  $harga = $_POST['harga'];
                                  $ram = $_POST['ram'];
                                  $internal = $_POST['internal'];
                                  $processor = $_POST['processor'];
                                  $kamera_utama = $_POST['kamera_utama'];
                                  $layar = $_POST['layar'];
                                  $kapasitas_baterai = $_POST['kapasitas_baterai'];
                                  
                                // Update user data into table
                                $result = mysqli_query($kon, "UPDATE `handphone` SET `nama`='$nama',`brand`='$brand',`harga`=$harga,`ram`='$ram',`internal`='$internal',`processor`='$processor',`kamera_utama`='$kamera_utama',`layar`='$layar',`baterai`='$kapasitas_baterai' WHERE `id_handphone`=$id_update");



                                }
                                }

                                //catch exception
                                catch(Exception $e) {
                                  echo 'Message: ' .$e->getMessage();
                                }
                                ?>
                                </button>
                              </div>
                              </form>
                            </div>

                              <!-- table -->
                              <div class="card-body">
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Brand</th>
                                      <th scope="col">Harga</th>
                                      <th scope="col">RAM</th>
                                      <th scope="col">Internal</th>
                                      <th scope="col">Processor</th>
                                      <th scope="col">Kamera Utama</th>
                                      <th scope="col">Layar</th>
                                      <th scope="col">Kapasitas Baterai</th>
                                      <th scope="col">Opsi</th>
                                    </tr>
                                  </thead>

                                  <?php
                                  include 'connect.php';
                                  $database = "SELECT * FROM handphone  ";
                                  $query = mysqli_query($conn,$database);
                                  while ($a=mysqli_fetch_array($query)) {
                                  ?>

                                  <tbody>
                                    <tr>
                                      <td><?php echo $a['nama']; ?></td>
                                      <td><?php echo $a['brand']; ?></td>
                                      <td><?php echo $a['harga']; ?></td>
                                      <td><?php echo $a['ram']; ?></td>
                                      <td><?php echo $a['internal']; ?></td>
                                      <td><?php echo $a['processor']; ?></td>
                                      <td><?php echo $a['kamera_utama']; ?></td>
                                      <td><?php echo $a['layar']; ?></td>
                                      <td><?php echo $a['baterai']; ?></td>
                                      
                                      <td>
                                        <a class="btn btn-primary btn-sm" href="?id_editbrg=<?php echo $a['id_handphone']; ?>">Edit</a>
                                        <?php
                                        echo '
                                        <a href="delete.php?id_handphone='.$a['id_handphone'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                                            '
                                        ?>
                                      </td>
                                    </tr>
                                  </tbody>
                                  <?php
                                          }
                                            ?>
                                </table>

                              </div>
                          </div>
                      </div>
                    </div>
                </div><!-- .animated -->
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
