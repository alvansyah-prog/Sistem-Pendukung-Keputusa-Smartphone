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
                                          <div class="col col-sm-5"><label for="Kodegaming" class=" form-control-label">Code</label></div>
                                          <div class="col col-sm-6">
                                            <select name="Kodegaming" id="Kodegaming"  class=" form-control-label " onchange='changeValue(this.value)' required >
                                                <?php
                                                 //Membuat koneksi ke database SPK
                                                 $kon = mysqli_connect("localhost",'root',"","spk");
                                                 if (!$kon){
                                                    die("Koneksi database gagal:".mysqli_connect_error());
                                                }

                                                $query = mysqli_query($kon, "select * from Kriteria_gaming order by Kodegaming asc");
                                                $result = mysqli_query($kon, "select * from Kriteria_gaming");
                                                $a          = "var Kriteriagaming = new Array();\n;";
                                                                        $b          = "var Bobotgaming = new Array();\n;";
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                               echo '<option name="Kodegaming" value="'.$row['Kodegaming'] . '">' . $row['Kodegaming'] . '</option>';
                                                                        $a .= "Kriteriagaming['" . $row['Kodegaming'] . "'] = {Kriteriagaming:'" . addslashes($row['Kriteriagaming'])."'};\n";
                                                                        $b .= "Bobotgaming['" . $row['Kodegaming'] . "'] = {Bobotgaming:'" . addslashes($row['Bobotgaming'])."'};\n";
                                                                        }
                                                ?>
                                             </select>

                                          </div>
                                      </div>

                                        <div class="row form-group">
                                            <div class="col col-sm-5"><label for="Kriteriagaming" class=" form-control-label">Kriteria </label></div>
                                            <div class="col col-sm-6">
                                              <input type="text" name="Kriteriagaming" id="Kriteriagaming"  value=" ">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-5"><label for="Bobotgaming" class=" form-control-label">Bobot </label></div>
                                            <div class="col col-sm-6">
                                              <input type="text" name="Bobotgaming" id="Bobotgaming" value="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-5"><label for="costbenefit" class=" form-control-label">Cost/Benefit</label></div>
                                            <div class="col col-sm-6">
                                              <select id="Cost_Benefitgaming" name="Cost_Benefitgaming">
                                                
                                                  <option value="Benefit">Benefit</option>
                                                  <option value="Cost">Cost</option>
                                              </select>

                                            </div>
                                        </div>

                                        </div>

                                <script type="text/javascript">
                                <?php
                                  echo $a;
                                  echo $b;
                                    ?>
                                  function changeValue(id){
                                    document.getElementById('Kriteriagaming').value = Kriteriagaming[id].Kriteriagaming;
                                    document.getElementById('Bobotgaming').value = Bobotgaming[id].Bobotgaming;
                                      };
                                      </script>
                                <div class="card-footer">
                                  <input type=submit class="btn btn-primary btn-sm" name="Edit" value="Edit">
                                       <?php
                                        try {
                                        
                                        if(isset($_POST['Edit'])) {
                                          $kode = $_POST['Kodegaming']; 
                                          $kriteria = $_POST['Kriteriagaming'];
                                          $bobot = $_POST['Bobotgaming'];
                                          $costbenefit = $_POST['Cost_Benefitgaming'];
                                          
                                        // Update user data into table
                                        $conn = mysqli_connect("localhost",'root',"","spk");
                                        $result = mysqli_query($conn, "UPDATE `kriteria_gaming` SET `Kriteriagaming`='$kriteria' ,`Bobotgaming`='$bobot' , `Cost_Benefitgaming`='$costbenefit'  WHERE `Kodegaming`='$kode'");
                                        if($result){
                                            echo '<script>alert("Berhasil Mengedit data."); document.location="editkriteriagaming.php";</script>';
                                        }else{
                                            echo '<script>alert("Gagal Mengedit data."); document.location="editkriteriagaming.php";</script>';
                                        }
                                        

                                        }
                                        }

                                        //catch exception
                                        catch(Exception $e) {
                                          echo 'Message: ' .$e->getMessage();
                                        }
                                        ?>
                                </div>
              </div>
                                </form>
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
