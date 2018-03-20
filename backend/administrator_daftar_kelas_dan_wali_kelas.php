<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once "koneksi.php";
      $no=1;
      $tampilDataPegawai = "SELECT * from kelas_transaksi order by nama_kelas_transaksi asc";
      $tampil = mysqli_query($connect, $tampilDataPegawai);
      while($row=mysqli_fetch_array($tampil)){
    ?>
    <tr>
      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_kelas_transaksi"] ?></td>
      <td><?php echo $row["wali_kelas_transaksi"] ?></td>
        <?php
      $id_kelas_daftar = $row['id_kelas_daftar'];
      $query_hitung_siswa_per_kelas = mysqli_query($connect, "SELECT count(id_kelas_daftar) AS jumlah_siswa from data_siswa where id_kelas_daftar='$id_kelas_daftar'");
      $rows = mysqli_fetch_array($query_hitung_siswa_per_kelas);
      ?>
      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo "{$rows['jumlah_siswa']}"; ?></td>
      <!--<td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">JUMLAH SISWA PER KELAS</td>-->
      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <a type="button" class="btn btn-success" href="javascript:detailSemuaPengampuMataPelajaran('<?php echo $row['id_kelas_daftar'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Lihat Guru Pengampu</a>
            <a type="button" class="btn btn-primary" href="javascript:detailSemuaSiswaPerKelas('<?php echo $row['id_kelas_daftar'] ?>','<?php echo $row['kelompok_kelas_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Lihat Siswa</a>
      </td>
      <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
            <a type="button" class="btn btn-success" href="javascript:detailKelas('<?php echo $row['id_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
            <a type="button" class="btn btn-primary" href="javascript:editKelas('<?php echo $row['id_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            <a type="button" class="btn btn-danger" href="javascript:deleteKelas('<?php echo $row['id_kelas_transaksi'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      </td>
    </tr>
    <?php  } ?>

  </body>
</html>
