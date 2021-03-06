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
          <form role="form" method="post" action="{{ url('/tableOthers/'.$other->id) }}">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Project</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{$other ->projectName}}" />
                </div>

                <div class="form-group">
                  <label>Segment</label>
                  <select class="form-control select2"\ name="segment">
                    <option value="CGS" <?php if($other['segment']=="CGS") echo 'selected="selected"'; ?>>CGS</option>
                    <option value="GAS" <?php if($other['segment']=="GAS") echo 'selected="selected"'; ?>>GAS</option>
                    <option value="LGS" <?php if($other['segment']=="LGS") echo 'selected="selected"'; ?>>LGS</option>
                    <option value="MPS" <?php if($other['segment']=="MPS") echo 'selected="selected"'; ?>>MPS</option>
                    <option value="Segment Gabungan" <?php if($other['segment']=="Segment Gabungan") echo 'selected="selected"'; ?>>Segment Gabungan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" ><?php echo $other['description'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Customer</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="customer" value="{{$other->customer}}"/>
                </div>

                <div class="form-group">
                  <label>Last Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction"><?php echo $other['lastAction'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Next Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction"><?php echo $other['nextAction'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <option value="P0" <?php if($other['status']=="P0") echo 'selected="selected"'; ?>>P0</option>
                    <option value="P1" <?php if($other['status']=="P1") echo 'selected="selected"'; ?>>P1</option>
                    <option value="P2" <?php if($other['status']=="P2") echo 'selected="selected"'; ?>>P2</option>
                    <option value="P3" <?php if($other['status']=="P3") echo 'selected="selected"'; ?>>P3</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Last Status</label>
                  <select class="form-control select2" name="lastStatus" style="width: 100%;">
                    <option value="0" <?php if($other['lastStatus']=="0") echo 'selected="selected"'; ?>>0</option>
                    <option value="P0" <?php if($other['lastStatus']=="P0") echo 'selected="selected"'; ?>>P0</option>
                    <option value="P1" <?php if($other['lastStatus']=="P1") echo 'selected="selected"'; ?>>P1</option>
                    <option value="P2" <?php if($other['lastStatus']=="P2") echo 'selected="selected"'; ?>>P2</option>
                    <option value="P3" <?php if($other['lastStatus']=="P3") echo 'selected="selected"'; ?>>P3</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Progress</label>
                  <input type="text" class="form-control pull-right" placeholder="Enter ..." id="progress" name="progress" value="{{$other->progress}}">
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control" name="currentProgress" id="currentProgress">
                </div>

                <div class="form-group">
                  <label>Information</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="information"><?php echo $other['information'] ?></textarea>
                </div>

                <div class="form-group">
                 <label>Start Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="startProject" value="{{ $other->startProject }}">
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

               <div class="form-group">
                 <label>Finish Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="finishProject" value="{{ $other->finishProject }}">
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

               <div class="form-group">
                <label>AM Segment</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="AMSegment" value="{{$other ->AMSegment}}" />
              </div>

              <div class="form-group">
                <label>Keahlian</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="keahlian" value="{{$other ->keahlian}}" />
              </div>

              <div class="form-group">
                <label>Est Revenue</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="EstRevenue" value="{{$other ->EstRevenue}}" />
              </div>

              <div class="form-group">
                <label>Deliverable</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="deliverable" value="{{$other ->deliverable}}" />
              </div>

              <div class="form-group">
                <label>Benefit</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="benefit" value="{{$other ->benefit}}" />
              </div>

              <div class="form-group">
                <label>Support AP</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="supportAP" value="{{$other ->supportAP}}" />
              </div>
            </div>
            
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
           <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: : 50px">No</th>
                <th>Tanggal</th>
                <th>Agenda</th>
                <th>Action Plan</th>
                <th>Evidence</th>
                <th>Lampiran</th>
                <th style="width: : 150px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($activitys as $activity)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $activity->tanggal }}</td>
                <td>{{ $activity->agenda }}</td>
                <td>{{ $activity->actionPlan }}</td>
                <td>{{ $activity->evidence }}</td>
                <td>{{ $activity->original_filename }}</td>
                <td>

                  <div class="btn-group">
                    <a href="{{ url('/uploadActOthers/'.$activity->id) }}">
                      <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Upload File">
                        <i class='glyphicon glyphicon-floppy-open' style="font-size: 12px"></i>
                      </button>
                    </a>

                    <a href="{{ url('/downloadPro/'.$activity->filename) }}"  download="{{ $activity->filename }}">
                      <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Download File">
                        <i class='glyphicon glyphicon-floppy-save' style="font-size: 12px"></i>
                      </button>
                    </a>

                    <a href="{{ url('/tableOthers'.'/editActOthers/'.$activity->id) }}">
                      <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit File">
                        <i class='glyphicon glyphicon-edit' style="font-size: 12px"></i>
                      </button>
                    </a>

                    <a href="{{ url('/deleteActOthers/'.$activity->id) }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class='glyphicon glyphicon-trash' style="font-size: 12px"></i></button></a>

                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div><!-- /.table-responsive -->


      </div><!-- /.box-body -->
      <div class="box-footer clearfix">

        <a href="{{ url('tableOthers/addActOthers') }}" class="btn btn-primary pull-left">New Activity</a>

      </div><!-- /.box-footer -->
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
