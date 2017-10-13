@extends('layouts.layouts')

@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="fa fa-bar-chart-o"></i>
						<h3 class="box-title">Pro-Active</h3>
					</div>
					<div class="box-body">
						<div id="donut-chart" style="height: 333px;"></div>
					</div>
					<!-- /.box-body-->
				</div>
				<!-- /.box -->
			</div>

			<div class="col-md-9">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Pro-Passive</h3>
					</div>
					<div class="box-body">
						<div class="col-md-4">
							<div class="box box-primary">
								<div class="box-header with-border">
									<i class="fa fa-bar-chart-o"></i>
									<h3 class="box-title">RAISA</h3>
								</div>
								<div class="box-body">
									<div id="donut-chart2" style="height: 250px;"></div>
								</div>
								<!-- /.box-body-->
							</div>
							<!-- /.box -->
						</div>

						<div class="col-md-4">
							<div class="box box-primary">
								<div class="box-header with-border">
									<i class="fa fa-bar-chart-o"></i>
									<h3 class="box-title">SCN</h3>
								</div>
								<div class="box-body">
									<div id="donut-chart3" style="height: 250px;"></div>
								</div>
								<!-- /.box-body-->
							</div>
							<!-- /.box -->
						</div>

						<div class="col-md-4">
							<div class="box box-primary">
								<div class="box-header with-border">
									<i class="fa fa-bar-chart-o"></i>
									<h3 class="box-title">OTHERS</h3>
								</div>
								<div class="box-body">
									<div id="donut-chart4" style="height: 250px;"></div>
								</div>
								<!-- /.box-body-->
							</div>
							<!-- /.box --> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Pro-Active</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<div class="col-md-12">
							<table id="example1" class="table table-bordered table-striped" style="width:20%; background-color: #fff;">
								  <tr>
								    <th rowspan="3">Progress</th>
								    <td>P0(Usulan/Potensi)</td>
								  </tr>
								  <tr>
								    <td>P1(Req, Des)</td>
								  </tr>
								  <tr>
								    <td>P2(Submit)</td>
								  </tr>
								  <tr>
								  	<th>Done</th>
								  	<td>P3(Proposal Ready)</td>
								  </tr>
								  <tr>
								  	<th colspan="2">Total</th>
								  </tr>
							</table>
						</div>
					</div><!-- /.table-responsive -->
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div>

</section>
@endsection