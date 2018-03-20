
<script src="frontend/adminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Validasi Input Nilai (Tidak boleh huruf dan angka maksimal 3) -->
<script src="frontend/custom/inputmask.js"></script>
<script src="frontend/custom/jquery.inputmask.js"></script>
<script src="frontend/custom/inputmask.extensions.js"></script>
<script src="frontend/custom/inputmask.numeric.extensions.js"></script>
<!-- batas -->
<script src="frontend/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="frontend/adminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="frontend/bootstrap/js/bootstrap.min.js"></script>
<script src="adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="adminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="frontend/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="frontend/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="frontend/adminLTE/plugins/fastclick/fastclick.js"></script>
<script src="frontend/adminLTE/dist/js/app.min.js"></script>
<script src="frontend/datatables/jquery.dataTables.min.js"></script>
<script src="frontend/datatables/dataTables.bootstrap.min.js"></script>
<script src="frontend/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="frontend/timeago_jquery/jquery.timeago.js"></script>
<script src="frontend/sweetalert2/sweetalert2.min.js"></script>
<script src="frontend/jquery-flexdatalist-autocomplete-2.1.3/jquery.flexdatalist.min.js"></script><!--Untuk autocomplete textbox pada pesan guru ke siswa-->

</script>

<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#tampilDataTables').DataTable(); //<!--frontend/Datatables-->
			$('time.timeago').timeago(); //<!--frontend/timeago : untuk mengetahui waktu minutes / hours ago-->
		} );
</script>

<!--frontend/datepicker-->
<script type="text/javascript">
$('.datepicker').datepicker({
	format: 'mm/dd/yyyy',
	startDate: '-3d'
});
</script>

<!--ADMINISTRATOR-->

<!--Event tombol daftar pegawai (Tambah,edit,delete,tampil)-->
<script type="text/javascript" charset="utf-8">
		//Pegawai
		function detailPegawai(x){
			var id_pegawai=x;
			$("#tampilDataPegawai").modal("show");
			$("#tampil").load("halaman_administrator_detail_pegawai.php?id_pegawai="+id_pegawai);
		}
		function editPegawai(x){
			var id_pegawai=x;
			$("#editDataPegawai").modal("show");
			$("#edit").load("halaman_administrator_edit_pegawai.php?id_pegawai="+id_pegawai);
		}
		function deletePegawai(x,y){
			var id_pegawai=x;
			var nip_pegawai=y;
			$("#deleteDataPegawai").modal("show");
			$("#delete").load("halaman_administrator_delete_pegawai.php?id_pegawai="+id_pegawai+"&nip_pegawai="+nip_pegawai);
		}

		// Dapatkan data mata pelajaran select option sesuai jabatan (Panel pegawai -> tambah pegawai)
		function getJabatanToMataPelajaran(x) {
			$.ajax({
			type: "POST",
			url: "backend/get_administratorJabatanToMataPelajaran.php",
			data:'nama_jabatan='+x,
			success: function(data){
				$("#jabatanByMataPelajaran").html(data);
			}
			});
		}
