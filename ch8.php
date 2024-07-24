<?php

    echo "<h4>Menampilkan angka kelipatan 5 mulai dari angka 15 sampai 57</h4>";

    for ($i = 15; $i <= 57; $i +=5) {

        echo $i . " ";
    }
    echo "57<br>";


    echo "<h4>Menampilkan Bintang menggunakan perulangan for</h4>";

    for ($j = 4; $j >= 1; $j--) {
        for ($k = 1; $k <= $j; $k++) {
            echo "* ";
        }
        echo "<br>";
    }


?>