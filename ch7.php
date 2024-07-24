<?php


    echo "<h4>a. Menampilkan Harga Motor Honda Vario 125cc 2020</h4>";

    $merkMotor = "Honda Vario 125cc 2020";
    $hargaMotor = '';

    if($merkMotor == "Yamaha Mio 2019"){
        $hargaMotor = 16000000;
    } else if ($merkMotor == "Yamaha Jupiter MX 2014") {
        $hargaMotor = 11000000;
    } else if ($merkMotor == "Honda Vario 125cc 2020") {
        $hargaMotor = 18000000;
    } else if ($merkMotor == "Honda Supra 125cc 2015") {
        $hargaMotor = 10000000;
    } else if ($merkMotor == "Honda PCX 150cc 2018") {
        $hargaMotor = 23000000;
    } else {
	echo "Merk Motor Tidak Tersedia";
    }

    echo "Harga Motor <b>$merkMotor</b> adalah <b>$hargaMotor</b>";

    echo "<br>";
    echo "<br>";

    echo "<h4>b. Menampilkan Daftar Grade Nilai Mapel Produktif</h4>";

    echo "<br>";
    
    $nilai = 100;
    $grade = "";

    if ($nilai >= 90 && $nilai <= 100) {
        $grade = "Sangat Baik";
    } else if ($nilai >= 80 &&  $nilai <= 89) {
        $grade = "Baik";
    } else if ($nilai >= 70 && $nilai <= 79) {
        $grade = "Cukup";
    } else if ($nilai >= 50 && $nilai <= 69) {
        $grade = "Kurang";
    } else if ($nilai >= 0 && $nilai <= 49 ) {
        $grade = "Sangat Kurang";
    } else {
        $grade = "Nilai Tidak Valid";
    }

    echo "Grade untuk nilai:" . " <b>$nilai</b> " . "adalah: " . " <b>$grade</b>";

?>