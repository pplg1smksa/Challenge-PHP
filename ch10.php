<?php 

    echo "<h4>Terdapat sebuah array yang berisi nama ikan</h4>";

    $ikan = array("Piranha", "Bandeng", "Lele", "Hiu", "Paus", "Lumba-lumba", "Nemo");

    echo "Ikan : " . "<b>$ikan[2]</b>" . "<br>";

    echo "Ikan : " . "<b>$ikan[0]</b>" . " dan " . "<b>$ikan[6]</b>" . "<br>";

    echo "<h4>Menampilkan data siswa</h4>";

    // Data siswa smksa
    $siswa = [
        [1, "Joni Susanto", "XII TKR 2", "Pemalang"],
        [2, "Intan Ayu", "XII TB 1", "Brebes"],
        [3, "Salma Karima", "XII RPL 3", "Batang"],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data siswa</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>

    <?php foreach($siswa as $ssw) {
        echo "<tr>";
        foreach ($ssw as $data) {
            echo "<td>" . $data . "</td>";
        }
        echo "</tr>";
    } 
    ?>

    </table>
</body>
</html>