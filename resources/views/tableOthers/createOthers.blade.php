@extends('layouts.addProject_layout')

@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ url('/tableOthers') }}">
          {!! csrf_field() !!}
          <div class="box-body">
            <div class="col-md-6">
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
                <label>Progress</label>
                <input type="text" class="form-control pull-right" placeholder="Enter ..." id="progress" name="progress">
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" name="currentProgress" id="currentProgress">
              </div>

              <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status">
                  <option value="P0">P0</option>
                  <option value="P1">P1</option>
                  <option value="P2">P2</option>
                  <option value="P3">P3</option>
                </select>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Information</label>
                <input type="text" class="form-control pull-right" placeholder="Enter ..." id="information" name="information">
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

             <div class="form-group">
              <label>AM Segment</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="AMSegment" />
            </div>

            <div class="form-group">
              <label>Keahlian yang dibutuhkan</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="keahlian" />
            </div>

            <div class="form-group">
              <label>Est. Revenue</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="EstRevenue" />
            </div>

            <div class="form-group">
              <label>Deliverable</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="deliverable" />
            </div>

            <div class="form-group">
              <label>Benefit</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="benefit" />
            </div>

            <div class="form-group">
              <label>Support AP</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="supportAP" />
            </div>
          </div><!-- /.box-body -->

          <div class="form-group">
            <input type="hidden" class="form-control" name="lastStatus" value="0" />
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
