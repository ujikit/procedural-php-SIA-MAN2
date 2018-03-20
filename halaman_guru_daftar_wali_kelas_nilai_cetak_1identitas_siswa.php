<?php
session_start();
require('frontend/fpdf181/fpdf.php');
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";
$nis_siswa = $_GET["nis_siswa"];
$id_kelas_daftar = $_GET["id_kelas_daftar"];

if($_SESSION['nip_pegawai']){

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
  $pdf->AddPage("P","A4"); //A3,A4,A5,Letter,Legal

  //Menambahkan Gambar
  //$pdf->Image('../foto/logo.png',10,10,-175);

  $no = 1;
  $query_dataSiswa = "SELECT * from data_siswa inner join kelas_daftar on data_siswa.id_kelas_daftar = kelas_daftar.id_kelas_daftar where nis_siswa='$nis_siswa'";
  $result = mysqli_query($connect, $query_dataSiswa);
  $row = mysqli_fetch_array($result);
  $nisn_siswa = $row['nisn_siswa'];

  $pdf->SetFont('Arial','B',11);
  $pdf->text(85,15,'IDENTITAS SISWA');

  //Fields Name position
  $Y_Fields_Name_position = 64;

  //First create each Field Name
  //Gray color filling each Field Name box
  $pdf->SetFillColor(110,180,230);
  //Bold Font for Field Name
  $pdf->SetFont('Arial','B',10);
  $pdf->SetY($Y_Fields_Name_position);
  $pdf->SetX(25);
  $pdf->SetFont('Arial','',9.3);
  $pdf->text(18,30,$no++.'.');
  $pdf->text(25,30,'Nama Siswa (lengkap)');
  $pdf->text(80,30,':');
  $pdf->text(85,30, strtoupper($row['nama_siswa']));

  $pdf->text(18,35,$no++.'.');
  $pdf->text(25,35,'Nomer Induk');
  $pdf->text(80,35,':');
  $pdf->text(85,35, $row['nis_siswa']);

  $pdf->text(18,40,$no++.'.');
  $pdf->text(25,40,'NISN');
  $pdf->text(80,40,':');
  $pdf->text(85,40, $row['nisn_siswa']);

  $date =new DateTime($row['tanggal_lahir_siswa']); //this returns the current date time
  $date = date_format($date, ' j F Y');
  $pdf->text(18,45,$no++.'.');
  $pdf->text(25,45,'Tempat dan Tanggal Lahir');
  $pdf->text(80,45,':');
  $pdf->text(85,45, $row['tempat_lahir_siswa'].', '.$date);

  if ($row['jenis_kelamin_siswa']=="L") {
    $jenis_kelamin = 'Laki-laki';
  }
  else if ($row['jenis_kelamin_siswa']=="P") {
    $jenis_kelamin = 'Perempuan';
  }
  $pdf->text(18,50,$no++.'.');
  $pdf->text(25,50,'Jenis Kelamin');
  $pdf->text(80,50,':');
  $pdf->text(85,50, $jenis_kelamin);

  $pdf->text(18,55,$no++.'.');
  $pdf->text(25,55,'Agama');
  $pdf->text(80,55,':');
  $pdf->text(85,55, $row['agama_siswa']);

  $pdf->text(18,60,$no++.'.');
  $pdf->text(25,60,'Anak ke');
  $pdf->text(80,60,':');
  $pdf->text(85,60, $row['anak_ke_siswa']);

  $pdf->text(18,65,$no++.'.');
  $pdf->text(25,65,'Status dalam keluarga');
  $pdf->text(80,65,':');
  $pdf->text(85,65, $row['status_dalam_keluarga_siswa']);

  $pdf->text(18,70,$no++.'.');
  $pdf->text(25,70,'Alamat siswa');
  $pdf->text(80,70,':');
  $pdf->SetY(66.6);
  $pdf->SetX(84);
  $pdf->Multicell(100,5, $row['alamat_siswa']);

  $pdf->text(25,85,'Telepon');
  $pdf->text(80,85,':');
  $pdf->text(85,85, $row['no_handphone_siswa']);

  $pdf->text(18,90,$no++.'.');
  $pdf->text(25,90,'Di terima disekolah ini');

  //Di terima disekolah ini
  $pdf->text(25,95,'a.');
  $pdf->text(29,95,'Di kelas');
  $pdf->text(80,95,':');
  $pdf->text(85,95, $row['nama_kelas_daftar']);
  //Di terima disekolah ini
  $pdf->text(25,100,'b.');
  $pdf->text(29,100,'Pada tanggal');
  $pdf->text(80,100,':');
  $pdf->text(85,100, $row['diterima_tanggal_siswa']);
  //Di terima disekolah ini
  $pdf->text(25,105,'c.');
  $pdf->text(29,105,'Semester');
  $pdf->text(80,105,':');
  $pdf->text(85,105, $row['diterima_semester_siswa']);

  $pdf->text(18,110,$no++.'.');
  $pdf->text(25,110,'Sekolah Asal');

  //Sekolah Asal
  $pdf->text(25,115,'a.');
  $pdf->text(29,115,'Nama Sekolah');
  $pdf->text(80,115,':');
  $pdf->text(85,115, $row['sekolah_asal_nama_siswa']);
  //Sekolah Asal
  $pdf->text(25,120,'b.');
  $pdf->text(29,120,'Alamat');
  $pdf->text(80,120,':');
  $pdf->text(85,120, $row['sekolah_asal_alamat_siswa']);

  $pdf->text(18,135,$no++.'.');
  $pdf->text(25,135,'Surat Tanda Lulus (STL) SMP/MTs');

  //Surat Tanda Lulus (STL8 SMP/MTs
  $pdf->text(25,140,'a.');
  $pdf->text(29,140,'Tahun');
  $pdf->text(80,140,':');
  $pdf->text(85,140, $row['stl_tahun_siswa']);
  //Surat Tanda Lulus (STL) SMP/MTs
  $pdf->text(25,145,'b.');
  $pdf->text(29,145,'Nomor');
  $pdf->text(80,145,':');
  $pdf->text(85,145, $row['stl_nomor_siswa']);

  $pdf->text(18,150,$no++.'.');
  $pdf->text(25,150,'Orang tua');

  //Surat Tanda Lulus (STL8 SMP/MTs
  $pdf->text(25,155,'a.');
  $pdf->text(29,155,'Ayah');
  $pdf->text(80,155,':');
  $pdf->text(85,155, $row['orangtua_nama_ayah_siswa']);
  //Surat Tanda Lulus (STL) SMP/MTs
  $pdf->text(25,160,'b.');
  $pdf->text(29,160,'Ibu');
  $pdf->text(80,160,':');
  $pdf->text(85,160, $row['orangtua_nama_ibu_siswa']);

  $pdf->text(18,165,$no++.'.');
  $pdf->text(25,165,'Alamat Orang Tua');
  $pdf->text(80,165,':');
  $pdf->SetY(161.8);
  $pdf->SetX(84);
  $pdf->Multicell(100,5, $row['orangtua_alamat_siswa']);

  $pdf->text(25,180,'Telepon');
  $pdf->text(80,180,':');
  $pdf->text(85,180, $row['orangtua_telepon_siswa']);

  $pdf->text(18,185,$no++.'.');
  $pdf->text(25,185,'Pekerjaan Orang tua');

  //Surat Tanda Lulus (STL8 SMP/MTs
  $pdf->text(25,190,'a.');
  $pdf->text(29,190,'Ayah');
  $pdf->text(80,190,':');
  $pdf->text(85,190, $row['orangtua_nama_ayah_siswa']);
  //Surat Tanda Lulus (STL) SMP/MTs
  $pdf->text(25,195,'b.');
  $pdf->text(29,195,'Ibu');
  $pdf->text(80,195,':');
  $pdf->text(85,195, $row['orangtua_nama_ibu_siswa']);

  $pdf->text(18,200,$no++.'.');
  $pdf->text(25,200,'Nama Wali');
  $pdf->text(80,200,':');
  $pdf->text(85,200, $row['nama_wali']);

  $pdf->text(18,205,$no++.'.');
  $pdf->text(25,205,'Alamat Wali');
  $pdf->text(80,205,':');
  $pdf->SetY(201.7);
  $pdf->SetX(84);
  $pdf->Multicell(100,5, $row['alamat_wali']);

  $pdf->text(25,220,'Telepon');
  $pdf->text(80,220,':');
  $pdf->text(85,220, $row['no_handphone_wali']);

  $pdf->text(18,225,$no++.'.');
  $pdf->text(25,225,'Pekerjaan Wali');
  $pdf->text(80,225,':');
  $pdf->text(85,225, $row['pekerjaan_wali']);


  $foto = "frontend/img/foto/siswa/".$nisn_siswa;
  if (file_exists($foto)) {
    if ($pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'JPEG')) {
      $pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'JPEG');
    }
    elseif ($pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'PNG')) {
      $pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'PNG');
    }
    elseif ($pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'JPG')) {
      $pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'JPG');
    }
    else {
      $response["response"] = "Format Foto Tidak Tersedia";
      $json = json_encode($response);
      $pdf->text(130,263, $json);
    }
    // $pdf->Image('frontend/img/foto/siswa/'.$row['nisn_siswa'],80,230,31,0,'JPEG');
  }
  else {
    echo $nisn_siswa;
    $pdf->Image('frontend/img/blank.jpg',80,233,33,0,'JPEG');
  }


  $query_kepalaSekolah = "SELECT * from data_sekolah";
  $query_kepalaSekolah = mysqli_query($connect, $query_kepalaSekolah);
  $row = mysqli_fetch_array($query_kepalaSekolah);

  $tanggal_jadi_kepala_sekolah_sekolah =new DateTime($row['tanggal_jadi_kepala_sekolah_sekolah']); //this returns the current date time
  $tanggal_jadi_kepala_sekolah_sekolah = date_format($tanggal_jadi_kepala_sekolah_sekolah, ' j F Y');
  $pdf->text(130,235, 'Yogyakarta, '.$tanggal_jadi_kepala_sekolah_sekolah);
  $pdf->text(130,240, 'Kepala MAN Yogyakarta II');

  $pdf->text(130,263, $row['nama_kepala_sekolah_sekolah']);
  $pdf->text(130,268, 'NIP. '.$row['nip_kepala_sekolah_sekolah']);
  // $pdf->SetLeftMargin(20);
  // $alamat_siswa = chunk_split($row['alamat_siswa'], 10, '</br>');
  // $pdf->text(85,112, $row['alamat_siswa']);
  // $pdf->Write(.85,212, $alamat_siswa);
  // echo strlen($tes);
  //
  // $pdf->text(18,112,$no++.'.');
  // $pdf->text(25,112,'Alamat siswa');
  // $pdf->text(80,112,':');

    // $pdf->text(85,112, $chunk);


  // $tes = "Ma'ruf";
  // $wahyu = addslashes("Ma'ruf");

