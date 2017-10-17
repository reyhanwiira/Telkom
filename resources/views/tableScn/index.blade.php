@extends('layouts.table_layout')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Pro-Active</h3>
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
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($scns as $scn)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $scn-> projectName }}</td>
              <td>{{ $scn-> segment }}</td>
              <td>{{ $scn-> description }}</td>
              <td>{{ $scn-> customer }}</td>
              <td>{{ $scn-> lastAction }}</td>
              <td>{{ $scn-> nextAction }}</td>
              <td>{{ $scn-> status }}</td>
              <td>{{ $scn-> information }}</td>
              <td>{{ $scn-> startProject }}</td>
              <td>{{ $scn-> finishProject }}</td>
              <td>
                <div class="btn-group-vertical">
                  <a href=""><button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button></a>
                  
                  <a href="{{ url('/tableScn/'.$scn->id.'/edit') }}"><button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button></a>

                  <a href="deleteScn/{{ $scn->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button></a>

                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <a href="{{ url('tableScn/create') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Project</a>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->
</div><!-- /.col -->

</div><!-- /.row --> 

@endsection