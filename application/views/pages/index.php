	<head>
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
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="assets/img/banner.png" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">SELAMAT DATANG</h1>
                                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img/banner1.png" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">SELAMAT DATANG</h2>
                                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        
        <!-- End Service -->

        


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
        <script src="assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="assets/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="assets/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="assets/js/layout.min.js" type="text/javascript"></script>
        <script src="assets/js/components/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="assets/js/components/masonry.min.js" type="text/javascript"></script>

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
<table class = "table table-condensed" style="width : 80%; margin-top : 50px; margin-left : 130px" >

	<tr>
		<th>Jenjang</th>
		<th>Sekolah</th>
		<th>Peserta Didik</th>
		<th>Rombel</th>
		<th>Guru</th>
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