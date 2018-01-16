<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dinkes | Pengajuan Form</title>
        <meta name="description" content="Website Dinkes">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="css/css_pengajuan.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>

           
    <nav class="navbar navbar-default navbar-bg">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img class="logo-img" src="img/logo.png" alt=""></a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <h2 class="nav-judul"><b>SISTEM INFORMASI PERIZINAN TENAGA KESEHATAN <br>KOTA MALANG</b></h2>
                <ul class="nav navbar-nav navbar-right navku">
                    <li><a href="#">Registrasi</a></li>
                    <li><a href="#" id="myBtn">Login</a></li>
                </ul>
            </div>
            </nav>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="background-color: rgba(31, 113, 184, 0.50) !important;  ">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: rgba(255,255,255,0.86) !important;">
        <div class="modal-header text-center" style="padding:35px 50px;">
          <h2><span class="glyphicon glyphicon-lock"></span> Login</h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Masukkan email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Masukkan password">
            </div>

              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
          <p>Lupa <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div> 


        <div class="container">
                    <?php include('SIKP_okupasiterapis.php');?>
        </div>

    </body>
</html>