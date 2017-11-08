@extends('layouts.addActivity_layout')

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
        <form action="{{ url('/tableProactive/editProactive') }}" method="post"  enctype="multipart/form-data">
        {!! csrf_field() !!}
          <div class="box-body">
            <div class="form-group">
                 <label>Date</label>
                 <div class="input-group">
                   <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input type="date" class="form-control pull-right" id="reservation" name="tanggal" />
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
              <label>Evidence</label>
              <input type="text" class="form-control" name="evidence" />
            </div>

             <div class="form-group">
              Input File (can attach more than one):
              <br />
              <input type="file" name="file[]" multiple />
              <br /><br />
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
