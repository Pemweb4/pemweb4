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
                            <a class="logo-wrap" href="#">
                                <img class="logo-img logo-img-main" src="assets/img/tut.png" style="width: 60px;height: 60px">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="contoh">
                            <ul class="navbar-nav navbar-nav-left">
                                <li >
                                    <a class= "nav-item-child nav-item-hover active" href="<?=base_url()?>sekolah/index">HOME</a>
                                </li>

                                <li class="dropdown">
                                    <a href="" class= "nav-item-child nav-item-hover active" data-toggle="dropdown" role="button" aria-expanded="false">Data sekolah<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="">Kab Bantul</a>
                                             <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/8'); ?>">Bambanglipuro</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/13'); ?>">Bangutapan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/11'); ?>">Bantul</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/5'); ?>">Dlingo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/4'); ?>">Imogiri</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/7'); ?>">Jetis</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/16'); ?>">Kasihan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/2'); ?>">Kretek</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/10'); ?>">Pajangan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/9'); ?>">Pandak</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/14'); ?>">Piyungan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/6'); ?>">Pleret</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/3'); ?>">Pundong</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/1'); ?>">Sanden</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/15'); ?>">Sedayu</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/12'); ?>">Sewon</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/17'); ?>">Srandakan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Sleman</a>
                                             <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/61'); ?>">Berbah</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/62'); ?>">Cangkringan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/63'); ?>">Depok</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/64'); ?>">Gamping</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/65'); ?>">Godean</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/66'); ?>">Kalasan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/67'); ?>">Minggir</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/68'); ?>">Mlati</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/69'); ?>">Moyudan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/70'); ?>">Ngaglik</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/71'); ?>">Ngemplak</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/72'); ?>">Pakem</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/73'); ?>">Prambanan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/74'); ?>">Sayegan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/75'); ?>">Sleman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/76'); ?>">Tempel</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/77'); ?>">Turi</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kota Yogyakarta</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/78'); ?>">Danurejan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/79'); ?>">Gedongtengen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/80'); ?>">Gondokusuman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/81'); ?>">Gondomanan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/82'); ?>">Jetis</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/83'); ?>">Kotagede</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/84'); ?>">Kraton</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/85'); ?>">Mantrijeron</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/86'); ?>">Mergangsan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/87'); ?>">Ngampilan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/88'); ?>">Pakualaman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/89'); ?>">Tegalrejo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/90'); ?>">Umbulharjo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/91'); ?>">Wirobrajan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Kulon progo</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/50'); ?>">Galur</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/49'); ?>">Girimulyo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/51'); ?>">Kalibawang</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/52'); ?>">Kokap</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/53'); ?>">Lendah</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/54'); ?>">Nanggulan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/55'); ?>">Panjatan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/56'); ?>">Pengasih</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/57'); ?>">Samigaluh</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/58'); ?>">Sentolo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/59'); ?>">Temon</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/60'); ?>">Wates</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Gunungkidul</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/18'); ?>">Gedangsari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/19'); ?>">Girisubo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/20'); ?>">Karangmojo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/21'); ?>">Ngawen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/22'); ?>">Nglipar</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/23'); ?>">Paliyan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/24'); ?>">Panggang</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/25'); ?>">Patuk</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/26'); ?>">Playen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/27'); ?>">Ponjong</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/28'); ?>">Purwosari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/29'); ?>">Rongkop</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/30'); ?>">Sabtosari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/31'); ?>">Semanu</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/32'); ?>">Semen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/34'); ?>">Tanjungsari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/35'); ?>">Tepus</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/kecamatan/36'); ?>">Wonosari</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="" class= "nav-item-child nav-item-hover active" data-toggle="dropdown" role="button" aria-expanded="false">Data Peserta Didik<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="">Kab Bantul</a>
                                             <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/8'); ?>">Bambanglipuro</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/13'); ?>">Bangutapan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/11'); ?>">Bantul</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/5'); ?>">Dlingo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/4'); ?>">Imogiri</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/7'); ?>">Jetis</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/16'); ?>">Kasihan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/2'); ?>">Kretek</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/10'); ?>">Pajangan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/9'); ?>">Pandak</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/14'); ?>">Piyungan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/6'); ?>">Pleret</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/3'); ?>">Pundong</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/1'); ?>">Sanden</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/15'); ?>">Sedayu</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/12'); ?>">Sewon</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/17'); ?>">Srandakan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Sleman</a>
                                             <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/61'); ?>">Berbah</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/62'); ?>">Cangkringan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/63'); ?>">Depok</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/64'); ?>">Gamping</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/65'); ?>">Godean</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/66'); ?>">Kalasan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/67'); ?>">Minggir</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/68'); ?>">Mlati</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/69'); ?>">Moyudan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/70'); ?>">Ngaglik</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/71'); ?>">Ngemplak</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/72'); ?>">Pakem</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/73'); ?>">Prambanan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/74'); ?>">Sayegan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/75'); ?>">Sleman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/76'); ?>">Tempel</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/77'); ?>">Turi</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kota Yogyakarta</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/78'); ?>">Danurejan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/79'); ?>">Gedongtengen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/80'); ?>">Gondokusuman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/81'); ?>">Gondomanan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/82'); ?>">Jetis</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/83'); ?>">Kotagede</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/84'); ?>">Kraton</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/85'); ?>">Mantrijeron</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/86'); ?>">Mergangsan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/87'); ?>">Ngampilan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/88'); ?>">Pakualaman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/89'); ?>">Tegalrejo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/90'); ?>">Umbulharjo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/91'); ?>">Wirobrajan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Kulon progo</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/50'); ?>">Galur</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/49'); ?>">Girimulyo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/51'); ?>">Kalibawang</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/52'); ?>">Kokap</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/53'); ?>">Lendah</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/54'); ?>">Nanggulan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/55'); ?>">Panjatan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/56'); ?>">Pengasih</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/57'); ?>">Samigaluh</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/58'); ?>">Sentolo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/59'); ?>">Temon</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/60'); ?>">Wates</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Gunungkidul</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/18'); ?>">Gedangsari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/19'); ?>">Girisubo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/20'); ?>">Karangmojo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/21'); ?>">Ngawen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/22'); ?>">Nglipar</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/23'); ?>">Paliyan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/24'); ?>">Panggang</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/25'); ?>">Patuk</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/26'); ?>">Playen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/27'); ?>">Ponjong</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/28'); ?>">Purwosari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/29'); ?>">Rongkop</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/30'); ?>">Sabtosari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/31'); ?>">Semanu</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/32'); ?>">Semen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/34'); ?>">Tanjungsari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/35'); ?>">Tepus</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/siswa_kec/36'); ?>">Wonosari</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="" class= "nav-item-child nav-item-hover active" data-toggle="dropdown" role="button" aria-expanded="false">Data Guru<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="">Kab Bantul</a>
                                             <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/8'); ?>">Bambanglipuro</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/13'); ?>">Bangutapan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/11'); ?>">Bantul</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/5'); ?>">Dlingo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/4'); ?>">Imogiri</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/7'); ?>">Jetis</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/16'); ?>">Kasihan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/2'); ?>">Kretek</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/10'); ?>">Pajangan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/9'); ?>">Pandak</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/14'); ?>">Piyungan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/6'); ?>">Pleret</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/3'); ?>">Pundong</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/1'); ?>">Sanden</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/15'); ?>">Sedayu</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/12'); ?>">Sewon</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/17'); ?>">Srandakan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Sleman</a>
                                             <ul class="dropdown-menu">
                                               <li><a href="<?php echo base_url ('sekolah/guru_kec/61'); ?>">Berbah</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/62'); ?>">Cangkringan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/63'); ?>">Depok</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/64'); ?>">Gamping</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/65'); ?>">Godean</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/66'); ?>">Kalasan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/67'); ?>">Minggir</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/68'); ?>">Mlati</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/69'); ?>">Moyudan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/70'); ?>">Ngaglik</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/71'); ?>">Ngemplak</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/72'); ?>">Pakem</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/73'); ?>">Prambanan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/74'); ?>">Sayegan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/75'); ?>">Sleman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/76'); ?>">Tempel</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/77'); ?>">Turi</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kota Yogyakarta</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/78'); ?>">Danurejan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/79'); ?>">Gedongtengen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/80'); ?>">Gondokusuman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/81'); ?>">Gondomanan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/82'); ?>">Jetis</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/83'); ?>">Kotagede</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/84'); ?>">Kraton</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/85'); ?>">Mantrijeron</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/86'); ?>">Mergangsan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/87'); ?>">Ngampilan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/88'); ?>">Pakualaman</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/89'); ?>">Tegalrejo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/90'); ?>">Umbulharjo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/91'); ?>">Wirobrajan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Kulon progo</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/50'); ?>">Galur</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/49'); ?>">Girimulyo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/51'); ?>">Kalibawang</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/52'); ?>">Kokap</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/53'); ?>">Lendah</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/54'); ?>">Nanggulan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/55'); ?>">Panjatan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/56'); ?>">Pengasih</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/57'); ?>">Samigaluh</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/58'); ?>">Sentolo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/59'); ?>">Temon</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/60'); ?>">Wates</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a href="">Kab Gunungkidul</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/18'); ?>">Gedangsari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/19'); ?>">Girisubo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/20'); ?>">Karangmojo</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/21'); ?>">Ngawen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/22'); ?>">Nglipar</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/23'); ?>">Paliyan</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/24'); ?>">Panggang</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/25'); ?>">Patuk</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/26'); ?>">Playen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/27'); ?>">Ponjong</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/28'); ?>">Purwosari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/29'); ?>">Rongkop</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/30'); ?>">Sabtosari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/31'); ?>">Semanu</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/32'); ?>">Semen</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/34'); ?>">Tanjungsari</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/35'); ?>">Tepus</a></li>
                                                <li><a href="<?php echo base_url ('sekolah/guru_kec/36'); ?>">Wonosari</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                
                            </ul>

                            <ul class="navbar-nav navbar-nav-right">                                
                                <li>
                                    <a class="nav-item-child nav-item-hover" href="login.html">Login</a>
                                </li>
                            </ul>


                        </div>
                    </div>


                    </div>
                </div>
            </nav>
        </header>