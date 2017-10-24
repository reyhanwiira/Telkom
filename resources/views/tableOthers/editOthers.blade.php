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

              <div class="col-md-12">
                <div class="form-group">
                  <label>Project</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{ $other->projectName }}" />
                </div>

                <div class="form-group">
                  <label>Segment</label>
                  <select class="form-control select2" multiple="multiple" name="segment" value="{{ $other->segment }}">
                    <option value="CGS">CGS</option>
                    <option value="GAS">GAS</option>
                    <option value="LGS">LGS</option>
                    <option value="MPS">MPS</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" value="{{ $other->description }}"></textarea>
                </div>

                <div class="form-group">
                  <label>Customer</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="customer" value="{{ $other->customer }}"/>
                </div>

                <div class="form-group">
                  <label>Last Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction" value="{{ $other->lastAction }}"></textarea>
                </div>

                <div class="form-group">
                  <label>Next Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction" value="{{ $other->nextAction }}"></textarea>
                </div>

                <div class="form-group">
                  <label>Current Progress</label>
                  <select class="form-control select2" name="currentProgress" value="{{ $other->currentProgress }}">
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
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="information" value="{{ $other->information }}"></textarea>
                </div>

                <div class="form-group">
                 <label>Start Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="startProject" value="{{ $other->startProject }}"/>
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

               <div class="form-group">
                 <label>Finish Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="finishProject" value="{{ $other->finishProject }}" />
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

               <div class="form-group">
                <label>AM Segement</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="AMSegment" value="{{ $other->AMSegement }}" />
              </div>

              <div class="form-group">
                <label>Keahlian yang dibutuhkan</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="keahlian" value="{{ $other->keahlian }}" />
              </div>

              <div class="form-group">
                <label>Est. Revenue</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="EstRevenue" value="{{ $other->EstRevenue }}" />
              </div>

              <div class="form-group">
                <label>Deliverable</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="deliverable" value="{{ $other->deliverable }}" />
              </div>

              <div class="form-group">
                <label>Benefit</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="benefit" value="{{ $other->benefit }}" />
              </div>
            </div>

          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
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
                <td>{{ $activity->lampiran }}</td>
              
                <td>
                  <div class="btn-group">
                    <a href="{{ url('/tableOthers'.'/editActOthers/'.$activity->id) }}">
                      <button type="button" class="btn btn-success btn-flat" data-toggle="tooltip" data-placement="left" title="Edit File">
                        <i class='glyphicon glyphicon-pencil'></i>
                      </button>
                    </a>

                   <a href="{{ url('/deleteActOthers/'.$activity->id) }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>

                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">


        <a href="{{ url('tableother/addActother') }}" class="btn btn-primary pull-left">Place New Activity</a>

      </div><!-- /.box-footer -->
    </div><!-- /.box -->

    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Lampiran Dokumen</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
         <table id="example1" class="table table-bordered table-striped">
          <thead>
           <?php $no=1; ?>
           <tr>
            <th>No</th>
            <th>Agenda</th>
            <th>Nama Dokumen</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $other->agenda }}</td>
            <td>{{ $other->lampiran }}</td>
            <td>
              <div class="btn-group">
                <a href="#">
                  <button type="button" class="btn btn-success btn-flat" data-toggle="tooltip" data-placement="left" title="Download File">
                    <i class='glyphicon glyphicon-download-alt'></i>
                  </button>
                </a>

                <a href="#" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat" data-toggle="tooltip" data-placement="right" title="Delete"><i class='glyphicon glyphicon-trash'></i></button></a>

              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div><!-- /.box-body -->
  <div class="box-footer clearfix">
    <a href="#" class="btn btn-primary pull-left">Place New Documents</a>
  </div><!-- /.box-footer -->
</div><!-- /.box -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="#">
                {!! csrf_field() !!}
                <div class="box-body">

                  <div class="form-group">
                   <label>Date</label>
                   <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-calendar"></i>
                     </div>
                     <input type="date" class="form-control pull-right" id="reservation" name="startProject" />
                   </div><!-- /.input group -->
                 </div><!-- /.form group -->

                 <div class="form-group">
                  <label>Agenda</label>
                  <input type="text" class="form-control" name="agenda" />
                </div>

                <div class="form-group">
                  <label>Action Plan</label>
                  <input type="text" class="form-control" name="actionPlan" />
                </div>

                <div class="form-group">
                  <label>Evidance</label>
                  <input type="text" class="form-control" name="evidance" />
                </div>

                <div class="form-group">
                  <label>Lampiran</label>
                  <input type="text" class="form-control" name="lampiran" />
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div><!-- /.box -->

        </div><!--/.col (left) -->
      </div>   <!-- /.row -->
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="box-body">

                  <div class="form-group">
                    <label>Agenda</label>
                    <input type="text" class="form-control" name="businessUnitName">
                  </div>

                  <div class="form-group">
                    <label>Nama Dokumen</label>
                    <input type="text" class="form-control" name="customer" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->

          </div><!--/.col (left) -->
        </div>   <!-- /.row -->
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

</div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
