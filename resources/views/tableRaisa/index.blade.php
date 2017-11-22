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
         <table id="example4" class="table table-bordered table-striped">
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
              <td style="text-align: center; font-size: 12px">{{ $no++ }}</td>
              <td style="font-size: 12px;">{{ $raisa-> projectName }}</td>
              <td style="text-align: center; font-size: 12px">{{ $raisa-> segment }}</td>
              <td style="font-size: 12px;">{{ $raisa-> description }}</td>
              <td style="text-align: center; font-size: 12px">{{ $raisa-> customer }}</td>
              <td style="font-size: 12px;">{{ $raisa-> lastAction }}</td>
              <td style="font-size: 12px;">{{ $raisa-> nextAction }}</td>
              <td style="text-align: center; font-size: 12px">{{ $raisa-> status }}</td>
              <td style="font-size: 12px;">{{ $raisa-> information }}</td>
              <td style="text-align: center; font-size: 12px">{{ $raisa-> startProject }}</td>
              <td style="text-align: center; font-size: 12px">{{ $raisa-> finishProject }}</td>
              <td>
                <div class="btn-group" style="text-align: center;">
                  <a href="{{ url('/tableRaisa/'.$raisa->id.'/editRaisa') }}">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Project">
                      <i class='glyphicon glyphicon-search' style="font-size: 12px"></i>
                    </button>
                  </a>

                  <span data-toggle="modal" data-target="#myModal" >
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Project">
                      <i class='glyphicon glyphicon-trash' style="font-size: 12px"></i>
                    </button>
                  </span>

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
          <a href="{{ url('tableRaisa/createRaisa') }}" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-plus-square-o"></i> Place New Project</a>
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('importRaisa') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-download"></i> Import</a>
        </div>
        <div class="col-xs-2 text-center">
          
        </div>
        <div class="col-xs-2 text-center">
           
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('downloadRaisa','xlsx') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-upload"></i> Export</a> 
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('tableRaisa/printRaisa') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->

</div><!-- /.col -->

</div><!-- /.row --> 

@endsection