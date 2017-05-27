<?php
	//File products_model.php
	class sekolah_model extends CI_Model  {
		function __construct() { parent::__construct(); } 

		function getdatasekolah() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->select('jenjang, count(npsn) as jumlah');
		$this->db->from("profil");
		$this->db->group_by('jenjang');

		return $this->db->get();
		}
	}
?>