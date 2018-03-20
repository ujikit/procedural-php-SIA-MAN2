<?php
include_once "backend/koneksi.php";
$id_kelas_transaksi = $_GET['id_kelas_transaksi'];
$id_kelas_daftar = $_GET['id_kelas_daftar'];
$query = mysqli_query($connect, "SELECT * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);
 ?>
<html>
<head>
</head>
<body>
 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Data Kelas</h4>
    </div>

<form class="form-signin" action="backend/administrator_delete_kelas_dan_wali_kelas.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <input type="hidden" class="form-control" name="id_kelas_transaksi" value="<?php echo $tampil["id_kelas_transaksi"] ?>" readonly>
                <input type="hidden" class="form-control" name="id_kelas_daftar" value="<?php echo $id_kelas_daftar ?>" readonly>
                <?php
                $deleteAtasNama = "SELECT * from kelas_transaksi where id_kelas_transaksi='$id_kelas_transaksi'";
                $query = mysqli_query($connect, $deleteAtasNama);
                while($result=mysqli_fetch_array($query)){
                ?>
                <p>Apakah Anda Ingin Menghapus Data Kelas dengan Nama : &nbsp<b style="font-size:17px;"><?php echo $result["nama_kelas_transaksi"]  ?></b> ? </p>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="submit">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                </div>
</form>


<!--Upload foto administrator pegawai-->
<script>
function noPreview() {
  $('#image-preview-div').css("display", "none");
  $('#preview-img').attr('src', 'noimage');
  $('upload-button').attr('disabled', '');
}

function selectImage(e) {
  $('#file').css("color", "green");
  $('#image-preview-div').css("display", "block");
  $('#preview-img').attr('src', e.target.result);
  $('#preview-img').css('max-width', '550px');
}

$(document).ready(function (e) {

  var maxsize = 500 * 1024; // 500 KB

  $('#max-size').html((maxsize/1024).toFixed(2));

  $('#upload-image-form').on('submit', function(e) {

    e.preventDefault();

    $('#message').empty();
    $('#loading').show();

    $.ajax({
      url: "upload-image.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data)
      {
        $('#loading').hide();
        $('#message').html(data);
      }
    });

  });

  $('#file').change(function() {

    $('#message').empty();

    var file = this.files[0];
    var match = ["image/jpeg", "image/png", "image/jpg"];

    if ( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) ) )
    {
      noPreview();

      $('#message').html('<div class="alert alert-warning" role="alert">Unvalid image format. Allowed formats: JPG, JPEG, PNG.</div>');

      return false;
    }

    if ( file.size > maxsize )
    {
      noPreview();

      $('#message').html('<div class=\"alert alert-danger\" role=\"alert\">The size of image you are attempting to upload is ' + (file.size/1024).toFixed(2) + ' KB, maximum size allowed is ' + (maxsize/1024).toFixed(2) + ' KB</div>');

      return false;
    }

    $('#upload-button').removeAttr("disabled");

    var reader = new FileReader();
    reader.onload = selectImage;
    reader.readAsDataURL(this.files[0]);

  });

});
</script>

</body>
</html>
