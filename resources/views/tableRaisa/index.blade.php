@extends('layouts.table_layout')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">RAISA</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
         <table id="example2" class="table table-bordered table-striped">
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
            @foreach ($raisas as $raisa)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $raisa-> projectName }}</td>
              <td>{{ $raisa-> segment }}</td>
              <td>{{ $raisa-> description }}</td>
              <td>{{ $raisa-> customer }}</td>
              <td>{{ $raisa-> lastAction }}</td>
              <td>{{ $raisa-> nextAction }}</td>
              <td>{{ $raisa-> status }}</td>
              <td>{{ $raisa-> information }}</td>
              <td>{{ $raisa-> startProject }}</td>
              <td>{{ $raisa-> finishProject }}</td>
              <td>
                <div class="btn-group">
                  <a href="{{ url('/tableRaisa/'.$raisa->id.'/editRaisa') }}">
                    <button type="button" class="btn btn-success" data-placement="top" title="Detail Project">
                      <i class='glyphicon glyphicon-zoom-in'></i>
                    </button>
                  </a>

                  <a href="deleteRaisa/{{ $raisa->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-placement="bottom" title="Delete Project"><i class='glyphicon glyphicon-trash'></i></button></a>

                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <a href="{{ url('tableRaisa/createRaisa') }}" class="btn btn-primary pull-left">Place New Project</a>
      <a href="invoice-print.html" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->
</div><!-- /.col -->

</div><!-- /.row --> 

@endsection