<?php
	//File products_model.php
	class sekolah_model extends CI_Model  {
		function __construct() { parent::__construct(); } 

		function getalldatasekolah() {
			//select semua data yang ada pada table msProduct $this--->db->select("*");
			$this->db->select('jenjang, count(npsn) as jumlah');
			$this->db->from('profil');
			$this->db->group_by('jenjang');
			return $this->db->get();
		}
		function getalldatasiswa(){
			$this->db->select('sum(siswa.jumlah_siswa) as jumlah_siswa, sum(siswa.rombel) as rombel');
			$this->db->from('profil');
			$this->db->join('siswa','profil.npsn=siswa.npsn');
			$this->db->group_by('profil.jenjang');
			return $this->db->get();
		}
		function getalldataguru(){
			$this->db->select('count(data_guru.nama_guru) as jumlah_guru');
			$this->db->from('profil');
			$this->db->join('data_guru','profil.npsn=data_guru.npsn');
			$this->db->group_by('profil.jenjang');
			return $this->db->get();
		}
	}
?>