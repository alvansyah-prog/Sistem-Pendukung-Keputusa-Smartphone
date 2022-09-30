<?php
// include database connection file
include("connect.php");

if(isset($_GET['id_handphone'])){
	$Id = $_GET['id_handphone'];

	$cek = mysqli_query($conn, "SELECT id_handphone FROM handphone WHERE id_handphone='$Id'") or die(mysqli_error($conn));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($conn, "DELETE FROM handphone WHERE id_handphone='$Id'") or die(mysqli_error($conn));
		if($del){
			echo '<script>alert("Berhasil Menghapus data."); document.location="tabelsmartphone_admin.php";</script>';
		}else{
			echo '<script>alert("Gagal Menghapus data."); document.location="tabelsmartphone_admin.php";</script>';
		}
	}else{
		echo '<script>alert("User Id tidak ditemukan."); document.location="tabelsmartphone_admin.php";</script>';
	}
}else{
	echo '<script>alert("User Id tidak ditemukan di database."); document.location="tabelsmartphone_admin.php";</script>';
}

?>


