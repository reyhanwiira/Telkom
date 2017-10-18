@extends('layouts.editProject_layout')

@section('content')
<body>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{ url('/tableProactive/'.$proactive->id) }}">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="box-body">

              <div class="col-md-10">
                <div class="form-group">
                  <label>Project</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="projectName" />
                </div>

                <div class="form-group">
                  <label>Segment</label>
                  <select class="form-control select2" multiple="multiple" name="segment">
                    <option value="CGS">CGS</option>
                    <option value="GAS">GAS</option>
                    <option value="LGS">LGS</option>
                    <option value="MPS">MPS</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                </div>

                <div class="form-group">
                  <label>Customer</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="customer" />
                </div>

                <div class="form-group">
                  <label>Last Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction"></textarea>
                </div>

                <div class="form-group">
                  <label>Next Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction"></textarea>
                </div>

                <div class="form-group">
                  <label>Current Progress</label>
                  <select class="form-control select2" name="currentProgress" style="width: 100%;">
                    <option value="Initial Requirement" selected="selected">Initial Requirement</option>
                    <option value="Initial Solusi">Initial Solusi</option>
                    <option value="Waiting Feedback & Requirement Gathering">Waiting Feedback & Requirement Gathering</option>
                    <option value="Solution Design">Solution Design</option>
                    <option value="Solution Development">Solution Development</option>
                    <option value="POC">POC</option>
                    <option value="Proposal Ready">Proposal Ready</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Information</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="information"></textarea>
                </div>

                <div class="form-group">
                 <label>Start Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="startProject" />
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

               <div class="form-group">
                 <label>Finish Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="finishProject" />
                 </div><!-- /.input group -->
               </div><!-- /.form group -->
             </div>

           </div><!-- /.box-body -->

           <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- /.box -->

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
    </div><!--/.col (left) -->



    <!-- right column -->
    <div class="col-md-3">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ url('/tableProactive/'.$proactive->id) }}">
          {{ method_field('PUT') }}
          {!! csrf_field() !!}
          <div class="box-body">

            <div class="form-group">
              <label>Project</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="projectName" />
            </div>

          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- /.box -->
    </div><!--/.col (right) -->
  </div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
