<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "backend/koneksi.php";
$nama_siswa = $_SESSION['nama_siswa'];

if($_SESSION['nis_siswa']){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Adm</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo $_SESSION['nama_siswa'] ?></b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <?php
        $jumlah_pesan = "SELECT count(cek_pesan) AS jumlah_pesan FROM pesan where penerima_pesan='$nama_siswa' and cek_pesan='N'";
        $query = mysqli_query($connect, $jumlah_pesan);
        $result = mysqli_fetch_array($query);
        ?>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="frontend/img/foto/siswa/<?php echo $_SESSION['nis_siswa'] ?>" class="user-image" alt="User Image"> -->
                <span class="glyphicon glyphicon-th"></span>
                <span class="hidden-xs"><?php echo $_SESSION['nama_siswa'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="frontend/img/foto/siswa/<?php echo $_SESSION['nis_siswa'] ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['nama_siswa'] ?>
                    <small>Sejak 2017</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <button href="#" class="btn btn-default btn-flat"><a class="glyphicon glyphicon-cog" style="color:#333"></a>&nbspSetting</button>
                  </div>
                  <div class="pull-right">
                    <a href="backend/logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <li>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <div id="pesanSiswaKePegawai" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Pesan Ke Guru</h4>
              </div>

          <form class="form-signin" action="backend/siswa_kirim_pesan_pegawai.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-12">
                              <input type="hidden" name="waktu_pesan" value="<?php echo date("Y-m-d H:i:s") ?>">
                              <input type="hidden" name="pengirim_pesan" value="<?php echo $nama_siswa ?>">
                              <label for="sel1">Kirim Ke : </label>
                              <select class="form-control" name="penerima_pesan" required>
                              <option value="">Pilih Guru </option>
                              <?php
                                $tampilDataMataPelajaran = "SELECT * from data_pegawai where jabatan_pegawai='Guru' order by nama_pegawai asc";
                                $tampil = mysqli_query($connect, $tampilDataMataPelajaran);
                                while($row=mysqli_fetch_array($tampil)){
                              ?>
                              <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                              <?php  } ?>
                              </select>
                            </div>
                            <div class="col-lg-12"><br>
                              <label for="sel1">Judul Pesan : </label>
                              <input type="text" class="form-control" name="judul_pesan" autocomplete="off" required>
                            </div>
                            <div class="col-lg-12"><br>
                              <label for="sel1">Isi Pesan : </label><br>
                              <textarea class="form-control" name="isi_pesan" rows="8" cols="30" autocomplete="off" required></textarea>
                            </div>
                          </div>
                          </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                              <button class="btn btn-success" type="submit" name="submit">Kirim Pesan</button>
                    </div>
          </form>
            </div>
        </div>
    </div>

    <div id="tampilTugasSiswa" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="tampilTugas"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

   <div id="tampilPesanPegawai" class="modal fade">
       <div class="modal-dialog modal-md">
           <div class="modal-content">
             <div id="tampil"></div>
             <?php
               // include_once "halaman_administrator_edit_pegawai.php"
             ?>
           </div>
       </div>
   </div>

   <div id="balasPesanPegawai" class="modal fade">
       <div class="modal-dialog modal-md">
           <div class="modal-content">
             <div id="balas"></div>
             <?php
               // include_once "halaman_administrator_edit_pegawai.php"
             ?>
           </div>
       </div>
   </div>

  </body>
</html>



<?php
}
else {
  echo "navbar perlu session";
}
?>
