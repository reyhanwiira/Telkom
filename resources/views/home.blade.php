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
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba;"></i> P0</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
                </ul>
              </div>
            </div>
            
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="#">Persentase
                  <span class="pull-right" style="font-size: medium; color: #ff0000;">  <span id="presentaseProactive"></span>  </span>
                </a>
              </li>
              <li>
                <a href="#">P0
                  <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $proactives0 }} </span>
                  <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                  <span class="pull-right" style="font-size: medium; color: #b3b3b3;">{{ $lastProactives0 }} </span>
                </a>
              </li>
              <li>
                <a href="#">P1 
                  <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $proactives1 }}</span>
                  <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                  <span class="pull-right" style="font-size: medium; color: #b3b3b3;">{{ $lastProactives1 }} </span>
                </a>
              </li>
              <li>
                <a href="#">P2
                  <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $proactives2 }}</span>
                  <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                  <span class="pull-right" style="font-size: medium; color: #b3b3b3;">{{ $lastProactives2 }} </span>
                </a>
              </li>
              <li>
                <a href="#">P3
                  <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $proactives3 }}</span>
                  <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                  <span class="pull-right" style="font-size: medium; color: #b3b3b3;">{{ $lastProactives3 }} </span>
                </a>
              </li>
              <li>
                <a href="#">Total
                  <span class="pull-right" style="font-size: medium; color: #cc00cc;">  <span id="proactiveAmount"></span>  </span>
                  <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                  <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> <span id="lastProactiveAmount"></span> </span>
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
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba;"></i> P0</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
                </ul>
              </div>
            </div>
            
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">Persentase
                    <span class="pull-right" style="font-size: medium; color: #ff0000;">  <span id="presentaseRaisa"></span>  </span>
                  </a>
                </li>
                <li>
                  <a href="#">P0
                    <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $raisa0 }} </span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastRaisa0 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $raisa1 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastRaisa1 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $raisa2 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastRaisa2 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $raisa3 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastRaisa3 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span class="pull-right" style="font-size: medium; color: #cc00cc;">  <span id="raisaAmount"></span>  </span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> <span id="lastRaisaAmount"></span> </span>
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
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba;"></i> P0</li>
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
                  </ul>
                </div>
              </div>
              
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">Persentase
                    <span class="pull-right" style="font-size: medium; color: #ff0000;">  <span id="presentaseScn"></span>  </span>
                  </a>
                </li>
                <li>
                  <a href="#">P0
                    <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $scn0 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastScn0 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $scn1 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastScn1 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $scn2 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastScn2 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $scn3 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastScn3 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span class="pull-right" style="font-size: medium; color: #cc00cc;">  <span id="scnAmount"></span>  </span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> <span id="lastScnAmount"></span> </span>
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
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba;"></i> P0</li>
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
                    <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
                  </ul>
                </div>
              </div>
          
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="#">Persentase
                    <span class="pull-right" style="font-size: medium; color: #ff0000;">  <span id="presentaseOthers"></span>  </span>
                  </a>
                </li>
                <li>
                  <a href="#">P0
                    <span class="pull-right" style="font-size: medium; color: #1394ba;">{{ $others0 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastOthers0 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P1 
                    <span class="pull-right" style="font-size: medium; color: #0c3c55;">{{ $others1 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastOthers1 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P2
                    <span class="pull-right" style="font-size: medium; color: #c02e1d;">{{ $others2 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastOthers2 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">P3
                    <span class="pull-right" style="font-size: medium; color: #f16b20;">{{ $others3 }}</span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> {{ $lastOthers3 }} </span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span class="pull-right" style="font-size: medium; color: #cc00cc;">  <span id="otherAmount"></span>  </span>
                    <span class="pull-right" style="font-size: medium; padding: 0px 15px;"> | </span>
                    <span class="pull-right" style="font-size: medium; color: #b3b3b3;"> <span id="lastOthersAmount"></span> </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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

var proactiveAmount = {{ $proactives0 + $proactives1 + $proactives2 + $proactives3 }}
var raisaAmount = {{ $raisa0 + $raisa1 + $raisa2 + $raisa3 }}
var scnAmount = {{ $scn0 + $scn1 + $scn2 + $scn3 }}
var otherAmount = {{ $others0 + $others1 + $others2 + $others3 }}
document.getElementById("proactiveAmount").innerHTML = proactiveAmount;
document.getElementById("raisaAmount").innerHTML = raisaAmount;
document.getElementById("scnAmount").innerHTML = scnAmount;
document.getElementById("otherAmount").innerHTML = otherAmount;

var lastProactiveAmount = {{ $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3 }}
var lastRaisaAmount = {{ $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3 }}
var lastScnAmount = {{ $lastScn0 + $lastScn1 + $lastScn2 + $lastScn3 }}
var lastOthersAmount = {{ $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3 }}
document.getElementById("lastProactiveAmount").innerHTML = lastProactiveAmount;
document.getElementById("lastRaisaAmount").innerHTML = lastRaisaAmount;
document.getElementById("lastScnAmount").innerHTML = lastScnAmount;
document.getElementById("lastOthersAmount").innerHTML = lastOthersAmount;

var presentaseProactive = {{ ($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100}}
var presentaseRaisa = {{ ($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100}}
var presentaseScn = {{ ($scn2 + $scn3) / ($scn0 + $scn1 + $scn2 + $scn3)*100}}
var presentaseOthers = {{ ($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100}}
    
document.getElementById("presentaseProactive").innerHTML = presentaseProactive.toFixed(2);
document.getElementById("presentaseRaisa").innerHTML = presentaseRaisa.toFixed(2);
document.getElementById("presentaseScn").innerHTML = presentaseScn.toFixed(2);
document.getElementById("presentaseOthers").innerHTML = presentaseOthers.toFixed(2);


</script>
</section>
@endsection