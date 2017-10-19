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
</section><!-- /.content -->

@endsection
