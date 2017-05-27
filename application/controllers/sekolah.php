<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sekolah extends CI_Controller  {
	function __construct(){
		parent::__construct();
		$this->load->model("sekolah_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['jumlahallsekolah'] = $this->sekolah_model->getdatasekolah();
		$this->load->view('sekolah_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}

	public function addAnggota()
	{
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_anggota_view');
	}
}

/* Location: ./application/controllers/anggota.php */