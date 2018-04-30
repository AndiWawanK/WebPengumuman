<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('siswa');
		$this->load->database();

		if($this->session->userdata('status') == "login"){
			redirect(base_url("gate"));
		}

	}

	public function index(){
    $this->load->view('pages/timedown');
	}
	// public function home(){
	// 	$this->load->view('pages/index');
	// }
	// public function cekpengumuman(){
  //   // $this->load->view('pages/home');
	// 	$this->load->view('pages/index');
	// }

	public function pengumuman(){
		$no_ujian = $this->input->post('no_ujian');
		$tanggal = $this->input->post('tanggal');
		$bulan   = $this->input->post('bulan');
		$tahun   = $this->input->post('tahun');
		//get tanggal lahir
		$tgl_lahir = "$tanggal"."/"."$bulan"."/"."$tahun";

		if(isset($_POST['cek_kelulusan'])){

			// var_dump($ambil);
			// die();

			if($this->siswa->cek_kelulusan($no_ujian,$tgl_lahir)){
				$row = $this->siswa->cek_kelulusan($no_ujian,$tgl_lahir);
					$no_ujian = $row->no_ujian;
					$nama = $row->nama;
					$nis  = $row->nis;
					$tgl_lahir = $row->tgl_lahir;
					$jurusan   = $row->jurusan;
					$keterangan = $row->keterangan;
					// var_dump($tgl_lahir);
					// die();
					$data = array(
						'no_ujian' => $no_ujian,
						'nama' => $nama,
						'nis'  => $nis,
						'tgl_lahir' => $tgl_lahir,
						'jurusan' 	=> $jurusan,
						'keterangan' => $keterangan
					);

					// var_dump($lulus);
					// die();
					// $data['notif1'] = "Maaf Data Yang Anda Masukkan Salah!";
					$this->load->view('pages/home', $data);
			}else{
				$error['notif'] = "Data Yang Anda Masukkan Salah!";

					$this->load->view('pages/index',$error);
				// $data['notif'] = "Maaf Data Yang Anda Masukkan Salah!";
				// $this->load->view('pages/index', $data);
				// $this->load->view('pages/index', $data);
			}
		}else{
			$this->load->view('pages/home');
		}

		if(isset($_POST['download'])){
			redirect('welcome/download');
		}

	}

	//dowload pdf
	public function download(){
			$data['dataku'] = $this->siswa->get_siswa();

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan-petanikode.pdf";
			$this->pdf->load_view('download', $data);
			// $this->load->view('download', $data);



	}
}
