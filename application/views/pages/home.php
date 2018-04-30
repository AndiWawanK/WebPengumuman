<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PENGUMUMAN KELULUSAN SMKN 1</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <link rel="icon" type="image/icon" href="<?php echo base_url() ?>assets/img/logo-smk.png">
  </head>
  <body>
  <!-- ==navbar== -->
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- <div class="navbar-header">
        <a href="#" class="navbar-brand">PENGUMUMAN KELULUSAN SMK NEGERI 1 BULUKUMBA</a>
      </div> -->

      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <a href="#" class="navbar-brand text-center">PENGUMUMAN KELULUSAN SMK NEGERI 1 BULUKUMBA</a>
        </div>
        <div class="col-sm-3"></div>
      </div>

      <!-- <div class="collapse navbar-collapse">
        <div class="nav navbar-nav logo-bsnp">
          <img src="assets/img/logo-bsnp.png" alt="">
        </div>
        <div class="col-md-6 col-md-offset-2 logo-pemprov text-center">
          <img src="assets/img/logo-pemprov.png" alt="">
        </div>
        <div class="nav navbar-nav logo-smk pull-right">
          <img src="assets/img/logo-smk.png" alt="">
        </div>
      </div> -->
    </div>
  </nav>
  <!-- ==navbar== -->

  <!-- ==block== -->
  <div class="container-fluid bg-block">
    <div class="col-md-8 col-md-offset-2 well">

      <div class="row">
        <div class="col-md-4 logo-bsnp text-center">
          <img src="<?php echo base_url() ?>assets/img/logo-bsnp.png" alt="">
        </div>
        <div class="col-md-4 logo-pemprov text-center">
          <img src="<?php echo base_url() ?>assets/img/logo-pemprov.png" alt="">
        </div>
        <div class="col-md-4 logo-smk text-center">
          <img src="<?php echo base_url() ?>assets/img/logo-smk.png" alt="">
        </div>
      </div>


      <div class="col-sm-12">
        <div class="logo-bnsp1 text-center">
          <img src="<?php echo base_url() ?>assets/img/logo-bsnp.png" alt="">
        </div>
        <div class="logo-pemprov1 text-center">
          <img src="<?php echo base_url() ?>assets/img/logo-pemprov.png" alt="">
        </div>
        <div class="logo-smk1 text-center">
          <img src="<?php echo base_url() ?>assets/img/logo-smk.png" alt="">
        </div>
      </div>

         <div class="block">
           <h3 class="text-center">Masukkan No. Ujian dan Tanggal Lahir</h3>
           <hr>
           <div class="col-md-8 col-md-offset-2 well">
             <form action="<?php echo base_url(). 'welcome/pengumuman'; ?>" method="post">
               <div class="form-group">
                 <label style="font-weight:400" for="nis">No. Ujian</label>
                 <input type="text" class="form-control input-pengumuman" name="no_ujian" placeholder="No. Ujian">
               </div>
               <label style="font-weight:400;">Tanggal Lahir</label>
               <div class="form-group group-kelulusan">
                 <input style="width:70px" type="text" class="form-control input-kelulusan" name="tanggal" placeholder="Tgl /">
                 <input style="width:70px" type="text" class="form-control input-kelulusan" name="bulan" placeholder="Bln /">
                 <input type="text" class="form-control input-kelulusan" name="tahun" placeholder="Tahun">
               </div>
               <p style="margin-top:-10px;">Contoh : <em>25/04/2018</em></p>


               <div class="form-group">
                 <button type="submit" class="btn btn-kelulusan btn-lg block" name="cek_kelulusan">LIHAT HASIL</button>
               </div>
               <div class="form-group">
                 <button type="submit" class="btn btn-download btn-lg block" name="download"><i class="fa fa-download"></i> Download Hasil Pengumuman (pdf)</button>
               </div>
             </form>

             <?php if(isset($_POST['cek_kelulusan'])){ ?>
               <?php if($keterangan != 'Lulus'){ ?>
                 <div class="alert alert-danger">
                   <h4 class="text-center"><?php echo "Mohon Maaf Anda ".$keterangan." !"?></h4>
                   <hr>
                   <table>
                     <tbody>
                       <tr>
                         <td><b>No.Ujian</b></td>
                         <td><b>: &nbsp;</b></td>
                         <td><?php echo $no_ujian ?></td>
                       </tr>
                       <tr>
                         <td><b>Nama</b></td>
                         <td><b>: &nbsp;</b></td>
                         <td><?php echo $nama ?></td>
                       </tr>
                       <tr>
                         <td><b>Nisn</b></td>
                         <td><b>: &nbsp;</b></td>
                         <td><?php echo $nis ?></td>
                       </tr>
                       <tr>
                         <td><b>Jurusan</b></td>
                         <td><b>: &nbsp;</b></td>
                         <td><?php echo $jurusan ?></td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               <?php }else if($keterangan != 'Tidak Lulus'){ ?>
                 <div class="alert alert-success">
                   <h4 class="text-center"><?php echo "Selamat Anda ".$keterangan." !"?></h4>
                   <hr>
                   <table>
                     <tbody>
                       <tr>
                         <td><b>No.Ujian</b></td>
                         <td><b>: &nbsp;</b></td>
                         <td><?php echo $no_ujian ?></td>
                       </tr>
                       <tr>
                         <td><b>Nama</b></td>
                         <td><b>:</b></td>
                         <td><?php echo $nama ?></td>
                       </tr>
                       <tr>
                         <td><b>Nisn</b></td>
                         <td><b>:</b></td>
                         <td><?php echo $nis ?></td>
                       </tr>
                       <tr>
                         <td><b>Jurusan</b></td>
                         <td><b>:</b></td>
                         <td><?php echo $jurusan ?></td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               <?php }else{ ?>

            <?php } ?>
          <?php } ?>

           </div>
         </div>
         <div class="col-md-8 col-md-offset-2">
           <span >Panitia UNBK SMKN 1 Bulukumba 2018</span>
         </div>
       </div>
    </div>
  </div>
  <!-- ==block== -->

  <!-- ================= -->
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
