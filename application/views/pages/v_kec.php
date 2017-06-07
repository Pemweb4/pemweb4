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

        <center><h2>DATA SEKOLAH</h2></center>

        <center>
        <a href="<?=base_url()?>sekolah/sekolah_kec/<?=$row?>/SD/MI">
        	<img src="assets/img/sd.png" style="width: 100px;height: 100px; margin-top: 20px; margin-right: 80px">
        </a>
        <a href="<?=base_url()?>sekolah/sekolah_kec/<?=$row?>/SMP/MTS">
        	<img src="assets/img/smp.png" style="width: 100px;height: 100px; margin-top: 20px;margin-right: 80px">
        </a>
        <a href="<?=base_url()?>sekolah/sekolah_kec/<?=$row?>/SMA/SMK">
        	<img src="assets/img/sma.png" style="width: 100px;height: 100px; margin-top: 20px">
        </a>

        </center>

        

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


    </body>
    <!-- END BODY -->
</html>

<?php
	$row0=$jumlahsekolah->result();
	$row1=$jumlahsiswa->result();
	$row2=$jumlahguru->result();
    $kec = $namakec->result();
?>
<p style="padding-left: 10% ">Kecamatan <?php echo $kec[0]->nama_kec ?></p>
<table class = "table table-condensed" style="width : 80%; margin-top : 50px; margin-left : 130px" >

	<tr>
		<th>Jenjang</th>
		<th>Sekolah</th>
		<th>Peserta Didik</th>
		<th>Rombel</th>
		<th>Guru</th>
	</tr>
	<?php
	$no = -1;
	foreach ($row0 as $a) { $no++ ?>
	<tr>
		<td><?php echo $a->jenjang ?></td>
		<td><?php echo $a->jumlah ?></td>
		<td><?php echo $row1[$no]->jumlah_siswa ?></td>
		<td><?php echo $row1[$no]->rombel ?></td>
		<td><?php echo $row2[$no]->jumlah_guru ?></td>
	</tr>
	<?php } ?>
	
</table>

</body>
</html> 