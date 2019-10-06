@extends('layouts.master')

@section('content')

<section class="content-header">
	<h1>
		Tambah Data

	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Examples</a></li>
		<li class="active">Blank page</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border">


					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<form role="form" action="/data_warga/tambah" method="POST" >
							@csrf
							<div class="form-group">
								<label for="exampleInputEmail1">NAMA</label>
								<input required  name="nama" type="text" class="form-control" id="exampleInputEmail1" >

							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">NO KK</label>
								<input required  name="no_kk" type="number" class="form-control" id="exampleInputEmail1" ">				
							</div>
							<div class="form-group">
								<label>JENIS KELAMIN</label>
								<select required name="jenis_kelamin" class="form-control">
									<option value=""> </option>
									<option value="Laki">Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label>ALAMAT</label>
								<textarea required name="alamat" class="form-control" rows="3" placeholder="Enter ..."></textarea>
							</div>  
							<div class="form-group">
								<label for="exampleInputEmail1">TEMPAT KELAHIRAN</label>
								<input required  name="tempat_tgl_lahir" type="text" class="form-control" id="exampleInputEmail1" >

							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">TANGGAL</label>
								<input required  name="tanggal" type="date" class="form-control" id="exampleInputEmail1" >
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Status</label>
								<select required name="status" class="form-control" id="exampleFormControlSelect1">
									<option value=""></option>
									<option value="Belum Menikah">Belum menikah</option>
									<option value="Menikah">Menikah</option>
									<option value="Janda">Janda</option>
									<option value="Duda">Duda</option>
								</select>
								
							</div>


						</div>
						<!-- /.box-body -->

					</div>
					<!-- /.box -->
				</div>
				<div class="col-md-6">
					<div class="box">
						<div class="box-header with-border">


							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
								title="Collapse">
								<i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Atap Rumah</label>
									<select required name="atap_rumah" class="form-control" id="exampleFormControlSelect1">
										<option value=""></option>
										<option value="Seng">Seng</option>
										<option value="Genteng Tanah">Genteng Tanah</option>
										<option value="Asbes">Asbes</option>
										<option value="Kaca">Kaca</option>
										<option value="Bambu">Bambu</option>
										<option value="Plastik">Plastik</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Lantai</label>
									<select required name="lantai" class="form-control" id="exampleFormControlSelect1">
										<option value=""></option>
										<option value="Tanah">Tanah</option>
										<option value="Keramik">Keramik</option>
										<option value="Marmer">Marmer</option>
										<option value="Granit">Granit</option>
									</select>

								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Dinding</label>
									<select required name="dinding" class="form-control" id="exampleFormControlSelect1">
										<option value=""></option>
										<option value="bambu">Bambu</option>
										<option value="batako">Batako</option>
										<option value="Beton">Beton</option>

									</select>

								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Daya Listrik/Wat</label>
									<select required name="no_listrik" class="form-control" id="exampleFormControlSelect1">
										<option value=""></option>
										<option value="250">250</option>
										<option value="450">450</option>
										<option value="900">900</option>
										<option value="1300">1300</option>
									</select>
								</div>		
								<div class="form-group">
									<label for="exampleInputEmail1">PEKERJAAN</label>
									<input required  name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" >

								</div>
								<div class="form-group">
									<label for="exampleFormControlInput1">Pendapatan</label>
									<input required name="pendapatan" type="text" class="form-control" id="exampleFormControlInput1" >

								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Tahun Pendaftaran</label>
									<select required name="Tahun" class="form-control" id="exampleFormControlSelect1">
										<option value=""></option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
									</select>
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
		@stop