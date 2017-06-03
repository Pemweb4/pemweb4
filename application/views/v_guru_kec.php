<head>
	<title></title>
</head>
<body>
<?php
	$row=$profil->result();
	$row2=$guruperkel->result();
?>
<table class = "table table-condensed">
	<tr>
		<th>Jenjang</th>
		<th>Guru</th>
	</tr>
	<tr>
		<td><?php echo $row[3]->jenjang ?></td>
		<td><?php echo $row2[6]->jumlah_guru ?></td>
		<td><?php echo $row2[7]->jumlah_guru ?></td>
		<td><?php echo $row[3]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[1]->jenjang ?></td>
		<td><?php echo $row2[2]->jumlah_guru ?></td>
		<td><?php echo $row2[3]->jumlah_guru ?></td>
		<td><?php echo $row[1]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[7]->jenjang ?></td>
		<td><?php echo $row2[14]->jumlah_guru ?></td>
		<td><?php echo $row2[15]->jumlah_guru ?></td>
		<td><?php echo $row[7]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[2]->jenjang ?></td>
		<td><?php echo $row2[4]->jumlah_guru ?></td>
		<td><?php echo $row2[5]->jumlah_guru ?></td>
		<td><?php echo $row[2]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[5]->jenjang ?></td>
		<td><?php echo $row2[10]->jumlah_guru ?></td>
		<td><?php echo $row2[11]->jumlah_guru ?></td>
		<td><?php echo $row[5]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[6]->jenjang ?></td>
		<td><?php echo $row2[12]->jumlah_guru ?></td>
		<td><?php echo $row2[13]->jumlah_guru ?></td>
		<td><?php echo $row[6]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[0]->jenjang ?></td>
		<td><?php echo $row2[0]->jumlah_guru ?></td>
		<td><?php echo $row2[1]->jumlah_guru ?></td>
		<td><?php echo $row[0]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[4]->jenjang ?></td>
		<td><?php echo $row2[8]->jumlah_guru ?></td>
		<td><?php echo $row2[9]->jumlah_guru ?></td>
		<td><?php echo $row[4]->jumlah_guru ?></td>
	</tr>
</table>
	
</body>
</html>