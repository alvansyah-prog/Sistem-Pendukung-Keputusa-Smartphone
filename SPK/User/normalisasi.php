<?php
                $koneksi = mysqli_connect("localhost","root","","SPK");
                
                //Total Bobot Gaming
                echo "Menghitung Normalisasi Kriteria Gaming : <br><br>";
                $totalgaming = "SELECT SUM(Bobotgaming) as total FROM kriteria_gaming";
                $hasil = $koneksi->query($totalgaming);
                $hasilkriteriagaming = mysqli_fetch_assoc($hasil);
                echo "Total Bobot = " . $hasilkriteriagaming['total'] . "<br>";

                //Ram Gaming
				echo "<hr>Bobot Ram Gaming : <br><br>";
                $ramgaming = "SELECT Bobotgaming as ramgaming FROM kriteria_gaming where Kriteriagaming = 'Ram'";
                $hasil = $koneksi->query($ramgaming);
                $hasilramgaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Ram = " . $hasilramgaming['ramgaming'] . "<br>";

                //Prosesor Gaming
                echo "<hr>Bobot Prosesor Gaming : <br><br>";
                $prosesorgaming = "SELECT Bobotgaming as prosesorgaming FROM kriteria_gaming where Kriteriagaming = 'Prosesor'";
                $hasil = $koneksi->query($prosesorgaming);
                $hasilprosesorgaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Prosesor = " . $hasilprosesorgaming['prosesorgaming'] . "<br>";

                //Internal Gaming
                echo "<hr>Bobot Internal Gaming : <br><br>";
                $internalgaming = "SELECT Bobotgaming as internalgaming FROM kriteria_gaming where Kriteriagaming = 'Internal'";
                $hasil = $koneksi->query($internalgaming);
                $hasilinternalgaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Internal = " . $hasilinternalgaming['internalgaming'] . "<br>"; 

                //Layar Gaming
                echo "<hr>Bobot Layar Gaming : <br><br>";
                $layargaming = "SELECT Bobotgaming as layargaming FROM kriteria_gaming where Kriteriagaming = 'Layar'";
                $hasil = $koneksi->query($layargaming);
                $hasillayargaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Layar = " . $hasillayargaming['layargaming'] . "<br>";               

                //Kamera Utama Gaming
                echo "<hr>Bobot Kamera Gaming : <br><br>";
                $kameragaming = "SELECT Bobotgaming as kameragaming FROM kriteria_gaming where Kriteriagaming = 'Kamera Utama'";
                $hasil = $koneksi->query($kameragaming);
                $hasilkameragaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Kamera = " . $hasilkameragaming['kameragaming'] . "<br>";

                //Baterai Gaming
                echo "<hr>Bobot Baterai Gaming : <br><br>";
                $bateraigaming = "SELECT Bobotgaming as bateraigaming FROM kriteria_gaming where Kriteriagaming = 'Kapasitas Baterai'";
                $hasil = $koneksi->query($bateraigaming);
                $hasilbateraigaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Baterai = " . $hasilbateraigaming['bateraigaming'] . "<br>";


                //Perhitungan Normalisasi Gaming
                $pramgaming = $hasilramgaming['ramgaming']/$hasilkriteriagaming['total'];
                $pprosesorgaming = $hasilprosesorgaming['prosesorgaming']/$hasilkriteriagaming['total'];
                $pinternalgaming = $hasilinternalgaming['internalgaming']/$hasilkriteriagaming['total'];
                $playargaming = $hasillayargaming['layargaming']/$hasilkriteriagaming['total'];
                $pkameragaming = $hasilkameragaming['kameragaming']/$hasilkriteriagaming['total'];
                $pbateraigaming = $hasilbateraigaming['bateraigaming']/$hasilkriteriagaming['total'];
                $tng = $pramgaming+$pprosesorgaming+$pinternalgaming+$playargaming+$pkameragaming+$pbateraigaming;


                //Echo Gaming
                echo "<br>Normalisasi RAM Gaming = " . $pramgaming . "<br>";
                echo "Normalisasi Prosesor Gaming = " . $pprosesorgaming . "<br>";
                echo "Normalisasi Internal Gaming = " . $pinternalgaming . "<br>";
                echo "Normalisasi Layar Gaming = " . $playargaming . "<br>";
                echo "Normalisasi Kamera Utama Gaming = " . $pkameragaming . "<br>";
                echo "Normalisasi Kapasitas Batera Gaming = " . $pbateraigaming . "<br>";
                echo "Normalisasi Total = " . $tng . "<br>";
           		
                //SosmedFotografi----------------------------------------------------------------------------

                //Total Bobot SosmedFotografi
                echo "<hr>Menghitung Normalisasi Kriteria SosmedFotografi : <br><br>";
                $totalsosmed = "SELECT SUM(Bobotsosmed) as total FROM kriteria_sosmed_fotografi";
                $hasil = $koneksi->query($totalsosmed);
                $hasilkriteriasosmed = mysqli_fetch_assoc($hasil);
                echo "Total Bobot = " . $hasilkriteriasosmed['total'] . "<br>";

                //Ram SosmedFotografi
                echo "<hr>Bobot Ram SosmedFotografi : <br><br>";
                $ramsosmed = "SELECT Bobotsosmed as ramsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Ram'";
                $hasil = $koneksi->query($ramsosmed);
                $hasilramsosmed = mysqli_fetch_assoc($hasil);
                echo "Bobot Ram = " . $hasilramsosmed['ramsosmed'] . "<br>";

                //Prosesor SosmedFotografi
                echo "<hr>Bobot Prosesor SosmedFotografi : <br><br>";
                $prosesorsosmed = "SELECT Bobotsosmed as prosesorsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Prosesor'";
                $hasil = $koneksi->query($prosesorsosmed);
                $hasilprosesorsosmed = mysqli_fetch_assoc($hasil);
                echo "Bobot Prosesor = " . $hasilprosesorsosmed['prosesorsosmed'] . "<br>";

                //Internal Sosmed
                echo "<hr>Bobot Internal SosmedFotografi : <br><br>";
                $internalsosmed = "SELECT Bobotsosmed as internalsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Internal'";
                $hasil = $koneksi->query($internalsosmed);
                $hasilinternalsosmed = mysqli_fetch_assoc($hasil);
                echo "Bobot Internal = " . $hasilinternalsosmed['internalsosmed'] . "<br>"; 

                //Layar Sosmed
                echo "<hr>Bobot Layar SosmedFotografi : <br><br>";
                $layarsosmed = "SELECT Bobotsosmed as layarsosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Layar'";
                $hasil = $koneksi->query($layarsosmed);
                $hasillayarsosmed = mysqli_fetch_assoc($hasil);
                echo "Bobot Layar = " . $hasillayarsosmed['layarsosmed'] . "<br>";               

                //Kamera Utama Sosmed
                echo "<hr>Bobot Kamera SosmedFotografi : <br><br>";
                $kamerasosmed = "SELECT Bobotsosmed as kamerasosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Kamera Utama'";
                $hasil = $koneksi->query($kamerasosmed);
                $hasilkamerasosmed = mysqli_fetch_assoc($hasil);
                echo "Bobot Kamera = " . $hasilkamerasosmed['kamerasosmed'] . "<br>";

                //Baterai Sosmed
                echo "<hr>Bobot Baterai SosmedFotografi : <br><br>";
                $bateraisosmed = "SELECT Bobotsosmed as bateraisosmed FROM kriteria_sosmed_fotografi where Kriteriasosmed = 'Kapasitas Baterai'";
                $hasil = $koneksi->query($bateraisosmed);
                $hasilbateraisosmed = mysqli_fetch_assoc($hasil);
                echo "Bobot Baterai = " . $hasilbateraisosmed['bateraisosmed'] . "<br>";

                //Perhitungan Normalisasi Sosmed
                $pramsosmed = $hasilramsosmed['ramsosmed']/$hasilkriteriasosmed['total'];
                $pprosesorsosmed = $hasilprosesorsosmed['prosesorsosmed']/$hasilkriteriasosmed['total'];
                $pinternalsosmed = $hasilinternalsosmed['internalsosmed']/$hasilkriteriasosmed['total'];
                $playarsosmed = $hasillayarsosmed['layarsosmed']/$hasilkriteriasosmed['total'];
                $pkamerasosmed = $hasilkamerasosmed['kamerasosmed']/$hasilkriteriasosmed['total'];
                $pbateraisosmed = $hasilbateraisosmed['bateraisosmed']/$hasilkriteriasosmed['total'];
                $tnsos = $pramsosmed+$pprosesorsosmed+$pinternalsosmed+$playarsosmed+$pkamerasosmed+$pbateraisosmed;


                //Echo Sosmed
                echo "<br>Normalisasi RAM Sosmed = " . $pramsosmed . "<br>";
                echo "Normalisasi Prosesor Sosmed = " . $pprosesorsosmed . "<br>";
                echo "Normalisasi Internal Sosmed = " . $pinternalsosmed . "<br>";
                echo "Normalisasi Layar Sosmed = " . $playarsosmed . "<br>";
                echo "Normalisasi Kamera Utama Sosmed = " . $pkamerasosmed . "<br>";
                echo "Normalisasi Kapasitas Batera Sosmed = " . $pbateraisosmed . "<br>";
                echo "Normalisasi Total = " . $tnsos . "<br>";


                //Total Bobot Streaming
                echo "<hr>Menghitung Normalisasi Kriteria Streaming : <br><br>";
                $totalstreaming = "SELECT SUM(Bobotstreaming) as total FROM kriteria_streaming";
                $hasil = $koneksi->query($totalstreaming);
                $hasilkriteriastreaming = mysqli_fetch_assoc($hasil);
                echo "Total Bobot = " . $hasilkriteriastreaming['total'] . "<br>";

                //Ram Streaming
                echo "<hr>Bobot Ram Streaming : <br><br>";
                $ramstreaming = "SELECT Bobotstreaming as ramstreaming FROM kriteria_streaming where Kriteriastreaming = 'Ram'";
                $hasil = $koneksi->query($ramstreaming);
                $hasilramstreaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Ram = " . $hasilramstreaming['ramstreaming'] . "<br>";

                //Prosesor Streaming
                echo "<hr>Bobot Prosesor Streaming : <br><br>";
                $prosesorstreaming = "SELECT Bobotstreaming as prosesorstreaming FROM kriteria_streaming where Kriteriastreaming = 'Prosesor'";
                $hasil = $koneksi->query($prosesorstreaming);
                $hasilprosesorstreaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Prosesor = " . $hasilprosesorstreaming['prosesorstreaming'] . "<br>";

                //Internal Streaming
                echo "<hr>Bobot Internal Streaming : <br><br>";
                $internalstreaming = "SELECT Bobotstreaming as internalstreaming FROM kriteria_streaming where Kriteriastreaming = 'Internal'";
                $hasil = $koneksi->query($internalstreaming);
                $hasilinternalstreaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Internal = " . $hasilinternalstreaming['internalstreaming'] . "<br>"; 

                //Layar Streaming
                echo "<hr>Bobot Layar Streaming : <br><br>";
                $layarstreaming = "SELECT Bobotstreaming as layarstreaming FROM kriteria_streaming where Kriteriastreaming = 'Layar'";
                $hasil = $koneksi->query($layarstreaming);
                $hasillayarstreaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Layar = " . $hasillayarstreaming['layarstreaming'] . "<br>";               

                //Kamera Utama Streaming
                echo "<hr>Bobot Kamera Streaming : <br><br>";
                $kamerastreaming = "SELECT Bobotstreaming as kamerastreaming FROM kriteria_streaming where Kriteriastreaming = 'Kamera Utama'";
                $hasil = $koneksi->query($kamerastreaming);
                $hasilkamerastreaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Kamera = " . $hasilkamerastreaming['kamerastreaming'] . "<br>";

                //Baterai Streaming
                echo "<hr>Bobot Baterai Streaming : <br><br>";
                $bateraistreaming = "SELECT Bobotstreaming as bateraistreaming FROM kriteria_streaming where Kriteriastreaming = 'Kapasitas Baterai'";
                $hasil = $koneksi->query($bateraistreaming);
                $hasilbateraistreaming = mysqli_fetch_assoc($hasil);
                echo "Bobot Baterai = " . $hasilbateraistreaming['bateraistreaming'] . "<br>";

                //Perhitungan Normalisasi Streaming
                $pramstreaming = $hasilramstreaming['ramstreaming']/$hasilkriteriastreaming['total'];
                $pprosesorstreaming = $hasilprosesorstreaming['prosesorstreaming']/$hasilkriteriastreaming['total'];
                $pinternalstreaming = $hasilinternalstreaming['internalstreaming']/$hasilkriteriastreaming['total'];
                $playarstreaming = $hasillayarstreaming['layarstreaming']/$hasilkriteriastreaming['total'];
                $pkamerastreaming = $hasilkamerastreaming['kamerastreaming']/$hasilkriteriastreaming['total'];
                $pbateraistreaming = $hasilbateraistreaming['bateraistreaming']/$hasilkriteriastreaming['total'];
                $tnstream = $pramstreaming+$pprosesorstreaming+$pinternalstreaming+$playarstreaming+$pkamerastreaming+$pbateraistreaming;


                //Echo Streaming
                echo "<br>Normalisasi RAM Streaming = " . $pramstreaming . "<br>";
                echo "Normalisasi Prosesor Streaming = " . $pprosesorstreaming . "<br>";
                echo "Normalisasi Internal Streaming = " . $pinternalstreaming . "<br>";
                echo "Normalisasi Layar Streaming = " . $playarstreaming . "<br>";
                echo "Normalisasi Kamera Utama Streaming = " . $pkamerastreaming . "<br>";
                echo "Normalisasi Kapasitas Batera Streaming = " . $pbateraistreaming . "<br>";
                echo "Normalisasi Total = " . $tnstream . "<br>";




?>