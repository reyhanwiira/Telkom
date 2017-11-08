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
         <table id="example3" class="table table-bordered table-striped">
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
                      <i class='glyphicon glyphicon-search'></i>
                    </button>
                  </a>
                  <a>
                    <span data-toggle="modal" data-target="#myModal" >
                      <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Project">
                        <i class='glyphicon glyphicon-trash'></i>
                      </button>
                    </span>
                  </a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.table-responsive -->

      <div class="modal modal-danger fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Alert!</h4>
            </div>
            <div class="modal-body">
              Are You Sure want to delete this Project ?, this cannot be undo!
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <a href="deleteRaisa/{{ $raisa->id }}"><button type="button" class="btn btn-danger">Delete Project</button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <div class="row">
        <div class="col-xs-2 text-center">
          <a href="{{ url('tableRaisa/createRaisa') }}" class="btn btn-block btn-social"><i class="fa fa-plus-square-o"></i>Place New Project</a>
        </div>
        <div class="col-xs-2 text-center">
          <a href="#" target="_blank" class="btn btn-block btn-social"><i class="fa fa-download"></i> Import</a>
        </div>
        <div class="col-xs-2 text-center">

        </div>
        <div class="col-xs-2 text-center">

        </div>
        <div class="col-xs-2 text-center">
          <a href="#" target="_blank" class="btn btn-block btn-social"><i class="fa fa-upload"></i> Export</a> 
        </div>
        <div class="col-xs-2 text-center">
          <a href="#" target="_blank" class="btn btn-block btn-social"><i class="fa fa-print"></i> Print</a>
        </div>
      </div><!-- /.box-footer -->
    </div><!-- /.box-footer -->
  </div><!-- /.box -->
</div><!-- /.col -->

</div><!-- /.row --> 

@endsection