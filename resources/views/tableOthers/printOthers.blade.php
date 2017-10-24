@extends('layouts.print_layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">OTHERS</h3>
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
              <th>Project</th>
              <th>Segment</th>
              <th>Description</th>
              <th>Customer</th>
              <th>Last Action</th>
              <th>Next Action</th>
              <th>Status</th>
              <th>Information</th>
              <th>Start Project</th>
              <th>Finish Project</th>
          
          </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($otherss as $other)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $other-> projectName }}</td>
              <td>{{ $other-> segment }}</td>
              <td>{{ $other-> description }}</td>
              <td>{{ $other-> customer }}</td>
              <td>{{ $other-> lastAction }}</td>
              <td>{{ $other-> nextAction }}</td>
              <td>{{ $other-> status }}</td>
              <td>{{ $other-> information }}</td>
              <td>{{ $other-> startProject }}</td>
              <td>{{ $other-> finishProject }}</td>
          
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div><!-- /.col -->

</div><!-- /.row --> 
  @endsection