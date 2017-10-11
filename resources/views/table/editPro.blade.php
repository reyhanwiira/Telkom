@extends('layouts.editProject_layout')

@section('content')

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
        <form role="form" method="post" action="{{ url('/table/'.$proactive->id) }}">
          {{ method_field('PUT') }}
          {!! csrf_field() !!}
          <div class="box-body">
            
            <div class="form-group">
              <label>Project</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{ $proactive->projectName }}" />
            </div>

            <div class="form-group">
              <label>Segment</label>
              <select class="form-control select2" multiple="multiple" name="segment" value="{{ $proactive->segment }}">
                <option value="All">All</option>
                <option value="CGS">CGS</option>
                <option value="GAS">GAS</option>
                <option value="LGS">LGS</option>
                <option value="MPS">MPS</option>
              </select>
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea id="editor1" class="form-control" rows="3" cols="80" placeholder="Enter ..." name="description" value="{{ $proactive->description }}"></textarea>
            </div>

            <div class="form-group">
              <label>Customer</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="customer" value="{{ $proactive->customer }}" />
            </div>

            <div class="form-group">
              <label>Last Action</label>
              <textarea id="editor2" class="form-control" rows="3" cols="80" placeholder="Enter ..." name="lastAction" value="{{ $proactive->lastAction }}"></textarea>
            </div>

            <div class="form-group">
              <label>Next Action</label>
              <textarea id="editor3" class="form-control" rows="3" cols="80" placeholder="Enter ..." name="nextAction" value="{{ $proactive->nextAction }}"></textarea>
            </div>

            <div class="form-group">
              <label>Current Progress</label>
              <select class="form-control select2" name="currentProgress" value="{{ $proactive->currentProgress }}" style="width: 100%">
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
              <textarea id="editor4" class="form-control" rows="3" cols="80" placeholder="Enter ..." name="information" value="{{ $proactive->information }}"></textarea>
            </div>

            <div class="form-group">
              <label>Start Project</label>
              <div class="input-group">
               <div class="input-group-addon">
                 <i class="fa fa-calendar"></i>
               </div>
               <input type="date" class="form-control pull-right" id="reservation" name="startProject" value="{{ $proactive->startProject }}" />
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

@endsection
