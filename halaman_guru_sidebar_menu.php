<?php
if($_SESSION['nip_pegawai']){
include_once "backend/koneksi.php";

  $nip_pegawai = $_SESSION['nip_pegawai'];
  $query_pegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
  $row_pegawai = mysqli_fetch_array($query_pegawai);

?>

<!DOCTYPE html>
<html>

<head>
  <style media="screen">
  a.disabled {
/* Make the disabled links grayish*/
color: gray;
/* And disable the pointer events */
pointer-events: none;
}
  </style>
</head>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!-- <div class="pull-left image" style=""> -->
        <!-- Centering Image -->
          <img style="width:105px;display: block; margin-left: auto; margin-right: auto" src="frontend/img/foto/pegawai/<?php echo $row_pegawai['nip_pegawai'] ?>" alt="User Image">
        <!-- </div> -->
        <!-- <div class="pull-left info">
          <p><?php echo $_SESSION['nama_guru'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
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
        <li class="header">MAIN NAVIGATION</li>
        <!-- <li class=""><a href="halaman_guru.php"><i class="glyphicon glyphicon-home"></i> <span>Home</span></a></li> -->
        <li class=""><a href="halaman_guru_input_kd_mapel.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Input KD</span></a></li>
        <li class=""><a href="halaman_guru_daftar_mengampu_kelas.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Input Nilai Siswa</span></a></li>
        <li class=""><a href="halaman_guru_daftar_wali_kelas.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Wali Kelas</span></a></li>
        <li class="header">OPTIONAL NAVIGATION</li>
        <!-- <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

</html>

<?php
}
else {
  header("location:login_guru_atau_bk.php");
}
 ?>
