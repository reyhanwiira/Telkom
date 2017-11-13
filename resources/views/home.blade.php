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
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [

    {
      value    : {{ $resume[0]->p0Proactive}},
      color    : '#730099',
      highlight: '#8600b3',
      label    : 'P0'
    },
    {
      value    : {{ $resume[0]->p1Proactive}},
      color    : '#2ea4bc',
      highlight: '#32b3cd',
      label    : 'P1'
    },
    {
      value    : {{ $resume[0]->p2Proactive }},
      color    : '#40bf80',
      highlight: '#53c68c',
      label    : 'P2'
    },
    {
      value    : {{ $resume[0]->p3Proactive }},
      color    : '#66ff66',
      highlight: '#80ff80',
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
    var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $resume[0]->p0Raisa}},
      color    : '#730099',
      highlight: '#8600b3',
      label    : 'P0'
    },
    {
      value    : {{ $resume[0]->p1Raisa}},
      color    : '#2ea4bc',
      highlight: '#32b3cd',
      label    : 'P1'
    },
    {
      value    : {{ $resume[0]->p2Raisa }},
      color    : '#40bf80',
      highlight: '#53c68c',
      label    : 'P2'
    },
    {
      value    : {{ $resume[0]->p3Raisa }},
      color    : '#66ff66',
      highlight: '#80ff80',
      label    : 'P3'
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
    var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $resume[0]->p0Scn}},
      color    : '#730099',
      highlight: '#8600b3',
      label    : 'P0'
    },
    {
      value    : {{ $resume[0]->p1Scn}},
      color    : '#2ea4bc',
      highlight: '#32b3cd',
      label    : 'P1'
    },
    {
      value    : {{ $resume[0]->p2Scn}},
      color    : '#40bf80',
      highlight: '#53c68c',
      label    : 'P2'
    },
    {
      value    : {{ $resume[0]->p3Scn}},
      color    : '#66ff66',
      highlight: '#80ff80',
      label    : 'P3'
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
    var pieChartCanvas = $('#pieChart4').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $resume[0]->p0Other}},
      color    : '#730099',
      highlight: '#8600b3',
      label    : 'P0'
    },
    {
      value    : {{ $resume[0]->p1Other}},
      color    : '#2ea4bc',
      highlight: '#32b3cd',
      label    : 'P1'
    },
    {
      value    : {{ $resume[0]->p2Other }},
      color    : '#40bf80',
      highlight: '#53c68c',
      label    : 'P2'
    },
    {
      value    : {{ $resume[0]->p3Other }},
      color    : '#66ff66',
      highlight: '#80ff80',
      label    : 'P3'
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
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body">
          <div class="box-header with-border">
            <h3 class="box-title">PROACTIVE</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-9">
                <div class="chart-responsive">
                  <canvas id="pieChart" height="220"></canvas>
                </div>
              </div>
              <div class="col-md-3">
                <ul class="chart-legend clearfix">
                  <li><i class="fa fa-circle-o" style="color: #730099"></i> P0</li>
                  <li><i class="fa fa-circle-o" style="color: #2ea4bc"></i> P1</li>
                  <li><i class="fa fa-circle-o" style="color: #40bf80"></i> P2</li>
                  <li><i class="fa fa-circle-o" style="color: #66ff66"></i> P3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="#">P0
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> {{ $resume[0]->p0Proactive}}</span>
                </a>
              </li>
              <li>
                <a href="#">P1 
                  <span class="pull-right text-green"><i class="fa fa-angle-up"></i> {{ $resume[0]->p1Proactive}}</span>
                </a>
              </li>
              <li>
                <a href="#">P2
                  <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p2Proactive}}</span>
                </a>
              </li>
              <li>
                <a href="#">P3
                  <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p3Proactive}}</span>
                </a>
              </li>
            </ul>
          </div>  
        </div>
      </div>
    </div>      

    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-body">
          <div class="col-md-4">
            <div class="box-header with-border">
              <h3 class="box-title">RAISA</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="chart-responsive">
                    <canvas id="pieChart2" height="220"></canvas>
                  </div>
                </div>
                <div class="col-md-3">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="color: #730099"></i> P0</li>
                    <li><i class="fa fa-circle-o" style="color: #2ea4bc"></i> P1</li>
                    <li><i class="fa fa-circle-o" style="color: #40bf80"></i> P2</li>
                    <li><i class="fa fa-circle-o" style="color: #66ff66"></i> P3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">P0
                    <span class="pull-right text-red"><i class="fa fa-angle-down"></i> {{ $resume[0]->p0Raisa}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right text-green"><i class="fa fa-angle-up"></i> {{ $resume[0]->p1Raisa}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p2Raisa}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p3Raisa}}</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-header with-border">
              <h3 class="box-title">SCN</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="chart-responsive">
                    <canvas id="pieChart3" height="220"></canvas>
                  </div>
                </div>
                <div class="col-md-3">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="color: #730099"></i> P0</li>
                    <li><i class="fa fa-circle-o" style="color: #2ea4bc"></i> P1</li>
                    <li><i class="fa fa-circle-o" style="color: #40bf80"></i> P2</li>
                    <li><i class="fa fa-circle-o" style="color: #66ff66"></i> P3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">P0
                    <span class="pull-right text-red"><i class="fa fa-angle-down"></i> {{ $resume[0]->p0Scn}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right text-green"><i class="fa fa-angle-up"></i> {{ $resume[0]->p1Scn}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p2Scn}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p3Scn}}</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-header with-border">
              <h3 class="box-title">OTHERS</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="chart-responsive">
                    <canvas id="pieChart4" height="220"></canvas>
                  </div>
                </div>
                <div class="col-md-3">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="color: #730099"></i> P0</li>
                    <li><i class="fa fa-circle-o" style="color: #2ea4bc"></i> P1</li>
                    <li><i class="fa fa-circle-o" style="color: #40bf80"></i> P2</li>
                    <li><i class="fa fa-circle-o" style="color: #66ff66"></i> P3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">P0
                    <span class="pull-right text-red"><i class="fa fa-angle-down"></i> {{ $resume[0]->p0Other}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right text-green"><i class="fa fa-angle-up"></i> {{ $resume[0]->p1Other}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p2Other}}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right text-teal"><i class="fa fa-exchange"></i> {{ $resume[0]->p3Other}}</span>
                  </a>
                </li>
              </ul>
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
          <h3 class="box-title">Data Table</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <div class="col-md-12">
              <table id="example1" class="table table-bordered table-striped" style="width:100%; background-color: #cfe0e8;">
                <tr>
                  <th colspan="2"></th>
                  <th>Proactive</th>
                  <th>Raisa</th>
                  <th>SCN</th>
                  <th>Other</th>
                </tr>
                <tr>
                  <th rowspan="3">Progress</th>
                  <td>P0(Usulan/Potensi)</td>
                  <td><b>{{ $resume[0]->p0Proactive }}</b> | {{ $resume[0]->p0ProactiveLast }}</td>
                  <td><b>{{ $resume[0]->p0Raisa }}</b> | {{ $resume[0]->p0RaisaLast }}</td>
                  <td><b>{{ $resume[0]->p0Scn }}</b> | {{ $resume[0]->p0ScnLast }}</td>
                  <td><b>{{ $resume[0]->p0Other }}</b> | {{ $resume[0]->p0OtherLast }}</td>

                </tr>
                <tr>
                  <td>P1(Req, Des)</td>
                  <td><b>{{ $resume[0]->p1Proactive }}</b> | {{ $resume[0]-> p1ProactiveLast}}</td>
                  <td><b>{{ $resume[0]->p1Raisa }}</b> | {{ $resume[0]-> p1RaisaLast}}</td>
                  <td><b>{{ $resume[0]->p1Scn }}</b> | {{ $resume[0]-> p1ScnLast}}</td>
                  <td><b>{{ $resume[0]->p1Other }}</b> | {{ $resume[0]-> p1OtherLast}}</td>
                </tr>
                <tr>
                  <td>P2(Submit)</td>
                  <td><b>{{ $resume[0]->p2Proactive }}</b> | {{ $resume[0]-> p2ProactiveLast}}</td>
                  <td><b>{{ $resume[0]->p2Raisa }}</b> | {{ $resume[0]-> p2RaisaLast}}</td>
                  <td><b>{{ $resume[0]->p2Scn }}</b> | {{ $resume[0]-> p2ScnLast}}</td>
                  <td><b>{{ $resume[0]->p2Other }}</b> | {{ $resume[0]-> p2OtherLast}}</td>
                </tr>
                <tr> 
                  <th>Done</th>
                  <td>P3(Proposal Ready)</td>
                  <td><b>{{ $resume[0]->p3Proactive }}</b> | {{ $resume[0]-> p3ProactiveLast}}</td>
                  <td><b>{{ $resume[0]->p3Raisa }}</b> | {{ $resume[0]-> p3RaisaLast}}</td>
                  <td><b>{{ $resume[0]->p3Scn }}</b> | {{ $resume[0]-> p3ScnLast}}</td>
                  <td><b>{{ $resume[0]->p3Other }}</b> | {{ $resume[0]-> p3OtherLast}}</td>
                </tr>
                <tr>
                  <th colspan="2">Total</th>
                  <td><b><span id="proactiveAmount"></span></b> | 8</td>
                  <td><b><span id="raisaAmount"></span></b> | 8</td>
                  <td><b><span id="scnAmount"></span></b> | 8</td>
                  <td><b><span id="otherAmount"></span></b> | 8</td>
                </tr>
              </table>
              <div class="box-footer clearfix">
                <a href="{{ url('/'.$resume[0]->id.'/editResume') }}" type="button" class="btn btn-primary"><i class="fa fa-wrench"></i> Edit Data</a>
              </a>
            </div>
          </div>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div>
<script>

  var proactiveAmount = {{ $resume[0]->p0Proactive + $resume[0]->p1Proactive + $resume[0]->p2Proactive + $resume[0]->p3Proactive }}
  var raisaAmount = {{ $resume[0]->p0Raisa + $resume[0]->p1Raisa + $resume[0]->p2Raisa + $resume[0]->p3Raisa }}
  var scnAmount = {{ $resume[0]->p0Scn + $resume[0]->p1Scn + $resume[0]->p2Scn + $resume[0]->p3Scn }}
  var otherAmount = {{ $resume[0]->p0Other + $resume[0]->p1Other + $resume[0]->p2Other + $resume[0]->p3Other }}


  document.getElementById("proactiveAmount").innerHTML = proactiveAmount;
  document.getElementById("raisaAmount").innerHTML = raisaAmount;
  document.getElementById("scnAmount").innerHTML = scnAmount;
  document.getElementById("otherAmount").innerHTML = otherAmount;
</script>
</section>
@endsection