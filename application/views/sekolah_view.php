<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$row=$jumlahallsekolah->result();
	$row1=$jumlahallsiswa->result();
	$row2=$jumlahallguru->result();
?>
<table border="1">
	<tr>
		<th>Jenjang</th>
		<th>Sekolah</th>
		<th>Peserta Didik</th>
		<th>Rombel</th>
		<th>Guru</th>
		<th>Tendik</th>
		<th>Jumlah Kirim</th>
	</tr>
	<tr>
		<td><?php echo $row[3]->jenjang ?></td>
		<td><?php echo $row[3]->jumlah ?></td>
		<td><?php echo $row1[3]->jumlah_siswa ?></td>
		<td><?php echo $row1[3]->rombel ?></td>
		<td><?php echo $row2[3]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[1]->jenjang ?></td>
		<td><?php echo $row[1]->jumlah ?></td>
		<td><?php echo $row1[1]->jumlah_siswa ?></td>
		<td><?php echo $row1[1]->rombel ?></td>
		<td><?php echo $row2[1]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[7]->jenjang ?></td>
		<td><?php echo $row[7]->jumlah ?></td>
		<td><?php echo $row1[7]->jumlah_siswa ?></td>
		<td><?php echo $row1[7]->rombel ?></td>
		<td><?php echo $row2[7]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[2]->jenjang ?></td>
		<td><?php echo $row[2]->jumlah ?></td>
		<td><?php echo $row1[2]->jumlah_siswa ?></td>
		<td><?php echo $row1[2]->rombel ?></td>
		<td><?php echo $row2[2]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[5]->jenjang ?></td>
		<td><?php echo $row[5]->jumlah ?></td>
		<td><?php echo $row1[5]->jumlah_siswa ?></td>
		<td><?php echo $row1[5]->rombel ?></td>
		<td><?php echo $row2[5]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[6]->jenjang ?></td>
		<td><?php echo $row[6]->jumlah ?></td>
		<td><?php echo $row1[6]->jumlah_siswa ?></td>
		<td><?php echo $row1[6]->rombel ?></td>
		<td><?php echo $row2[6]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[0]->jenjang ?></td>
		<td><?php echo $row[0]->jumlah ?></td>
		<td><?php echo $row1[0]->jumlah_siswa ?></td>
		<td><?php echo $row1[0]->rombel ?></td>
		<td><?php echo $row2[0]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[4]->jenjang ?></td>
		<td><?php echo $row[4]->jumlah ?></td>
		<td><?php echo $row1[4]->jumlah_siswa ?></td>
		<td><?php echo $row1[4]->rombel ?></td>
		<td><?php echo $row2[4]->jumlah_guru ?></td>
	</tr>
</table>

</body>
</html>