<?php

            $row=$this->uri->segment(3);

?>

<?php
    $row=$siswa->result();
?>
<table class = "table table-condensed">
	<tr>
		<th>Jenjang</th>
		<th>Laki</th>
		<th>PEr</th>
		<th>Total</th>
	</tr>
	<tr>
		<td><?php echo $row[0]->jenjang ?></td>
		<td><?php echo $row[0]->jumlah_putra ?></td>
		<td><?php echo $row[0]->jumlah_putri ?></td>
		<td><?php echo $row[0]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[1]->jenjang ?></td>
		<td><?php echo $row[1]->jumlah_putra ?></td>
		<td><?php echo $row[1]->jumlah_putri ?></td>
		<td><?php echo $row[1]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[2]->jenjang ?></td>
		<td><?php echo $row[2]->jumlah_putra ?></td>
		<td><?php echo $row[2]->jumlah_putri ?></td>
		<td><?php echo $row[2]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[3]->jenjang ?></td>
		<td><?php echo $row[3]->jumlah_putra ?></td>
		<td><?php echo $row[3]->jumlah_putri ?></td>
		<td><?php echo $row[3]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[4]->jenjang ?></td>
		<td><?php echo $row[4]->jumlah_putra ?></td>
		<td><?php echo $row[4]->jumlah_putri ?></td>
		<td><?php echo $row[4]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[5]->jenjang ?></td>
		<td><?php echo $row[5]->jumlah_putra ?></td>
		<td><?php echo $row[5]->jumlah_putri ?></td>
		<td><?php echo $row[5]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[6]->jenjang ?></td>
		<td><?php echo $row[6]->jumlah_putra ?></td>
		<td><?php echo $row[6]->jumlah_putri ?></td>
		<td><?php echo $row[6]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><?php echo $row[7]->jenjang ?></td>
		<td><?php echo $row[7]->jumlah_putra ?></td>
		<td><?php echo $row[7]->jumlah_putri ?></td>
		<td><?php echo $row[7]->jumlah_siswa ?></td>
	</tr>
</table>