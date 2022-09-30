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
					            <li><a href="#">List Smartphone</a>
					            	<ul>
					            		<li><a href="range1.php">Range 1jt - 2jt</a></li>
					            		<li><a href="range2.php">Range 2,1jt - 4jt</a></li>
					            		<li><a href="range3.php">Range 4,1jt - 6jt</a></li>
					            		<li><a href="range4.php">Range 6,1jt - 8jt</a></li>
					            	</ul>
					            </li>
					            <li class="active"><a href="proses.php">Proses Pemilihan</a></li>
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
						<h2 class="page-title">Rekomendasi Smartphone</h2>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">
		<div class="row project-single">
			<div class="col-md-12">
				<table class="table table-striped jambo_table bulk_action">
					<thead class="thead-dark">
                    </thead>
                    <tbody>
                     	<?php
                     	$conn = mysqli_connect("localhost",'root',"","spk");
						if(isset($_POST['rangemin'])){
							$hargamin = $_POST['rangemin'];
							$hargamax = $_POST['rangemax'];
							$brand = $_POST['brand'];
							if (isset($brand)) {
								if ($brand =='Ya') {
									$cek = mysqli_query($conn, "SELECT h.nama as Nama, h.brand as Brand,h.harga as Harga,h.ram as RAM,
										CASE
										WHEN ram = 16 THEN 5
										WHEN ram BETWEEN 8 and 12 THEN 4
										WHEN ram BETWEEN 4 and 6  THEN 3
										WHEN ram = 3 THEN 2
										ELSE 1 END as 'BobotRAM', h.processor as 'Processor', p.bobotprosesor AS 'BobotProcessor', h.internal AS 'Internal',
										CASE
										WHEN internal = 256 THEN 5
										WHEN internal = 128 THEN 4
										WHEN internal = 64  THEN 3
										WHEN internal = 32 THEN 2
										ELSE 1 END as 'BobotInternal',h.layar AS 'Layar',
										CASE
										WHEN layar = 'SUPER AMOLED' THEN 5
										WHEN layar = 'AMOLED' THEN 4
										WHEN layar = 'IPS LCD'  THEN 3
										WHEN layar = 'TFT' THEN 2
										ELSE 1 END as 'BobotLayar', h.kamera_utama AS 'Kamera',
										CASE
										WHEN kamera_utama  = 64 THEN 5
										WHEN kamera_utama  = 48 THEN 4
										WHEN kamera_utama  = 38 THEN 3
										WHEN kamera_utama  = 16 THEN 2
										ELSE 1
										END AS 'BobotKamera', h.baterai AS 'Baterai',
										CASE
										WHEN baterai  >= 5000 THEN 5
										WHEN baterai  > 3000 and baterai  < 5000 THEN 4
										WHEN baterai  > 2000 and baterai  <= 3000 THEN 3
										WHEN baterai  > 1000 and baterai  <= 2000 THEN 2
										ELSE 1
										END AS 'BobotBaterai', h.gambar AS Gambar
										FROM prosesor p
										inner join handphone h where h.processor = p.processor and (harga BETWEEN '$hargamin' and '$hargamax') and (brand = 'samsung' or brand='realme') order by `Harga` asc") or die(mysqli_error($conn));

							if(mysqli_num_rows($cek) > 0){
                                $kegunaan = $_POST['kegunaan'];
                                if ($kegunaan == 'Gaming') {
                                	$koneksi = mysqli_connect("localhost","root","","SPK");

                                    //Total Bobot Gaming
                                    $totalgaming = "SELECT SUM(Bobotgaming) as total FROM kriteria_gaming";
                                    $hasil = $koneksi->query($totalgaming);
                                    $hasilkriteriagaming = mysqli_fetch_assoc($hasil);

                                    //Ram Gaming
                                    $ramgaming = "SELECT Bobotgaming as ramgaming FROM kriteria_gaming where Kriteriagaming = 'Ram'";
                                    $hasil = $koneksi->query($ramgaming);
                                    $hasilramgaming = mysqli_fetch_assoc($hasil);

                                    //Prosesor Gaming
                                    $prosesorgaming = "SELECT Bobotgaming as prosesorgaming FROM kriteria_gaming where Kriteriagaming = 'Prosesor'";
                                    $hasil = $koneksi->query($prosesorgaming);
                                    $hasilprosesorgaming = mysqli_fetch_assoc($hasil);

                                    //Internal Gaming
                                    $internalgaming = "SELECT Bobotgaming as internalgaming FROM kriteria_gaming where Kriteriagaming = 'Internal'";
                                    $hasil = $koneksi->query($internalgaming);
                                    $hasilinternalgaming = mysqli_fetch_assoc($hasil);

                                    //Layar Gaming
                                    $layargaming = "SELECT Bobotgaming as layargaming FROM kriteria_gaming where Kriteriagaming = 'Layar'";
                                    $hasil = $koneksi->query($layargaming);
                                    $hasillayargaming = mysqli_fetch_assoc($hasil);

                                    //Kamera Utama Gaming
                                    $kameragaming = "SELECT Bobotgaming as kameragaming FROM kriteria_gaming where Kriteriagaming = 'Kamera Utama'";
                                    $hasil = $koneksi->query($kameragaming);
                                    $hasilkameragaming = mysqli_fetch_assoc($hasil);

                                    //Baterai Gaming
                                    $bateraigaming = "SELECT Bobotgaming as bateraigaming FROM kriteria_gaming where Kriteriagaming = 'Kapasitas Baterai'";
                                    $hasil = $koneksi->query($bateraigaming);
                                    $hasilbateraigaming = mysqli_fetch_assoc($hasil);

                                    //Perhitungan Normalisasi Gaming
                                    $pramgaming = $hasilramgaming['ramgaming']/$hasilkriteriagaming['total'];
                                    $pprosesorgaming = $hasilprosesorgaming['prosesorgaming']/$hasilkriteriagaming['total'];
                                    $pinternalgaming = $hasilinternalgaming['internalgaming']/$hasilkriteriagaming['total'];
                                    $playargaming = $hasillayargaming['layargaming']/$hasilkriteriagaming['total'];
                                    $pkameragaming = $hasilkameragaming['kameragaming']/$hasilkriteriagaming['total'];
                                    $pbateraigaming = $hasilbateraigaming['bateraigaming']/$hasilkriteriagaming['total'];
                                    $tng = $pramgaming+$pprosesorgaming+$pinternalgaming+$playargaming+$pkameragaming+$pbateraigaming;

                                    $total_V_S = 0;
                                    $Vector_v = array();
                                    while ($hand = mysqli_fetch_array($cek)) {

                                		$pangkat_ram = pow($hand['BobotRAM'], $pramgaming);
                                		$pangkat_pro = pow($hand['BobotProcessor'], $pprosesorgaming);
                                		$pangkat_in = pow($hand['BobotInternal'], $pinternalgaming);
                                		$pangkat_la = pow($hand['BobotLayar'], $playargaming);
                                		$pangkat_kam = pow($hand['BobotKamera'], $pkameragaming);
                                		$pangkat_bat = pow($hand['BobotBaterai'], $pbateraigaming);

                                		$V_S = $pangkat_ram*$pangkat_pro*$pangkat_in*$pangkat_la*$pangkat_kam*$pangkat_bat ;
                                		array_push($Vector_v, $V_S);
										$total_V_S += $V_S ;
                                	}

                                	$sorting = array();

                                	foreach ($cek as $key => $value) {
                                		$bagi = $Vector_v[$key]/$total_V_S;
                               			array_push($sorting, $bagi);
                                	}

                                	$kosong  = array();
                                	foreach ($cek as $key => $value) {
                                		$x['Nama']= $value['Nama'];
                                		$x['Brand']= $value['Brand'];
                                		$x['Harga']= $value['Harga'];
                                		$x['RAM']= $value['RAM'];
                                		$x['Internal']= $value['Internal'];
                                		$x['Processor']= $value['Processor'];
                                		$x['Kamera']= $value['Kamera'];
                                		$x['Layar']= $value['Layar'];
                                		$x['Baterai']= $value['Baterai'];
                                        $x['Gambar']= $value['Gambar'];
                                		$x['Alternative']= $sorting[$key];
                                		array_push($kosong, $x);
                                	}

                                	array_multisort(array_column($kosong, 'Alternative'),SORT_DESC,$kosong);
                                	$num = 1;
                                	foreach ($kosong as $key => $value) {
                                		echo "<p><b>Rekomendasi ke-".$num."</b></p>";
                                        echo "<a href="."images/".$value['Gambar']."target="."_blank>";
                                            echo "<img style="."width:100%;max-width:300px"." src="."images/".$value['Gambar'].">";
                                        echo "</a>";
                                		echo "<ul>";
    										echo "<li>"."Nama 	        = ".$value['Nama']."</li>";
                                            echo "<li>"."Nilai Akhir    = "."' ".$value['Alternative']."'"."</li>";
    										echo "<li>"."Brand 		    = ".$value['Brand']."</li>";
    										echo "<li>"."Harga 		    = ".$value['Harga']."</li>";
    										echo "<li>"."RAM 		    = ".$value['RAM']."</li>";
    										echo "<li>"."Internal 	    = ".$value['Internal']."</li>";
    										echo "<li>"."Processor 	    = ".$value['Processor']."</li>";
    										echo "<li>"."Kamera  	    = ".$value['Kamera']."</li>";
    										echo "<li>"."Layar  	    = ".$value['Layar']."</li>";
    										echo "<li>"."Baterai  	    = ".$value['Baterai']."</li>";
										echo "</ul>";
                                        echo "<br>";
										$num += 1;
                                	}

                                }else if($kegunaan == 'Sosmed/Fotografi'){
                                	$koneksi = mysqli_connect("localhost","root","","SPK");
                                    //Total Bobot SosmedFotografi
                                    $totalsosmed = "SELECT SUM(Bobotsosmed) as total FROM kriteria_sosmed_fotografi";
                                    $hasil = $koneksi->query($totalsosmed);
                                    $hasilkriteriasosmed = mysqli_fetch_assoc($hasil);

                                    //Ram SosmedFotografi
                                    $ramsosmed = "SELECT Bobotsosmed as ramsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Ram'";
                                    $hasil = $koneksi->query($ramsosmed);
                                    $hasilramsosmed = mysqli_fetch_assoc($hasil);

                                    //Prosesor SosmedFotografi
                                    $prosesorsosmed = "SELECT Bobotsosmed as prosesorsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Prosesor'";
                                    $hasil = $koneksi->query($prosesorsosmed);
                                    $hasilprosesorsosmed = mysqli_fetch_assoc($hasil);

                                    //Internal Sosmed
                                    $internalsosmed = "SELECT Bobotsosmed as internalsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Internal'";
                                    $hasil = $koneksi->query($internalsosmed);
                                    $hasilinternalsosmed = mysqli_fetch_assoc($hasil);

                                    //Layar Sosmed
                                    $layarsosmed = "SELECT Bobotsosmed as layarsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Layar'";
                                    $hasil = $koneksi->query($layarsosmed);
                                    $hasillayarsosmed = mysqli_fetch_assoc($hasil);

                                    //Kamera Utama Sosmed
                                    $kamerasosmed = "SELECT Bobotsosmed as kamerasosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Kamera Utama'";
                                    $hasil = $koneksi->query($kamerasosmed);
                                    $hasilkamerasosmed = mysqli_fetch_assoc($hasil);

                                    //Baterai Sosmed
                                    $bateraisosmed = "SELECT Bobotsosmed as bateraisosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Kapasitas Baterai'";
                                    $hasil = $koneksi->query($bateraisosmed);
                                    $hasilbateraisosmed = mysqli_fetch_assoc($hasil);

                                    //Perhitungan Normalisasi Sosmed
                                    $pramsosmed = $hasilramsosmed['ramsosmed']/$hasilkriteriasosmed['total'];
                                    $pprosesorsosmed = $hasilprosesorsosmed['prosesorsosmed']/$hasilkriteriasosmed['total'];
                                    $pinternalsosmed = $hasilinternalsosmed['internalsosmed']/$hasilkriteriasosmed['total'];
                                    $playarsosmed = $hasillayarsosmed['layarsosmed']/$hasilkriteriasosmed['total'];
                                    $pkamerasosmed = $hasilkamerasosmed['kamerasosmed']/$hasilkriteriasosmed['total'];
                                    $pbateraisosmed = $hasilbateraisosmed['bateraisosmed']/$hasilkriteriasosmed['total'];
                                    $tnsos = $pramsosmed+$pprosesorsosmed+$pinternalsosmed+$playarsosmed+$pkamerasosmed+$pbateraisosmed;

                                    $total_V_S = 0;
                                    $Vector_v = array();
                                    while ($hand = mysqli_fetch_array($cek)) {

                                		$pangkat_ram = pow($hand['BobotRAM'], $pramsosmed);
                                		$pangkat_pro = pow($hand['BobotProcessor'], $pprosesorsosmed);
                                		$pangkat_in = pow($hand['BobotInternal'], $pinternalsosmed);
                                		$pangkat_la = pow($hand['BobotLayar'], $playarsosmed);
                                		$pangkat_kam = pow($hand['BobotKamera'], $pkamerasosmed);
                                		$pangkat_bat = pow($hand['BobotBaterai'], $pbateraisosmed);

                                		$V_S = $pangkat_ram*$pangkat_pro*$pangkat_in*$pangkat_la*$pangkat_kam*$pangkat_bat ;
                                		array_push($Vector_v, $V_S);
										$total_V_S += $V_S ;
                                	}

                                	$sorting = array();

                                	foreach ($cek as $key => $value) {
                                		$bagi = $Vector_v[$key]/$total_V_S;
                               			array_push($sorting, $bagi);
                                	}

                                	$kosong  = array();
                                	foreach ($cek as $key => $value) {
                                		$x['Nama']= $value['Nama'];
                                		$x['Brand']= $value['Brand'];
                                		$x['Harga']= $value['Harga'];
                                		$x['RAM']= $value['RAM'];
                                		$x['Internal']= $value['Internal'];
                                		$x['Processor']= $value['Processor'];
                                		$x['Kamera']= $value['Kamera'];
                                		$x['Layar']= $value['Layar'];
                                		$x['Baterai']= $value['Baterai'];
                                        $x['Gambar']= $value['Gambar']; 
                                		$x['Alternative']= $sorting[$key];
                                		array_push($kosong, $x);
                                	}

                                	array_multisort(array_column($kosong, 'Alternative'),SORT_DESC,$kosong);
                                	$num = 1;
                                	foreach ($kosong as $key => $value) {
                                        echo "<p><b>Rekomendasi ke-".$num."</b></p>";
                                        echo "<a href="."images/".$value['Gambar']."target="."_blank>";
                                            echo "<img style="."width:100%;max-width:300px"." src="."images/".$value['Gambar'].">";
                                        echo "</a>";
                                        echo "<ul>";
                                            echo "<li>"."Nama           = ".$value['Nama']."</li>";
                                            echo "<li>"."Nilai Akhir    = "."' ".$value['Alternative']."'"."</li>";
                                            echo "<li>"."Brand          = ".$value['Brand']."</li>";
                                            echo "<li>"."Harga          = ".$value['Harga']."</li>";
                                            echo "<li>"."RAM            = ".$value['RAM']."</li>";
                                            echo "<li>"."Internal       = ".$value['Internal']."</li>";
                                            echo "<li>"."Processor      = ".$value['Processor']."</li>";
                                            echo "<li>"."Kamera         = ".$value['Kamera']."</li>";
                                            echo "<li>"."Layar          = ".$value['Layar']."</li>";
                                            echo "<li>"."Baterai        = ".$value['Baterai']."</li>";
                                        echo "</ul>";
                                        echo "<br>";
                                        $num += 1;
                                    }
                                }else{
                                	$koneksi = mysqli_connect("localhost","root","","SPK");
                                    //Total Bobot Streaming
                                    $totalstreaming = "SELECT SUM(Bobotstreaming) as total FROM kriteria_streaming";
                                    $hasil = $koneksi->query($totalstreaming);
                                    $hasilkriteriastreaming = mysqli_fetch_assoc($hasil);

                                    //Ram Streaming
                                    $ramstreaming = "SELECT Bobotstreaming as ramstreaming FROM kriteria_streaming where Kriteriastreaming = 'Ram'";
                                    $hasil = $koneksi->query($ramstreaming);
                                    $hasilramstreaming = mysqli_fetch_assoc($hasil);

                                    //Prosesor Streaming
                                    $prosesorstreaming = "SELECT Bobotstreaming as prosesorstreaming FROM kriteria_streaming where Kriteriastreaming = 'Prosesor'";
                                    $hasil = $koneksi->query($prosesorstreaming);
                                    $hasilprosesorstreaming = mysqli_fetch_assoc($hasil);

                                    //Internal Streaming
                                    $internalstreaming = "SELECT Bobotstreaming as internalstreaming FROM kriteria_streaming where Kriteriastreaming = 'Internal'";
                                    $hasil = $koneksi->query($internalstreaming);
                                    $hasilinternalstreaming = mysqli_fetch_assoc($hasil);

                                    //Layar Streaming
                                    $layarstreaming = "SELECT Bobotstreaming as layarstreaming FROM kriteria_streaming where Kriteriastreaming = 'Layar'";
                                    $hasil = $koneksi->query($layarstreaming);
                                    $hasillayarstreaming = mysqli_fetch_assoc($hasil);

                                    //Kamera Utama Streaming
                                    $kamerastreaming = "SELECT Bobotstreaming as kamerastreaming FROM kriteria_streaming where Kriteriastreaming = 'Kamera Utama'";
                                    $hasil = $koneksi->query($kamerastreaming);
                                    $hasilkamerastreaming = mysqli_fetch_assoc($hasil);

                                    //Baterai Streaming
                                    $bateraistreaming = "SELECT Bobotstreaming as bateraistreaming FROM kriteria_streaming where Kriteriastreaming = 'Kapasitas Baterai'";
                                    $hasil = $koneksi->query($bateraistreaming);
                                    $hasilbateraistreaming = mysqli_fetch_assoc($hasil);

                                    //Perhitungan Normalisasi Streaming
                                    $pramstreaming = $hasilramstreaming['ramstreaming']/$hasilkriteriastreaming['total'];
                                    $pprosesorstreaming = $hasilprosesorstreaming['prosesorstreaming']/$hasilkriteriastreaming['total'];
                                    $pinternalstreaming = $hasilinternalstreaming['internalstreaming']/$hasilkriteriastreaming['total'];
                                    $playarstreaming = $hasillayarstreaming['layarstreaming']/$hasilkriteriastreaming['total'];
                                    $pkamerastreaming = $hasilkamerastreaming['kamerastreaming']/$hasilkriteriastreaming['total'];
                                    $pbateraistreaming = $hasilbateraistreaming['bateraistreaming']/$hasilkriteriastreaming['total'];
                                    $tnstream = $pramstreaming+$pprosesorstreaming+$pinternalstreaming+$playarstreaming+$pkamerastreaming+$pbateraistreaming;

                                    $total_V_S = 0;
                                    $Vector_v = array();
                                    while ($hand = mysqli_fetch_array($cek)) {

                                		$pangkat_ram = pow($hand['BobotRAM'], $pramstreaming);
                                		$pangkat_pro = pow($hand['BobotProcessor'], $pprosesorstreaming);
                                		$pangkat_in = pow($hand['BobotInternal'], $pinternalstreaming);
                                		$pangkat_la = pow($hand['BobotLayar'], $playarstreaming);
                                		$pangkat_kam = pow($hand['BobotKamera'], $pkamerastreaming);
                                		$pangkat_bat = pow($hand['BobotBaterai'], $pbateraistreaming);

                                		$V_S = $pangkat_ram*$pangkat_pro*$pangkat_in*$pangkat_la*$pangkat_kam*$pangkat_bat ;
                                		array_push($Vector_v, $V_S);
										$total_V_S += $V_S ;
                                	}

                                	$sorting = array();

                                	foreach ($cek as $key => $value) {
                                		$bagi = $Vector_v[$key]/$total_V_S;
                               			array_push($sorting, $bagi);
                                	}

                                	$kosong  = array();
                                	foreach ($cek as $key => $value) {
                                		$x['Nama']= $value['Nama'];
                                		$x['Brand']= $value['Brand'];
                                		$x['Harga']= $value['Harga'];
                                		$x['RAM']= $value['RAM'];
                                		$x['Internal']= $value['Internal'];
                                		$x['Processor']= $value['Processor'];
                                		$x['Kamera']= $value['Kamera'];
                                		$x['Layar']= $value['Layar'];
                                		$x['Baterai']= $value['Baterai'];
                                        $x['Gambar']= $value['Gambar'];
                                		$x['Alternative']= $sorting[$key];
                                		array_push($kosong, $x);
                                	}

                                	array_multisort(array_column($kosong, 'Alternative'),SORT_DESC,$kosong);
                                	$num = 1;
                                	foreach ($kosong as $key => $value) {
                                        echo "<p><b>Rekomendasi ke-".$num."</b></p>";
                                        echo "<a href="."images/".$value['Gambar']."target="."_blank>";
                                            echo "<img style="."width:100%;max-width:300px"." src="."images/".$value['Gambar'].">";
                                        echo "</a>";
                                        echo "<ul>";
                                            echo "<li>"."Nama           = ".$value['Nama']."</li>";
                                            echo "<li>"."Nilai Akhir    = "."' ".$value['Alternative']."'"."</li>";
                                            echo "<li>"."Brand          = ".$value['Brand']."</li>";
                                            echo "<li>"."Harga          = ".$value['Harga']."</li>";
                                            echo "<li>"."RAM            = ".$value['RAM']."</li>";
                                            echo "<li>"."Internal       = ".$value['Internal']."</li>";
                                            echo "<li>"."Processor      = ".$value['Processor']."</li>";
                                            echo "<li>"."Kamera         = ".$value['Kamera']."</li>";
                                            echo "<li>"."Layar          = ".$value['Layar']."</li>";
                                            echo "<li>"."Baterai        = ".$value['Baterai']."</li>";
                                        echo "</ul>";
                                        echo "<br>";
                                        $num += 1;
                                    }
                                }
							}else{
								echo '<script>alert("Handphone dengan harga tersebut tidak ditemukan mohon cek harga min tidak boleh lebih besar dari harga max"); document.location="proses.php";</script>';
							}
								}else if ($brand =='Tidak') {
									$cek = mysqli_query($conn, "SELECT h.nama as Nama, h.brand as Brand,h.harga as Harga,h.ram as RAM,
										CASE
										WHEN ram = 16 THEN 5
										WHEN ram BETWEEN 8 and 12 THEN 4
										WHEN ram BETWEEN 4 and 6  THEN 3
										WHEN ram = 3 THEN 2
										ELSE 1 END as 'BobotRAM', h.processor as 'Processor', p.bobotprosesor AS 'BobotProcessor', h.internal AS 'Internal',
										CASE
										WHEN internal = 256 THEN 5
										WHEN internal = 128 THEN 4
										WHEN internal = 64  THEN 3
										WHEN internal = 32 THEN 2
										ELSE 1 END as 'BobotInternal',h.layar AS 'Layar',
										CASE
										WHEN layar = 'SUPER AMOLED' THEN 5
										WHEN layar = 'AMOLED' THEN 4
										WHEN layar = 'IPS LCD'  THEN 3
										WHEN layar = 'TFT' THEN 2
										ELSE 1 END as 'BobotLayar', h.kamera_utama AS 'Kamera',
										CASE
										WHEN kamera_utama  = 64 THEN 5
										WHEN kamera_utama  = 48 THEN 4
										WHEN kamera_utama  = 38 THEN 3
										WHEN kamera_utama  = 16 THEN 2
										ELSE 1
										END AS 'BobotKamera', h.baterai AS 'Baterai',
										CASE
										WHEN baterai  >= 5000 THEN 5
										WHEN baterai  > 3000 and baterai  < 5000 THEN 4
										WHEN baterai  > 2000 and baterai  <= 3000 THEN 3
										WHEN baterai  > 1000 and baterai  <= 2000 THEN 2
										ELSE 1
										END AS 'BobotBaterai', h.gambar AS Gambar
										FROM prosesor p
										inner join handphone h where h.processor = p.processor and (harga BETWEEN '$hargamin' and '$hargamax')  order by `Harga` asc") or die(mysqli_error($conn));

							if(mysqli_num_rows($cek) > 0){
                                $kegunaan = $_POST['kegunaan'];
                                if ($kegunaan == 'Gaming') {
                                    $koneksi = mysqli_connect("localhost","root","","SPK");

                                    //Total Bobot Gaming
                                    $totalgaming = "SELECT SUM(Bobotgaming) as total FROM kriteria_gaming";
                                    $hasil = $koneksi->query($totalgaming);
                                    $hasilkriteriagaming = mysqli_fetch_assoc($hasil);

                                    //Ram Gaming
                                    $ramgaming = "SELECT Bobotgaming as ramgaming FROM kriteria_gaming where Kriteriagaming = 'Ram'";
                                    $hasil = $koneksi->query($ramgaming);
                                    $hasilramgaming = mysqli_fetch_assoc($hasil);

                                    //Prosesor Gaming
                                    $prosesorgaming = "SELECT Bobotgaming as prosesorgaming FROM kriteria_gaming where Kriteriagaming = 'Prosesor'";
                                    $hasil = $koneksi->query($prosesorgaming);
                                    $hasilprosesorgaming = mysqli_fetch_assoc($hasil);

                                    //Internal Gaming
                                    $internalgaming = "SELECT Bobotgaming as internalgaming FROM kriteria_gaming where Kriteriagaming = 'Internal'";
                                    $hasil = $koneksi->query($internalgaming);
                                    $hasilinternalgaming = mysqli_fetch_assoc($hasil);

                                    //Layar Gaming
                                    $layargaming = "SELECT Bobotgaming as layargaming FROM kriteria_gaming where Kriteriagaming = 'Layar'";
                                    $hasil = $koneksi->query($layargaming);
                                    $hasillayargaming = mysqli_fetch_assoc($hasil);

                                    //Kamera Utama Gaming
                                    $kameragaming = "SELECT Bobotgaming as kameragaming FROM kriteria_gaming where Kriteriagaming = 'Kamera Utama'";
                                    $hasil = $koneksi->query($kameragaming);
                                    $hasilkameragaming = mysqli_fetch_assoc($hasil);

                                    //Baterai Gaming
                                    $bateraigaming = "SELECT Bobotgaming as bateraigaming FROM kriteria_gaming where Kriteriagaming = 'Kapasitas Baterai'";
                                    $hasil = $koneksi->query($bateraigaming);
                                    $hasilbateraigaming = mysqli_fetch_assoc($hasil);

                                    //Perhitungan Normalisasi Gaming
                                    $pramgaming = $hasilramgaming['ramgaming']/$hasilkriteriagaming['total'];
                                    $pprosesorgaming = $hasilprosesorgaming['prosesorgaming']/$hasilkriteriagaming['total'];
                                    $pinternalgaming = $hasilinternalgaming['internalgaming']/$hasilkriteriagaming['total'];
                                    $playargaming = $hasillayargaming['layargaming']/$hasilkriteriagaming['total'];
                                    $pkameragaming = $hasilkameragaming['kameragaming']/$hasilkriteriagaming['total'];
                                    $pbateraigaming = $hasilbateraigaming['bateraigaming']/$hasilkriteriagaming['total'];
                                    $tng = $pramgaming+$pprosesorgaming+$pinternalgaming+$playargaming+$pkameragaming+$pbateraigaming;

                                    $total_V_S = 0;
                                    $Vector_v = array();
                                    while ($hand = mysqli_fetch_array($cek)) {

                                		$pangkat_ram = pow($hand['BobotRAM'], $pramgaming);
                                		$pangkat_pro = pow($hand['BobotProcessor'], $pprosesorgaming);
                                		$pangkat_in = pow($hand['BobotInternal'], $pinternalgaming);
                                		$pangkat_la = pow($hand['BobotLayar'], $playargaming);
                                		$pangkat_kam = pow($hand['BobotKamera'], $pkameragaming);
                                		$pangkat_bat = pow($hand['BobotBaterai'], $pbateraigaming);

                                		$V_S = $pangkat_ram*$pangkat_pro*$pangkat_in*$pangkat_la*$pangkat_kam*$pangkat_bat ;
                                		array_push($Vector_v, $V_S);
										$total_V_S += $V_S ;
                                	}

                                	$sorting = array();

                                	foreach ($cek as $key => $value) {
                                		$bagi = $Vector_v[$key]/$total_V_S;
                               			array_push($sorting, $bagi);
                                	}

                                	$kosong  = array();
                                	foreach ($cek as $key => $value) {
                                		$x['Nama']= $value['Nama'];
                                		$x['Brand']= $value['Brand'];
                                		$x['Harga']= $value['Harga'];
                                		$x['RAM']= $value['RAM'];
                                		$x['Internal']= $value['Internal'];
                                		$x['Processor']= $value['Processor'];
                                		$x['Kamera']= $value['Kamera'];
                                		$x['Layar']= $value['Layar'];
                                		$x['Baterai']= $value['Baterai'];
                                        $x['Gambar']= $value['Gambar'];
                                		$x['Alternative']= $sorting[$key];
                                		array_push($kosong, $x);
                                	}

                                	array_multisort(array_column($kosong, 'Alternative'),SORT_DESC,$kosong);
                                	$num = 1;
                                	foreach ($kosong as $key => $value) {
                                        echo "<p><b>Rekomendasi ke-".$num."</b></p>";
                                        echo "<a href="."images/".$value['Gambar']."target="."_blank>";
                                            echo "<img style="."width:100%;max-width:300px"." src="."images/".$value['Gambar'].">";
                                        echo "</a>";
                                        echo "<ul>";
                                            echo "<li>"."Nama           = ".$value['Nama']."</li>";
                                            echo "<li>"."Nilai Akhir    = "."' ".$value['Alternative']."'"."</li>";
                                            echo "<li>"."Brand          = ".$value['Brand']."</li>";
                                            echo "<li>"."Harga          = ".$value['Harga']."</li>";
                                            echo "<li>"."RAM            = ".$value['RAM']."</li>";
                                            echo "<li>"."Internal       = ".$value['Internal']."</li>";
                                            echo "<li>"."Processor      = ".$value['Processor']."</li>";
                                            echo "<li>"."Kamera         = ".$value['Kamera']."</li>";
                                            echo "<li>"."Layar          = ".$value['Layar']."</li>";
                                            echo "<li>"."Baterai        = ".$value['Baterai']."</li>";
                                        echo "</ul>";
                                        echo "<br>";
                                        $num += 1;
                                    }

                                }else if($kegunaan == 'Sosmed/Fotografi'){
                                    $koneksi = mysqli_connect("localhost","root","","SPK");

                                    //Total Bobot SosmedFotografi
                                    $totalsosmed = "SELECT SUM(Bobotsosmed) as total FROM kriteria_sosmed_fotografi";
                                    $hasil = $koneksi->query($totalsosmed);
                                    $hasilkriteriasosmed = mysqli_fetch_assoc($hasil);

                                    //Ram SosmedFotografi
                                    $ramsosmed = "SELECT Bobotsosmed as ramsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Ram'";
                                    $hasil = $koneksi->query($ramsosmed);
                                    $hasilramsosmed = mysqli_fetch_assoc($hasil);

                                    //Prosesor SosmedFotografi
                                    $prosesorsosmed = "SELECT Bobotsosmed as prosesorsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Prosesor'";
                                    $hasil = $koneksi->query($prosesorsosmed);
                                    $hasilprosesorsosmed = mysqli_fetch_assoc($hasil);

                                    //Internal Sosmed
                                    $internalsosmed = "SELECT Bobotsosmed as internalsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Internal'";
                                    $hasil = $koneksi->query($internalsosmed);
                                    $hasilinternalsosmed = mysqli_fetch_assoc($hasil);

                                    //Layar Sosmed
                                    $layarsosmed = "SELECT Bobotsosmed as layarsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Layar'";
                                    $hasil = $koneksi->query($layarsosmed);
                                    $hasillayarsosmed = mysqli_fetch_assoc($hasil);

                                    //Kamera Utama Sosmed
                                    $kamerasosmed = "SELECT Bobotsosmed as kamerasosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Kamera Utama'";
                                    $hasil = $koneksi->query($kamerasosmed);
                                    $hasilkamerasosmed = mysqli_fetch_assoc($hasil);

                                    //Baterai Sosmed
                                    $bateraisosmed = "SELECT Bobotsosmed as bateraisosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Kapasitas Baterai'";
                                    $hasil = $koneksi->query($bateraisosmed);
                                    $hasilbateraisosmed = mysqli_fetch_assoc($hasil);

                                    //Perhitungan Normalisasi Sosmed
                                    $pramsosmed = $hasilramsosmed['ramsosmed']/$hasilkriteriasosmed['total'];
                                    $pprosesorsosmed = $hasilprosesorsosmed['prosesorsosmed']/$hasilkriteriasosmed['total'];
                                    $pinternalsosmed = $hasilinternalsosmed['internalsosmed']/$hasilkriteriasosmed['total'];
                                    $playarsosmed = $hasillayarsosmed['layarsosmed']/$hasilkriteriasosmed['total'];
                                    $pkamerasosmed = $hasilkamerasosmed['kamerasosmed']/$hasilkriteriasosmed['total'];
                                    $pbateraisosmed = $hasilbateraisosmed['bateraisosmed']/$hasilkriteriasosmed['total'];
                                    $tnsos = $pramsosmed+$pprosesorsosmed+$pinternalsosmed+$playarsosmed+$pkamerasosmed+$pbateraisosmed;

                                    $total_V_S = 0;
                                    $Vector_v = array();
                                    while ($hand = mysqli_fetch_array($cek)) {

                                		$pangkat_ram = pow($hand['BobotRAM'], $pramsosmed);
                                		$pangkat_pro = pow($hand['BobotProcessor'], $pprosesorsosmed);
                                		$pangkat_in = pow($hand['BobotInternal'], $pinternalsosmed);
                                		$pangkat_la = pow($hand['BobotLayar'], $playarsosmed);
                                		$pangkat_kam = pow($hand['BobotKamera'], $pkamerasosmed);
                                		$pangkat_bat = pow($hand['BobotBaterai'], $pbateraisosmed);

                                		$V_S = $pangkat_ram*$pangkat_pro*$pangkat_in*$pangkat_la*$pangkat_kam*$pangkat_bat ;
                                		array_push($Vector_v, $V_S);
										$total_V_S += $V_S ;
                                	}
                                	$sorting = array();

                                	foreach ($cek as $key => $value) {
                                		$bagi = $Vector_v[$key]/$total_V_S;
                               			array_push($sorting, $bagi);
                                	}

                                	$kosong  = array();
                                	foreach ($cek as $key => $value) {
                                		$x['Nama']= $value['Nama'];
                                		$x['Brand']= $value['Brand'];
                                		$x['Harga']= $value['Harga'];
                                		$x['RAM']= $value['RAM'];
                                		$x['Internal']= $value['Internal'];
                                		$x['Processor']= $value['Processor'];
                                		$x['Kamera']= $value['Kamera'];
                                		$x['Layar']= $value['Layar'];
                                		$x['Baterai']= $value['Baterai'];
                                        $x['Gambar']= $value['Gambar'];
                                		$x['Alternative']= $sorting[$key];
                                		array_push($kosong, $x);
                                	}

                                	array_multisort(array_column($kosong, 'Alternative'),SORT_DESC,$kosong);
                                	$num = 1;
                                	foreach ($kosong as $key => $value) {
                                        echo "<p><b>Rekomendasi ke-".$num."</b></p>";
                                        echo "<a href="."images/".$value['Gambar']."target="."_blank>";
                                            echo "<img style="."width:100%;max-width:300px"." src="."images/".$value['Gambar'].">";
                                        echo "</a>";
                                        echo "<ul>";
                                            echo "<li>"."Nama           = ".$value['Nama']."</li>";
                                            echo "<li>"."Nilai Akhir    = "."' ".$value['Alternative']."'"."</li>";
                                            echo "<li>"."Brand          = ".$value['Brand']."</li>";
                                            echo "<li>"."Harga          = ".$value['Harga']."</li>";
                                            echo "<li>"."RAM            = ".$value['RAM']."</li>";
                                            echo "<li>"."Internal       = ".$value['Internal']."</li>";
                                            echo "<li>"."Processor      = ".$value['Processor']."</li>";
                                            echo "<li>"."Kamera         = ".$value['Kamera']."</li>";
                                            echo "<li>"."Layar          = ".$value['Layar']."</li>";
                                            echo "<li>"."Baterai        = ".$value['Baterai']."</li>";
                                        echo "</ul>";
                                        echo "<br>";
                                        $num += 1;
                                    }

                                }else{
                                	$koneksi = mysqli_connect("localhost","root","","SPK");

                                    //Total Bobot Streaming
                                    $totalstreaming = "SELECT SUM(Bobotstreaming) as total FROM kriteria_streaming";
                                    $hasil = $koneksi->query($totalstreaming);
                                    $hasilkriteriastreaming = mysqli_fetch_assoc($hasil);

                                    //Ram Streaming
                                    $ramstreaming = "SELECT Bobotstreaming as ramstreaming FROM kriteria_streaming where Kriteriastreaming = 'Ram'";
                                    $hasil = $koneksi->query($ramstreaming);
                                    $hasilramstreaming = mysqli_fetch_assoc($hasil);

                                    //Prosesor Streaming
                                    $prosesorstreaming = "SELECT Bobotstreaming as prosesorstreaming FROM kriteria_streaming where Kriteriastreaming = 'Prosesor'";
                                    $hasil = $koneksi->query($prosesorstreaming);
                                    $hasilprosesorstreaming = mysqli_fetch_assoc($hasil);

                                    //Internal Streaming
                                    $internalstreaming = "SELECT Bobotstreaming as internalstreaming FROM kriteria_streaming where Kriteriastreaming = 'Internal'";
                                    $hasil = $koneksi->query($internalstreaming);
                                    $hasilinternalstreaming = mysqli_fetch_assoc($hasil);

                                    //Layar Streaming
                                    $layarstreaming = "SELECT Bobotstreaming as layarstreaming FROM kriteria_streaming where Kriteriastreaming = 'Layar'";
                                    $hasil = $koneksi->query($layarstreaming);
                                    $hasillayarstreaming = mysqli_fetch_assoc($hasil);

                                    //Kamera Utama Streaming
                                    $kamerastreaming = "SELECT Bobotstreaming as kamerastreaming FROM kriteria_streaming where Kriteriastreaming = 'Kamera Utama'";
                                    $hasil = $koneksi->query($kamerastreaming);
                                    $hasilkamerastreaming = mysqli_fetch_assoc($hasil);

                                    //Baterai Streaming
                                    $bateraistreaming = "SELECT Bobotstreaming as bateraistreaming FROM kriteria_streaming where Kriteriastreaming = 'Kapasitas Baterai'";
                                    $hasil = $koneksi->query($bateraistreaming);
                                    $hasilbateraistreaming = mysqli_fetch_assoc($hasil);

                                    //Perhitungan Normalisasi Streaming
                                    $pramstreaming = $hasilramstreaming['ramstreaming']/$hasilkriteriastreaming['total'];
                                    $pprosesorstreaming = $hasilprosesorstreaming['prosesorstreaming']/$hasilkriteriastreaming['total'];
                                    $pinternalstreaming = $hasilinternalstreaming['internalstreaming']/$hasilkriteriastreaming['total'];
                                    $playarstreaming = $hasillayarstreaming['layarstreaming']/$hasilkriteriastreaming['total'];
                                    $pkamerastreaming = $hasilkamerastreaming['kamerastreaming']/$hasilkriteriastreaming['total'];
                                    $pbateraistreaming = $hasilbateraistreaming['bateraistreaming']/$hasilkriteriastreaming['total'];
                                    $tnstream = $pramstreaming+$pprosesorstreaming+$pinternalstreaming+$playarstreaming+$pkamerastreaming+$pbateraistreaming;

                                    $total_V_S = 0;
                                    $Vector_v = array();
                                    while ($hand = mysqli_fetch_array($cek)) {

                                		$pangkat_ram = pow($hand['BobotRAM'], $pramstreaming);
                                		$pangkat_pro = pow($hand['BobotProcessor'], $pprosesorstreaming);
                                		$pangkat_in = pow($hand['BobotInternal'], $pinternalstreaming);
                                		$pangkat_la = pow($hand['BobotLayar'], $playarstreaming);
                                		$pangkat_kam = pow($hand['BobotKamera'], $pkamerastreaming);
                                		$pangkat_bat = pow($hand['BobotBaterai'], $pbateraistreaming);

                                		$V_S = $pangkat_ram*$pangkat_pro*$pangkat_in*$pangkat_la*$pangkat_kam*$pangkat_bat ;
                                		array_push($Vector_v, $V_S);
										$total_V_S += $V_S ;
                                	}

                                	$sorting = array();

                                	foreach ($cek as $key => $value) {
                                		$bagi = $Vector_v[$key]/$total_V_S;
                               			array_push($sorting, $bagi);
                                	}

                                	$kosong  = array();
                                	foreach ($cek as $key => $value) {
                                		$x['Nama']= $value['Nama'];
                                		$x['Brand']= $value['Brand'];
                                		$x['Harga']= $value['Harga'];
                                		$x['RAM']= $value['RAM'];
                                		$x['Internal']= $value['Internal'];
                                		$x['Processor']= $value['Processor'];
                                		$x['Kamera']= $value['Kamera'];
                                		$x['Layar']= $value['Layar'];
                                		$x['Baterai']= $value['Baterai'];
                                        $x['Gambar']= $value['Gambar'];    
                                		$x['Alternative']= $sorting[$key];
                                		array_push($kosong, $x);
                                	}

                                	array_multisort(array_column($kosong, 'Alternative'),SORT_DESC,$kosong);
                                	$num = 1;
                                	foreach ($kosong as $key => $value) {
                                        echo "<p><b>Rekomendasi ke-".$num."</b></p>";
                                        echo "<a href="."images/".$value['Gambar']."target="."_blank>";
                                            echo "<img style="."width:100%;max-width:300px"." src="."images/".$value['Gambar'].">";
                                        echo "</a>";
                                        echo "<ul>";
                                            echo "<li>"."Nama           = ".$value['Nama']."</li>";
                                            echo "<li>"."Nilai Akhir    = "."' ".$value['Alternative']."'"."</li>";
                                            echo "<li>"."Brand          = ".$value['Brand']."</li>";
                                            echo "<li>"."Harga          = ".$value['Harga']."</li>";
                                            echo "<li>"."RAM            = ".$value['RAM']."</li>";
                                            echo "<li>"."Internal       = ".$value['Internal']."</li>";
                                            echo "<li>"."Processor      = ".$value['Processor']."</li>";
                                            echo "<li>"."Kamera         = ".$value['Kamera']."</li>";
                                            echo "<li>"."Layar          = ".$value['Layar']."</li>";
                                            echo "<li>"."Baterai        = ".$value['Baterai']."</li>";
                                        echo "</ul>";
                                        echo "<br>";
                                        $num += 1;
                                    }
                                }
							}else{
								echo '<script>alert("Handphone dengan harga tersebut tidak ditemukan mohon cek harga min tidak boleh lebih besar dari harga max"); document.location="proses.php";</script>';
							}
								}
							}
						}else{
							echo "Id tidak ditemukan";
						}
						?>
                    </tbody>
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
