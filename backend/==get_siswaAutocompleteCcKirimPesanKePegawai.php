<?php
include_once "koneksi.php";

    //get matched data from skills table
    $query = $connect->query("SELECT * FROM data_pegawai WHERE jabatan_pegawai='Guru' ORDER BY nama_pegawai ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['nama_pegawai'];
    }

    //return json data
    echo json_encode($data);
?>
