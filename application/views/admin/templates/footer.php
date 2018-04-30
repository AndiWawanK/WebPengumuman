

<script src="<?php echo base_url() ?>assets/admin/js/vendor/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/plugins.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/main.js"></script>

<script src="<?php echo base_url() ?>assets/admin/js/dashboard.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/widgets.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/vector-map/jquery.vmap.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/lib/data-table/datatables-init.js"></script>
<script type="text/javascript">

$(document).ready(function(){
      update_siswa();
      get_siswa();
      $('#mydata').dataTable();
      $('#dataSiswa').dataTable();
      function update_siswa(){
          $.ajax({
              type  : 'ajax',
              url   : '<?php echo base_url()?>gate/update',
              async : false,
              dataType : 'json',
              success : function(data){
                  var update = '';
                  var i;
                  for(i=0; i<data.length; i++){
                      update += '<tr id="data_siswa'+data[i].id_siswa+'">'+
                                '<td>'+data[i].nis+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].no_ujian+'</td>'+
                                '<td>'+data[i].tgl_lahir+'</td>'+
                                '<td>'+data[i].jurusan+'</td>'+
                                '<td>'+data[i].keterangan+'</td>'+
                                '<td class="text-center">'+
                                '<a href="" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id_siswa+'" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil"></i></a>'+
                                '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data-id="'+data[i].id_siswa+'"><i class="fa fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                  }
                  $('#show_data').html(update);
              }
          });
      }
      function get_siswa(){
        $.ajax({
          type : 'ajax',
          url  : '<?php echo base_url() ?>gate/get_data_siswa',
          async: false,
          dataType : 'json',
          success : function(data){
            var getSiswa = '';
            var i;
            for(i=0; i<data.length; i++){
              getSiswa += '<tr>'+
                          '<td>'+data[i].nis+'</td>'+
                          '<td>'+data[i].nama+'</td>'+
                          '<td>'+data[i].no_ujian+'</td>'+
                          '<td>'+data[i].tgl_lahir+'</td>'+
                          '<td>'+data[i].jurusan+'</td>'+
                          '<td>'+data[i].keterangan+'</td>'+
                          '</tr>';
            }
            $('#show_data_siswa').html(getSiswa);
          }
        });
      }

      //GET HAPUS
        $('.item_hapus').on('click',function(){
          var id = ($(this).attr('data-id'));
            $.ajax({
              method: 'POST',
              url: '<?php echo base_url() ?>gate/delete_siswa',
              data: { id:id , type:'delete'},
              success: function(data){
                if(data == '0'){
                  alert("ada masalah");
                }else{
                  $('#data_siswa'+id).fadeOut('fast');
                  // console.log($('#data_siswa'+id));
                }
              }
            });
        });

      //UPDATE DATA
      $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data-id');

            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('gate/get_data_update')?>",
                dataType : "JSON",
                data : {id_siswa:id},
                success: function(data){
                    $.each(data,function(nis, nama, no_ujian, tgl_lahir, jurusan, keterangan){
                        $('#largeModal').modal('show');
                        $('[name="id_siswa"]').val(data.id_siswa);
                        $('[name="nis"]').val(data.nis);
                        $('[name="no_ujian"]').val(data.no_ujian);
                        $('[name="nama"]').val(data.nama);
                        $('[name="dateField"]').val(data.tgl_lahir);
                        $('[name="jurusan"]').val(data.jurusan);
                        $('[name="keterangan"]').val(data.keterangan);
                    });
                    console.log(data);
                }
            });
            // return false;
        });

        //SAVE UPDATE
        $('#btn_simpan').on('click',function(){
            var id_siswa = $('#id_siswa').val();
            var nis = $('#nis').val();
            var no_ujian = $('#no_ujian').val();
            var nama = $('#nama').val();
            var dateField = $('#dateField').val();
            var jurusan = $('#jurusan').val();
            var keterangan = $('#keterangan').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('gate/save_update_siswa')?>",
                dataType : "JSON",
                data : {id_siswa:id_siswa, nis:nis , no_ujian:no_ujian, nama:nama, dateField:dateField, jurusan:jurusan, keterangan:keterangan},
                success: function(data){
                    $('[name="id_siswa"]').val("");
                    $('[name="nis"]').val("");
                    $('[name="no_ujian"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="dateField"]').val("");
                    $('[name="jurusan"]').val("");
                    $('[name="keterangan"]').val("");
                    $('#largeModal').modal('hide');
                    // update_siswa();
                }
            });
            // return false;
            // console.log(data);
        });
  });



  function addSlashes(input) {
    var v = input.value;
      if(v.match(/^\d{2}$/) !== null) {
        input.value = v + '/';
      }else if(v.match(/^\d{2}\/\d{2}$/) !== null){
        input.value = v + '/';
      }
  }

</script>

</body>
</html>
