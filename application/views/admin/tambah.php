<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tambah Data Siswa</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          <form action="<?php echo base_url(). 'gate/tambah' ?>" method="post">
                              <div class="form-group">
                                  <label for="" class="control-label mb-1">No. Induk Siswa</label>
                                  <input name="nis" type="text" class="form-control" placeholder="No. Induk Siswa">
                              </div>
                              <div class="form-group">
                                  <label for="" class="control-label mb-1">No. Ujian</label>
                                  <input name="no_ujian" type="text" class="form-control" placeholder="Nomor Ujian">
                              </div>
                              <div class="form-group has-success">
                                  <label for="" class="control-label mb-1">Nama Lengkap</label>
                                  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                              </div>
                              <div class="form-group">
                                  <label for="" class="control-label mb-1">Tanggal Lahir</label>
                                  <input name="dateField" onkeyup="addSlashes(this);" type="text" class="form-control" placeholder="DD/MM/YY">
                              </div>
                              <div class="form-group">
                                <label for="" class="control-label mb-1">Jurusan</label>
                                <select name="jurusan" class="form-control">
                                   <option value="">Please select</option>
                                   <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                   <option value="Teknik Audio Video">Teknik Audio Video</option>
                                   <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                   <option value="Nautika Kapal Penangkap Ikan">Nautika Kapal Penangkap Ikan</option>
                                   <option value="Akuntansi">Akuntansi</option>
                                   <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                                   <option value="Pemasaran">Pemasaran</option>
                                   <option value="Tata Busana">Tata Busana</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="" class="control-label mb-1">Keterangan</label>
                                <select name="keterangan" class="form-control">
                                   <option value="">Please select</option>
                                   <option value="Lulus">Lulus</option>
                                   <option value="Tidak Lulus">Tidak Lulus</option>
                                </select>
                              </div>
                              <div>
                                  <button type="submit" class="btn btn-lg btn-info btn-block" name="tambah">
                                      <i class="fa fa-plus fa-lg"></i>&nbsp;
                                      <span>Tambah</span>
                                  </button>
                              </div>
                          </form>

                      </div>
                  </div>

                </div>
            </div> <!-- .card -->

          </div><!--/.col-->





    </div><!-- .animated -->
</div><!-- .content -->
