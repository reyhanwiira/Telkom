@extends('layouts.editProject_layout')

@section('content')

<body>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
          </div><!-- /.box-header -->
          <!-- form start -->
          <div class="box-body">
            <div class="form-group">
              <label>Project</label>
              <input type="text" class="form-control" placeholder="Enter ..."/>
            </div>

            <div class="form-group">
              <label>Segment</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select Segment"
              style="width: 100%;">
              <option>CGS</option>
              <option>GAS</option>
              <option>LGS</option>
              <option>MPS</option>
            </select>
          </div>

          <div class="form-group">
            <label>Description</label>
            <form>
              <textarea id="editor1" name="editor1" rows="10" cols="80">
              </textarea>
            </form>
          </div>

          <div class="form-group">
            <label>Customer</label>
            <input type="text" class="form-control" placeholder="Enter ..."/>
          </div>

          <div class="form-group">
            <label>Last Action</label>
            <form>
              <textarea id="editor2" name="editor1" rows="10" cols="80">
              </textarea>
            </form>
          </div>

          <div class="form-group">
            <label>Next Action</label>
            <form>
              <textarea id="editor3" name="editor1" rows="10" cols="80">
              </textarea>
            </form>
          </div>

          <div class="form-group">
            <label>Status</label>
            <select class="form-control select2" style="width: 100%;">
              <option class="selected">Initial Requirement</option>
              <option>Initial Solusi</option>
              <option>Waiting Feedback & Requirement Gathering</option>
              <option>Solution Design</option>
              <option>Solution Development</option>
              <option>POC</option>
              <option>Proposal Ready</option>
            </select>
            </div>

          <div class="form-group">
            <label>Information</label>
            <form>
              <textarea id="editor4" name="editor1" rows="10" cols="80">
              </textarea>
            </form>
          </div>

          <div class="form-group">
            <label>Start Project</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker">
            </div>
          </div>

          <div class="form-group">
            <label>Finish Project</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker2">
            </div>
          </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div><!-- /.box -->

    </div><!--/.col (left) -->
  </div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
</body>
</html>

@endsection
