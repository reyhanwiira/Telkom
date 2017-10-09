@extends('layouts.detail_layout')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Pro-Active</h3>
          <div class="box-tools pull-right">
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
        </div>
        <div class="box-body">
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
                <th>Entry Project</th>
                <th>Finish Project</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

             <?php $no=1; ?>
             @foreach($proactives as $proactive)
             <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $proactive->projectName }}</td>
              <td>{{ $proactive->segment }}</td>
              <td>{{ $proactive->description }}</td>
              <td>{{ $proactive->customer }}</td>
              <td>{{ $proactive->lastAction }}</td>
              <td>{{ $proactive->nextAction }}</td>
              <td>{{ $proactive->status }}</td>
              <td>{{ $proactive->information }}</td>
              <td>{{ $proactive->startProject }}</td>
              <td>{{ $proactive->finishProject }}</td>
              
              <td>
                <div class="btn-group-vertical">
                  <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                  <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
                  <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                </div>
              </td>
            </tr>

            @endforeach

<<<<<<< HEAD
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="#" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
      </div><!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
=======
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
                            <th>Start Project</th>
                            <th>Finish Project</th>
                            <th>Note</th>
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
                            <td>{{ $raisa->note }}</td>
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                                <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
                                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                              </div>
                            </td>
                          </tr>
>>>>>>> 7f3b4a321fc176861b5a771ef75e3088b5ea43a9

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pro-Passive</h3>
        <div class="box-tools pull-right">
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
      </div>
      <div class="box-header">
        <h3 class="box-title">RAISA</h3>
        <div class="box-tools pull-right">
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
      </div>
      <div class="box-body">
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
              <th>Entry Project</th>
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

<<<<<<< HEAD
            <td>
              <div class="btn-group-vertical">
                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
              </div>
            </td>
          </tr>
=======
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
                            <td>{{ $scn->note }}</td>
                            
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                                <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
                                <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
                              </div>
                            </td>
                          </tr>
>>>>>>> 7f3b4a321fc176861b5a771ef75e3088b5ea43a9

          @endforeach

<<<<<<< HEAD
        </tbody>
      </table>
    </div>
=======
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
                            <th>Current Progress</th>
                            <th>Status</th>
                            <th>Information</th>
                            <th>Start Project</th>
                            <th>Finish Project</th>
                            <th>Note</th>
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
                            <td>{{ $other->note }}</td>
                            <td>
                              <div class="btn-group-vertical">
                                <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
                                <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
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
                      <a href="#" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
                      <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Project</a>
                    </div><!-- /.box-footer -->
                  </div><!-- /.box -->
>>>>>>> 7f3b4a321fc176861b5a771ef75e3088b5ea43a9

    <div class="box-header">
    <h3 class="box-title">SCN</h3>
      <div class="box-tools pull-right">
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
    </div>
    <div class="box-body">
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
            <th>Entry Project</th>
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
          <td>{{ $scn->keterangan }}</td>
          <td>{{ $scn->startProject }}</td>
          <td>{{ $scn->finishProject}}</td>

          <td>
            <div class="btn-group-vertical">
              <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
              <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
              <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
            </div>
          </td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>

  <div class="box-header">
    <h3 class="box-title">Others</h3>
    <div class="box-tools pull-right">
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
  </div>
  <div class="box-body">
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
          <th>Entry Project</th>
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
        <td>{{ $other->keterangan }}</td>
        <td>{{ $other->startProject }}</td>
        <td>{{ $other->finishProject}}</td>

        <td>
          <div class="btn-group-vertical">
            <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
            <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
            <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
          </div>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix">
  <a href="#" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
</div><!-- /.box-footer -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->


</div>
</section>
<!-- /.content -->
@endsection