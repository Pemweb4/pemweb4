<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8"/>
        <title>Data Sekolah</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="assets/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/layout.css" rel="stylesheet">
        <link href="assets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>

        <div class="parallax-window" data-parallax="scroll" data-image-src="assets/img/nav.png" style="height: 95px">
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE ==========-->
        <?php
            $row=$this->uri->segment(3);
        ?>
        

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="assets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="assets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="assets/vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="assets/js/layout.min.js" type="text/javascript"></script>
        <script src="assets/js/components/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/components/swiper.min.js" type="text/javascript"></script>

<?php

            $r=$this->uri->segment(3);

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
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[0]->jenjang?>"><?php echo $row[0]->jenjang ?></td>
		<td><?php echo $row[0]->jumlah_putra ?></td>
		<td><?php echo $row[0]->jumlah_putri ?></td>
		<td><?php echo $row[0]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[1]->jenjang?>"><?php echo $row[1]->jenjang ?></td>
		<td><?php echo $row[1]->jumlah_putra ?></td>
		<td><?php echo $row[1]->jumlah_putri ?></td>
		<td><?php echo $row[1]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[2]->jenjang?>"><?php echo $row[2]->jenjang ?></td>
		<td><?php echo $row[2]->jumlah_putra ?></td>
		<td><?php echo $row[2]->jumlah_putri ?></td>
		<td><?php echo $row[2]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[3]->jenjang?>"><?php echo $row[3]->jenjang ?></td>
		<td><?php echo $row[3]->jumlah_putra ?></td>
		<td><?php echo $row[3]->jumlah_putri ?></td>
		<td><?php echo $row[3]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[4]->jenjang?>"><?php echo $row[4]->jenjang ?></td>
		<td><?php echo $row[4]->jumlah_putra ?></td>
		<td><?php echo $row[4]->jumlah_putri ?></td>
		<td><?php echo $row[4]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[5]->jenjang?>"><?php echo $row[5]->jenjang ?></td>
		<td><?php echo $row[5]->jumlah_putra ?></td>
		<td><?php echo $row[5]->jumlah_putri ?></td>
		<td><?php echo $row[5]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[6]->jenjang?>"><?php echo $row[6]->jenjang ?></td>
		<td><?php echo $row[6]->jumlah_putra ?></td>
		<td><?php echo $row[6]->jumlah_putri ?></td>
		<td><?php echo $row[6]->jumlah_siswa ?></td>
	</tr>
	<tr>
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_siswa/<?=$r?>/<?=$row[7]->jenjang?>"><?php echo $row[7]->jenjang ?></td>
		<td><?php echo $row[7]->jumlah_putra ?></td>
		<td><?php echo $row[7]->jumlah_putri ?></td>
		<td><?php echo $row[7]->jumlah_siswa ?></td>
	</tr>
</table>


 <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

</body>

</html>