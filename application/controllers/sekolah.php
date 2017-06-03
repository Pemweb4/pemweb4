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
		$this->load->view('sekolah_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}
	function kecamatan(){
		$this->load->view('v_kec');
	}

	function sekolah_kec()
	{
		$kec= $this->uri->segment(3);
		$jenjang= $this->uri->segment(4);
		$data['profil'] = $this->sekolah_model->getsekolah_kec($kec,$jenjang);
		$this->load->view('v_sek',$data);
	}

	function profil(){
		$npsn= $this->uri->segment(3);
		$data['profil'] = $this->sekolah_model->getprofil($npsn);
		$this->load->view('v_profil',$data);
	}

	function guru_kec()
	{
		$kec = $this->uri->segment(3);
		$data['profil'] = $this->sekolah_model->guru($kec);
		$data['guruperkel'] = $this->sekolah_model->guruperkel($kec);
		$this->load->view('v_guru_kec',$data);
	}

	function guru(){

	}


	public function addAnggota()
	{
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_anggota_view');
	}
}

/* Location: ./application/controllers/anggota.php */