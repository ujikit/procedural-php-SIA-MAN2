<?php
@session_start();
include_once "backend/koneksi.php";

if(isset($_SESSION['nip_administrator'])){

?>

<!DOCTYPE html>
<html>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <span class="fa fa-key" style="color:white;font-size:30px;"></span>
        <span class="fa fa-key" style="color:white;font-size:30px;"></span>
        <span class="fa fa-key" style="color:white;font-size:30px;"></span>
        <span class="fa fa-key" style="color:white;font-size:30px;"></span>
        <span class="fa fa-key" style="color:white;font-size:30px;"></span>
        <span class="fa fa-key" style="color:white;font-size:30px;"></span>
          <!-- <img src="frontend/img/foto/pegawai/1111" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <!-- <p><?php echo $_SESSION['nama_pegawai'] ?></p> -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Navigasi Utama</li>

        <li class=""><a href="halaman_administrator.php"><i class="glyphicon glyphicon-home"></i> <span>Home</span></a></li>
        <li class=""><a href="halaman_administrator_konfigurasi_tampilan_index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Konfigurasi Tampilan Web</span></a></li>
        <li class=""><a href="halaman_administrator_daftar_pegawai.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Pegawai</span></a></li>
        <li class=""><a href="halaman_administrator_daftar_siswa.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Siswa</span></a></li>
        <li class=""><a href="halaman_administrator_daftar_kelas_dan_wali_kelas.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Kelas & Wali Kelas</span></a></li>
        <!--<li class=""><a href="halaman_administrator_daftar_pengampu_mata_pelajaran.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel MaPel & Pengampu</span></a></li>-->
        <li class="header">Navigasi Tambahan</li>
        <li><a href="halaman_administrator_verifikasi_password_baru.php"><i class="fa fa-key"></i> <span>Verifikasi Password Baru</span></a></li>
        <li class="header">Navigasi Read Only</li>
        <!-- <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

</html>

<?php
}
else {
  header("location:index.php");
}
 ?>
