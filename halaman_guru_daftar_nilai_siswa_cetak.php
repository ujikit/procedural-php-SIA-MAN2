<?php
session_start();
require('frontend/fpdf181/fpdf.php');
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";
$nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan = $_GET["nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan"];
$id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan = $_GET["id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan"];
$nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan = $_GET["nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan"];
$nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan = $_GET["nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan"];

if($_SESSION['nip_pegawai']){

  //$result=mysqli_query($connect,"select * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa_nis_siswa where nama_kelas_nilai_siswa_transaksi='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi='$id_mata_pelajaran_nilai_siswa_transaksi'");

  $query_guruDanMataPelajaran = mysqli_query($connect, "SELECT * from mata_pelajaran_transaksi where id_kelas_daftar='$id_kelas_daftar' && id_mata_pelajaran_mata_pelajaran_transaksi='$id_mata_pelajaran_nilai_siswa_transaksi'");
  $row = mysqli_fetch_array($query_guruDanMataPelajaran);
  $kelas = $row['nama_kelas_mata_pelajaran_transaksi'];
  $mata_pelajaran = $row['nama_mata_pelajaran_transaksi'];
  $guru_pengampu = $row['nama_guru_mata_pelajaran_transaksi'];

  //Inisiasi untuk membuat header kolom
  $column_no = "";
  $column_nama = "";
  $column_tugas1 = "";
  $column_uts = "";
  $column_tugas2 = "";
  $column_uas = "";


  //Create a new PDF file
  $pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
  $pdf->SetFont('Arial','B',16);
  $pdf->AddPage("P","A4");

  //Menambahkan Gambar
  //$pdf->Image('../foto/logo.png',10,10,-175);

  $pdf->Image('frontend/img/MAN2YK.png',39,13,25.25); //(X,Y,ukuran,kemiringan)
  $pdf->Cell(80);
  $pdf->text(96,21,'Daftar Nilai Siswa');
  $pdf->Ln();
  $pdf->Cell(80);
  $pdf->text(69,29,'Madrasah Aliyah Negeri Yogyakarta 2');
  $pdf->SetFont('Arial','',9);
  $pdf->text(78,36,'Jalan K.H.Ahmad Dahlan No.130, Ngampilan,Yogyakarta');
  $pdf->Line(0,43,250,43);
  $pdf->SetFont('Arial','',9);
  $pdf->text(25,52,'Nama Kelas : '.$kelas);
  $pdf->text(25,58.5,'Nama Mata Pelajaran : '.$mata_pelajaran);
  $pdf->SetFont('Arial','',10);
  $pdf->text(25,250.5,'Nama Guru Pengampu ');
  $pdf->text(25,280.5,''.$guru_pengampu);

  //$pdf->SetX(150);
  //$pdf->Image('frontend/img/tes.png',155,6,45.25); //(X,Y,ukuran,kemiringan)
  //$pdf->SetFont('Arial','B',12);
  //$pdf->text(173,12.3,'11 IPA 2');
  //Fields Name position
  $Y_Fields_Name_position = 64;

  //First create each Field Name
  //Gray color filling each Field Name box
  $pdf->SetFillColor(110,180,230);
  //Bold Font for Field Name
  $pdf->SetFont('Arial','B',10);
  $pdf->SetY($Y_Fields_Name_position);
  $pdf->SetX(25);
  $pdf->Cell(15,8,'No.',1,0,'C');
  $pdf->SetX(40);
  $pdf->Cell(70,8,'Nama Lengkap',1,0,'C');
  $pdf->SetX(110);
  $pdf->Cell(20,8,'Tugas 1',1,0,'C');
  $pdf->SetX(130);
  $pdf->Cell(20,8,'UTS',1,0,'C');
  $pdf->SetX(150);
  $pdf->Cell(20,8,'Tugas 2',1,0,'C');
  $pdf->SetX(170);
  $pdf->Cell(20,8,'UAS',1,0,'C');
  $pdf->Ln();

  $no=1;
  $result = mysqli_query($connect,"select * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa.nis_siswa where nama_kelas_nilai_siswa_transaksi='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi='$id_mata_pelajaran_nilai_siswa_transaksi' order by nis_siswa desc limit 21");
  $results = mysqli_query($connect,"select * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa.nis_siswa where nama_kelas_nilai_siswa_transaksi='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi='$id_mata_pelajaran_nilai_siswa_transaksi' order by nis_siswa desc limit 45 offset 21");

      $Y_Table_Position = 64;
      $pdf->SetY($Y_Table_Position);

      while($tes = mysqli_fetch_array($result)){
      $nama = $tes['nama_siswa'];
      $tugas1 = $tes['tugas1_nilai_siswa_transaksi'];
      $uts = $tes['uts_nilai_siswa_transaksi'];
      $tugas2 = $tes['tugas2_nilai_siswa_transaksi'];
      $uas = $tes['uas_nilai_siswa_transaksi'];
      $pdf->SetFont('Arial','',10);
      $pdf->Ln();
        $pdf->SetX(25);
    		$pdf->Cell(15,8,$no++,1,0,'C');
        $pdf->SetX(40);
    		$pdf->Cell(70,8,$nama,1,0,'C');
        $pdf->SetX(110);
    		$pdf->Cell(20,8,$tugas1,1,0,'C');
        $pdf->SetX(130);
    		$pdf->Cell(20,8,$uts,1,0,'C');
        $pdf->SetX(150);
    		$pdf->Cell(20,8,$tugas2,1,0,'C');
        $pdf->SetX(170);
    		$pdf->Cell(20,8,$uas,1,0,'C');
  }while($tes = mysqli_fetch_array($result)){
  $nama = $tes['nama_siswa'];
  $tugas1 = $tes['tugas1_nilai_siswa_transaksi'];
  $uts = $tes['uts_nilai_siswa_transaksi'];
  $tugas2 = $tes['tugas2_nilai_siswa_transaksi'];
  $uas = $tes['uas_nilai_siswa_transaksi'];
  $pdf->SetFont('Arial','',10);
  $pdf->Ln();
    $pdf->SetX(25);
    $pdf->Cell(15,8,$no++,1,0,'C');
    $pdf->SetX(40);
    $pdf->Cell(70,8,$nama,1,0,'C');
    $pdf->SetX(110);
    $pdf->Cell(20,8,$tugas1,1,0,'C');
    $pdf->SetX(130);
    $pdf->Cell(20,8,$uts,1,0,'C');
    $pdf->SetX(150);
    $pdf->Cell(20,8,$tugas2,1,0,'C');
    $pdf->SetX(170);
    $pdf->Cell(20,8,$uas,1,0,'C');
}
$pdf->text(165,280,'Halaman 1 / 2 ');
if ($no > 21) {
$pdf->AddPage();
$pdf->text(165,280,'Halaman 2 / 2 ');
}
$pdf->SetFont('Arial','B',16);
$pdf->Image('frontend/img/MAN2YK.png',39,13,25.25); //(X,Y,ukuran,kemiringan)
$pdf->Cell(80);
$pdf->text(96,21,'Daftar Nilai Siswa');
$pdf->Ln();
$pdf->Cell(80);
$pdf->text(69,29,'Madrasah Aliyah Negeri Yogyakarta 2');
$pdf->SetFont('Arial','',9);
$pdf->text(78,36,'Jalan K.H.Ahmad Dahlan No.130, Ngampilan,Yogyakarta');
$pdf->Line(0,43,250,43);
$pdf->SetFont('Arial','',9);
$pdf->text(25,52,'Nama Kelas : '.$kelas);
$pdf->text(25,58.5,'Nama Mata Pelajaran : '.$mata_pelajaran);
$pdf->SetFont('Arial','',10);
$pdf->text(25,250.5,'Nama Guru Pengampu ');
$pdf->text(25,280.5,''.$guru_pengampu);
$pdf->SetY($Y_Table_Position);

$Y_Fields_Name_position = 64;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(25);
$pdf->Cell(15,8,'No.',1,0,'C');
$pdf->SetX(40);
$pdf->Cell(70,8,'Nama Lengkap',1,0,'C');
$pdf->SetX(110);
$pdf->Cell(20,8,'Tugas 1',1,0,'C');
$pdf->SetX(130);
$pdf->Cell(20,8,'UTS',1,0,'C');
$pdf->SetX(150);
$pdf->Cell(20,8,'Tugas 2',1,0,'C');
$pdf->SetX(170);
$pdf->Cell(20,8,'UAS',1,0,'C');
$pdf->Ln();

$Y_Table_Position = 64;
$pdf->SetY($Y_Table_Position);

while($tes = mysqli_fetch_array($results)){
$nama = $tes['nama_siswa'];
$tugas1 = $tes['tugas1_nilai_siswa_transaksi'];
$uts = $tes['uts_nilai_siswa_transaksi'];
$tugas2 = $tes['tugas2_nilai_siswa_transaksi'];
$uas = $tes['uas_nilai_siswa_transaksi'];
$pdf->SetFont('Arial','',10);
$pdf->Ln();
  $pdf->SetX(25);
  $pdf->Cell(15,8,$no++,1,0,'C');
  $pdf->SetX(40);
  $pdf->Cell(70,8,$nama,1,0,'C');
  $pdf->SetX(110);
  $pdf->Cell(20,8,$tugas1,1,0,'C');
  $pdf->SetX(130);
  $pdf->Cell(20,8,$uts,1,0,'C');
  $pdf->SetX(150);
  $pdf->Cell(20,8,$tugas2,1,0,'C');
  $pdf->SetX(170);
  $pdf->Cell(20,8,$uas,1,0,'C');
}
  // foreach($result as $row) {
  // 	$pdf->SetFont('Arial','',10);
  // 	$pdf->Ln();
  // 	foreach($row as $column)
  //     $pdf->SetX(25);
  // 		$pdf->Cell(15,8,$no++,1,0,'C');
  //     $pdf->SetX(40);
  // 		$pdf->Cell(70,8,$column,1,0,'C');
  // }

  $pdf->Output();
}
 else {
  header("location:login_guru_atau_bk.php");
} ?>
