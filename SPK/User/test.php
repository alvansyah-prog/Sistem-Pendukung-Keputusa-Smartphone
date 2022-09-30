<?php  
$conn = mysqli_connect("localhost", "root", "", "spk");

if(isset ($_POST['proses']) ){
	$rangemin = $_POST['rangemin'];
	$rangemax = $_POST['rangemax'];

	$script = mysqli_query($conn, "SELECT * FROM  `Handphone` WHERE  ")
}
?>