<?php
if($_SESSION['nip_pegawai']){
include_once "backend/koneksi.php";

  $nip_pegawai = $_SESSION['nip_pegawai'];
  $query_pegawai = mysqli_query($connect, "SELECT * from data_pegawai where nip_pegawai='$nip_pegawai'");
  $row_pegawai = mysqli_fetch_array($query_pegawai);
  $nama_pegawai = $row_pegawai['nama_pegawai'];

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
      <a href="index2.html" class="logo" style="background-color:#008c4c">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Guru</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo $nama_pegawai ?></b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" style="background-color:#00a65a">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <?php
        // Untuk Hitung total pesan yang berhubungan dengan pegawai tersebut
        $query = mysqli_query($connect, "SELECT count(cek_pesan) AS jumlah_pesan FROM pesan where penerima_pesan='$nip_pegawai' && cek_pesan='N'");
        $row_hitungPesan = mysqli_fetch_array($query);

        $query_tampilNipPegawai = mysqli_query($connect, "SELECT * from pesan where penerima_pesan='$nip_pegawai'");
        $row_tampilNipPegawai = mysqli_fetch_array($query_tampilNipPegawai);
        $nis_siswa = $row_tampilNipPegawai['pengirim_pesan'];

        $query_tampilNamaSiswa = mysqli_query($connect, "SELECT * from data_siswa where nis_siswa='$nis_siswa'");
        $row_tampilNamaSiswa = mysqli_fetch_array($query_tampilNamaSiswa);
        $nama_siswa = $row_tampilNamaSiswa['nama_siswa'];
        ?>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success"><?php echo "{$row_hitungPesan['jumlah_pesan']}" ?></span>
              </a>
              <ul class="dropdown-menu">
                <li data-toggle="modal" class="header"><a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#pesanPegawaiKeSiswa" style="color:white;background:#27aa34"><i class="fa fa-plus"></i>Buat Pesan Untuk Siswa</a></li>
                <li class="header">You have <?php echo "{$row_hitungPesan['jumlah_pesan']}"; ?> messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->

                  <ul class="menu">
            <?php
            $tampil_pesan = "SELECT * FROM pesan inner join data_siswa on pesan.pengirim_pesan = data_siswa.nis_siswa where penerima_pesan='$nip_pegawai' && cek_pesan='N' order by waktu_pesan desc";
            $query = mysqli_query($connect, $tampil_pesan);
            while($result = mysqli_fetch_array($query)){
            ?>
                    <li style="background:#b0ff96"><!-- start message -->
                      <a href="javascript:detailPesanPegawaiKeSiswa('<?php echo $result['id_pesan'] ?>')">
                        <div class="pull-left">
                          <img  src="frontend/img/foto/siswa/<?php echo $result['nisn_siswa']; ?>" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          <?php echo $nama_siswa ?>
                          <small><i class="fa fa-clock-o"></i> <time class="timeago" datetime="<?php echo $result['waktu_pesan'] ?>"></time></small>
                        </h4>
                        <p><?php echo $result['judul_pesan']; ?></p>
                      </a>
                    </li>
            <?php
            }
            ?>
            <?php
            $tampil_pesan = "SELECT * FROM pesan inner join data_siswa on pesan.pengirim_pesan = data_siswa.nis_siswa where penerima_pesan='$nip_pegawai' && cek_pesan='Y' order by waktu_pesan desc";
            $query = mysqli_query($connect, $tampil_pesan);
            while($result = mysqli_fetch_array($query)){
            ?>
                    <li style="background:#fff"><!-- start message -->
                      <a href="javascript:detailPesanPegawaiKeSiswa('<?php echo $result['id_pesan'] ?>')">
                        <div class="pull-left">
                          <img  src="frontend/img/foto/siswa/<?php echo $result['nisn_siswa']; ?>" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          <?php echo $nama_siswa ?>
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
                <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
              </ul>
            </li>

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-th"></span>
                <span class="hidden-xs"><?php echo $nama_pegawai ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header" style="background:#00a65a">
                  <!-- <img src="frontend/img/foto/pegawai/<?php echo $row_pegawai['nip_pegawai'] ?>" class="img-circle" alt="User Image"> -->
                  <span class="fa fa-user-circle" style="font-size:60px;color:white"></span>

                  <p>
                    <?php echo $nama_pegawai ?>
                    <small>Sejak 2017</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat disabled"><span class="glyphicon glyphicon-cog"></span>&nbspPengaturan</a>
                    <!-- <button href="#" class="btn btn-default btn-flat"><a class="glyphicon glyphicon-cog" style="color:#333"></a>&nbspSetting</button> -->
                  </div>
                  <div class="pull-right">
                    <a href="backend/logout.php" class="btn btn-default btn-flat"><span class="fa fa-sign-out"></span>&nbspKeluar</a>
                    <!-- <button href="backend/logout.php?nama_guru=<?php echo $nama_guru ?>" class="btn btn-default btn-flat"><a class="fa fa-sign-out" style="color:#333"></a>&nbspSign Out</button> -->
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div id="pesanPegawaiKeSiswa" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Pesan Ke Siswa</h4>
              </div>

          <form class="form-signin" action="backend/guru_balas_pesan_siswa.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-12">
                              <input type="hidden" name="waktu_pesan" value="<?php echo date("Y-m-d H:i:s") ?>">
                              <input type="hidden" name="pengirim_pesan" value="<?php echo $row_pegawai['nip_pegawai'] ?>">
                              <label for="sel1">Kirim Ke : </label>

                                         <input placeholder='Tuliskan / Cari Nama Siswa'
                                         class='flexdatalist form-control'
                                         data-relatives='#relative'
                                         data-url='backend/guru_pesan_siswa_kirimke_json.php'
                                         data-search-in='["nama_siswa","nis_siswa"]'
                                         data-visible-properties='["nama_siswa", "nis_siswa"]'
                                         data-group-by='nis_siswa'
                                         data-selection-required='true'
                                         data-focus-first-result='true'
                                         data-min-length='1'
                                         data-value-property='iso2'
                                         data-text-property='{nama_siswa}'
                                         data-search-contain='false'
                                         id='chained_relative'
                                         name='penerima_pesan'
                                         type='text'>

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
                              <button class="btn btn-success" type="submit" name="submit">Kirim Pesan</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                    </div>
          </form>
            </div>
        </div>
    </div>

    <div id="tampilPesanSiswa" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <div id="balasPesanSiswa" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div id="balas"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){

      $('.flexdatalist').flexdatalist({
           searchContain: false,
           textProperty: '{nama_siswa}, {nis_siswa}',
           valueProperty: 'iso2',
           minLength: 1,
           focusFirstResult: true,
           selectionRequired: true,
           groupBy: 'nis_siswa',
           visibleProperties: ["nama_siswa","nis_siswa"],
           searchIn: ["nama_siswa","nis_siswa"],
           url: 'backend/guru_pesan_siswa_kirimke_json.php',
           relatives: '#relative'
      });

    })
    </script>

  </body>


</html>

<?php
}
else {
  header("location:login_guru_atau_bk.php");
}
?>