//   $no=1;
//   $result = mysqli_query($connect,"select * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa.nis_siswa where nama_kelas_nilai_siswa_transaksi='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi='$id_mata_pelajaran_nilai_siswa_transaksi' order by nis_siswa desc limit 21");
//   $results = mysqli_query($connect,"select * from nilai_siswa_transaksi inner join data_siswa on nilai_siswa_transaksi.nis_siswa_nilai_siswa_transaksi = data_siswa.nis_siswa where nama_kelas_nilai_siswa_transaksi='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi='$id_mata_pelajaran_nilai_siswa_transaksi' order by nis_siswa desc limit 45 offset 21");
//
//       $Y_Table_Position = 64;
//       $pdf->SetY($Y_Table_Position);
//
//       while($tes = mysqli_fetch_array($result)){
//       $nama = $tes['nama_siswa'];
//       $tugas1 = $tes['tugas1_nilai_siswa_transaksi'];
//       $uts = $tes['uts_nilai_siswa_transaksi'];
//       $tugas2 = $tes['tugas2_nilai_siswa_transaksi'];
//       $uas = $tes['uas_nilai_siswa_transaksi'];
//       $pdf->SetFont('Arial','',10);
//       $pdf->Ln();
//         $pdf->SetX(25);
//     		$pdf->Cell(15,8,$no++,1,0,'C');
//         $pdf->SetX(40);
//     		$pdf->Cell(70,8,$nama,1,0,'C');
//         $pdf->SetX(110);
//     		$pdf->Cell(20,8,$tugas1,1,0,'C');
//         $pdf->SetX(130);
//     		$pdf->Cell(20,8,$uts,1,0,'C');
//         $pdf->SetX(150);
//     		$pdf->Cell(20,8,$tugas2,1,0,'C');
//         $pdf->SetX(170);
//     		$pdf->Cell(20,8,$uas,1,0,'C');
//   }while($tes = mysqli_fetch_array($result)){
//   $nama = $tes['nama_siswa'];
//   $tugas1 = $tes['tugas1_nilai_siswa_transaksi'];
//   $uts = $tes['uts_nilai_siswa_transaksi'];
//   $tugas2 = $tes['tugas2_nilai_siswa_transaksi'];
//   $uas = $tes['uas_nilai_siswa_transaksi'];
//   $pdf->SetFont('Arial','',10);
//   $pdf->Ln();
//     $pdf->SetX(25);
//     $pdf->Cell(15,8,$no++,1,0,'C');
//     $pdf->SetX(40);
//     $pdf->Cell(70,8,$nama,1,0,'C');
//     $pdf->SetX(110);
//     $pdf->Cell(20,8,$tugas1,1,0,'C');
//     $pdf->SetX(130);
//     $pdf->Cell(20,8,$uts,1,0,'C');
//     $pdf->SetX(150);
//     $pdf->Cell(20,8,$tugas2,1,0,'C');
//     $pdf->SetX(170);
//     $pdf->Cell(20,8,$uas,1,0,'C');
// }
// $pdf->text(165,280,'Halaman 1 / 2 ');
// if ($no > 21) {
// $pdf->AddPage();
// $pdf->text(165,280,'Halaman 2 / 2 ');
// }
// $pdf->SetFont('Arial','B',16);
// $pdf->Image('frontend/img/MAN2YK.png',39,13,25.25); //(X,Y,ukuran,kemiringan)
// $pdf->Cell(80);
// $pdf->text(96,21,'Daftar Nilai Siswa');
// $pdf->Ln();
// $pdf->Cell(80);
// $pdf->text(69,29,'Madrasah Aliyah Negeri Yogyakarta 2');
// $pdf->SetFont('Arial','',9);
// $pdf->text(78,36,'Jalan K.H.Ahmad Dahlan No.130, Ngampilan,Yogyakarta');
// $pdf->Line(0,43,250,43);
// $pdf->SetFont('Arial','',9);
// $pdf->text(25,52,'Nama Kelas : '.$kelas);
// $pdf->text(25,58.5,'Nama Mata Pelajaran : '.$mata_pelajaran);
// $pdf->SetFont('Arial','',10);
// $pdf->text(25,250.5,'Nama Guru Pengampu ');
// $pdf->text(25,280.5,''.$guru_pengampu);
// $pdf->SetY($Y_Table_Position);
//
// $Y_Fields_Name_position = 64;
//
// //First create each Field Name
// //Gray color filling each Field Name box
// $pdf->SetFillColor(110,180,230);
// //Bold Font for Field Name
// $pdf->SetFont('Arial','B',10);
// $pdf->SetY($Y_Fields_Name_position);
// $pdf->SetX(25);
// $pdf->Cell(15,8,'No.',1,0,'C');
// $pdf->SetX(40);
// $pdf->Cell(70,8,'Nama Lengkap',1,0,'C');
// $pdf->SetX(110);
// $pdf->Cell(20,8,'Tugas 1',1,0,'C');
// $pdf->SetX(130);
// $pdf->Cell(20,8,'UTS',1,0,'C');
// $pdf->SetX(150);
// $pdf->Cell(20,8,'Tugas 2',1,0,'C');
// $pdf->SetX(170);
// $pdf->Cell(20,8,'UAS',1,0,'C');
// $pdf->Ln();
//
// $Y_Table_Position = 64;
// $pdf->SetY($Y_Table_Position);
//
// while($tes = mysqli_fetch_array($results)){
// $nama = $tes['nama_siswa'];
// $tugas1 = $tes['tugas1_nilai_siswa_transaksi'];
// $uts = $tes['uts_nilai_siswa_transaksi'];
// $tugas2 = $tes['tugas2_nilai_siswa_transaksi'];
// $uas = $tes['uas_nilai_siswa_transaksi'];
// $pdf->SetFont('Arial','',10);
// $pdf->Ln();
//   $pdf->SetX(25);
//   $pdf->Cell(15,8,$no++,1,0,'C');
//   $pdf->SetX(40);
//   $pdf->Cell(70,8,$nama,1,0,'C');
//   $pdf->SetX(110);
//   $pdf->Cell(20,8,$tugas1,1,0,'C');
//   $pdf->SetX(130);
//   $pdf->Cell(20,8,$uts,1,0,'C');
//   $pdf->SetX(150);
//   $pdf->Cell(20,8,$tugas2,1,0,'C');
//   $pdf->SetX(170);
//   $pdf->Cell(20,8,$uas,1,0,'C');
// }

  $pdf->Output();
}
 else {
  header("location:login_guru_atau_bk.php");
} ?>
