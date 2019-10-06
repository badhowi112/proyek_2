    @extends('layouts.master')

    @section('content')

    <section class="content-header">
        <h1>
           Tambah Data
          
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li class="active"><i class="fa fa-users"></i> Data Warga</li>
       </ol>
   </section>

   <section class="content">
    <div class="row">
        <div class="col-md-8">


           <!-- Default box -->
           <div class="box">
              <div class="box-header with-border">
                 <h3 class="box-title">FORM TAMBAH DATA WARGA</h3>

                 <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                       <i class="fa fa-times"></i></button>
                   </div>
               </div>
               <div class="box-body">

                <form method="POST" action="/testing/add" id="register_form">
                   @csrf
                   <ul class="nav nav-tabs">
                      <li class="nav-item">
                         <a class="nav-link active_tab1" 
                         style="border: 1px solid #ccc"
                         id="list_login_details">
                         IDENTITAS	
                     </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link inactive_tab1" 
                  style="border: 1px solid #ccc"
                  id="list_personal_details">
                  KATEGORI	
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link inactive_tab1" 
            style="border: 1px solid #ccc"
            id="list_contact_details">
            TAHUN PENDAFTARAN	
        </a>
    </li>
</ul>
<div class="tab-content" style="margin-top:  16px;">
    <div class="tab-pane active" id="login_details">
        <div class="panel panel-default">
           <div class="panel-heading">
              INFORMASI DATA DIRI
          </div>
          <div class="panel-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NAMA</label>
                    <input name="nama" id="nama" type="text" class="form-control" />
                    <span id="error_nama" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>JENIS KELAMIN</label>
                    <select name="jenis_kelamin" class="form-control white" id="laki"  >
                        <option value=""> </option>
                        <option value="Laki">Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <span id="error_jk" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" /></textarea>
                    <span id="error_alamat" class="text-danger"></span>
                </div>  
            </div>
            {{-- kolom ke dua --}}
            <div class="col-md-6">
               <div class="form-group">
                <label >NO KK</label>
                <input name="no_kk" type="number" class="form-control" id="no_kk" /> 
                <span id="error_nomorkk" class="text-danger"></span>            
            </div>
            <div class="form-group">
                <label >TEMPAT KELAHIRAN</label>
                <input  name="tempat_tgl_lahir" type="text" class="form-control" id="tempat_tgl_lahir" / >
                <span id="error_tempat_kelahiran" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label >TANGGAL</label>
                <input name="tanggal" type="date" class="form-control" id="tanggal" />
                <span id="error_tanggal" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label >Status</label>
                <select  name="status" class="form-control white" id="status" >
                    <option value=""></option>
                    <option value="Belum Menikah">Belum menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select>
                <span id="error_status" class="text-danger"></span>
            </div>
        </div>

        <br />
        <div align="center">
            <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-sm">Next</button>
        </div>

    </div>
