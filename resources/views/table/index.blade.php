@extends('layouts.table_layout')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Pro-Active</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
         <table id="example1" class="table table-bordered table-striped">
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
                  <a href=""><button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button></a>
                  
                  <a href="{{ url('/table/'.$proactive->id.'/editPro') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                  <a href="deletePro/{{ $proactive->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>

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
    </div><!-- /.box-footer -->
  </div><!-- /.box -->
</div><!-- /.col -->

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Pro-Passive</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="box-group" id="accordion">
        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <div class="panel box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">RAISA</h4>
            <div class="box-tools pull-right">
              <a data-widget="collapse" data-parent="#accordion" href="#collapseOne">
                <button class="btn btn-box-tool">
                  <i class="fa fa-minus"></i>
                </button>
              </a>
            </div>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
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
                      <td>{{ $raisa->startProject }}</td>
                      <td>{{ $raisa->finishProject}}</td>
                      <td>
                        <div class="btn-group-vertical">
                          <a href=""><button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button></a>

                          <a href="{{ url('/table/'.$raisa->id.'/editRaisa') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                          <a href="deleteRaisa/{{ $raisa->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>
                        </div>
                      </td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div><!-- /.table-responsive -->
            </div>
            <div class="box-footer clearfix">
              <a href="{{ url('table/createRaisa') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
            </div><!-- /.box-footer -->
          </div>
        </div>

        <div class="panel box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">SCN
              <div class="box-tools pull-right">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  <button class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                </a>
              </div>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
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
                      <th>Start Project</th>
                      <th>Finish Project</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;?>
                    @foreach($scns as $scn)
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
                     <td>{{ $scn->startProject }}</td>
                     <td>{{ $scn->finishProject}}</td>
                     <td>
                      <div class="btn-group-vertical">
                        <a href=""><button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button></a>

                        <a href="{{ url('/table/'.$scn->id.'/editScn') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                        <a href="deleteScn/{{ $scn->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>
                      </div>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div><!-- /.table-responsive -->
          </div>
          <div class="box-footer clearfix">
            <a href="{{ url('table/createRaisa') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
          </div><!-- /.box-footer -->
        </div>
      </div>

      <div class="panel box box-primary">
        <div class="box-header with-border">
          <h4 class="box-title">OTHERS
            <div class="box-tools pull-right">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <button class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
              </a>
            </div>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
          <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-striped">
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
                   <td>{{ $other->currentProgress }}</td>
                   <td>{{ $other->status }}</td>
                   <td>{{ $other->information }}</td>
                   <td>{{ $other->startProject }}</td>
                   <td>{{ $other->finishProject}}</td>
                   <td>
                    <div class="btn-group-vertical">
                      <a href=""><button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button></a>

                      <a href="{{ url('/table/'.$other->id.'/editOther') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>


                      <a href="deleteOther/{{ $other->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.table-responsive -->
        </div>
        <div class="box-footer clearfix">
          <a href="{{ url('table/createRaisa') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
        </div><!-- /.box-footer -->
      </div>
    </div>

  </div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->

</div><!-- /.row --> 

@endsection