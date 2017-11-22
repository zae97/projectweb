<!doctype html>
<html lang="en">
<head>
  <title>Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Konveksiku</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section><div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form name="formRegister" onsubmit="return validasiForm()" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="namaDepan">Nama Depan</label>
                <input class="form-control" id="namaDepan" type="text" aria-describedby="nameHelp" name="ndpn" placeholder="Masukkan Nama Depan">
              </div>
              <div class="col-md-6">
                <label for="namaBelakang">Nama Belakang</label>
                <input class="form-control" id="namaBelakang" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama Belakang">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input class="form-control" id="alamat" type="text" aria-describedby="alamatHelp" placeholder="Masukkan Alamat">
          </div>
          <label for="nomor-telepon">Nomor Telepon</label>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">+62</span> 
              <input type="text" class="form-control" aria-label="nomor-telepon" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" type="text" aria-describedby="usernameHelp" placeholder="Masukkan Username">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Password1">Password</label>
                <input class="form-control" id="Password1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="ConfirmPassword">Konfirmasi password</label>
                <input class="form-control" id="ConfirmPassword" type="password" placeholder="Konfirmasi password">
              </div>
            </div>
          </div>
          <a class="btn btn-dark btn-block" href="home-user.php">Register</a>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>