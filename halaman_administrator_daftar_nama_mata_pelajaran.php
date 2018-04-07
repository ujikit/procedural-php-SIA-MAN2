<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";
if($_SESSION['nip_administrator']){
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Administrator Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "halaman_administrator_bundle_css.php" ?>

  <style media="screen">
    .input-add{
        margin-top: 10px;
    }
    .input-remove{
        margin-top: 10px;
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <?php include_once "halaman_administrator_navbar_menu.php" ?>
  <?php include_once "halaman_administrator_sidebar_menu.php" ?>
  <?php include_once "halaman_administrator_bundle_js.php" ?>

  <div class="content-wrapper" style="background:white;">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Nama Mata Pelajaran</li>
      </ol>
    </section>
  <div class="row">
    <div class="container">
      <div class="col-lg-12" style="margin-top:50px;">
        <span class="label label-primary" style="font-size:21px;float:left">Halaman Daftar Nama Mata Pelajaran </span>
      </div>
      <div class="col-lg-12" style="margin-top:15px;">
        <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDataPegawai"><i class="fa fa-plus"></i> Tambah Mata Pelajaran</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-lg-12" style="margin-top:20px;">
        <div class="table-responsive">
          <table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Kelas</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Wali Kelas</th>
                <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jumlah Siswa</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                $tampilData = "SELECT * from mata_pelajaran where nama_mata_pelajaran !='Null' order by kelompok_kelas asc";
                $tampil = mysqli_query($connect, $tampilData);
                while($row=mysqli_fetch_array($tampil)){
              ?>
              <tr>
                <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:left;position:relative;float:center"><?php echo $row["nama_mata_pelajaran"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:left;position:relative;float:center"><?php echo $row["kelompok_kelas"] ?></td>
                <td style="border-radius:0px;margin:0 auto;text-align:left;position:relative;float:center"><?php echo $row["kelompok_kelas"] ?></td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="tambahDataPegawai" class="modal fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Pegawai</h4>
      </div>
      <form class="form-signin" action="backend/administrator_tambah_pegawai.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <p>Nama Kelas : </p>
              <select class="form-control" name="">
                <option value="">10 IPA 1</option>
              </select>
              <p style="margin-top:10px;">Nama Mata Pelajaran : </p>
            </div>
          </div>
          <div class="row input_fields_wrap">
            <div id="add-input-js">
              <div class="col-lg-10" id="InputsWrapper">
            		<div><input type="text" name="mytext[]" id="field_1" value="" class="form-control pull-left removeclass"></div>
            	</div>
            	<div class="col-lg-2" id="AddMoreFileId">
            		<a href="#" id="AddMoreFileBox" class="btn btn-info pull-right"><span class="glyphicon glyphicon-plus"></span></a><br><br>
            	</div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="submit" name="submit">Tambah Data Pegawai</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once "halaman_administrator_footer.php" ?>

<div class="control-sidebar-bg"></div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    // $('.add-input-mapel').click(function(){
    //   $('#add-input-js').after('<div class="col-lg-10" style="margin-top:10px;"><div><input type="text" class="form-control pull-left" name="mytext[]"></div></div><div class="col-lg-2"><a class="btn btn-danger pull-right remove-input-mapel" style="margin-top:10px;"><span class="glyphicon glyphicon-remove"></span></a></div>');
    // });
    //
    // $('.remove-input-mapel').click(function(){
    //   $('#add-input-js').remove('<div class="col-lg-10" style="margin-top:10px;"><div><input type="text" class="form-control pull-left" name="mytext[]"></div></div><div class="col-lg-2"><a class="btn btn-danger pull-right remove-input-mapel" style="margin-top:10px;"><span class="glyphicon glyphicon-remove"></span></a></div>');
    // });

    var MaxInputs       = 4; //maximum extra input boxes allowed
    var InputsWrapper   = $("#InputsWrapper"); //Input boxes wrapper ID
    var AddButton       = $("#AddMoreFileBox"); //Add button ID
    var x = InputsWrapper.length; //initlal text box count
    var FieldCount=1; //to keep track of text box added

    //on add input button click
    $(AddButton).click(function (e) {
      //max input box allowed
      if(x <= MaxInputs) {
        FieldCount++; //text box added ncrement
        //add input box
        $('#add-input-js').append('<div class="col-lg-12" style="margin-top:5px;"><input class="form-control" type="text" name="mytext[]" id="field_'+ FieldCount +'"/> <a href="#" class="label label-danger removeclass pull-right" style="margin-top:5px;">Hapus Kolom</a></div>');
        x++; //text box increment
        $("#AddMoreFileId").show();
        // Delete the "add"-link if there is 3 fields.
        if(x == 5) {
          // $("#AddMoreFileId").hide();
          alert('Jumlah Inputan Mata Pelajaran Terbatas!');
          $("#AddMoreFileId").html('<a href="#" id="AddMoreFileBox" class="btn btn-info pull-right disabled"><span class="glyphicon glyphicon-plus"></span></a><br><br>');
         	$("#lineBreak").html("<br>");
        }
      }
      return false;
    });

    $("body").on("click",".removeclass", function(e){ //user click on remove text
      if( x > 1 ) {
        $(this).parent('div').remove(); //remove text box
        x--; //decrement textbox
      	$("#AddMoreFileId").show();
      	$("#lineBreak").html("");
        // Adds the "add" link again when a field is removed.
        $('AddMoreFileBox').html("Add field");
      }
    	return false;
    })

  });
</script>

</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
