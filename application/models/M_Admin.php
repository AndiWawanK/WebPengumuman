<?php

  class M_Admin extends CI_Model{
    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    function set_login($table, $login){
      return $this->db->get_where($table,$login);
    }

    function tambah($nis,$no_ujian,$nama,$tgl_lahir,$jurusan,$keterangan,$kode){
      $sql    = "INSERT INTO siswa (nis,nama,no_ujian,tgl_lahir,jurusan,keterangan,kode_jurusan)
                 VALUES ('$nis','$nama','$no_ujian','$tgl_lahir','$jurusan','$keterangan','$kode')";
      $query  = $this->db->query($sql);

      return $query;
    }
    function get_siswa(){
      $sql  = $this->db->query("SELECT * FROM siswa");
      return $sql->result();
    }

    function get_update($id){
      $sql=$this->db->query("SELECT * FROM siswa WHERE id_siswa='$id'");
        if($sql->num_rows()>0){
            foreach ($sql->result() as $data) {
                $hasil=array(
                    'id_siswa' => $data->id_siswa,
                    'nis' => $data->nis,
                    'nama' => $data->nama,
                    'no_ujian' => $data->no_ujian,
                    'tgl_lahir' => $data->tgl_lahir,
                    'jurusan' => $data->jurusan,
                    'keterangan' => $data->keterangan,
                    );
            }
        }
        return $hasil;
    }

    function update_data_siswa($id,$nis,$nama,$no_ujian,$tgl_lahir,$jurusan,$keterangan){
        $query = $this->db->query("UPDATE siswa SET nis='$nis',nama='$nama',no_ujian='$no_ujian',
                                 tgl_lahir='$tgl_lahir',jurusan='$jurusan',keterangan='$keterangan'
                                WHERE id_siswa='$id'");
        return $query;
    }

    function delete($id){
      $sql   = "DELETE FROM siswa WHERE id_siswa='$id'";
      $query = $this->db->query($sql);
      return $query;
    }
  }
