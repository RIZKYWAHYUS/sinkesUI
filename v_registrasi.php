<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dinkes - Registrasi</title>
        <meta name="description" content="Website Dinkes">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="css/css_registrasi.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">




    </head>
    <body>
        <div class="selimutbiru">
           
           <?php include('navbar.php');?>


            <div class="container">
                <div class="row text-center">
                    <h2 class="judulRegistrasi"><b>REGISTRASI</b></h2>
                    <p class="pRegistrasi">Silahkan Lengkapi Data-data Berikut</p>
                </div>

                <div class="row">
                    <div class="kotakform col-lg-12">
                        <form class="form-horizontal" action="/action_page.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Nama Lengkap :</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Tempat, Tanggal Lahir :</label>
                                <div class="col-sm-8"> 
                                    <div class="nopadding col-lg-5">
                                        <input type="text" class="form-control" id="pwd" placeholder="Masukkan Tempat Lahir">                                    
                                    </div>
                                    <div class="col-lg-1">
                                        <p>,</p>
                                    </div>
                                    <div class="nopadding col-lg-6">
                                    
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Masukkan Tanggal Lahir"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
           

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">No. KTP :</label>
                                <div class="col-sm-8"> 
                                <input type="text" class="form-control" id="pwd" placeholder="Masukkan No. KTP">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Username :</label>
                                <div class="col-sm-8"> 
                                <input type="text" class="form-control" id="pwd" placeholder="Masukkan Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-8"> 
                                <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Ulangi Password:</label>
                                <div class="col-sm-8"> 
                                <input type="password" class="form-control" id="pwd" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Jenis Tenaga Kerja :</label>
                                <div class="col-sm-8"> 
                                    <select class="form-control" id="sel1" placeholder="Masukkan Jenis Tenaga Kerja anda">
                                        <option>Perawat</option>
                                        <option>Radiografer</option>
                                        <option>Bidan</option>
                                        <option>Dokter</option>                                        
                                        <option>Tenaga Gizi</option>
                                        <option>Tenaga Sanitarian</option>
                                        <option>Okupasi Terapis</option>
                                        <option>Teknisi Gizi</option>
                                        <option>Teknisi Gigi</option>                                        
                                        <option>Ortotis Prostetis</option>
                                        <option>Perawat Anestesi</option>
                                        <option>Perekam Medis</option>
                                        <option>Terapis Wicara</option>
                                        <option>Fisioterapis</option>
                                        <option>Pengobat Tradisional</option>                                        
                                        <option>Ahli Teknologi Laboratorium Medik</option>
                                        <option>Elektromedis</option>
                                        <option>Perawat Gigi</option>
                                        <option>Tukang Gigi</option>                                        
                                        <option>Refraksionis Optisien</option>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="marleft40 buttonku btn btn-default">Register</button>
                                    <button type="button" href="/" class="marleft40 buttonkubatal btn btn-default">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>




            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>

 
        <script>
            $(document).ready(function(){
                $("#myBtn").click(function(){
                    $("#myModal").modal();
                });
            });
        </script>


        </div>   
    </body>
</html>