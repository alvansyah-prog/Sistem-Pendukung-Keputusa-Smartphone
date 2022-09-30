<!DOCTYPE html>
<?php

include 'connect.php';

if (isset($_POST['daftar'])) {
    $user = $_POST['inuser'];
    $pass = $_POST['inpass'];

    //var_dump($nim);
    $insert = mysqli_query($conn, "INSERT INTO `login`(`username`, `password`) VALUES ('$user','$pass')");

    if ($insert) {
        $insertdata= "Data berhasil di inputkan";
        header("Location: login_admin.php?insertakun=$insertdata");
    } else {
			$insertdata = "Data berhasil di inputkan";
        header("Location: daftar.php");
    }
}
?>
<html lang="en">
<head>
	<title>Daftar Akun Naive Bayes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Daftar Akun
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="inuser" placeholder="Masukkan Username ">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="glyphicon glyphicon-user " aria-hidden="true" ></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="inpass" placeholder="Masukkan Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">

						<button class="login100-form-btn" name="daftar" data-target="#modaldata" >
              Daftar
						</button>
					</div>



					<div class="text-center p-t-136">

					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modaldata" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="mediumModalLabel">Detail Diabetes </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<!-- Ini isinya modul pop up-->
					<div class="card-body">
						<table class="table">
							<thead>

							</thead>
							<tbody>
								<?php
								if ($insertdata == "Data berhasil di inputkan") {
									echo "Data Berhasil di Inputkan";
								}
								echo "Data Gagal di inputkan";
								 ?>
					</div>
					<!-- <p>There are three species of zebras.</p> -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary">Confirm</button> -->
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
