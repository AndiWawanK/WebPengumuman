<?php

  class Gate extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->helper(array('form','url'));
      $this->load->library('form_validation');
      $this->load->model('m_admin');

      if($this->session->userdata('status') != "login"){
			   redirect(base_url("login"));
		  }
    }

    public function index(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/home');
      $this->load->view('admin/templates/footer');
    }

    public function tambah_siswa(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/tambah');
      $this->load->view('admin/templates/footer');
    }
    public function tambah(){

      if(isset($_POST['tambah'])){

        $this->form_validation->set_rules('nis', 'Nis', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_ujian', 'No_Ujian', 'trim|required');
        $this->form_validation->set_rules('dateField', 'DateField', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');


        if($this->form_validation->run() == FALSE){
          redirect('gate/tambah_siswa');
        }else{

          $nis    = $this->input->post(trim('nis'));
          $no_ujian = $this->input->post(trim('no_ujian'));
          $nama     = $this->input->post(trim('nama'));
          $tgl_lahir = $this->input->post(trim('dateField'));
          $jurusan   = $this->input->post(trim('jurusan'));
          $keterangan = $this->input->post(trim('keterangan'));

          if($jurusan == "Teknik Komputer Jaringan"){
            $kode = 'D001';
          }elseif($jurusan == "Teknik Audio Video"){
            $kode = 'D002';
          }elseif($jurusan == "Teknik Kendaraan Ringan"){
            $kode = 'D003';
          }elseif($jurusan == "Nautika Kapal Penangkap Ikan"){
            $kode = 'D004';
          }elseif($jurusan == "Akuntansi"){
            $kode = 'D005';
          }elseif($jurusan == "Administrasi Perkantoran"){
            $kode = 'D006';
          }elseif($jurusan == "Pemasaran"){
            $kode = 'D007';
          }elseif($jurusan == "Tata Busana"){
            $kode = 'D008';
          }

          $data = array(
            'nis' => $nis,
            'no_ujian' =>$no_ujian,
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan,
            'keterangan' =>$keterangan
          );


          $this->m_admin->tambah($nis,$no_ujian,$nama,$tgl_lahir,$jurusan,$keterangan,$kode);
          redirect('gate/tambah_siswa');
        }
      }
    }


    public function update_siswa(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/update');
      $this->load->view('admin/templates/footer');
    }
    public function update(){
      $data = $this->m_admin->get_siswa();
      echo json_encode($data);
    }

    //show all data siswa
    public function data_siswa(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/siswa');
      $this->load->view('admin/templates/footer');
    }
    public function get_data_siswa(){
      $data = $this->m_admin->get_siswa();
      echo json_encode($data);
    }

    public function get_data_update(){
      $id = $this->input->get('id_siswa');
      $data = $this->m_admin->get_update($id);
      echo json_encode($data);
      // print_r($data);
    }
    public function save_update_siswa(){
      $id = $this->input->post('id_siswa');
      $nis    = $this->input->post('nis');
      $no_ujian = $this->input->post('no_ujian');
      $nama     = $this->input->post('nama');
      $tgl_lahir = $this->input->post('dateField');
      $jurusan   = $this->input->post('jurusan');
      $keterangan = $this->input->post('keterangan');

      $data = $this->m_admin->update_data_siswa($id,$nis,$nama,$no_ujian,$tgl_lahir,$jurusan,$keterangan);
      echo json_encode($data);

    }

    public function delete_siswa(){
      // $id = $this->input->get('id');
      // var_dump($id);
      if($_POST['type'] == "delete"){
        $data = $this->m_admin->delete($_POST['id']);
        echo json_encode($data);
      }
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect(base_url('login'));
    }

  }
