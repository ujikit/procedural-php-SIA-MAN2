<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "backend/koneksi.php";
$nama_siswa = $_SESSION['nama_siswa'];

$query = mysqli_query($connect, "SELECT * from data_siswa where nama_siswa='$nama_siswa'");
$row = mysqli_fetch_array($query);
$nis_siswa = $row['nis_siswa'];

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
        // Untuk Hitung total pesan yang berhubungan dengan siswa tersebut
        $query = mysqli_query($connect, "SELECT count(cek_pesan) AS jumlah_pesan FROM pesan where penerima_pesan='$nis_siswa' and cek_pesan='N'");
        $row = mysqli_fetch_array($query);

        $query_tampilNipPegawai = mysqli_query($connect, "SELECT * from pesan where penerima_pesan='$nis_siswa'");
        $row_tampilNipPegawai = mysqli_fetch_array($query_tampilNipPegawai);
        $nip_pegawai = $row_tampilNipPegawai['pengirim_pesan'];

        $query_tampilNamaPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
        $row_tampilNamaPegawai = mysqli_fetch_array($query_tampilNamaPegawai);
        $nama_pegawai = $row_tampilNamaPegawai['nama_pegawai'];
        ?>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success"><?php echo "{$row['jumlah_pesan']}" ?></span>
              </a>

              <ul class="dropdown-menu">
                <li data-toggle="modal" class="header"><a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#pesanSiswaKePegawai" style="color:white"><i class="fa fa-plus"></i>Buat Pesan Untuk Guru</a></li>
                <li class="header">Kamu punya <?php echo "{$row['jumlah_pesan']}" ?> pesan</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
            <?php
            $tampil_pesan = "SELECT * FROM pesan inner join data_pegawai on pesan.pengirim_pesan = data_pegawai.nip_pegawai where penerima_pesan='$nis_siswa' && cek_pesan='N' order by waktu_pesan desc";
            $query = mysqli_query($connect, $tampil_pesan);
            while($result = mysqli_fetch_array($query)){
              $pengirim_pesan = $result['pengirim_pesan'];
              $query_tampilNamaPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$pengirim_pesan'");
              $row_tampilNamaPegawai = mysqli_fetch_array($query_tampilNamaPegawai);
              $nama_pegawai = $row_tampilNamaPegawai['nama_pegawai'];
            ?>
                    <li style="background:#b0ff96"><!-- start message -->
                      <a href="javascript:detailPesanSiswaKePegawai('<?php echo $result['id_pesan'] ?>')">
                        <div class="pull-left">
                          <img  src="frontend/img/foto/pegawai/<?php echo $result['nip_pegawai']; ?>" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          <?php echo $nama_pegawai ?>
                          <small><i class="fa fa-clock-o"></i> <time class="timeago" datetime="<?php echo $result['waktu_pesan'] ?>"></time></small>
                        </h4>
                        <p><?php echo $result['judul_pesan']; ?></p>
                      </a>
                    </li>
            <?php
            }
            ?>
            <?php
            $tampil_pesan = "SELECT * FROM pesan inner join data_pegawai on pesan.pengirim_pesan = data_pegawai.nip_pegawai where penerima_pesan='$nis_siswa' && cek_pesan='Y' order by waktu_pesan desc";
            $query = mysqli_query($connect, $tampil_pesan);
            while($result = mysqli_fetch_array($query)){
              $pengirim_pesan = $result['pengirim_pesan'];
              $query_tampilNamaPegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$pengirim_pesan'");
              $row_tampilNamaPegawai = mysqli_fetch_array($query_tampilNamaPegawai);
              $nama_pegawai = $row_tampilNamaPegawai['nama_pegawai'];
            ?>
                    <li style="background:#fff"><!-- start message -->
                      <a href="javascript:detailPesanSiswaKePegawai('<?php echo $result['id_pesan'] ?>')">
                        <div class="pull-left">
                          <img  src="frontend/img/foto/pegawai/<?php echo $result['nip_pegawai']; ?>" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          <?php echo $nama_pegawai ?>
                          <small><i class="fa fa-clock-o"></i> <time class="timeago" datetime="<?php echo $result['waktu_pesan'] ?>"></time></small>
                        </h4>
                        <p><?php echo $result['judul_pesan']; ?></p>
                      </a>
                    </li>
            <?php
            }
            ?>
                    <!-- end message 2017 July 05 11:20:00-->
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>

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
                              <input type="hidden" name="pengirim_pesan" value="<?php echo $nis_siswa ?>">
                              <label for="sel1">Kirim Ke : </label>
                              <select class="form-control" name="penerima_pesan" required>
                              <option value="">Pilih Guru </option>
                              <?php
                                $tampilDataMataPelajaran = "SELECT * from data_pegawai where jabatan_pegawai='Guru' order by nama_pegawai asc";
                                $tampil = mysqli_query($connect, $tampilDataMataPelajaran);
                                while($row=mysqli_fetch_array($tampil)){
                              ?>
                              <option value="<?php echo $row["nip_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
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
