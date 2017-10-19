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
                  <select class="form-control select2" name="currentProgress">
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
        <button type="button" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#myModal">
          Place New Activity
        </button>
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
      <button type="button" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#myModal1">
        Place New Documents
      </button>
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
                <form role="form" method="post" action="">
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
                    <input type="text" class="form-control" name="customer" />
                  </div>

                  <div class="form-group">
                    <label>Action Plan</label>
                    <input type="text" class="form-control" name="customer" />
                  </div>

                  <div class="form-group">
                    <label>Evidance</label>
                    <input type="text" class="form-control" name="customer" />
                  </div>

                  <div class="form-group">
                    <label>Lampiran</label>
                    <input type="text" class="form-control" name="customer" />
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
