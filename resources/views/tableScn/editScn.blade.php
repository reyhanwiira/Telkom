@extends('layouts.editProject_layout')

@section('content')
<body>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">View Detail Project</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- form start -->
          <form role="form" method="post" action="{{ url('/tableScn/'.$scn->id) }}">
          {{ method_field('PUT') }}
          {!! csrf_field() !!}
          
          <div class="box-body">

            <div class="form-group">
              <label>Project</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{$scn ->projectName}}" />
            </div>

            <div class="form-group">
              <label>Segment</label>
              <select class="form-control select2"\ name="segment">
                <option value="CGS" <?php if($scn['segment']=="CGS") echo 'selected="selected"'; ?>>CGS</option>
                <option value="GAS" <?php if($scn['segment']=="GAS") echo 'selected="selected"'; ?>>GAS</option>
                <option value="LGS" <?php if($scn['segment']=="LGS") echo 'selected="selected"'; ?>>LGS</option>
                <option value="MPS" <?php if($scn['segment']=="MPS") echo 'selected="selected"'; ?>>MPS</option>
                <option value="Segment Gabungan" <?php if($scn['segment']=="Segment Gabungan") echo 'selected="selected"'; ?>>Segment Gabungan</option>
              </select>
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" ><?php echo $scn['description'] ?></textarea>
            </div>

            <div class="form-group">
              <label>Customer</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="customer" value="{{$scn->customer}}"/>
            </div>

            <div class="form-group">
              <label>Last Action</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction"><?php echo $scn['lastAction'] ?></textarea>
            </div>

            <div class="form-group">
              <label>Next Action</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction"><?php echo $scn['nextAction'] ?></textarea>
            </div>

            <div class="form-group">
              <label>Current Progress</label>
              <select class="form-control select2" name="currentProgress" style="width: 100%;">
                <option value="Initial Requirement" <?php if($scn['currentProgress']=="Initial Requirement") echo 'selected="selected"'; ?>>Initial Requirement</option>
                <option value="Initial Solution" <?php if($scn['currentProgress']=="Initial Solution") echo 'selected="selected"'; ?>>Initial Solusi</option>
                <option value="Waiting Feedback & Requirement Gathering" <?php if($scn['currentProgress']=="Waiting Feedback & Requirement Gathering") echo 'selected="selected"'; ?>>Waiting Feedback & Requirement Gathering</option>
                <option value="Solution Design" <?php if($scn['currentProgress']=="Solution Design") echo 'selected="selected"'; ?>>Solution Design</option>
                <option value="Solution Development" <?php if($scn['currentProgress']=="Solution Development") echo 'selected="selected"'; ?>>Solution Development</option>
                <option value="POC" <?php if($scn['currentProgress']=="POC") echo 'selected="selected"'; ?>>POC</option>
                <option value="Proposal Ready" <?php if($scn['currentProgress']=="Proposal Ready") echo 'selected="selected"'; ?>>Proposal Ready</option>
              </select>
            </div>

            <div class="form-group">
              <label>Information</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." name="information"><?php echo $scn['information'] ?></textarea>
            </div>

            <div class="form-group">
             <label>Start Project</label>
             <div class="input-group">
               <div class="input-group-addon">
                 <i class="fa fa-calendar"></i>
               </div>
               <input type="date" class="form-control pull-right" id="reservation" name="startProject" value="{{ $scn->startProject }}">
             </div><!-- /.input group -->
           </div><!-- /.form group -->

           <div class="form-group">
             <label>Finish Project</label>
             <div class="input-group">
               <div class="input-group-addon">
                 <i class="fa fa-calendar"></i>
               </div>
               <input type="date" class="form-control pull-right" id="reservation" name="finishProject" value="{{ $scn->finishProject }}">
             </div><!-- /.input group -->
           </div><!-- /.form group -->

         </div><!-- /.box-body -->

         <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div><!-- /.box -->

      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Activity Record</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
           <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Agenda</th>
                <th>Action Plan</th>
                <th>Evidence</th>
                <th>Lampiran</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $no=1; ?>
                @foreach ($activitys as $activity)
                <td>{{ $no++ }}</td>
                <td>{{ $activity->tanggal }}</td>
                <td>{{ $activity->agenda }}</td>
                <td>{{ $activity->actionPlan }}</td>
                <td>{{ $activity->evidence }}</td>
                <td>{{ $activity->original_filename }}</td>
              
                <td>
                   <div class="btn-group">
                  <a href="{{ url('/uploadActScn/'.$activity->id) }}">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Upload File">
                      <i class='glyphicon glyphicon-floppy-open'></i>
                    </button>
                  </a>
                  </div>

                  <div class="btn-group">
                  <a href="{{ url('/downloadPro/'.$activity->filename) }}"  download="{{ $activity->filename }}">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Download File">
                      <i class='glyphicon glyphicon-floppy-save'></i>
                    </button>
                  </a>
                  </div>

                  <div class="btn-group">
                    <a href="{{ url('/tableScn'.'/editActScn/'.$activity->id) }}">
                      <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit File">
                        <i class='glyphicon glyphicon-edit'></i>
                      </button>
                    </a>

                     <a href="{{ url('/deleteActScn/'.$activity->id) }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class='glyphicon glyphicon-trash'></i></button></a>

                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div><!-- /.table-responsive -->

      </div><!-- /.box-body -->
      <div class="box-footer clearfix">

        <a href="{{ url('tableScn/addActScn') }}" class="btn btn-primary pull-left">Place New Activity</a>

      </div><!-- /.box-footer -->
    </div><!-- /.box -->

</div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
