<?php 

// Membuat array assosiative
$siswa = [
    ["nama" => "Joni Susanto", "kelas" => "XII TKR 2", "alamat" =>"Pemalang"],
    ["nama" => "Intan Ayu", "kelas" => "XII TB 1", "alamat" =>"Brebes"],
    ["nama" => "Salma Karima", "kelas" => "XII RPL 3", "alamat" =>"Batang"],
];
// Array sudah dibuat


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menampilkan Data Siswa</title>
</head>
<body>
    <h4>Menampilkan Data Siswa Menggunakan Array Assosiative</h4>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>

        <?php  
        $no = 1;
        foreach ($siswa as $data) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['kelas'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "</tr>";
            $no++;
        }       
    ?>

    </table>
</body>
</html>