</div>
</div>
<div class="tab-pane fade" id="personal_details">
    <div class="panel panel-default">
       <div class="panel-heading">
          STATUS TEMPAT TINGGAL
      </div>
      <div class="panel-body">
         <div class="col-md-6">
             <div class="form-group">
                <label >Atap Rumah</label>
                <select name="atap_rumah" class="form-control white" id="atap_rumah" >
                    <option value=""></option>
                    <option value="Seng">Seng</option>
                    <option value="Genteng Tanah">Genteng Tanah</option>
                    <option value="Asbes">Asbes</option>
                    <option value="Kaca">Kaca</option>
                    <option value="Bambu">Bambu</option>
                    <option value="Plastik">Plastik</option>
                </select>
                <span id="error_atap_rumah" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label >Dinding</label>
                <select required name="dinding" class="form-control white" id="dinding">
                    <option value=""></option>
                    <option value="bambu">Bambu</option>
                    <option value="batako">Batako</option>
                    <option value="Beton">Beton</option>
                </select>
                <span id="error_dinding" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>PEKERJAAN</label>
                <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" />
                <span id="error_pekerjaan" class="text-danger"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label >Lantai</label>
                <select name="lantai" class="form-control white" id="lantai" >
                    <option value=""></option>
                    <option value="Tanah">Tanah</option>
                    <option value="Keramik">Keramik</option>
                    <option value="Marmer">Marmer</option>
                    <option value="Granit">Granit</option>
                </select>
                <span id="error_lantai" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label >Daya Listrik/Wat</label>
                <select name="no_listrik" class="form-control white" id="no_listrik">
                    <option value=""></option>
                    <option value="250">250</option>
                    <option value="450">450</option>
                    <option value="900">900</option>
                    <option value="1300">1300</option>
                </select>
                <span id="error_no_listrik" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label >Pendapatan</label>
                <input name="pendapatan" type="text" class="form-control" id="pendapatan" />
                <span id="error_pendapatan" class="text-danger"></span>
            </div>
        </div>
        <br />
        <div align="center">
            <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-sm">Previous</button>
            <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-default btn-sm">Next</button>
        </div>
    </div>
</div>
</div>
</div>
<div class="tab-pane fade" id="contact_details">
    <div class="panel panel-default">
        <div class="panel-heading">
           PENDAFTARAN
       </div>
       <div class="panel-body">
           <div class="form-group">
            <label >Tahun Pendaftaran</label>
            <select required name="Tahun" class="form-control" id="Tahun">
                <option value=""></option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
            </select>

        </div>
        <br />
        <div align="center">
          <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-sm">Previous</button>
          <button type="submit" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-sm">Register</button>
      </div>
  </div>
</div>
</div>
</div>
</form>
</div>
</div>

</div>

<!-- /.box-footer-->
</div>
<!-- /.box -->

