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
            <li><a href="#">Proses Pemilihan</a></li>
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
					            <li><a href="#">List Smartphone</a>
					            	<ul>
					            		<li><a href="range1.php">Range 1jt - 2jt</a></li>
					            		<li><a href="range2.php">Range 2,1jt - 4jt</a></li>
					            		<li><a href="range3.php">Range 4,1jt - 6jt</a></li>
					            		<li><a href="range4.php">Range 6,1jt - 8jt</a></li>
					            	</ul>
					            </li>
					            <li class="active"><a href="#">Proses Pemilihan</a></li>
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
						<h2 class="page-title">Proses Pemilihan Smartphone</h2>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row project-single">
			<form method="post" action="rekomendasi.php" >
			<div class="col-md-12">
				<p style="color:black;">1. Silahkan pilih range budget yang anda inginkan</p>
				<strong>Min Budget : </strong><select id="rangemin" name="rangemin">                            
                    <option value="1000000">1.000.000</option>
                    <option value="2100000">2.100.000</option>
                    <option value="4100000">4.100.000</option>
                    <option value="6100000">6.100.000</option>
                </select>
                <br><strong>Max Budget :</strong> <select id="rangemax" name="rangemax">         
                    <option value="2000000">2.000.000</option>
                    <option value="4000000">4.000.000</option>
                    <option value="6000000">6.000.000</option>
                    <option value="8000000">8.000.000</option>
                </select>
			</div> <!-- /.col-md-4 -->
			<div class="col-md-12">
				<br>
				<p style="color:black;">2. Silahkan pilih kegunaan dari smartphone yang anda inginkan</p>
				<select id="kegunaan" name="kegunaan">                            
                    <option name="gaming">Gaming</option>
                    <option name="sosmed">Sosmed/Fotografi</option>
                    <option name="streaming">Streaming</option>
                </select> 
			</div>
			<div class="col-md-12">
				<br>
				<p style="color:black;">3. Apakah brand berpengaruh terhadap pilihan anda ? <small>(Seperti anda tidak ingin brand xiaomi dan sbg karena gengsi)</small></p>
				<select id="brand" name="brand">                            
                    <option name="ya">Ya</option>
                    <option name="tidak">Tidak</option>
                </select> 
			</div>	
			<div class="col-md-12">
				<br>
				<button type=submit class="btn btn-primary btn-sm" name="proses">Submit</button>
				<br>
			</div>
			</form>	
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