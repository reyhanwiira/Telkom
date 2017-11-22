@extends('layouts.detail_layout')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">RAISA Chart</h3>
          <p></p>
          <h3 class="box-title">Breakdown Pengawalan status "P1" untuk RAISA Initiatives</h3>
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
                      <span class="pull-right text-green" style="font-size: medium;"> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Idle (tdk berprogress >2 Minggu) 
                      <span class="pull-right text-red" style="font-size: medium;"> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Persentase
                      <span class="pull-right text-primary" style="font-size: medium;"> 40%</span>
                    </a>
                  </li>
                </ul>
              </div>  
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Current Week</h3>
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
                      <span class="pull-right text-green" style="font-size: medium;"> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Idle (tdk berprogress >2 Minggu) 
                      <span class="pull-right text-red" style="font-size: medium;"> 4</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Persentase
                      <span class="pull-right text-primary" style="font-size: medium;"> 42%</span>
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
             <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; width: 350px;">Solusi</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle;">TR</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; width: 200px">Current Progress</th>
                  <th colspan="2" style="text-align: center;">Progress (%)</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle; width: 150px">Progress Summary</th>
                  <th rowspan="2" style="text-align: center; vertical-align: middle;">Status</th>
                  <tr>
                    <th style="text-align: center; width: 100px">Last</th>
                    <th style="text-align: center; width: 100px">Current</th>
                  </tr>  
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach($raisa as $raisa)
                <tr>                  
                  <td style="text-align: center;">{{ $no++ }}</td>
                  <td style="text-align: center;">{{ $raisa->projectName }}</td>
                  <td style="text-align: center;">{{ $raisa->segment }}</td>
                  <td style="text-align: center;">{{ $raisa->currentProgress }}</td>
                  <td style="text-align: center;">{{ $raisa->last }} %</td>
                  <td style="text-align: center;">{{ $raisa->current }} %</td>
                  <td style="text-align: center;">
                    @if($raisa->current < $raisa->last)
                    <span class="text-green">
                      <i class="fa fa-arrow-down"></i>
                    </span>
                    @elseif($raisa->current > $raisa->last )
                    <span class="text-green">
                      <i class="fa fa-arrow-up"></i>
                    </span>
                    @elseif($raisa->last == $raisa->current)
                    <span class="text-green">
                      <i class="fa fa-arrow-right"></i>
                    </span>
                    @endif
                  </td>
                  <td style="text-align: center;">Status</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div><!-- /.table-responsive -->

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
            value    : {{ $raisa->where('currentProgress','Like','Initial Requirement')->count() }},
            color    : '#fff5cc',
            highlight: '#fff2cc',
            label    : 'Initial Requirement'
          },
          {
            value    : {{ $raisa->where('currentProgress','Like','Initial Solution')->count() }},
            color    : '#ffd1b3',
            highlight: '#ffe0cc',
            label    : 'Initial Solution'
          },
          {
            value    : {{ $raisa->where('currentProgress','Like','Menunggu Feedback & Gathering Req')->count() }},
            color    : '#ff9999',
            highlight: '#ffb3b3',
            label    : 'Menunggu Feedback & Gathering Req'
          },
          {
            value    : {{ $raisa->where('currentProgress','Like','Solution Design')->count() }},
            color    : '#730099',
            highlight: '#ac00e6',
            label    : 'Solution Design'
          },
          {
            value    : {{ $raisa->where('currentProgress','Like','Solution Development')->count() }},
            color    : '#2ea4bc',
            highlight: '#5bc2d7',
            label    : 'Solution Development'
          },
          {
            value    : {{ $raisa->where('currentProgress','Like','POC')->count() }},
            color    : '#40bf80',
            highlight: '#79d2a6',
            label    : 'POC'
          },
          {
            value    : {{ $raisa->where('currentProgress','Like','Proposal Ready')->count() }},
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
              value    : {{ $raisa->where('currentProgress','Like','Initial Requirement')->count() }},
              color    : '#fff5cc',
              highlight: '#fff2cc',
              label    : 'Initial Requirement'
            },
            {
              value    : {{ $raisa->where('currentProgress','Like','Initial Solution')->count() }},
              color    : '#ffd1b3',
              highlight: '#ffe0cc',
              label    : 'Initial Solution'
            },
            {
              value    : {{ $raisa->where('currentProgress','Like','Menunggu Feedback & Gathering Req')->count() }},
              color    : '#ff9999',
              highlight: '#ffb3b3',
              label    : 'Menunggu Feedback & Gathering Req'
            },
            {
              value    : {{ $raisa->where('currentProgress','Like','Solution Design')->count() }},
              color    : '#730099',
              highlight: '#ac00e6',
              label    : 'Solution Design'
            },
            {
              value    : {{ $raisa->where('currentProgress','Like','Solution Development')->count() }},
              color    : '#2ea4bc',
              highlight: '#5bc2d7',
              label    : 'Solution Development'
            },
            {
              value    : {{ $raisa->where('currentProgress','Like','POC')->count() }},
              color    : '#40bf80',
              highlight: '#79d2a6',
              label    : 'POC'
            },
            {
              value    : {{ $raisa->where('currentProgress','Like','Proposal Ready')->count() }},
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

      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div>

</section>
@endsection