<head>
	<title></title>
</head>
<body>
<?php
	$row=$profil->result();
		foreach($row as $u)
		?>
		Nama Sekolah : <?php echo $u->nama_sekolah?><br>
		NPSN : <?php echo $u->npsn?><br>
		Visi : <?php echo $u->visi?><br>
		Misi : <?php echo $u->misi?><br>
</body>
</html