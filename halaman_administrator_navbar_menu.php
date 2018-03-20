<?php
include_once "backend/koneksi.php";
$nip_administrator = $_SESSION['nip_administrator'];
if($_SESSION['nip_administrator']){
?>


<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo" style="background:#151b1e">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Adm</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b><?php echo $_SESSION['nama_pegawai'] ?></b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="background:#222d32">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-th"></span>
            <!-- <img src="frontend/img/foto/pegawai/1111" class="user-image" alt="User Image"> -->
            <span class="hidden-xs"><?php echo $_SESSION['nama_pegawai'] ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="background:#222d32">
              <span class="fa fa-key" style="color:white;font-size:30px;"></span>
              <!-- <img src="frontend/img/foto/pegawai/1111" class="img-circle" alt="User Image"> -->

              <p>
                <?php echo $nip_administrator ?>
                <small>Sejak 2017</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <button href="#" class="btn btn-default btn-flat"><a class="glyphicon glyphicon-cog" style="color:#333"></a>&nbspSetting</button>
              </div>
              <div class="pull-right">
                <a href="backend/logout.php?nip_administrator=<?php echo $nip_administrator ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

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

<?php
}
else {
  echo "navbar perlu session";
}
?>
