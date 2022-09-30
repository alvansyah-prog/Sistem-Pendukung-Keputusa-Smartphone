<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>PSTBK</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/blue-scheme.css">

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

</head>
<body>


	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">List Smartphone</a>
            	<ul>
            		<li><a href="range1.php">Range 1jt - 2jt</a></li>
            		<li><a href="range2.php">Range 2,1jt - 4jt</a></li>
            		<li><a href="range3.php">Range 4,1jt - 6jt</a></li>
            		<li><a href="range4.php">Range 6,1jt - 8jt</a></li>
            	</ul>
            </li>
            <li><a href="proses.php">Proses Pemilihan</a></li>
            <li><a href="..\login_admin.php">Masuk ke Admin</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.php">
							<span>PSTBK</span>
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="index.php">Home</a></li>
					            <li class="active"><a href="#">List Smartphone</a>
					            	<ul>
					            		<li><a href="range1.php">Range 1jt - 2jt</a></li>
					            		<li><a href="range2.php">Range 2,1jt - 4jt</a></li>
					            		<li><a href="range3.php">Range 4,1jt - 6jt</a></li>
					            		<li><a href="range4.php">Range 6,1jt - 8jt</a></li>
					            	</ul>
					            </li>
					            <li><a href="proses.php">Proses Pemilihan</a></li>
                      			<li><a href="..\login_admin.php">Masuk ke Admin</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<div class="first-widget parallax" id="portfolioId">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Range 4,1jt - 6jt</h2>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">
		<div class="row project-single">
			<div class="col-md-12">
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
									<th scope="col">Gambar</th>
		            </tr>
		          </thead>

		          <?php
		          $kon = mysqli_connect("localhost",'root',"","spk");
		          $database = "SELECT * FROM handphone where harga >= 4100000 and harga <= 6000000  ";
		          $query = mysqli_query($kon,$database);
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
									 <a href="images/<?php echo $a['gambar'];?>" target="_blank">
										 <img style="width:100%;max-width:300px" src="images/<?php echo $a['gambar'];?>">
								 </a>
								 </td>
		            </tr>
		          </tbody>
		          <?php
		            }
		          ?>
		        </table>
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy; 2020 PSTBK<br>
                    | Design: templatemo</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>

</body>
</html>
