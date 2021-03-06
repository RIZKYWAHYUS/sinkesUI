
 
                <div class="row text-center">
                    <h2 class="judulRegistrasi"><b>Form Permohonan</b></h2>
                    <h2 class="nomartop judulRegistrasi"><b>Surat Izin Praktek Dokter</b></h2>                    
                </div>

                <div class="row">
                    <div class="kotakform col-lg-12">
                        <form class="form-horizontal" action="/action_page.php">
                          
                        <?php include('form-umum.php');?>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">No STR :</label>
                                <div class="col-sm-8"> 
                                <input type="text" class="form-control" id="pwd" placeholder="Masukkan No. SIB">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">No. SIP :</label>
                                <div class="col-sm-8"> 
                                <input type="text" class="form-control" id="pwd" placeholder="Masukkan No. SIPB">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Unit Kerja :</label>
                                <div class="col-sm-8"> 
                                <input type="text" class="form-control" id="pwd" placeholder="Masukkan Alamat Praktek Perorangan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Anggota Organisasi Profesi (IDI / PDGI)</label>
                                <div class="col-sm-8"> 
                                    <select name="anggotaprofesi" class="form-control" id="anggotaprofesi" placeholder="Anggota Profesi">
                                        <option>Tidak</option>
                                        <option>IDI</option>
                                        <option>PDGI</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">No. Rekomm (IDI/PDGI)</label>
                                <div class="col-sm-8"> 
                                    <input name="norekom" type="text" class="form-control" id="pwd" placeholder="Masukkan No. Rekom IDI/PDGI">
                                </div>
                            </div>


                            <!-- COMPONENT START -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan KTP</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan KTP' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- COMPONENT START -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan STR</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan Recomendasi Puskesmas ' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan SK Pertama (Bagi PNS)</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan SK Pertama (Bagi PNS) ' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan SK Pangkat Terakhir (Bagi PNS)</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan SK Pangkat Terakhir (Bagi PNS)' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan SK Pengangkatan Pwgawai Honorer/Tetap (Bagi Pegawai Swasta)</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan SK Pengangkatan Pwgawai Honorer/Tetap (Bagi Pegawai Swasta)' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            

                          
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan SK Pensiun (Bagi Purna Tugas)</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan SK Pensiun (Bagi Purna Tugas)' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan Surat Dokter Pengawas 
                                </label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan Surat Kesanggupan Dokter Pengawas  ' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan Rekomendasi Atasan </label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan Rekomendasi dari Atasan Langsung (Dokter/Dokter Gigi)  ' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan Surat Pernyataan Memiliki Tempat Praktik</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan Surat Pernyataan Memiliki Tempat Praktik' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan Surat Rekomendasi Organisasi Profesi (IDI/PDGI)</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Upload Scan Surat Rekomendasi Organisasi Profesi yang masih berlaku' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Scan Surat Keterangan Kepala Dinas Kesehatan Setempat (Bila Dari luar Malang)</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-file" name="Fichier1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Pilih</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Jika Berasal Dari Luar Malang / Tempat Praktik di luar Malang" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>
                            </div>



                          <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="marleft40 buttonku btn btn-default">Ajukan</button>
                                    <button type="button" href="/" class="marleft40 buttonkubatal btn btn-default">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

   




            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>

 
            <!-- modal -->
        <script>
            $(document).ready(function(){
                $("#myBtn").click(function(){
                    $("#myModal").modal();
                });
            });
        </script>



<!-- //inputan -->
            <script>

            function bs_input_file() {
                $(".input-file").before(
                    function() {
                        if ( ! $(this).prev().hasClass('input-ghost') ) {
                            var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                            element.attr("name",$(this).attr("name"));
                            element.change(function(){
                                element.next(element).find('input').val((element.val()).split('\\').pop());
                            });
                            $(this).find("button.btn-choose").click(function(){
                                element.click();
                            });
                            $(this).find("button.btn-reset").click(function(){
                                element.val(null);
                                $(this).parents(".input-file").find('input').val('');
                            });
                            $(this).find('input').css("cursor","pointer");
                            $(this).find('input').mousedown(function() {
                                $(this).parents('.input-file').prev().click();
                                return false;
                            });
                            return element;
                        }
                    }
                );
            }
            $(function() {
                bs_input_file();
            });
            
            </script>


<!-- datepicker -->
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>


<!-- //upload -->
<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
