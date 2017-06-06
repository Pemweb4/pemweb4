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



		function getdatasekolah($kec) {

			//select semua data yang ada pada table msProduct $this--->db->select("*");

			$this->db->select('jenjang, count(npsn) as jumlah');

			$this->db->from('profil');

			$this->db->where('kec',$kec);

			$this->db->group_by('jenjang');

			return $this->db->get();

		}

		function getdatasiswa($kec){

			$this->db->select('sum(siswa.jumlah_siswa) as jumlah_siswa, sum(siswa.rombel) as rombel');

			$this->db->from('profil');

			$this->db->where('kec',$kec);

			$this->db->join('siswa','profil.npsn=siswa.npsn');

			$this->db->group_by('profil.jenjang');

			return $this->db->get();

		}

		function getdataguru($kec){

			$this->db->select("profil.jenjang,profil.kec,count(data_guru.nama_guru) as jumlah_guru, sum(case when jk = 'L' then 1 else 0 end) as laki, sum(case when jk = 'P' then 1 else 0 end) as perempuan", FALSE);

			$this->db->from('profil');

			$this->db->join('data_guru','profil.npsn=data_guru.npsn');

			$this->db->where('profil.kec',$kec);

			$this->db->group_by('profil.jenjang');

			return $this->db->get();

		}



		function getprofil($npsn){

			$this->db->select('*');

			$this->db->from('profil');

			$this->db->where('npsn',$npsn);

			return $this->db->get();

		}



		function getsekolah_kec($kec,$jenjang,$jenjang1){

			$ma = 'MA';

			$this->db->select('*');

			$this->db->from('profil');

			$this->db->where('kec',$kec);

			if ($jenjang=='SMA') {

				$this->db->where('(`jenjang` LIKE \'%'.$jenjang.'%\' OR `jenjang` LIKE \'%'.$jenjang1.'%\' OR `jenjang` LIKE \'%'.$ma.'%\')', NULL, FALSE);

			}else{

				$this->db->where('(`jenjang` LIKE \'%'.$jenjang.'%\' OR `jenjang` LIKE \'%'.$jenjang1.'%\')', NULL, FALSE);

			}

			return $this->db->get();

		}



		function getsekolah_kec_guru($kec,$jenjang){

			$this->db->select('*');

			$this->db->from('profil');

			$this->db->where('kec',$kec);

			$this->db->where('jenjang',$jenjang);

			return $this->db->get();

		}



		function getgurusek ($npsn){

			$this->db->select('*');

			$this->db->from('data_guru');

			$this->db->where('npsn',$npsn);

			return $this->db->get();

		}

		function getsiswa($kec){
			return $this->db->query('select p.jenjang, ifnull(sum(s.jumlah_putra), 0) as jumlah_putra, ifnull(sum(s.jumlah_putri), 0) as jumlah_putri,  ifnull(sum(s.jumlah_siswa), 0) as jumlah_siswa FROM profil p left outer join siswa s on p.npsn=s.npsn and p.kec in ('.$kec.') group by p.jenjang');
		}



	}

?>