<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buat akun</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="CRUD" id="CRUD"> 
      <div class="container">
        <div class="jumbotron text-center">
          <h1>Edit sekolah</h1>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <form class="inner-login" method="post" onsubmit="return validasi_input(this)">
              
              
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="form-group">
                    <input name="fName" placeholder="First Name" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <input name="lName" placeholder="Last Name" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <input name="username" placeholder="Username" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <input name="email" placeholder="email" type="email" class="form-control">
                  </div>

                   <div class="form-group">
                   <input type="password" name="password" placeholder="Password" class="form-control">
                  </div>

                  <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="jeniskelamin" value="Laki">
                        <label>Laki-laki</label>
                    </label>
                    <label>
                        <input type="radio"  name="gender" id="jeniskelamin" value="perem">
                        <label>perempuan</label>
                    </label>
                  </div>

                  

                   <div class="form-group">
                   <input type="text" name="sekolah" placeholder="Asal sekolah" class="form-control">
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="asal_kota">
                      <option value="">Asal kota</option>
                      <option value="diy">Yogyakarta</option>
                      <option value="dki">Jakarta</option>
                      <option value="kotakembang">Bandung</option>
                      <option value="bonek">Surabaya</option>
                      <option value="selatsolo">Solo</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="privileges">
                      <option value="">Pilih hak akses</option>
                      <option value="1">Admin</option>
                      <option value="0">User</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <input type="telp" name="telepon" placeholder="No. Telepon" class="form-control">
                  </div>

                  <div class="checkbox">
                  <label>
                    <input type="checkbox" id="blankCheckbox" value="option1">
                    I agree to the terms and conditions
                  </label>
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-info" name="submit">Sign-up</button>
                  </div>
               </div>
             </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>