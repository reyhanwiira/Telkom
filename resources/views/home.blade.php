@extends('layouts.layouts')
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- ChartJS -->
<script src="../../bower_components/Chart.js/Chart.js"></script>
<!-- page script -->
<script>
	$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [

    {
    	value    : {{ $resume[0]->p0Proactive}},
    	color    : '#ff8080',
    	highlight: '#ffb3b3',
    	label    : 'P0'
    },
    {
    	value    : {{ $resume[0]->p1Proactive}},
    	color    : '#ff3333',
    	highlight: '#ff6666',
    	label    : 'P1'
    },
    {
    	value    : {{ $resume[0]->p2Proactive }},
    	color    : '#800000',
    	highlight: '#b30000',
    	label    : 'P3'
    },
    {
    	value    : {{ $resume[0]->p3Proactive }},
    	color    : '#600000',
    	highlight: '#830000',
    	label    : 'P3'
    }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 3,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 25, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 150,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
  }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    
})
</script>

@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<div class="col-md-3">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Pro-Active</h3>
							</div>
							<div class="box-body">
								<div class="box-header with-border">
									<i class="fa fa-bar-chart-o"></i>
									<h3 class="box-title">PRO-ACTIVE</h3>
								</div>
								<div class="box-body">
									<canvas id="pieChart3" style="height:300px"></canvas>

									<ul class="chart-legend clearfix">
										<li><i class="fa fa-circle-o"></i> P0</li>
										<li><i class="fa fa-circle-o"></i> P1</li>
										<li><i class="fa fa-circle-o"></i> P2</li>
										<li><i class="fa fa-circle-o"></i> P3</li>									
									</ul>
								</div>
								<!-- /.box -->
							</div>
						</div>
					</div>			

					<div class="col-md-9">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Pro-Passive</h3>
							</div>
							<div class="box-body">
								<div class="col-md-4">
									<div class="box-header with-border">
										<i class="fa fa-bar-chart-o"></i>
										<h3 class="box-title">RAISA</h3>
									</div>
									<div class="box-body">
										<canvas id="pieChart4" style="height:300px"></canvas>

										<ul class="chart-legend clearfix">
											<li><i class="fa fa-circle-o"></i> P0</li>
											<li><i class="fa fa-circle-o"></i> P1</li>
											<li><i class="fa fa-circle-o"></i> P2</li>
											<li><i class="fa fa-circle-o"></i> P3</li>
										</ul>
									</div>
									<!-- /.box -->
								</div>

								<div class="col-md-4">
									<div class="box-header with-border">
										<i class="fa fa-bar-chart-o"></i>
										<h3 class="box-title">SCN</h3>
									</div>
									<div class="box-body">
										<canvas id="pieChart5" style="height:300px"></canvas>

										<ul class="chart-legend clearfix">
											<li><i class="fa fa-circle-o"></i> P0</li>
											<li><i class="fa fa-circle-o"></i> P1</li>
											<li><i class="fa fa-circle-o"></i> P2</li>
											<li><i class="fa fa-circle-o"></i> P3</li>
										</ul>
									</div>
									<!-- /.box-body-->
									<!-- /.box -->
								</div>

								<div class="col-md-4">
									<div class="box-header with-border">
										<i class="fa fa-bar-chart-o"></i>
										<h3 class="box-title">OTHERS</h3>
									</div>
									<div class="box-body">
										<canvas id="pieChart6" style="height:300px"></canvas>

										<ul class="chart-legend clearfix">
											<li><i class="fa fa-circle-o"></i> P0</li>
											<li><i class="fa fa-circle-o"></i> P1</li>
											<li><i class="fa fa-circle-o"></i> P2</li>
											<li><i class="fa fa-circle-o"></i> P3</li>
										</ul>
									</div>
								</div>
							</div>
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