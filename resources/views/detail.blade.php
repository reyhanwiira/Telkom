@extends('layouts.detail_layout')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header">
          <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Donut Chart</h3>
        </div>
        <div class="box-body">
          <div id="donut-chart" style="height: 300px;"></div>
        </div><!-- /.box-body-->
      </div><!-- /.box -->
    </div>
    <!-- /.col (left) -->

    <div class="col-md-4">
      <div class="box box-solid">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="progress">
            <div class="progress-bar progress-bar-#ffffcc" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">40% Complete (success)</span>
              <p>Initial Requirement (0-10)</p>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">20% Complete</span>
              <p>Initial Solution (11-20)</p>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">60% Complete (warning)</span>
              <p>Menunggu Feedback & Gathering Req (21-30)</p>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">80% Complete</span>
              <p>Solution Design (31-60)</p>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">80% Complete</span>
              <p>Solution Development (61-90)</p>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">80% Complete</span>
              <p>POC (91-99)</p>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              <span class="sr-only">80% Complete</span>
              <p>Proposal Ready(100)</p>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col (right) -->
  </div>
</section>
@endsection