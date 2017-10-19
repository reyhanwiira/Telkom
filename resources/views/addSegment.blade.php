@extends('layouts.addSegment_layout')

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
        <form role="form" method="post" action="">
          <div class="box-body">

            <div class="form-group">
              <label>Business Unit Name</label>
              <input type="text" class="form-control" name="businessUnitName">
            </div>

            <div class="form-group">
              <label>Short Name</label>
              <input type="text" class="form-control" name="customer" />
            </div>

            <div class="form-group">
              <label>Description</label>
              <form>
                <textarea class="textarea1" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            
                </textarea>
              </form>
            </div>

         </div><!-- /.box-body -->

         <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

@endsection
