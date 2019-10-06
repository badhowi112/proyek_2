@extends('layouts.master')

@section('content')
@if (session('sukses'))      
@endif
@if (session('Delete'))
@endif
<section class="content-header">
	<h1>
		List Data Warga

	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><i class="fa fa-users"></i> Data Warga</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- Default box -->
			<div class="box">
				<div class="box-header">


					<div class="box-tools">

						<form method="GET" action="/data_warga">
							<div  class="input-group input-group-sm hidden-xs" style="width: 150px;">

								<input name="cari" type="text" name="table_search" class="form-control pull-right" placeholder="Cari Nama">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
					</div>
					<a href="/testing" class="btn btn-info btn-sm">TAMBAH DATA</a>

					<div class="box-body">

						<div class="ex1">
							<table class="content-table" >
								<thead>
									<tr>
										<th>NAMA</th>
										<th>NO.KK</th>
										<th>JENIS KELAMIN</th>
										<th>ALAMAT</th>
										<th>TEMPAT KELAHIRAN</th>
										<th>TANGGAL</th>
										<th>STATUS</th>
										<th>ATAP RUMAH</th>
										<th>LANTAI</th>
										<th>DINDING</th>
										<th>DAYA LISTRIK</th>
										<th>PEKERJAAN</th>
										<th>PENDAPATAN</th>
										<th>TAHUN PENDAFTARAN</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>

									@foreach ($data_warga as $data2)
									<tr>
										<td>{{$data2->nama}}</td>
										<td>{{$data2->no_kk}}</td>
										<td>{{$data2->jenis_kelamin}}</td>
										<td>{{$data2->alamat}}</td>
										<td>{{$data2->tempat_tgl_lahir}}</td>
										<td>{{$data2->tanggal}}</td>
										<td>{{$data2->status}}</td>
										<td>{{$data2->atap_rumah}}</td>
										<td>{{$data2->lantai}}</td>
										<td>{{$data2->dinding}}</td>
										<td>{{$data2->no_listrik}}</td>
										<td>{{$data2->pekerjaan}}</td>
										<td>{{$data2->pendapatan}}</td>
										<td>{{$data2->Tahun}}</td>
										<td>
											<a href="#" class="btn btn-danger btn-sm delete" 
												data-warga="{{$data2->id}}" >Delete</a>
												<a href="/data_warga/{{$data2->id}}/edit" class="btn btn-warning btn-sm "
													>Update</a>
												</td>
											</tr>

											@endforeach


										</tbody>
									</table>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								Footer
							</div>
							<!-- /.box-footer-->
						</div>
						<!-- /.box -->
					</div>
				</div>

			</section>
			<!-- /.content -->

			<style>
				div.ex1 {

					max-width: 97%;
					height: 490px;
					overflow-x: scroll;

					margin-left: 20px;
					margin-bottom: 10px;
					margin-top: 0px;
					margin-left: 20px;
				}

				.content-table {
					border-collapse: collapse;
					margin: 25px 0;
					font-size: 0.9em;
					min-width: 400px;
					border-radius: 5px 5px 0 0;
					overflow: hidden;
					box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
				}

				.content-table thead tr {
					background-color: #009879;
					color: #ffffff;
					text-align: left;
					font-weight: bold;
				}

				.content-table th,
				.content-table td {
					padding: 12px 15px;
					text-align: center;
				}

				.content-table tbody tr {
					border-bottom: 1px solid #dddddd;
				}

				.content-table tbody tr:nth-of-type(even) {
					background-color: #f3f3f3;
				}

				.content-table tbody tr:last-of-type {
					border-bottom: 2px solid #009879;
				}

				.content-table tbody tr.active-row {
					font-weight: bold;

					color: #009879;
				}


			</style>

			@stop

			@section('footer')
			<script>
				$('.delete').click(function(){
					var datawarga = $(this).attr('data-warga')
					swal({
						title: "Data Akan Di Hapus?",
						text: "Menghapus data dengan id "+datawarga+"? ",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {
							window.location = "/data_warga/"+datawarga+"/delete";
						}
					});
				});
			</script>
			<style>
				.hide {
					opacity: 0;
				}
			</style>
			<script>
				$(function () {
					$('#example1').DataTable()
					$('#example2').DataTable({
						'paging'      : true,
						'lengthChange': false,
						'searching'   : false,
						'ordering'    : true,
						'info'        : true,
						'autoWidth'   : false,
						"scrollX"     : true
					})
				})
			</script>

			@stop