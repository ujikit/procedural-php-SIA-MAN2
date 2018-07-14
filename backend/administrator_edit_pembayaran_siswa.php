<?php
include_once "koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$id_pembayaran                = $_POST['id_pembayaran'];
$cicil_total_pembayaran       = preg_replace("/[^0-9]/", "", $_POST['cicil_total_pembayaran']);
$kekurangan_pembayaran        = preg_replace("/[^0-9]/", "", $_POST["kekurangan_pembayaran"]);
$bayar_pembayaran             = preg_replace("/[^0-9]/", "", $_POST['bayar_pembayaran']);
$tanggal_terakhir_pembayaran  = date("Y-m-d h:i:s");

// echo $cicil_total_pembayaran."<br>";
// echo $kekurangan_pembayaran."<br>";
// echo $bayar_pembayaran."<br><br><br><br><br>";
// echo "===>>><<<<===";

if ($bayar_pembayaran >= $kekurangan_pembayaran) {
  $kekurangan_pembayaran        = NULL;
  $cicil_total_pembayaran       = convert_to_rupiah($cicil_total_pembayaran+$bayar_pembayaran);
  $tanggal_lunas_pembayaran     = date("Y-m-d h:i:s");
  $tanggal_terakhir_pembayaran  = date("Y-m-d h:i:s");
  $lunas_pembayaran             = "Y";
}
else {
  $kekurangan_pembayaran        = convert_to_rupiah($kekurangan_pembayaran-$bayar_pembayaran);
  $cicil_total_pembayaran       = convert_to_rupiah($cicil_total_pembayaran+$bayar_pembayaran);
  $tanggal_lunas_pembayaran     = NULL;
  $tanggal_terakhir_pembayaran  = date("Y-m-d h:i:s");
  $lunas_pembayaran             = "N";
}

// echo $kekurangan_pembayaran."<br>";
// echo $cicil_total_pembayaran."<br>";
// echo $tanggal_lunas_pembayaran."<br>";
// echo $lunas_pembayaran."<br>";

$query_update = "UPDATE pembayaran set cicil_total_pembayaran='$cicil_total_pembayaran', kekurangan_pembayaran='$kekurangan_pembayaran', tanggal_terakhir_pembayaran='$tanggal_terakhir_pembayaran', tanggal_lunas_pembayaran='$tanggal_lunas_pembayaran', lunas_pembayaran='$lunas_pembayaran' where id_pembayaran='$id_pembayaran'";

if (mysqli_query($connect, $query_update)){
  header('location:../halaman_administrator_daftar_pembayaran.php');
}
else {
  echo "error";
  echo $id_pegawai."</br>";
  echo $nip_pegawai."</br>";
  echo $nama_pegawai."</br>";
  echo $jabatan_pegawai."</br>";
  echo $kd_mata_pelajaran_pegawai."</br>";
  echo $alamat_pegawai."</br>";
  echo $tempat_lahir_pegawai."</br>";
  echo $tanggal_lahir_pegawai."</br>";
  echo $no_handphone_pegawai."</br>";
}

  function convert_to_rupiah($angka){
		return strrev(implode('.',str_split(strrev(strval($angka)),3)));
	}
	// function convert_to_number($rupiah){
	// 	return intval(preg_replace(/,.*|[^0-9]/, '', $rupiah));
	// }

?>
