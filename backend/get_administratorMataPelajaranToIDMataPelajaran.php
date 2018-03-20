<!--Onchange select option halaman_administrator_daftar_kelas.php(Lihat Guru Pengampu) -> tambah data ke halaman_administrator_daftar_guru_pengampu_mata_pelajaran_perkelas.php-->

<?php
include_once "koneksi.php";
$nama_mata_pelajaran_transaksi = addslashes($_POST["nama_mata_pelajaran_transaksi"]);

$query = "SELECT * from mata_pelajaran where nama_mata_pelajaran='$nama_mata_pelajaran_transaksi'";
$getQuery = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($getQuery)){
?>

		<option value="<?php echo $row["id_mata_pelajaran"] ?>"><?php echo $row["id_mata_pelajaran"] ?></option>

<?php
}
 ?>
