<head>
	<title></title>
</head>
<body>
<?php
	$row=$profil->result();
	$row1=$guruperkelsd->result();
	$row2=$guruperkelmi->result();
	$row3=$guruperkelsmp->result();
	$row4=$guruperkelmts->result();
	$row5=$guruperkelsma->result();
	$row6=$guruperkelsmk->result();
	$row7=$guruperkelma->result();
	$row8=$guruperkelslb->result();
?>
<table class = "table table-condensed">
	<tr>
		<th>Jenjang</th>
		<th>Guru</th>
	</tr>
	<tr>
		<td><?php echo $row[3]->jenjang ?></td>
		<td><?php echo $row1[0]->jumlah_guru ?></td>
		<td><?php echo $row1[1]->jumlah_guru ?></td>
		<td><?php echo $row[3]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[1]->jenjang ?></td>
		<td><?php echo $row2[0]->jumlah_guru ?></td>
		<td><?php echo $row2[1]->jumlah_guru ?></td>
		<td><?php echo $row[1]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[7]->jenjang ?></td>
		<td><?php echo $row3[0]->jumlah_guru ?></td>
		<td><?php echo $row3[1]->jumlah_guru ?></td>
		<td><?php echo $row[7]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[2]->jenjang ?></td>
		<td><?php echo $row4[0]->jumlah_guru ?></td>
		<td><?php echo $row4[1]->jumlah_guru ?></td>
		<td><?php echo $row[2]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[5]->jenjang ?></td>
		<td><?php echo $row5[0]->jumlah_guru ?></td>
		<td><?php echo $row5[1]->jumlah_guru ?></td>
		<td><?php echo $row[5]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[6]->jenjang ?></td>
		<td><?php echo $row6[0]->jumlah_guru ?></td>
		<td><?php echo $row6[1]->jumlah_guru ?></td>
		<td><?php echo $row[6]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[0]->jenjang ?></td>
		<td><?php echo $row7[0]->jumlah_guru ?></td>
		<td><?php echo $row7[1]->jumlah_guru ?></td>
		<td><?php echo $row[0]->jumlah_guru ?></td>
	</tr>
	<tr>
		<td><?php echo $row[4]->jenjang ?></td>
		<td><?php echo $row8[0]->jumlah_guru ?></td>
		<td><?php echo $row8[1]->jumlah_guru ?></td>
		<td><?php echo $row[4]->jumlah_guru ?></td>
	</tr>
</table>
	
</body>
</html>