// Event tombol main pegawai halaman_administrator.php (edit,delete,tampil)
		//panel kelas dan wali kelas

    //Event tombol pengampu mata pelajaran halaman_administrator_pengampu_mata_pelajaran.php (tampil,edit,delete) didalam halaman daftar_kelas.php
		function kembaliKePanelKelas(x){
		  var kembaliKePanelKelass=x;
			$("#bodyDaftarKelas").load("halaman_administrator_daftar_kelas_dan_wali_kelas.php?kembaliKePanelKelass="+kembaliKePanelKelass);
		}

		function detailKelas(x){
			var id_kelas_transaksi=x;
			$("#detailKelas").modal("show");
			$("#tampil").load("halaman_administrator_detail_kelas_dan_wali_kelas.php?id_kelas_transaksi="+id_kelas_transaksi);
		}
		function editKelas(x){
			var id_kelas_transaksi=x;
			$("#editKelas").modal("show");
			$("#edit").load("halaman_administrator_edit_kelas_dan_wali_kelas.php?id_kelas_transaksi="+id_kelas_transaksi);
		}
		function deleteKelas(x,y){
			var id_kelas_transaksi=x;
			var id_kelas_daftar=y;
			$("#deleteKelas").modal("show");
			$("#delete").load("halaman_administrator_delete_kelas_dan_wali_kelas.php?id_kelas_transaksi="+id_kelas_transaksi+"&id_kelas_daftar="+id_kelas_daftar);
		}

		function detailSemuaPengampuMataPelajaran(x){
			var id_kelas_daftar=x;
			$("#tampilPengampuMataPelajaran").load("halaman_administrator_daftar_guru_pengampu_mata_pelajaran_perkelas.php?id_kelas_daftar="+id_kelas_daftar);
		}
		//setelah masuk fungsi detailSemuaPengampuMataPelajaran
    function detailPengampuMataPelajaran(x){
      var id_mata_pelajaran_transaksi=x;
      $("#detailPengampuMataPelajaran").modal("show");
      $("#tampil").load("halaman_administrator_detail_pengampu_mata_pelajaran.php?id_mata_pelajaran_transaksi="+id_mata_pelajaran_transaksi);
    }
    function editPengampuMataPelajaran(x){
      var id_mata_pelajaran_transaksi=x;
      $("#editPengampuMataPelajaran").modal("show");
      $("#edit").load("halaman_administrator_edit_pengampu_mata_pelajaran.php?id_mata_pelajaran_transaksi="+id_mata_pelajaran_transaksi);
    }
    function deletePengampuMataPelajaran(x,y,z,xx){
      var id_mata_pelajaran_transaksi=x;
	    var id_kelas_daftar=y;
	    var id_mata_pelajaran_mata_pelajaran_transaksi=z;
	    var nip_pegawai=xx;
      $("#deletePengampuMataPelajaran").modal("show");
      $("#delete").load("halaman_administrator_delete_pengampu_mata_pelajaran.php?id_mata_pelajaran_transaksi="+id_mata_pelajaran_transaksi+"&id_kelas_daftar="+id_kelas_daftar+"&id_mata_pelajaran_mata_pelajaran_transaksi="+id_mata_pelajaran_mata_pelajaran_transaksi+"&nip_pegawai="+nip_pegawai);
    }
		function segarkanPengampuMataPelajaran(x){
      var id_mata_pelajaran_transaksi=x;
      $("#segarkanPengampuMataPelajaran").modal("show");
      $("#segarkan").load("halaman_administrator_segarkan_pengampu_mata_pelajaran.php?id_mata_pelajaran_transaksi="+id_mata_pelajaran_transaksi);
    }
		//end detailSemuaPengampuMataPelajaran

		function detailSemuaSiswaPerKelas(x,y){
      var id_kelas_daftar=x;
      var kelompok_kelas_kelas_transaksi=y;
      $("#tampilSiswaPerKelas").load("halaman_administrator_daftar_siswa_perkelas.php?id_kelas_daftar="+id_kelas_daftar+"&kelompok_kelas_kelas_transaksi="+kelompok_kelas_kelas_transaksi);
    }
		function detailSemuaSiswaPerKelas_NilaiPerSiswa(x){
			var nis_siswa=x;
			$("#tampilSiswaPerKelas").load("halaman_administrator_daftar_siswa_perkelas_nilai.php?nis_siswa="+nis_siswa);
		}

		// Dapatkan data Pelajaran select option sesuai guru (Panel kelas dan wali kelas -> Lihat guru pengampu -> tambah pengampu mata pelajaran)
		function getMataPelajaranToGuru(x) {
			$.ajax({
			type: "POST",
			url: "backend/get_administratorMataPelajaranToGuru.php",
			data:'nama_mata_pelajaran_transaksi='+x,
			success: function(data){
				$("#mataGuruByPelajaran").html(data);
			}
			});
		}
		// Dapatkan data Pelajaran select option sesuai ID mata pelajaran (Panel kelas dan wali kelas -> Lihat guru pengampu -> tambah pengampu mata pelajaran)
		function getMataPelajaranToIDMataPelajaran(x) {
			$.ajax({
			type: "POST",
			url: "backend/get_administratorMataPelajaranToIDMataPelajaran.php",
			data:'nama_mata_pelajaran_transaksi='+x,
			success: function(data){
				$("#mataGuruByIDMataPelajaran").html(data);
			}
			});
		}

		//AJAX kelas dan wali kelas
</script>

<!--Event tombol daftar siswa (Tambah,edit,delete,tampil)-->
<script type="text/javascript" charset="utf-8">
		//setelah masuk fungsi detailSemuaPengampuMataPelajaran
		//Pegawai
		function detailSiswa(x){
			var nis_siswa=x;
			$("#tampilDataSiswa").modal("show");
			$("#tampil").load("halaman_administrator_detail_siswa.php?nis_siswa="+nis_siswa);
		}
		function editSiswa(x){
			var nis_siswa=x;
			$("#editDataSiswa").modal("show");
			$("#edit").load("halaman_administrator_edit_siswa.php?nis_siswa="+nis_siswa);
		}
		function deleteSiswa(x){
			var nis_siswa=x;
			$("#deleteDataSiswa").modal("show");
			$("#delete").load("halaman_administrator_delete_siswa.php?nis_siswa="+nis_siswa);
		}
</script>

	<script type="text/javascript">
		//verifikasi_password
		function verifikasiPasswordBaru(x){
			var id_verifikasi_password_baru=x;
			$("#verifikasiPasswordBaru").modal("show");
			$("#verifikasi").load("halaman_administrator_verifikasi_password_baru_verifikasi.php?id_verifikasi_password_baru="+id_verifikasi_password_baru);
		}
	</script>

<!--END ADMINISTRATOR-->

<!--GURU-->

<script type="text/javascript">

