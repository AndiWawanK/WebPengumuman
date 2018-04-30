<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12" id="show_modal">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Data Table</strong>
          </div>
          <div class="card-body">
          <div class="table-responsive">
            <table id="mydata" class="table table-hover table-bordered">
              <thead style="background:#eee;">
                <tr>
                  <th>NISN</th>
                  <th>NAMA</th>
                  <th>NO_UJIAN</th>
                  <th>TGL_LAHIR</th>
                  <th>JURUSAN</th>
                  <th>KETERANGAN</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody id="show_data">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- .animated -->
</div><!-- .content -->
<!-- The Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Edit Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal">
              <div class="modal-body" id="show_update">
                  <input type="hidden" name="id_siswa" id="id_siswa" value="">
                  <div class="form-group">
                      <label for="" class="control-label mb-1">No. Induk Siswa</label>
                      <input name="nis" id="nis" type="text" class="form-control" placeholder="No. Induk Siswa">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label mb-1">No. Ujian</label>
                      <input name="no_ujian" id="no_ujian" type="text" class="form-control" placeholder="Nomor Ujian">
                  </div>
                  <div class="form-group has-success">
                      <label for="" class="control-label mb-1">Nama Lengkap</label>
                      <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label mb-1">Tanggal Lahir</label>
                      <input name="dateField" id="dateField" onkeyup="addSlashes(this);" type="text" class="form-control" placeholder="DD/MM/YY">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label mb-1">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
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
                    <select name="keterangan" id="keterangan" class="form-control">
                       <option value="">Please select</option>
                       <option value="Lulus">Lulus</option>
                       <option value="Tidak Lulus">Tidak Lulus</option>
                    </select>
                  </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-info" id="btn_simpan">Save</button>
              </div>
          </form>
        </div>
    </div>
</div>
