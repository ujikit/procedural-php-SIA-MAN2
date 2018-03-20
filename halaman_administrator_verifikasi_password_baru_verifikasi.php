<?php
date_default_timezone_set("Asia/Jakarta"); //Your timezone
include_once "backend/koneksi.php";
$id_verifikasi_password_baru = $_GET['id_verifikasi_password_baru'];
$query = mysqli_query($connect, "SELECT * from verifikasi_password where id_verifikasi_password_baru='$id_verifikasi_password_baru'");
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>
<html>
<head>
</head>
<body>


  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Verifikasi Password Baru</h4>
  </div>
    <form class="form-signin" action="backend/administrator_edit_verifikasi_password_baru.php" method="post">
        <div class="modal-body">
            <div class="row">
              <input type="hidden" name="username_verifikasi_password_baru" value="<?php echo $row['username_verifikasi_password_baru']; ?>">
              <input type="hidden" name="tanggal_verifikasi_verifikasi_password_baru" value="<?php echo date("Y-m-d") ?>">
              <input type="hidden" name="jam_verifikasi_verifikasi_password_baru" value="<?php echo date("H:i:s") ?>">
              <div class="col-lg-12">
                <p>
                  Apakah anda ingin verifikasi password atas nama username : <?php echo $row['username_verifikasi_password_baru']; ?> ?
                </p>
              </div>

            </div>
        </div>

        <div class="modal-footer">
        <button class="btn btn-success" type="submit" name="submit">Validkan!</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            <p style="margin-top:10px;">
              <?php echo date("H:i:s") ?>
            </p>
        </div>
    </form>


</body>
</html>
