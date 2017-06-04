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
	$row=$profil->result();
<<<<<<< HEAD
	$row1=$guruperkelsd->result();
	$row2=$guruperkelmi->result();
	$row3=$guruperkelsmp->result();
	$row4=$guruperkelmts->result();
	$row5=$guruperkelsma->result();
	$row6=$guruperkelsmk->result();
	$row7=$guruperkelma->result();
	$row8=$guruperkelslb->result();
=======
	$jjg='';
>>>>>>> 91299a4456408d59883dccefa6f488bc4f95641e
?>
<table class = "table table-condensed">
	<tr>
		<th>Jenjang</th>
		<th>Jumlah Laki-laki</th>
		<th>Jumlah Perempuan</th>
		<th>Total</th>
	</tr>
	<?php foreach ($row as $r) { 
		/*if ($r->jenjang=='SMP' or $r->jenjang=='MTS') {
			$jjg = 'SMP/MTS';
		}elseif ($r->jenjang=='SMA' or $r->jenjang=='SMK') {
			$jjg = 'SMA/SMK';
		}else{
			$jjg = 'SD/MI';
		}*/

	?>
	<tr>
<<<<<<< HEAD
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
=======
		<td><a href="<?=base_url()?>sekolah/sekolah_kec_guru/<?=$r->kec?>/<?=$r->jenjang?>"><?php echo $r->jenjang ?></td>
		<td><?php echo $r->laki ?></td>
		<td><?php echo $r->perempuan ?></td>
		<td><?php echo $r->jumlah_guru ?></td>
>>>>>>> 91299a4456408d59883dccefa6f488bc4f95641e
	</tr>
	<?php } ?>
</table>
	
</body>
</html>