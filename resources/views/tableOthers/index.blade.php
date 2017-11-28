@extends('layouts.table_layout')

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
         <table id="example4" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="border-color: black">No</th>
              <th style="border-color: black">Project</th>
              <th style="border-color: black">Segment</th>
              <th style="border-color: black">Description</th>
              <th style="border-color: black">Customer</th>
              <th style="width: 10%; border-color: black">Last Action</th>
              <th style="width: 50%; border-color: black">Next Action</th>
              <th style="border-color: black">Status</th>
              <th style="border-color: black">Information</th>
              <th style="border-color: black">Start Project</th>
              <th style="border-color: black">Finish Project</th>
              <th style="border-color: black">Action</th> 
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($others as $other)
            <tr>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $no++ }}</td>
              <td style="font-size: 12px; border-color: black">{{ $other-> projectName }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $other-> segment }}</td>
              <td style="font-size: 12px; border-color: black">{{ $other-> description }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $other-> customer }}</td>
              <td style="font-size: 12px; border-color: black">{{ $other-> lastAction }}</td>
              <td style="font-size: 12px; border-color: black">{{ $other-> nextAction }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $other-> status }}</td>
              <td style="font-size: 12px;border-color: black">{{ $other-> information }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $other-> startProject }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $other-> finishProject }}</td>
              <td>
                <div class="btn-group" style="text-align: center">
                  <a href="{{ url('/tableOthers/'.$other->id.'/editOthers') }}">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Project">
                      <i class='glyphicon glyphicon-search' style="font-size: 12px"></i>
                    </button>
                  </a>

                  <a href="deleteOthers/{{ $other->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class='glyphicon glyphicon-trash' style="font-size: 12px"></i></button></a>

                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->

      <div class="modal modal-danger fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Waring!</h4>
            </div>
            <div class="modal-body">
              Are You Sure want to delete this Project ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <a href="deleteOthers/{{ $other->id }}"><button type="button" class="btn btn-danger">Delete Project</button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <div class="row">
        <div class="col-xs-2 text-center">
          <a href="{{ url('tableOthers/createOthers') }}" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-plus-square-o"></i> New Project</a>
        </div>
        <div class="col-xs-2 text-center">
         
        </div>
        <div class="col-xs-2 text-center">
          
        </div>
        <div class="col-xs-2 text-center">
         
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('importOthers') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-upload"></i> Import</a>
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('downloadOthers','xlsx') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-download"></i> Export</a> 
        </div>
      </div>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->

</div><!-- /.col -->

</div><!-- /.row --> 

@endsection