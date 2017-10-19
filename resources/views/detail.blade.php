@extends('layouts.detail_layout')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Donut Chart</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
          <div class="col-md-3">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-body">
                <canvas id="pieChart" style="height:300px"></canvas>

                <ul class="chart-legend clearfix">
                  <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                  <li><i class="fa fa-circle-o text-green"></i> IE</li>
                  <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                  <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                  <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                  <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-1">
            <div class="box-header">
              <div class="box-body">
                <i class="fa fa-chevron-right"></i>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-body">
                <canvas id="pieChart2" style="height:300px"></canvas>

                <ul class="chart-legend clearfix">
                  <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                  <li><i class="fa fa-circle-o text-green"></i> IE</li>
                  <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                  <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                  <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                  <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                </ul>
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
                <span class="sr-only">80% Complete</span>
                <p>POC (91-99)</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center; background-color:#66ff66;">
                <span class="sr-only">80% Complete</span>
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
  <div class="col-md-6">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Activity Record</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="box-group" id="accordion">
          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
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
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
</section>
@endsection