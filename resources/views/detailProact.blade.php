@extends('layouts.detail_layout')
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
    var pieChartCanvas = $('#pieChart5').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [

    {
      value    : {{ $resume[0]->p0Proactive}},
      color    : '#fff5cc',
      highlight: '#fff2cc',
      label    : 'Initial Requirement'
    },
    {
      value    : {{ $resume[0]->p1Proactive}},
      color    : '#ffd1b3',
      highlight: '#ffe0cc',
      label    : 'Initial Solution'
    },
    {
      value    : {{ $resume[0]->p2Proactive }},
      color    : '#ff9999',
      highlight: '#ffb3b3',
      label    : 'Menunggu Feedback & Gathering Req'
    },
    {
      value    : {{ $resume[0]->p3Proactive }},
      color    : '#730099',
      highlight: '#ac00e6',
      label    : 'Solution Design'
    },
    {
      value    : {{ $resume[0]->p0Raisa}},
      color    : '#2ea4bc',
      highlight: '#5bc2d7',
      label    : 'Solution Development'
    },
    {
      value    : {{ $resume[0]->p1Raisa }},
      color    : '#40bf80',
      highlight: '#79d2a6',
      label    : 'POC'
    },
    {
      value    : {{ $resume[0]->p2Raisa }},
      color    : '#66ff66',
      highlight: '#99ff99',
      label    : 'Proposal Ready'
    }

    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 48, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
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
    var pieChartCanvas = $('#pieChart6').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [

    {
      value    : {{ $resume[0]->p0Proactive}},
      color    : '#fff5cc',
      highlight: '#fff2cc',
      label    : 'Initial Requirement'
    },
    {
      value    : {{ $resume[0]->p1Proactive}},
      color    : '#ffd1b3',
      highlight: '#ffe0cc',
      label    : 'Initial Solution'
    },
    {
      value    : {{ $resume[0]->p2Proactive }},
      color    : '#ff9999',
      highlight: '#ffb3b3',
      label    : 'Menunggu Feedback & Gathering Req'
    },
    {
      value    : {{ $resume[0]->p3Proactive }},
      color    : '#730099',
      highlight: '#ac00e6',
      label    : 'Solution Design'
    },
    {
      value    : {{ $resume[0]->p0Raisa}},
      color    : '#2ea4bc',
      highlight: '#5bc2d7',
      label    : 'Solution Development'
    },
    {
      value    : {{ $resume[0]->p1Raisa }},
      color    : '#40bf80',
      highlight: '#79d2a6',
      label    : 'POC'
    },
    {
      value    : {{ $resume[0]->p2Raisa }},
      color    : '#66ff66',
      highlight: '#99ff99',
      label    : 'Proposal Ready'
    }

    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 48, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
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
          <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Donut Chart</h3>
          <p></p>
          <h3 class="box-title">Breakdown Pengawalan status "P1" untuk Others Initiatives</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-4">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Last Week</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart5" height="220"></canvas>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="fa fa-circle-o" style="color: #fff5cc"></i> : {{ $resume[0]->p0Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #ffd1b3"></i> : {{ $resume[0]->p1Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #ff9999"></i> : {{ $resume[0]->p2Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #730099"></i> : {{ $resume[0]->p3Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #2ea4bc"></i> : {{ $resume[0]->p0Raisa}}</li>
                      <li><i class="fa fa-circle-o" style="color: #40bf80"></i> : {{ $resume[0]->p1Raisa}}</li>
                      <li><i class="fa fa-circle-o" style="color: #66ff66"></i> : {{ $resume[0]->p2Raisa}}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-pills nav-stacked">
                  <li>
                    <a href="#">Active
                      <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Idle (tdk berprogress >2 Minggu) 
                      <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Persentase
                      <span class="pull-right text-teal"><i class="fa fa-exchange"></i> 40%</span>
                    </a>
                  </li>
                </ul>
              </div>  
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Current Weekasdasd</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body" >
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart6" height="220"></canvas>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="fa fa-circle-o" style="color: #fff5cc"></i> : {{ $resume[0]->p0Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #ffd1b3"></i> : {{ $resume[0]->p1Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #ff9999"></i> : {{ $resume[0]->p2Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #730099"></i> : {{ $resume[0]->p3Proactive}}</li>
                      <li><i class="fa fa-circle-o" style="color: #2ea4bc"></i> : {{ $resume[0]->p0Raisa}}</li>
                      <li><i class="fa fa-circle-o" style="color: #40bf80"></i> : {{ $resume[0]->p1Raisa}}</li>
                      <li><i class="fa fa-circle-o" style="color: #66ff66"></i> : {{ $resume[0]->p2Raisa}}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-pills nav-stacked">
                  <li>
                    <a href="#">Active
                      <span class="pull-right badge bg-green"><i class="fa fa-angle-up"></i> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Idle (tdk berprogress >2 Minggu) 
                      <span class="pull-right badge bg-teal"><i class="fa fa-angle-exchange"></i> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Persentase
                      <span class="pull-right badge bg-green"><i class="fa fa-angle-up"></i> 42%</span>
                    </a>
                  </li>
                </ul>
              </div>  
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Legend</h3>
              </div>
            </div>
            <div class="progress">
              <div class="progress" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#fff5cc;">
                <p>Initial Requirement (0-10)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#ffd1b3;">
                <p>Initial Solution (11-20)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#ff9999;">
                <p>Menunggu Feedback & Gathering Req (21-30)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#730099;">
                <p>Solution Design (31-60)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#2ea4bc;">
                <p>Solution Development (61-90)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#40bf80;">
                <p>POC (91-99)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#66ff66;">
                <p>Proposal Ready(100)</p>
              </div>
            </div> 
            
          </div>  
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-table"></i> Data Table</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <div class="col-md-12">
             <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #3c8dbc">No</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #3c8dbc">Solusi</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #3c8dbc">TR</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #3c8dbc">Current Progress</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #3c8dbc">Progress Summary</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #3c8dbc">Status</th> 
                  <th colspan="2" style="text-align: center; background-color: #3c8dbc">Progress (%)</th>
                  <tr>
                    <th style="text-align: center; background-color: #3c8dbc">Last</th>
                    <th style="text-align: center; background-color: #3c8dbc">Current</th>
                  </tr> 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: center;">Nilai dari Last</td>
                  <td style="text-align: center;">Nilai dari Last</td>
                  <td style="text-align: center;">Nilai dari Last</td>
                  <td style="text-align: center;">Nilai dari Last</td>
                  <td style="text-align: center;">Nilai dari Last</td>
                  <td style="text-align: center;">Nilai dari Current</td>
                  <td style="text-align: center;">Summary</td>
                  <td style="text-align: center;">Status</td>
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