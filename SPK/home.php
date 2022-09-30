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
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets/scss/style.css">
  <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

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
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        </div> 
    </header>
    <!-- /Header -->
    <!-- Header-->
    <div class="breadcrumbs">
          <div class="header-menu">
            <div class="col-sm-4">
              <div class="page-header float-left">
                <div class="page-title">
                  <h1>HOME</h1>
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
    <!-- Modal -->
    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg">
            <div class="card">
              <div class="card-body card-block">
                <div class="row form-group">
                  <p>
                    Selamat Datang di PSTBK (Pemilihan Smartphone Terbaik sesuai Budget dan kegunaan).
                  </p>
                  <p>
                    Aplikasi ini akan membantu anda untuk memilih smartphone rekomendasi yang cocok dengan budget dan kebutuhan anda, yaitu dari range 1 juta sampai dengan 8 juta dengan 3 kebutuhan yang berbeda - beda yaitu : <br><br>
                    <b>Kebutuhan Gaming</b><br>
                    <b>Kebutuhan Sosmed/Fotografi</b><br>
                    <b>Kebutuhan Streaming</b><br><br> 
                    Proses rekomendasi dihitung menggunakan Sistem Pendukung Keputusan (SPK) dengan metode Weighted Product. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    <!-- .content -->
  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>


  <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/widgets.js"></script>
  <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
  <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
  <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
  <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
  <script>
    (function($) {
      "use strict";

      jQuery('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#1de9b6',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#1de9b6', '#03a9f5'],
        normalizeFunction: 'polynomial'
      });
    })(jQuery);
  </script>

</body>

</html>
