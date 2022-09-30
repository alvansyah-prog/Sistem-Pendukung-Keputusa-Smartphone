<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <style media="screen">
  table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

th{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

td  {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
  </style>
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
          <li class="">
            <a href="admin.php"> <i class="menu-icon"></i>HOME</a>
          </li>
          <<h3 class="menu-title">Menu</h3><!-- /.menu-title -->
          <li class="">
              <a href="tabelsmartphone_admin.php" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon"></i>Tabel Smartphone</a>
          </li>
            <li class="">
              <a href="#" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon"></i>Tabel Kriteria</a>
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
            <h1>Tabel Kriteria</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="admin.php">Dashboard</a></li>
              <li><a href="#">Table</a></li>
              <li class="active">Tabel Kriteria</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Penilaian Kriteria Kegunaan</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>No.</th>
                    <th>Nilai</th>
                    <th>Bobot</th>

                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
          						$sql="select * from penilaian_kriteria_kegunaan ";
          						$result=mysqli_query($conn, $sql);

          						$no=1;
          						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[Id]</td><td>$a[Nilai]</td><td>$a[Bobot]</td></tr>";
                         $no++;
          						}
                      echo "</tbody></table>";
          						?>
                    </td>
                  </tr>

                </table>
              </div>
            </div>
          </div>

          <div class="col-md-12">

            <div class="card">

              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Gaming</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Cost/Benefit</th>
                    <th>Kode</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
          						$sql="select * from kriteria_gaming ";
          						$result=mysqli_query($conn, $sql);

          						$no=1;
          						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[Kriteriagaming]</td><td>$a[Bobotgaming]</td><td>$a[Cost_Benefitgaming]</td><td>$a[Kodegaming]</td></tr>";
                         $no++;
          						}
                      echo "</tbody></table>";
          						?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                <form method="post" action="editkriteriagaming.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">

            <div class="card">

              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Sosmed / Fotografi</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Cost/Benefit</th>
                    <th>Kode</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
          						$sql="select * from kriteria_sosmed_fotografi ";
          						$result=mysqli_query($conn, $sql);

          						$no=1;
          						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[Kriteriasosmed]</td><td>$a[Bobotsosmed]</td><td>$a[Cost_Benefitsosmed]</td><td>$a[Kodesosmed]</td></tr>";
                         $no++;
          						}
                      echo "</tbody></table>";
          						?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editkriteriasosmed.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">

            <div class="card">

              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Streaming</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Cost/Benefit</th>
                    <th>Kode</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
          						$sql="select * from kriteria_streaming ";
          						$result=mysqli_query($conn, $sql);

          						$no=1;
          						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[Kriteriastreaming]</td><td>$a[Bobotstreaming]</td><td>$a[Cost_Benefitstreaming]</td><td>$a[Kodestreaming]</td></tr>";
                         $no++;
          						}
                      echo "</tbody></table>";
          						?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editkriteriastreaming.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Penilaian Kriteria</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>No.</th>
                    <th>Nilai</th>
                    <th>Bobot</th>

                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
                      $sql="select * from penilaian_kriteria";
                      $result=mysqli_query($conn, $sql);

                      $no=1;
                      while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[Id]</td><td>$a[Nilai]</td><td>$a[Bobot]</td></tr>";
                         $no++;
                      }
                      echo "</tbody></table>";
                      ?>
                    </td>
                  </tr>

                </table>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Internal</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Internal</th>
                    <th>Bobot</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
                      $sql="select * from internal order by Bobotinternal asc";
                      $result=mysqli_query($conn, $sql);

                      $no=1;
                      while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[internal]</td><td>$a[Bobotinternal]</td></tr>";
                         $no++;
                      }
                      echo "</tbody></table>";
                      ?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editinternal.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Kamera Utama</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Kamera Utama</th>
                    <th>Bobot</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
                      $sql="select * from kamera_utama order by Bobotkamera asc ";
                      $result=mysqli_query($conn, $sql);

                      $no=1;
                      while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[kamera_utama]</td><td>$a[Bobotkamera]</td></tr>";
                         $no++;
                      }
                      echo "</tbody></table>";
                      ?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editkamera.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Layar</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Layar</th>
                    <th>Bobot</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
                      $sql="select * from layar order by Bobotlayar asc ";
                      $result=mysqli_query($conn, $sql);

                      $no=1;
                      while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[layar]</td><td>$a[Bobotlayar]</td></tr>";
                         $no++;
                      }
                      echo "</tbody></table>";
                      ?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editlayar.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
              </div>
            </div>
          </div>



          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Kriteria RAM</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Ram</th>
                    <th>Bobot</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
                      $sql="select * from ram order by Bobotram asc ";
                      $result=mysqli_query($conn, $sql);

                      $no=1;
                      while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[ram]</td><td>$a[Bobotram]</td></tr>";
                         $no++;
                      }
                      echo "</tbody></table>";
                      ?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editram.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><h3>Kriteria Processor</h3></strong>
              </div>
              <div class="card-body">
                <table>
                  <tr>
                    <th>Processor</th>
                    <th>Performa</th>
                    <th>Bobot</th>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      include 'connect.php';
                      $sql="select * from prosesor ";
                      $result=mysqli_query($conn, $sql);

                      $no=1;
                      while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr><td>$a[processor]</td><td>$a[Performa]</td><td>$a[Bobotprosesor]</td></tr>";
                         $no++;
                      }
                      echo "</tbody></table>";
                      ?>
                    </td>
                  </tr>

                </table>
              </div>
              <div class="card-footer">
                 <form method="post" action="editprocessor.php">
                  <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                 </form>
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
