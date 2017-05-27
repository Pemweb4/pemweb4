<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	foreach ($jumlahallsekolah->result() as $row) {
		echo $row->jenjang.' = '.$row->jumlah.' ';
	}
?>


</body>
</html>