<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$row=$profil->result();
?>
<table border="1">
	<tr>
		<th>No</th>
		<th>NPSN</th>
		<th>Nama Sekolah</th>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Email</th>
	</tr>
	<?php 
		$no = 1;
		foreach($row as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->npsn ?></td>
			<td><a href="<?=base_url()?>sekolah/profil/<?=$u->npsn?>"><?php echo $u->nama_sekolah ?></a></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->telepon ?></td>
			<td><?php echo $u->email ?></td>
		</tr>
	<?php } ?>
</table>

</body>
</html>