function detailKDPerKelas(x,y,z){
	var id_kelas_daftar=x;
	var id_mata_pelajaran_mata_pelajaran_transaksi=y;
	var nip_pegawai_mata_pelajaran_transaksi=z;
	$("#tampilPengampuMataPelajaran").load("halaman_guru_input_kd_mapel_load.php?id_kelas_daftar="+id_kelas_daftar+"&id_mata_pelajaran_mata_pelajaran_transaksi="+id_mata_pelajaran_mata_pelajaran_transaksi+"&nip_pegawai_mata_pelajaran_transaksi="+nip_pegawai_mata_pelajaran_transaksi);
}
function detailSemuaNilaiSiswa(x,y,z){
	var id_kelas_daftar=x;
	var id_mata_pelajaran_mata_pelajaran_transaksi=y;
	var nip_pegawai_mata_pelajaran_transaksi=z;
	$("#tampilPengampuMataPelajaran").load("halaman_guru_daftar_nilai_siswa.php?id_kelas_daftar="+id_kelas_daftar+"&id_mata_pelajaran_mata_pelajaran_transaksi="+id_mata_pelajaran_mata_pelajaran_transaksi+"&nip_pegawai_mata_pelajaran_transaksi="+nip_pegawai_mata_pelajaran_transaksi);
}
function detailSemuaNilaiSiswaWaliKelas(x,y,z){
	var id_kelas_daftar=x;
	var id_mata_pelajaran_mata_pelajaran_transaksi=y;
	var nip_pegawai_mata_pelajaran_transaksi=z;
	$("#tampilPengampuMataPelajaran").load("halaman_guru_daftar_wali_kelas_nilai.php?id_kelas_daftar="+id_kelas_daftar+"&id_mata_pelajaran_mata_pelajaran_transaksi="+id_mata_pelajaran_mata_pelajaran_transaksi+"&nip_pegawai_mata_pelajaran_transaksi="+nip_pegawai_mata_pelajaran_transaksi);
}
function detailNilai(x){
	var id_nilai_siswa_transaksi=x;
	$("#detailNilaiSiswa").modal("show");
	$("#tampil").load("halaman_guru_daftar_nilai_siswa_tampil.php?id_nilai_siswa_transaksi="+id_nilai_siswa_transaksi);
}
function editNilai(x){
	var id_nilai_siswa_transaksi=x;
	$("#editNilaiSiswa").modal("show");
	$("#edit").load("halaman_guru_daftar_nilai_siswa_edit.php?id_nilai_siswa_transaksi="+id_nilai_siswa_transaksi);
}

function detailPesanPegawaiKeSiswa(x){
	var id_pesan=x;
	$("#tampilPesanSiswa").modal("show");
	$("#tampil").load("halaman_guru_detail_pesan_siswa.php?id_pesan="+id_pesan);
}

// Panel Wali Kelas
function EditBiodataSiswa(x){
	var nis_siswa=x;
	$("#EditBiodataSiswa").modal("show");
	$("#edit").load("halaman_guru_edit_siswa.php?nis_siswa="+nis_siswa);
}

//pegawai balas pesan siswa
function kirimPesanPegawaiKeSiswa(x){
	var id_pesan=x;
	$("#tampilPesanSiswa").modal('hide');
	$("#balasPesanSiswa").modal("show");
	$("#balas").load("halaman_guru_kirim_pesan_siswa.php?id_pesan="+id_pesan);
}

</script>

<!--END GURU-->

<!--SISWA-->

<script type="text/javascript">

function detailPesanSiswaKePegawai(x){
	var id_pesan=x;
	$("#tampilPesanPegawai").modal("show");
	$("#tampil").load("halaman_siswa_detail_pesan_pegawai.php?id_pesan="+id_pesan);
}
function kirimPesanSiswaKePegawai(x){
	var id_pesan=x;
	$("#tampilPesanPegawai").modal('hide');
	$("#balasPesanPegawai").modal("show");
	$("#balas").load("halaman_siswa_kirim_pesan_pegawai.php?id_pesan="+id_pesan);
}

function detailNilaiTugasPerSiswaSMT1(x,y,z){ // kerangka html ada di navbar menu siswa
	var nis_siswa=x;
	var id_kelas_daftar=y;
	var id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan=z;
	$("#tampilTugasSiswa").modal("show");
	$("#tampilTugas").load("halaman_siswa_cek_nilai_tugas_per_siswa_smt1.php?nis_siswa="+nis_siswa+"&id_kelas_daftar="+id_kelas_daftar+"&id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan="+id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan);
}
function detailNilaiTugasPerSiswaSMT2(x,y,z){ // kerangka html ada di navbar menu siswa
	var nis_siswa=x;
	var id_kelas_daftar=y;
	var id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan=z;
	$("#tampilTugasSiswa").modal("show");
	$("#tampilTugas").load("halaman_siswa_cek_nilai_tugas_per_siswa_smt2.php?nis_siswa="+nis_siswa+"&id_kelas_daftar="+id_kelas_daftar+"&id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan="+id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan);
}

</script>

<!--END SISWA-->

<!--Upload Foto edit dan tambah pegawai-->
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

<!-- Handle Error -->
<script>

function errorDuplikatPengampuMataPelajaran(x){
	var id_kelas_transaksi=x;
	$("#deleteDataKelas").modal("show");
	$("#delete").load("halaman_administrator_delete_kelas.php?id_kelas_transaksi="+id_kelas_transaksi);
}

</script>