</section>
<!-- /.content -->
<style>
    	/*.box
    	{
    		width: 800px;
    		margin:0 auto;
    		}*/
    		.active_tab1
    		{
    			background-color: #fff;
    			color: #333;
    			font-weight: 600;
    		}
    		.inactive_tab1
    		{
    			background-color: #f5f5f5;
    			color: #333;
    			cursor: not-allowed;
    		}
    		.has-error
    		{
    			border-color: #cc0000;
    			background-color: #ffff99;
    		}
            .form-control.white{
                background: white;
            }


        </style>


        @stop

        @section('footer')
        <script>
          $(document).ready(function(){

           $('#btn_login_details').click(function(){
                    //variabel harus ada dulu
                    var error_nama = '';
                    var error_nomorkk = '';
                    var error_jk = '';
                    var error_alamat = '';
                    var error_tempat_kelahiran = '';
                    var error_tanggal = '';
                    var error_status = '';

                    //var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    //cek no_kk
                    if ($.trim($('#no_kk').val()).length == 0)
                    {
                       error_nomorkk = 'Email is required';
                       $('#error_nomorkk').text(error_nomorkk);
                       $('#no_kk').addClass('has-error');

                   }else
                   {
                       if ($.trim($('#no_kk').val()).length == 0) 
                       {
                          error_nomorkk = 'Invalid Email';
                          $('#error_nomorkk').text(error_nomorkk);
                          $('#no_kk').addClass('has-error');
                      } else 
                      {
                          error_nomorkk = '';
                          $('#error_nomorkk').text(error_nomorkk);
                          $('#no_kk').removeClass('has-error');
                      }
                  }
                  //cek nama
                  if ($.trim($('#nama').val()).length == 0) 
                  {
                   error_nama = 'nama is required';
                   $('#error_nama').text(error_nama);
                   $('#nama').addClass('has-error');
               } else 
               {
                   error_nama = '';
                   $('#error_nama').text(error_nama);
                   $('#nama').removeClass('has-error');
               }
               //cek jenis kelamin
               if ($.trim($('#laki').val()).length == 0) 
               {
                error_jk = 'Inputan Jenis Kelamin Kosong';
                $('#error_jk').text(error_jk);
                $('#laki').addClass('has-error');
            }
            else
            {
                error_jk = '';
                $('#error_jk').text(error_jk);
                $('#laki').removeClass('has-error');
            }
            // alamat
            if($.trim($('#alamat').val()).length == 0) 
            {
                error_alamat = 'Alamat Kosong';
                $('#error_alamat').text(error_alamat);
                $('#alamat').addClass('has-error');
            }else
            {
                error_alamat = '';
                $('#error_alamat').text(error_alamat);
                $('#alamat').removeClass('has-error');
            }
            //tempat kelahiran
            if($.trim($('#tempat_tgl_lahir').val()).length == 0)
            {
                error_tempat_kelahiran = 'Inputan Kosong';
                $('#error_tempat_kelahiran').text(error_tempat_kelahiran);
                $('#tempat_tgl_lahir').addClass('has-error');
            }
            else
            {
                error_tempat_kelahiran = '';
                $('#error_tempat_kelahiran').text(error_tempat_kelahiran);
                $('#tempat_tgl_lahir').removeClass('has-error');
            }
            //tanggal
            if($.trim($('#tanggal').val()).length == 0)
            {
                error_tanggal = 'Inputan Kosong';
                $('#error_tanggal').text(error_tanggal);
                $('#tanggal').addClass('has-error');
            }
            else 
            {
                error_tanggal = '';
                $('#error_tanggal').text(error_tanggal);
                $('#tanggal').removeClass('has-error');
            }

            //status
            if ($.trim($('#status').val()).length == 0) 
            {   
                error_status = 'Inputan Kosong';
                $('#error_status').text(error_status);
                $('#status').addClass('has-error');
            }
            else
            {
                error_status = '';
                $('#error_status').text(error_status);
                $('#status').removeClass('has-error');
            }
            if (error_nomorkk != '' || error_nama != '' || error_jk != '' || error_alamat !=  '' || error_tempat_kelahiran != '' || error_tanggal != '' || error_status != '') 
            {
               return false;
           }
           else 
           { 
    					//fungsi mengembalikan ke halaman selanjutnya
    					$('#list_login_details').removeClass('#active active_tab1');
    					$('#list_login_details').removeAttr('href data-toggle');
    					$('#login_details').removeClass('active');
    					$('#list_login_details').addClass('inactive_tab1');
    					$('#list_personal_details').addClass('active_tab1 active');
    					$('#list_personal_details').attr('href','#personal_details');
    					$('#list_personal_details').attr('data-toggle', 'tab');
    					$('#personal_details').addClass('active in');
    				}
    			});
    			//fungsi mengembalikan ke halaman sebelumnya
    			$('#previous_btn_personal_details').click(function(){
    				$('#list_personal_details').removeClass('active active_tab1');
    				$('#list_personal_details').removeAttr('href data-toggle');
    				$('#personal_details').removeClass('active in');
    				$('#list_personal_details').addClass('inactive_tab1');
    				$('list_login_details').removeClass('inactive_tab1');
    				$('#list_login_details').addClass('active_tab1 active');
    				$('#list_login_details').attr('href','#login_details');
    				$('#list_login_details').attr('data-toggle','tab');
    				$('#login_details').addClass('active in');
    			});

    			$('#btn_personal_details').click(function(){
                    var error_atap_rumah = '';
                    var error_lantai = '';
                    var error_dinding = '';
                    var error_no_listrik = '';
                    var error_pekerjaan = '';
                    var error_pendapatan = '';
                    var error_tahun = '';
                    //atap rumah
                    if($.trim($('#atap_rumah').val()).length == 0)
                    {
                        error_atap_rumah = 'Inputan Kosong';
                        $('#error_atap_rumah').text(error_atap_rumah);
                        $('#atap_rumah').addClass('has-error');
                    }
                    else{
                        error_atap_rumah = '';
                        $('#error_atap_rumah').text(error_atap_rumah);
                        $('#atap_rumah').removeClass('has-error');
                    }
                    //lantai
                    if($.trim($('#lantai').val()).length == 0){
                        error_lantai = 'Inputan Kosong';
                        $('#error_lantai').text(error_lantai);
                        $('#lantai').addClass('has-error');
                    }
                    else
                    {
                        error_lantai = '';
                        $('#error_lantai').text(error_lantai);
                        $('#lantai').removeClass('has-error');
                    }
                    //dinding
                    if ($.trim($('#dinding').val()).length == 0) 
                    {
                        error_dinding = 'Inputan Kosong';
                        $('#error_dinding').text(error_dinding);
                        $('#dinding').addClass('has-error');
                    }
                    else
                    {
                        error_dinding = '';
                        $('#error_dinding').text(error_dinding);
                        $('#dinding').removeClass('has-error');
                    }
                    //nomor listrik
                    if ($.trim($('#no_listrik').val()).length == 0) 
                    {
                        error_no_listrik = 'Inputan Kosong';
                        $('#error_no_listrik').text(error_no_listrik);
                        $('#no_listrik').addClass('has-error');
                    }
                    else
                    {
                        error_no_listrik = '';
                        $('#error_no_listrik').text(error_no_listrik);
                        $('#no_listrik').removeClass('has-error');
                    }
                    //pekerjaan
                    if($.trim($('#pekerjaan').val()).length == 0)
                    {
                        error_pekerjaan = 'Inputan Kosong';
                        $('#error_pekerjaan').text(error_pekerjaan);
                        $('#pekerjaan').addClass('has-error');
                    }
                    else
                    {
                        error_pekerjaan = '';
                        $('#error_pekerjaan').text(error_pekerjaan);
                        $('#pekerjaan').removeClass('has-error');
                    }
                    //pendapatan
                    if($.trim($('#pendapatan').val()).length == 0)
                    {
                        error_pendapatan = 'Inputan Kosong';
                        $('#error_pendapatan').text(error_pendapatan);
                        $('#pendapatan').addClass('has-error');
                    }
                    else
                    {
                     error_pendapatan = '';
                     $('#error_pendapatan').text(error_pendapatan);
                     $('#pendapatan').removeClass('has-error');
                 }
                 if (error_atap_rumah != '' || error_lantai != '' || error_dinding != '' || error_no_listrik != '' || error_pekerjaan != '' || error_pendapatan != '')
                 {
                  return false;
              }
              else
              {
    				 	//fungsi mengembalikan ke halaman selanjutnya
    				 	$('#list_personal_details').removeClass('active active_tab1');
    				 	$('#list_personal_details').removeAttr('href data-toggle');
    				 	$('#personal_details').removeClass('active');
    				 	$('#list_personal_details').addClass('inactive_tab1');
    				 	$('#list_contact_details').removeClass('inactive_tab1');
    				 	$('#list_contact_details').addClass('active_tab1 active');
    				 	$('#list_contact_details').attr('href','#contact_details');
    				 	$('#list_contact_details').attr('data-toggle','tab');
    				 	$('#contact_details').addClass('active in');
    				 }
                 });

    			//fungsi mengembalikan ke halaman sebelumnya
    			$('#previous_btn_contact_details').click(function(){
    				$('#list_contact_details').removeClass('active active_tab1');
    				$('#list_contact_details').removeAttr('href data-toggle');
    				$('#contact_details').removeClass('active in');
    				$('#list_contact_details').addClass('inactive_tab1');
    				$('#list_personal_details').removeClass('inactive_tab1');
    				$('#list_personal_details').addClass('active_tab1 active');
    				$('#list_personal_details').attr('href','#personal_details');
    				$('#list_personal_details').attr('data-toggle','tab');
    				$('#personal_details').addClass('active in');
    			});
    		});

    	</script>

    	@stop
