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
          <li class="active">
            <a href="home.php"> <i class="menu-icon "></i>HOME </a>
          </li>
          <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Tabel Smartphone</a>
                <ul class="sub-menu children dropdown-menu">
                  <li><i class="fa fa-table"></i><a href="range1.php">Range 1jt - 2jt</a></li>
                  <li><i class="fa fa-table"></i><a href="range2.php">Range 2,1jt - 4jt</a></li>
                  <li><i class="fa fa-table"></i><a href="range3.php">Range 4,1jt - 6jt</a></li>
                  <li><i class="fa fa-table"></i><a href="range4.php">Range 6,1jt - 8jt</a></li>
                </ul>
            <li class="">
              <a href="" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Proses Pemilihan</a>
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
        </div>
      </div>
    </header><!-- /header -->
    <!-- Header-->

     <div class="breadcrumbs">
          <div class="header-menu">
            <div class="col-sm-4">
              <div class="page-header float-left">
                <div class="page-title">
                  <h1>Harga Smartphone Range 2</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li> <a href="login_admin.php">Masuk Ke Admin</a></li>
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
                <strong class="card-title"><h3>Smartphone Harga Range 2</h3></strong>
              </div>
              <div class="card-body">
                <table>
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
                  </tr>
                  <?php
                  include 'connect.php';
                  $database = "SELECT * FROM handphone where harga >= 2100000 and harga <= 4000000";
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
