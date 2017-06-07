<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
          $row=$datasekolah->result();

?>

    <div class="profil">
    <div class="row">
      <div class="well well-lg">
        <div style= "color : white"><h1>Sekolah</h1></div>
    </div>
      <div class="well well-tambahan col-md-2">
        <img class="img-circle"src="assets/img/sekolah.png" >
        <h3><?php echo $row[0]->nama_sekolah; ?></h3>
        <p><?php echo $row[0]->npsn; ?></p>
      </div>
      <div class="well well-data col-md-2">
        <form class="form-horizontal" action="<?php echo base_url('sekolah/update'); ?>;" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" >Visi          :</label>
            <div class="col-sm-7">
              <textarea class="form-control" rows="3" name="visi"><?php echo $row[0]->visi; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Misi          :</label>
            <div class="col-sm-7">
              <textarea class="form-control" rows="3" name="misi"><?php echo $row[0]->misi; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Kepala Sekolah:</label>
            <div class="col-sm-7">
              <input type="hidden" name="npsn" value="<?php echo $row[0]->npsn; ?>">
              <input class="form-control" name="kepsek" value="<?php echo $row[0]->kepala_sekolah; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Wakil Kepala    :</label>
            <div class="col-sm-7">
              <input class="form-control" name="wakasek" value="<?php echo $row[0]->wakil_kepala; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Alamat          :</label>
            <div class="col-sm-7">
              <textarea class="form-control" rows="3" name="alamat"><?php echo $row[0]->alamat; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Email          :</label>
            <div class="col-sm-7">
              <input class="form-control" type="Email" name="email" value="<?php echo $row[0]->email; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >No. Telp         :</label>
            <div class="col-sm-7">
              <input class="form-control" name="telepon" value="<?php echo $row[0]->telepon; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" >Jumlah laki-laki     :</label>
            <div class="col-sm-7">
              <input class="form-control" name="jlk" value="<?php echo $row[0]->jumlah_putra; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" >Jumlah perempuan     :</label>
            <div class="col-sm-7">
              <input class="form-control" name="jpr" value="<?php echo $row[0]->jumlah_putri; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" >Jumlah Siswa          :</label>
            <div class="col-sm-7">
              <input class="form-control" name="js" value="<?php echo $row[0]->jumlah_siswa; ?>">
            </div>
          </div>

          <div class="col-md-10 text-right">
                <button type="submit" class="btn btn-info" value="login" name="submit">Simpan</button>
              </div>
        </form>
      </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
}
  </body>
</html>