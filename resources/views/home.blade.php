@extends('layouts.layouts')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body">
          <div class="box-header with-border" style="text-align: center; padding-right: 29%">
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
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #1394ba;"></i> P0</li>
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #0c3c55"></i> P1</li>
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #c02e1d"></i> P2</li>
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #f16b20"></i> P3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="#">P0
                  <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $proactives0 }} </span>
                </a>
              </li>
              <li>
                <a href="#">P1 
                  <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $proactives1 }}</span>
                </a>
              </li>
              <li>
                <a href="#">P2
                  <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $proactives2 }}</span>
                </a>
              </li>
              <li>
                <a href="#">P3
                  <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $proactives3 }}</span>
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
            <div class="box-header with-border" style="text-align: center; padding-right: 29%">
              <h3 class="box-title">RAISA</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="chart-responsive">
                    <canvas id="pieChart2" height="220"></canvas>
                  </div>
                </div>
                <ul class="chart-legend clearfix">
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #1394ba;"></i> P0</li>
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #0c3c55"></i> P1</li>
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #c02e1d"></i> P2</li>
                  <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #f16b20"></i> P3</li>
                </ul>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">P0
                    <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $raisa0 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $raisa1 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $raisa2 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $raisa3 }}</span>
                  </a>
                 </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-header with-border" style="text-align: center; padding-right: 29%">
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
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #1394ba;"></i> P0</li>
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #0c3c55"></i> P1</li>
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #c02e1d"></i> P2</li>
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #f16b20"></i> P3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">P0
                    <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $scn0 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $scn1 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $scn2 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $scn3 }}</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box-header with-border" style="text-align: center; padding-right: 29%">
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
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #1394ba;"></i> P0</li>
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #0c3c55"></i> P1</li>
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #c02e1d"></i> P2</li>
                    <li style="font-size: medium"><i class="fa fa-circle-o" style="color: #f16b20"></i> P3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">P0
                    <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $others0 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $others1 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $others2 }}</span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $others3 }}</span>
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
              <table id="example1" class="table table-bordered table-striped table-condensed" style="width:100%;">
                <tr style="color: #3C8DBC">
                  <th colspan="2" style="width: 50px;">ACTIVITY</th>
                  <th style="text-align: center; width: 130px">PROACTIVE</th>
                  <th style="text-align: center; width: 100px">RAISA</th>
                  <th style="text-align: center; width: 100px">SCN</th>
                  <th style="text-align: center; width: 100px">OTHERS</th>
                </tr>
                <tr>
                  <th rowspan="3" style=" vertical-align: middle; width: 150px;">Progress</th>
                  <td>P0(Usulan/Potensi)</td>
                  <td style="text-align: center;"><b>{{ $proactives0 }}</td>
                  <td style="text-align: center;"><b>{{ $raisa0 }}</td>
                  <td style="text-align: center;"><b>{{ $scn0 }}</td>
                  <td style="text-align: center;"><b>{{ $others0 }}</td>

                </tr>
                <tr>
                  <td style="width: 50px;">P1(Req, Des)</td>
                  <td style="text-align: center;"><b>{{ $proactives1 }}</td>
                  <td style="text-align: center;"><b>{{ $raisa1 }}</td>
                  <td style="text-align: center;"><b>{{ $scn1 }}</td>
                  <td style="text-align: center;"><b>{{ $others1 }}</td>
                </tr>
                <tr>
                  <td style="width: 50px;">P2(Submit)</td>
                  <td style="text-align: center;"><b>{{ $proactives2 }}</td>
                  <td style="text-align: center;"><b>{{ $raisa2 }}</td>
                  <td style="text-align: center;"><b>{{ $scn2 }}</td>
                  <td style="text-align: center;"><b>{{ $others2 }}</td>
                </tr>
                <tr> 
                  <th style="width: 50px;">Done</th>
                  <td>P3 Proposal Ready</td>
                  <td style="text-align: center;"><b>{{ $proactives3 }}</td>
                  <td style="text-align: center;"><b>{{ $raisa3 }}</td>
                  <td style="text-align: center;"><b>{{ $scn3 }}</td>
                  <td style="text-align: center;"><b>{{ $others3 }}</td>
                </tr>
                <tr>
                  <th colspan="2">Total</th>
                  <td style="text-align: center;"><b><span id="proactiveAmount"></span></b> </td>
                  <td style="text-align: center;"><b><span id="raisaAmount"></span></b>  </td>
                  <td style="text-align: center;"><b><span id="scnAmount"></span></b>  </td>
                  <td style="text-align: center;"><b><span id="otherAmount"></span></b>  </td>
                </tr>
              </table>
                </a>
              </div>
            </div>
          </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div>

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
<!-- page script -->
<!-- ChartJS -->
<script src="../../bower_components/Chart.js/Chart.js"></script>

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
      value    : {{ $proactives0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $proactives1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $proactives2 }},
      color    : '#c02e1d',
      highlight: '#de3421',
      label    : 'P2'
    },
    {
      value    : {{ $proactives3 }},
      color    : '#f16b20',
      highlight: '#f17127',
      label    : 'P3'
    }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 1,
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
      value    : {{ $raisa0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $raisa1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $raisa2 }},
      color    : '#c02e1d',
      highlight: '#de3421',
      label    : 'P2'
    },
    {
      value    : {{ $raisa3 }},
      color    : '#f16b20',
      highlight: '#f17127',
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
      value    : {{ $scn0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $scn1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $scn2 }},
      color    : '#c02e1d',
      highlight: 'de3421',
      label    : 'P2'
    },
    {
      value    : {{ $scn3 }},
      color    : '#f16b20',
      highlight: '#f17127',
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
      value    : {{ $others0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $others1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $others2 }},
      color    : '#c02e1d',
      highlight: '#de3421',
      label    : 'P2'
    },
    {
      value    : {{ $others3 }},
      color    : '#f16b20',
      highlight: '#f17127',
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

</script>
</section>
@endsection