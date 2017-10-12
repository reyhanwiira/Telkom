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
							<table id="example1" class="table no-margin">
								<thead>
									<tr>
										<th>No</th>
										<th>Project</th>
										<th>Segment</th>
										<th>Current Progress</th>
										<th>Last</th>
										<th>Current</th>
										<th>Progress Summary</th>
										<th>Status</th>
										<th>Information</th>
										<th>Start Project</th>
										<th>Finish Project</th>
										<th>Action</th>  
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!-- /.table-responsive -->
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div>

</section>
@endsection