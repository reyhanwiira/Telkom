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
<<<<<<< HEAD
  </head>
  <body>
    <div class="row">

     <div class="col-md-12">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Pro-Active</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
           <table id="example1" class="table no-margin">
            <thead>
              <tr>
                <th>No</th>
                <th>Project</th>
                <th>Segment</th>
                <th>Description</th>
                <th>Customer</th>
                <th>Last Action</th>
                <th>Next Action</th>
                <th>Status</th>
                <th>Information</th>
                <th>Start Project</th>
                <th>Finish Project</th>
                <th>Action</th> 
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($proactives as $proactive)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $proactive-> projectName }}</td>
                <td>{{ $proactive-> segment }}</td>
                <td>{{ $proactive-> description }}</td>
                <td>{{ $proactive-> customer }}</td>
                <td>{{ $proactive-> lastAction }}</td>
                <td>{{ $proactive-> nextAction }}</td>
                <td>{{ $proactive-> status }}</td>
                <td>{{ $proactive-> information }}</td>
                <td>{{ $proactive-> startProject }}</td>
                <td>{{ $proactive-> finishProject }}</td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="{{ url('detail') }}" type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></a>
                    <a href="{{ url('editPro') }}" type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></a>
                    <a href="#" type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="{{ url('form') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
      </div><!-- /.box-footer -->
    </div><!-- /.box -->
  </div><!-- /.col -->

  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Pro-Passive</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <div class="box box-info">
           <div class="box-header with-border">
             <h3 class="box-title">RAISA</h3>
             <div class="box-tools pull-right">
               <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
             </div>
           </div><!-- /.box-header -->
           <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table no-margin">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Project</th>
                    <th>Segment</th>
                    <th>Description</th>
                    <th>Customer</th>
                    <th>Last Action</th>
                    <th>Next Action</th>
                    <th>Status</th>
                    <th>Information</th>
                    <th>Start Project</th>
                    <th>Finish Project</th>
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach($raisas as $raisa)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $raisa->projectName }}</td>
                    <td>{{ $raisa->segment }}</td>
                    <td>{{ $raisa->description }}</td>
                    <td>{{ $raisa->customer }}</td>
                    <td>{{ $raisa->lastAction }}</td>
                    <td>{{ $raisa->nextAction }}</td>
                    <td>{{ $raisa->status }}</td>
                    <td>{{ $raisa->information }}</td>
                    <td>{{ $raisa->startProject }}</td>
                    <td>{{ $raisa->finishProject}}</td>
                    <td>
                      <div class="btn-group-vertical">
                        <a href="{{ url('detail') }}" type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></a>
                        <a href="{{ url('editRaisa') }}" type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></a>
                        <a href="#" type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></a>
                      </div>
                    </td>
                  </tr>
=======
</head>
<body>
  <div class="row">
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Pro-Active</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                   <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Project</th>
                            <th>Segment</th>
                            <th>Description</th>
                            <th>Customer</th>
                            <th>Last Action</th>
                            <th>Next Action</th>
                            <th>Status</th>
                            <th>Information</th>
                            <th>Start Project</th>
                            <th>Finish Project</th>
                            <th>Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                          @foreach ($proactives as $proactive)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $proactive-> projectName }}</td>
                            <td>{{ $proactive-> segment }}</td>
                            <td>{{ $proactive-> description }}</td>
                            <td>{{ $proactive-> customer }}</td>
                            <td>{{ $proactive-> lastAction }}</td>
                            <td>{{ $proactive-> nextAction }}</td>
                            <td>{{ $proactive-> status }}</td>
                            <td>{{ $proactive-> information }}</td>
                            <td>{{ $proactive-> startProject }}</td>
                            <td>{{ $proactive-> finishProject }}</td>
>>>>>>> 197dceda4669cf172c1a36e00df33151f5493fc2

                            
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                                
                                <a href="{{ url('/table/'.$proactive->id.'/editPro') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="{{ url('table/createPro') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Project</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Pro-Passive</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <div class="box box-info">
                   <div class="box-header with-border">
                     <h3 class="box-title">RAISA</h3>
                     <div class="box-tools pull-right">
                       <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     </div>
                   </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Project</th>
                            <th>Segment</th>
                            <th>Description</th>
                            <th>Customer</th>
                            <th>Last Action</th>
                            <th>Next Action</th>
                            <th>Current Progress</th>
                            <th>Status</th>
                            <th>Information</th>
                            <th>Keterangan</th>
                            <th>Start Project</th>
                            <th>Finish Project</th>
                            <th>Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach($raisas as $raisa)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $raisa->projectName }}</td>
                            <td>{{ $raisa->segment }}</td>
                            <td>{{ $raisa->description }}</td>
                            <td>{{ $raisa->customer }}</td>
                            <td>{{ $raisa->lastAction }}</td>
                            <td>{{ $raisa->nextAction }}</td>
                            <td>{{ $raisa->currentProgress }}</td>
                            <td>{{ $raisa->status }}</td>
                            <td>{{ $raisa->information }}</td>
                            <td>{{ $raisa->keterangan }}</td>
                            <td>{{ $raisa->startProject }}</td>
                            <td>{{ $raisa->finishProject}}</td>
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                               
                               <a href="{{ url('/table/'.$raisa->id.'/editRaisa') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>
                               
                                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                              </div>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <a href="{{ url('table/CreateRaisa') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
                      <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Project</a>
                    </div><!-- /.box-footer -->
                  </div><!-- /.box -->

