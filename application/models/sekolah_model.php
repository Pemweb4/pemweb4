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

		function getprofil($npsn){
			$this->db->select('*');
			$this->db->from('profil');
			$this->db->where('npsn',$npsn);
			return $this->db->get();
		}

		function getsekolah_kec($kec,$jenjang){
			$this->db->select('*');
			$this->db->from('profil');
			$this->db->where('kec',$kec);
			$this->db->where('jenjang',$jenjang);
			return $this->db->get();
		}

		function guru($kec){
			return $this->db->query("select profil.jenjang, count(data_guru.nama_guru) as jumlah_guru from profil left outer join data_guru on profil.npsn=data_guru.npsn and profil.kec in (61) group by profil.jenjang");
		}
		function guruperkel($kec){
			return $this->db->query("select count(d2.nama_guru) as jumlah_guru from profil p join data_guru d1 on p.npsn=d1.npsn left outer join data_guru d2 on p.npsn=d2.npsn and p.kec in (61) group by p.jenjang, d1.jk");
		}
	}
?>