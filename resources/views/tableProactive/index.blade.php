@extends('layouts.table_layout')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Pro-Active</h3>
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
              @foreach ($proactives as $proactive)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $proactive-> projectName }}</td>
                <td>{{ $proactive-> segment }}</td>
                <td>{{ $proactive-> description }}</td>
                <td>{{ $proactive-> customer }}</td>
                <td>{{ $proactive-> lastAction }}</td>
                <td>{{ $proactive-> nextAction }}</td>
                <td>{{ $proactive-> status }}</td>
                <td>{{ $proactive-> information }}</td>
                <td>{{ $proactive-> startProject }}</td>
                <td>{{ $proactive-> finishProject }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ url('/tableProactive/'.$proactive->id.'/editPro') }}">
                      <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Detail Project">
                        <i class='glyphicon glyphicon-zoom-in'></i>
                      </button>
                    </a>

                    <a href="deletePro/{{ $proactive->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Project"><i class='glyphicon glyphicon-trash'></i></button></a>

                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="{{ url('tableProactive/createPro') }}" class="btn btn-primary pull-center">Place New Project</a>

        <a href="#" target="_blank" class="btn btn-primary pull-right "><i class="fa fa-print"></i>  Print</a>

        <button type="button" class="btn btn-primary pull-center" data-toggle="tooltip" data-placement="top" title="Import Data">
            <i class='glyphicon glyphicon-floppy-open'></i>
        </button>

        <button type="button" class="btn btn-primary pull-center" data-toggle="tooltip" data-placement="right" title="Export Data">
            <i class='glyphicon glyphicon-floppy-save'></i>
        </button>

        <input type="file" id="upload" name="upload" class="btn btn-primary pull-center">

      </div><!-- /.box-footer -->
    </div><!-- /.box -->
  </div><!-- /.col -->

</div><!-- /.row --> 

@endsection