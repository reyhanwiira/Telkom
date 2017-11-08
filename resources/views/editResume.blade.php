@extends('layouts.editProject_layout')

@section('content')
<body>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">View Detail Project</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- form start -->
          <form role="form" method="post" action="{{ url('/'.$resume->id) }}">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="col-md-12">
            <div class="box-body">
              <div class="col-md-6">
              <h3>Proactive</h3>              
              <div class="form-group">
                <label>P0</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p0Proactive" value="{{$resume-> p0Proactive}}" />
              </div>

              <div class="form-group">
                <label>P1</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p1Proactive" value="{{$resume -> p1Proactive}}" />
              </div>

              <div class="form-group">
                <label>P2</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p2Proactive" value="{{$resume ->p2Proactive}}" />
              </div>

              <div class="form-group">
                <label>P3</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p3Proactive" value="{{$resume ->p3Proactive}}" />
              </div>
              </div>
              <div class="col-md-6">
              <h3>Raisa</h3>
              <div class="form-group">
                <label>P0</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p0Raisa" value="{{$resume-> p0Raisa}}" />
              </div>

              <div class="form-group">
                <label>P1</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p1Raisa" value="{{$resume -> p1Raisa}}" />
              </div>

              <div class="form-group">
                <label>P2</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p2Raisa" value="{{$resume ->p2Raisa}}" />
              </div>

              <div class="form-group">
                <label>P3</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p3Raisa" value="{{$resume ->p3Raisa}}" />
              </div>
              </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
              <h3>Other</h3>
              <div class="form-group">
                <label>P0</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p0Other" value="{{$resume-> p0Other}}" />
              </div>

              <div class="form-group">
                <label>P1</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p1Other" value="{{$resume -> p1Other}}" />
              </div>

              <div class="form-group">
                <label>P2</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p2Other" value="{{$resume ->p2Other}}" />
              </div>

              <div class="form-group">
                <label>P3</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p3Other" value="{{$resume ->p3Other}}" />
              </div>
            </div>
            <div class="col-md-6">
              <h3>SCN</h3>
              <div class="form-group">
                <label>P0</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p0Scn" value="{{$resume-> p0Scn}}" />
              </div>

              <div class="form-group">
                <label>P1</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p1Scn" value="{{$resume -> p1Scn}}" />
              </div>

              <div class="form-group">
                <label>P2</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p2Scn" value="{{$resume ->p2Scn}}" />
              </div>

              <div class="form-group">
                <label>P3</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="p3Scn" value="{{$resume ->p3Scn}}" />
              </div>
              </div>
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