<<<<<<< HEAD
                  <td>
                    <div class="btn-group-vertical">
                      <a href="{{ url('detail') }}" type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></a>
                      <a href="{{ url('editProject') }}" type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></a>
                      <a href="#" type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="{{ url('form') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
        </div><!-- /.box-footer -->
      </div><!-- /.box -->

      <div class="box box-info">
       <div class="box-header with-border">
         <h3 class="box-title">OTHERS</h3>
         <div class="box-tools pull-right">
           <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
         </div>
       </div><!-- /.box-header -->
       <div class="box-body">
        <div class="table-responsive">
          <table id="example4" class="table no-margin">
            <thead>
              <tr>
                <th>No</th>
                <th>Project</th>
                <th>Segment</th>
                <th>Description</th>
                <th>Customer</th>
                <th>Last Action</th>
                <th>Next Action</th>
                <th>Status</th>
                <th>Information</th>
                <th>Start Project</th>
                <th>Finish Project</th>
                <th>Action</th> 
              </tr>
            </thead>
            <tbody>
              <?php $no=1;?>
              @foreach($others as $other)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $other->projectName }}</td>
                <td>{{ $other->segment }}</td>
                <td>{{ $other->description }}</td>
                <td>{{ $other->customer }}</td>
                <td>{{ $other->lastAction }}</td>
                <td>{{ $other->nextAction }}</td>
                <td>{{ $other->status }}</td>
                <td>{{ $other->information }}</td>
                <td>{{ $other->startProject }}</td>
                <td>{{ $other->finishProject}}</td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="{{ url('detail') }}" type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></a>
                    <a href="{{ url('editProject') }}" type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></a>
                    <a href="#" type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></a>
                  </div>
                </td>
              </tr>
              @endforeach
=======
                  <div class="box box-info">
                   <div class="box-header with-border">
                     <h3 class="box-title">SCN</h3>
                     <div class="box-tools pull-right">
                       <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     </div>
                   </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                          <?php $no=1; ?>
                          @foreach($scns as $scn)
                            <th>No</th>
                            <th>Project</th>
                            <th>Segment</th>
                            <th>Description</th>
                            <th>Customer</th>
                            <th>Last Action</th>
                            <th>Next Action</th>
                            <th>Status</th>
                            <th>Information</th>
                            <th>Start Project</th>
                            <th>Finish Project</th>
                            <th>Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $scn->projectName }}</td>
                            <td>{{ $scn->segment }}</td>
                            <td>{{ $scn->description }}</td>
                            <td>{{ $scn->customer }}</td>
                            <td>{{ $scn->lastAction }}</td>
                            <td>{{ $scn->nextAction }}</td>
                            <td>{{ $scn->currentProgress }}</td>
                            <td>{{ $scn->status }}</td>
                            <td>{{ $scn->information }}</td>
                            <td>{{ $scn->keterangan }}</td>
                            <td>{{ $scn->startProject }}</td>
                            <td>{{ $scn->finishProject}}</td>
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                                
                                <a href="{{ url('/table/'.$scn->id.'/editScn') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                              </div>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <a href="{{ url('table/createScn') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
                      <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Project</a>
                    </div><!-- /.box-footer -->
                  </div><!-- /.box -->
>>>>>>> 197dceda4669cf172c1a36e00df33151f5493fc2

                  <div class="box box-info">
                   <div class="box-header with-border">
                     <h3 class="box-title">OTHERS</h3>
                     <div class="box-tools pull-right">
                       <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     </div>
                   </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Project</th>
                            <th>Segment</th>
                            <th>Description</th>
                            <th>Customer</th>
                            <th>Last Action</th>
                            <th>Next Action</th>
                            <th>Status</th>
                            <th>Information</th>
                            <th>Start Project</th>
                            <th>Finish Project</th>
                            <th>Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                         <?php $no=1; ?>
                        @foreach($others as $other)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $other->projectName }}</td>
                            <td>{{ $other->segment }}</td>
                            <td>{{ $other->description }}</td>
                            <td>{{ $other->customer }}</td>
                            <td>{{ $other->lastAction }}</td>
                            <td>{{ $other->nextAction }}</td>
                            <td>{{ $other->currentProgress }}</td>
                            <td>{{ $other->status }}</td>
                            <td>{{ $other->information }}</td>
                            <td>{{ $other->keterangan }}</td>
                            <td>{{ $other->startProject }}</td>
                            <td>{{ $other->finishProject}}</td>
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>

                                <a href="{{ url('/table/'.$other->id.'/editOther') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <a href="{{ url('table/createOther') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
                      <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Project</a>
                    </div><!-- /.box-footer -->
                  </div><!-- /.box -->

                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row --> 

</body>
</html>



@endsection