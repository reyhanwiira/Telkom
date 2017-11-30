@extends('layouts.table_layout')

@section('content')

<div class="row">
  <div class="col-md-12">
    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">PROACTIVE</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
         <table id="example4" class="table table-bordered table-striped" style="border-color: black">
          <thead>
            <tr>
              <th style="border-color: black; border-bottom-width: 0px">No</th>
              <th style="border-color: black; border-bottom-width: 0px">Project</th>
              <th style="border-color: black; border-bottom-width: 0px">Segment</th>
              <th style="border-color: black; border-bottom-width: 0px">Description</th>
              <th style="border-color: black; border-bottom-width: 0px">Customer</th>
              <th style="border-color: black; border-bottom-width: 0px">Last Action</th>
              <th style="border-color: black; border-bottom-width: 0px">Next Action</th>
              <th style="border-color: black; border-bottom-width: 0px">Status</th>
              <th style="border-color: black; border-bottom-width: 0px">Information</th>
              <th style="border-color: black; border-bottom-width: 0px">Start Project</th>
              <th style="border-color: black; border-bottom-width: 0px">Finish Project</th>
              <th style="border-color: black; border-bottom-width: 0px">Action</th> 
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($proactives as $proactive)
            <tr>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $no++ }}</td>
              <td style="font-size: 12px;border-color: black">{{ $proactive-> projectName }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $proactive-> segment }}</td>
              <td style="font-size: 12px; border-color: black">{{ $proactive-> description }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $proactive-> customer }}</td>
              <td style="font-size: 12px; border-color: black">{{ $proactive-> lastAction }}</td>
              <td style="font-size: 12px; border-color: black">{{ $proactive-> nextAction }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $proactive-> status }}</td>
              <td style="font-size: 12px; border-color: black">{{ $proactive-> information }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $proactive-> startProject }}</td>
              <td style="text-align: center; font-size: 12px; border-color: black">{{ $proactive-> finishProject }}</td>
              <td style="border-color: black">
                <div class="btn-group" style="text-align: center;">
                  <a href="{{ url('/tableProactive/'.$proactive->id.'/editPro') }}">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Project">
                      <i class='glyphicon glyphicon-search' style="font-size: 12px"></i>
                    </button>
                  </a>

                  <a href="deletePro/{{ $proactive->id }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class='glyphicon glyphicon-trash' style="font-size: 12px"></i></button></a>

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
              <a href="deletePro/{{ $proactive->id }}"><button type="button" class="btn btn-danger">Delete Project</button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <div class="row">
        <div class="col-xs-2 text-center">
          <a href="{{ url('tableProactive/createPro') }}" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-plus-square-o"></i> New Project</a>
        </div>
        <div class="col-xs-2 text-center">
           
        </div>
        <div class="col-xs-2 text-center">
          
        </div>
        <div class="col-xs-2 text-center">
           
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('importProactive') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-upload"></i> Import</a>
        </div>
        <div class="col-xs-2 text-center">
          <a href="{{ url('downloadProactive','xlsx') }}" target="_blank" class="btn btn-block btn-social btn-linkedin"><i class="fa fa-download"></i> Export</a> 
        </div>
      </div>
    </div><!-- /.box-footer -->
  </div><!-- /.box -->

</div><!-- /.col -->

</div><!-- /.row --> 

@endsection