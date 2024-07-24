<?php 

    function menampilkanData($nama, $kelas, $alamat) {
        echo "Nama Saya <b>$nama</b>, Kelas <b>$kelas</b>, Alamat <b>$alamat</b>";
    }

    function menampilkanTanggal() {
        $tanggal = date("j F Y", strtotime("2022-08-17"));
        echo "Tanggal: <b>$tanggal</b>";
    }

    menampilkanData("Dani Ramadhan", "XI PPLG 1", "'Perum Regency, Desa Kota Baru, Kecamatan Cikampek, Kabupaten Karawang'");
    echo "<br>";
    echo "<br>";
    menampilkanTanggal();

?>