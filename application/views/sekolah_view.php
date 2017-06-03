<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Data Sekolah Jogja</title>
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
        <link href="assets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="assets/img/tut.png" style="width: 60px;height: 60px">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="data-sekolah.html">Data Sekolah</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href=".html">Data Guru</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href=".html">Data Siswa</a></li>
                                
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="login.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
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
        <div class="bg-color-sky-light" data-auto-height="true">
            
      
        </div>
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
=======
<html>
<head>
	<title></title>
</head>
<body>
>>>>>>> 1d300dc607e2b7704072937640df64ae02178dc1
<?php
	$row=$jumlahallsekolah->result();
	$row1=$jumlahallsiswa->result();
	$row2=$jumlahallguru->result();
?>
<<<<<<< HEAD
<table class = "table table-condensed">
=======
<table border="1">
>>>>>>> 1d300dc607e2b7704072937640df64ae02178dc1
	<tr>
		<th>Jenjang</th>
		<th>Sekolah</th>
		<th>Peserta Didik</th>
		<th>Rombel</th>
		<th>Guru</th>
		<th>Tendik</th>
<<<<<<< HEAD
=======
		<th>Jumlah Kirim</th>
>>>>>>> 1d300dc607e2b7704072937640df64ae02178dc1
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

<<<<<<< HEAD
<a href='<?php echo base_url ('sekolah/kecamatan/61'); ?>'>Berbah</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/62'); ?>'>Cangkringan</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/63'); ?>'>Depok</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/64'); ?>'>Gamping</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/65'); ?>'>Godean</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/66'); ?>'>Kalasan</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/67'); ?>'>Minggir</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/68'); ?>'>Mlati</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/69'); ?>'>Moyudan</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/70'); ?>'>Ngaglik</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/71'); ?>'>Ngemplak</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/72'); ?>'>Pakem</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/73'); ?>'>Prambanan</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/74'); ?>'>Seyegan</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/75'); ?>'>Sleman</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/76'); ?>'>Turi</a><br>
<a href='<?php echo base_url ('sekolah/kecamatan/77'); ?>'>Tempel</a><br>

<a href='<?php echo base_url ('sekolah/guru_kec/61'); ?>'>Guru Berbah</a><br>

=======
>>>>>>> 1d300dc607e2b7704072937640df64ae02178dc1
</body>
</html>