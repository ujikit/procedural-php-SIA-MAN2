<!--Halaman administrator tambah pegawai-->

<?php
include_once "koneksi.php";
$nama_jabatan = $_POST["nama_jabatan"];

$query = "SELECT DISTINCT nama_mata_pelajaran from mata_pelajaran where nama_jabatan='$nama_jabatan'";
$getQuery = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($getQuery)){
?>

		<option value="<?php echo $row["nama_mata_pelajaran"]; ?>"><?php echo $row["nama_mata_pelajaran"]; ?></option>

<?php
}
 ?>
