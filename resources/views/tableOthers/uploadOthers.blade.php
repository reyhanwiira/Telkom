@extends('layouts.addDocument_layout')

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
              <form role="form" method="post" action="{{ url('/tableOthers/uploadOthers') }}" enctype="multipart/form-data">
              {!! csrf_field() !!}
                <div class="box-body">

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="upload">
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
</section><!-- /.content -->

@endsection
