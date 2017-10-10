@extends('layouts.layouts')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Solution Management | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit Project</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ url('/table/'.$scn->id) }}">
                {{ method_field('PUT') }}
                {!! csrf_field() !!}
                  <div class="box-body">
                        
                    <div class="form-group">
                      <label>Project</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{ $scn->projectName }}" />
                    </div>
                    
                    <div class="form-group">
                      <label>Segment</label>
                      <select class="form-control" name="segment" value="{{ $scn->segment }}">
                        <option value="All">All</option>
                        <option value="CGS">CGS</option>
                        <option value="GAS">GAS</option>
                        <option value="LGS">LGS</option>
                        <option value="MPS">MPS</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" value="{{ $scn->description }}"></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label>Customer</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="customer" value="{{ $scn->customer }}" />
                    </div>

                    <div class="form-group">
                      <label>Last Action</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction" value="{{ $scn->lastAction }}"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Next Action</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction" value="{{ $scn->nextAction }}"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Current Progress</label>
                      <select class="form-control" name="currentProgress" value="{{ $scn->currentProgress }}">
                        <option value="Initial Requirement">Initial Requirement</option>
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
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="information" value="{{ $scn->information }}"></textarea>
                    </div>

                    <div class="form-group">
                    <label>Start Project</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                         <i class="fa fa-calendar"></i>
                       </div>
                        <input type="text" class="form-control pull-right" id="reservation" name="startProject" value="{{ $scn->startProject }}" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                 
                    <div class="form-group">
                    <label>Finish Project</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                         <i class="fa fa-calendar"></i>
                       </div>
                        <input type="text" class="form-control pull-right" id="reservation" name="finishProject" value="{{ $scn->finishProject }}" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>

  </body>
</html>

@endsection
