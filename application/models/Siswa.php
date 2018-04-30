<?php

  class Siswa extends CI_Model{

    function cek_kelulusan($no_ujian,$tgl_lahir){
      $query = $this->db->query("SELECT * FROM siswa WHERE no_ujian='$no_ujian' AND tgl_lahir='$tgl_lahir'");


      // var_dump($query->row());
      // die();

      if($query->row()){
        return $row = $query->row();
      }else{
        return false;
      }
      // var_dump($row);
    }

    function get_siswa(){
      $sql  = $this->db->query("SELECT * FROM siswa ORDER BY kode_jurusan ASC");
      return $sql->result();
    }
  }
