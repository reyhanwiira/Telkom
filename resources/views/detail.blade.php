@extends('layouts.detail_layout')

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
    var pieChartCanvas = $('#pieChart7').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $detailChart[0]->initialRequirement}},
      color    : '#fff5cc',
      highlight: '#fffae6',
      label    : 'Initial Requirement'
    },
    {
      value    : {{ $detailChart[0]->initialSolution}},
      color    : '#ffd1b3',
      highlight: '#ffe0cc',
      label    : 'Initial Solution'
    },
    {
      value    : {{ $detailChart[0]->menungguFeedbackRG}},
      color    : '#ff9999',
      highlight: '#ffcccc',
      label    : 'Menunggu Feedback & Gathering Req'
    },
    {
      value    : {{ $detailChart[0]->solutionDesign}},
      color    : '#730099',
      highlight: '#9900cc',
      label    : 'Solution Design'
    }
    {
      value    : {{ $detailChart[0]->solutionDevelopment}},
      color    : '#2ea4bc',
      highlight: '#98d9e6',
      label    : 'Solution Development'
    }
    {
      value    : {{ $detailChart[0]->POC}},
      color    : '#40bf80',
      highlight: '#9fdfbf',
      label    : 'POC'
    }
    {
      value    : {{ $detailChart[0]->proposalReady}},
      color    : '#1aff1a',
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
      percentageInnerCutout: 50, // This is 0 for Pie charts
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
    var pieChartCanvas = $('#pieChart8').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $detailChart[1]->initialRequirement}},
      color    : '#fff5cc',
      highlight: '#fffae6',
      label    : 'Initial Requirement'
    },
    {
      value    : {{ $detailChart[1]->initialSolution}},
      color    : '#ffd1b3',
      highlight: '#ffe0cc',
      label    : 'Initial Solution'
    },
    {
      value    : {{ $detailChart[1]->menungguFeedbackRG}},
      color    : '#ff9999',
      highlight: '#ffcccc',
      label    : 'Menunggu Feedback & Gathering Req'
    },
    {
      value    : {{ $detailChart[1]->solutionDesign}},
      color    : '#730099',
      highlight: '#9900cc',
      label    : 'Solution Design'
    }
    {
      value    : {{ $detailChart[1]->solutionDevelopment}},
      color    : '#2ea4bc',
      highlight: '#98d9e6',
      label    : 'Solution Development'
    }
    {
      value    : {{ $detailChart[1]->POC}},
      color    : '#40bf80',
      highlight: '#9fdfbf',
      label    : 'POC'
    }
    {
      value    : {{ $detailChart[1]->proposalReady}},
      color    : '#1aff1a',
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
      percentageInnerCutout: 50, // This is 0 for Pie charts
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
        <div class="box-header">
          <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Donut Chart</h3>
          <p></p>
          <p>Breakdown Pengawalan status "P1" untuk Others Initiatives </p>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
          <div class="col-md-3">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-body">
                <canvas id="pieChart7" style="height:300px"></canvas>
                
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-body">
                <canvas id="pieChart8" style="height:300px"></canvas>

              </div>
            </div>
          </div>

          <div class="col-md-5">
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
            <div class="row">
              <center>
                <div class="col-md-3">
                  <div class="progress">
                    <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10" style="width: 35%; text-align:center; background-color:#1aff1a;">
                    </div>
                    <p> Active</p>
                  </div>
                </div>
              </center>
              <center>
                <div class="col-md-9">
                  <div class="progress">
                    <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10" style="width: 10%; text-align:center; background-color:#ff0000;">
                    </div>
                    <p>Idle (tdk berprogress >2 Minggu)</p>
                  </div>
                </div>
              </center>
            </div>

          </div>  
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Table</h3>
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
                  <td>Nilai dari Last</td>
                  <td>Nilai dari Current</td>
                  <td>Progress Summary</td>
                  <td>Status</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div>

<div class="row">
  <div>
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Activity Record</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="box-group" id="accordion">
            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
            <div class="col-md-6">  
              <div class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Last Action
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="box-body">
                    <div class="col-md-12">
                      <!-- The time line -->
                      <ul class="timeline">
                        <!-- timeline time label -->
                        <li class="time-label">
                          <span class="bg-red">
                            10 Feb. 2014
                          </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                          <i class="fa fa-user bg-aqua"></i>

                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href="#">Jay White</a> Rapat dengan client</h3>
                          </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                          <i class="fa fa-file-archive-o bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Jay White</a> uploaded files</h3>
                            <div class="timeline-body">
                              <h4>Hasil Rapat</h4>
                              <a class="btn btn-app">
                                <i class="fa fa-save"></i> Save
                              </a>
                            </div>
                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                          </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                          <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel box box-danger">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Next Action
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in">
                <div class="box-body">
                  <div class="col-md-12">
                    <ul class="timeline">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-red">
                          20 Feb. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-aqua"></i>

                        <div class="timeline-item">
                          <h3 class="timeline-header no-border"><a href="#">Jay White</a> Rapat dengan client</h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                      <div class="box-tools pull-right">
                        <a href="" class="btn btn-sm btn-info btn-flat pull-left">Place New Activty</a>
                      </div><!-- /.box-footer -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
</section>
@endsection