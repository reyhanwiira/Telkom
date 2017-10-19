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
          <form role="form" method="post" action="{{ url('/tableProactive/'.$proactive->id) }}">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="box-body">

            <div class="col-md-12">
                <div class="form-group">
                  <label>Project</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{ $proactive->projectName }}" />
                </div>

                <div class="form-group">
                  <label>Segment</label>
                  <select class="form-control select2" multiple="multiple" name="segment" value="{{ $proactive->segment }}">
                    <option value="CGS">CGS</option>
                    <option value="GAS">GAS</option>
                    <option value="LGS">LGS</option>
                    <option value="MPS">MPS</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" value="{{ $proactive->description }}"></textarea>
                </div>

                <div class="form-group">
                  <label>Customer</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="customer" value="{{ $proactive->customer }}"/>
                </div>

                <div class="form-group">
                  <label>Last Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction" value="{{ $proactive->lastAction }}"></textarea>
                </div>

                <div class="form-group">
                  <label>Next Action</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction" value="{{ $proactive->nextAction }}"></textarea>
                </div>

                <div class="form-group">
                  <label>Current Progress</label>
                  <select class="form-control select2" name="currentProgress" value="{{ $proactive->currentProgress }}">
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
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="information" value="{{ $proactive->information }}"></textarea>
                </div>

                <div class="form-group">
                 <label>Start Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="startProject" value="{{ $proactive->startProject }}"/>
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

               <div class="form-group">
                 <label>Finish Project</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="finishProject" value="{{ $proactive->finishProject }}" />
                 </div><!-- /.input group -->
               </div><!-- /.form group -->

                <div class="form-group">
                  <label>AM Segement</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="AMSegment" value="{{ $proactive->AMSegement }}" />
                </div>

                 <div class="form-group">
                  <label>Keahlian yang dibutuhkan</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="keahlian" value="{{ $proactive->keahlian }}" />
                </div>

                 <div class="form-group">
                  <label>Est. Revenue</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="EstRevenue" value="{{ $proactive->EstRevenue }}" />
                </div>

                 <div class="form-group">
                  <label>Deliverable</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="deliverable" value="{{ $proactive->deliverable }}" />
                </div>

                 <div class="form-group">
                  <label>Benefit</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="benefit" value="{{ $proactive->benefit }}" />
                </div>
             </div>

           </div><!-- /.box-body -->

           <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div><!-- /.box -->

      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="btn-group">
                    <a href="#">
                      <button type="button" class="btn btn-success btn-flat">
                        <i class='glyphicon glyphicon-pencil'></i>
                      </button>
                    </a>

                    <a href="#" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>

                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="" class="btn btn-sm btn-info btn-flat pull-left">Place New Activity</a>
      </div><!-- /.box-footer -->
    </div><!-- /.box -->

    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
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
            <tr>
              <th>No</th>
              <th>Agenda</th>
              <th>Nama Dokumen</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="btn-group">
                  <a href="#">
                    <button type="button" class="btn btn-success btn-flat">
                      <i class='glyphicon glyphicon-download-alt'></i>
                    </button>
                  </a>

                  <a href="#" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>

                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <a href="" class="btn btn-sm btn-info btn-flat pull-left">Place New Document</a>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->
</div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
