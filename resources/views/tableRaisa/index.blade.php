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
         <table id="example4" class="table table-bordered table-striped" style="border-color: black">
          <thead>
            <tr>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">No</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Project</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Segment</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Description</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Customer</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Last Action</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Next Action</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Status</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Information</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Start Project</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Finish Project</th>
              <th style="border-color: black; border-bottom-width: 0px; background-color:#ff3333; color: #ffffff">Action</th> 
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($raisas as $raisa)
            <tr>
              <td style="text-align: center; font-size: 12px;border-color: black">{{ $no++ }}</td>
              <td style="font-size: 12px; border-color: black">{{ $raisa-> projectName }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $raisa-> segment }}</td>
              <td style="font-size: 12px; border-color: black">{{ $raisa-> description }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $raisa-> customer }}</td>
              <td style="font-size: 12px; border-color: black">{{ $raisa-> lastAction }}</td>
              <td style="font-size: 12px; border-color: black">{{ $raisa-> nextAction }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $raisa-> status }}</td>
              <td style="font-size: 12px; border-color: black">{{ $raisa-> information }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $raisa-> startProject }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $raisa-> finishProject }}</td>
              <td style="border-color: black">
                <div class="btn-group" style="text-align: center;">
                  <a href="{{ url('/tableRaisa/'.$raisa->id.'/editRaisa') }}">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Project">
                      <i class='glyphicon glyphicon-search' style="font-size: 12px"></i>
                    </button>
                  </a>

                  <a href="deleteRaisa/{{ $raisa->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class='glyphicon glyphicon-trash' style="font-size: 12px"></i></button>
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
          <a href="{{ url('tableRaisa/createRaisa') }}" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-plus-square-o"></i> New Project</a>
        </div>
        <div class="col-xs-2 text-center">
          
        </div>
        <div class="col-xs-2 text-center">
           
        </div>
        <div class="col-xs-2 text-center">
           
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('importRaisa') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-upload"></i> Import</a>
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('downloadRaisa','xlsx') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-download"></i> Export</a> 
        </div>
      </div>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->

</div><!-- /.col -->

</div><!-- /.row --> 

@endsection