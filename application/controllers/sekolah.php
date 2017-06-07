<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sekolah extends CI_Controller  {



	function __construct(){

		parent::__construct();

		$this->load->model('sekolah_model'); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models

		$this->load->helper('url');



	}



	function index(){

		//Function yang digunakan untuk menampilkan view products_view.php

		$data['jumlahallsekolah'] = $this->sekolah_model->getalldatasekolah();

		$data['jumlahallsiswa'] = $this->sekolah_model->getalldatasiswa();

		$data['jumlahallguru'] = $this->sekolah_model->getalldataguru();

		$this->load->view('templates/header');

		$this->load->view('pages/index', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
		$this->load->view('templates/footer');

	}

	function kecamatan(){

		$kec=$this->uri->segment(3);

		$data['jumlahsekolah'] = $this->sekolah_model->getdatasekolah($kec);

		$data['jumlahsiswa'] = $this->sekolah_model->getdatasiswa($kec);

		$data['jumlahguru'] = $this->sekolah_model->getdataguru($kec);

		$data['namakec'] = $this->sekolah_model->getkec($kec);

		$this->load->view('templates/header');

		$this->load->view('pages/v_kec',$data);
		$this->load->view('templates/footer');

	}





	function sekolah_kec()

	{

		$kec= $this->uri->segment(3);

		$jenjang= $this->uri->segment(4);

		$jenjang1= $this->uri->segment(5);

		$data['profil'] = $this->sekolah_model->getsekolah_kec($kec,$jenjang,$jenjang1);

		$this->load->view('templates/header');

		$this->load->view('pages/v_s',$data);

		$this->load->view('templates/footer');

	}



	function sekolah_kec_guru()

	{

		$kec= $this->uri->segment(3);

		$jenjang= $this->uri->segment(4);

		$jenjang1= $this->uri->segment(5);

		$data['profil'] = $this->sekolah_model->getsekolah_kec_guru($kec,$jenjang);

		$this->load->view('templates/header');

		$this->load->view('pages/v_s_guru',$data);

		$this->load->view('templates/footer');

	}





	function profil(){

		$npsn= $this->uri->segment(3);

		$data['profil'] = $this->sekolah_model->getprofil($npsn);

		$this->load->view('v_profil',$data);

		$this->load->view('templates/footer');

	}



	function guru_kec()

	{

		$kec = $this->uri->segment(3);

		$data['profil'] = $this->sekolah_model->getdataguru($kec);

		$this->load->view('templates/header');

		$this->load->view('pages/v_guru_kec',$data);

		$this->load->view('templates/footer');

	}



	function guru(){

		$npsn= $this->uri->segment(3);

		$data['profil'] = $this->sekolah_model->getgurusek($npsn);

		$this->load->view('templates/header');

		$this->load->view('pages/v_guru_profil',$data);

		$this->load->view('templates/footer');

	}

	function siswa_kec(){
		$kec = $this->uri->segment(3);

		$data['siswa'] = $this->sekolah_model->getsiswa($kec);
		$this->load->view('templates/header');
		$this->load->view('v_murid_kec', $data);
		$this->load->view('templates/footer');
	}

	function sekolah_kec_siswa(){

		$kec = $this->uri->segment(3);
		$jenjang = $this->uri->segment(4);

		$data['siswa'] = $this->sekolah_model->getsiswajenjang($kec, $jenjang);
		$this->load->view('templates/header');
		$this->load->view('pages/sekolah_kec_siswa', $data);
		$this->load->view('templates/footer');

	}

	function adminsekolah(){

		$data['datasekolah']=$this->sekolah_model->getprofilsekolah();
		$this->load->view('pages/adminsekolah', $data);
	}

	function update(){
		$visi = $this->input->post('npsn');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$kepsek = $this->input->post('kepsek');
		$wakasek = $this->input->post('wakasek');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		$jlk = $this->input->post('jlk');
		$jpr = $this->input->post('jpr');
		$js = $this->input->post('js');

		$data = array(
			'visi' => $visi,
			'misi' => $misi,
			'alamat' => $alamat,
			'email' => $email,
			'telepon' => $telepon,
		);

		$where = array(
			'npsn' => $npsn
		);

		$this->sekolah_model->update_data($where,$data,'profil');
	}

}



/* Location: ./application/controllers/anggota.php */