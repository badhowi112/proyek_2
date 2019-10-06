@extends('layouts.master')

@section('content')

<section class="content-header">
	<h1>
		Diagram Data Warga
		
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
					<h3 class="box-title">A</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div id="columnchart_material" style="width: 500px; height: 300px;">
						</div>  

					</div>
					<!-- /.box-body -->
					
					<!-- /.box-footer-->
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-6">
				<div class="box">
				<div class="box-header with-border">
						<h3 class="box-title">B</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div id="donutchart" style="width: 500px; height: 300px;"></div> 

					</div>
					<!-- /.box-body -->
					
					<!-- /.box-footer-->
				</div>
				<!-- /.box -->
			</div>
		</div>

	</section>
	<!-- /.content -->


	@stop

	@section('footer')
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['bar']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Year', 'Data Warga'],

				@foreach( $data_warga as $data)

				[<?php echo "'$data->Tahun'" ?>,{{$data->number}}],

				@endforeach
				]);

			var options = {
				chart: {
					title: 'Diagram Data Warga Per-Tahun',
					subtitle: 'Data warga, 2016-2018',
				}
			};

			var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
		}
	</script>
{{-- bagian pie chart --}} 
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
        
        @foreach($warga as $dat)
            [<?php echo "'$dat->Tahun'" ?>,{{$dat->number}}],
        @endforeach
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
	@stop