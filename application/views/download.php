<!DOCTYPE html>
<html>
  <head>
    <title>PENGUMUMAN KELULUSAN SMK NEGERI 1 BULUKUMBA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="icon" type="image/icon" href="<?php echo base_url() ?>assets/img/logo-smk.png">
    <style media="screen">
      .table-hasil{
        width:700px
      }
      .table-hasil thead{
        text-align: center;
        background-color: #eee;
      }
      .table-hasil td{
        padding: 3px 5px;
      }
    </style>
  </head>
  <body>

    <h3>Daftar </h3>
    <table border="1" class="table-hasil">
	  	<thead>
	  		<tr>
          <th class="text-center">#</th>
	  			<th class="text-center">NISN</th>
	  			<th class="text-center">NAMA</th>
	  			<th class="text-center">NO_UJIAN</th>
	  			<th class="text-center">JURUSAN</th>
	  			<th class="text-center">KET</th>
	  		</tr>
	  	</thead>
      <tbody>
        <?php $no=1; ?>
	  		<?php foreach($dataku as $siswa): ?>

          <tr>
          <td class="text-center"><?php echo $no; ?></td>
          <td><?php echo $siswa->nis; ?></td>
          <td><?php echo $siswa->nama; ?></td>
          <td><?php echo $siswa->no_ujian; ?></td>
          <td><?php echo $siswa->jurusan; ?></td>
          <td><?php echo $siswa->keterangan; ?></td>
          </tr>

        <?php $no++; ?>
	  		<?php endforeach; ?>
    </tbody>
	  </table>

    <!-- =================== -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
