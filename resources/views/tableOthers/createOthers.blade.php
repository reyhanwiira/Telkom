@extends('layouts.addProject_layout')

@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" name="form" action="{{ url('/tableOthers') }}">
          {!! csrf_field() !!}
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group{{ $errors->has('projectName') ? ' has-error' : '' }}">
                <label>Project</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="projectName" value="{{ old('projectName') }}" />
                 @if ($errors->has('projectName'))
                      <span class="help-block">
                      <strong>{{ $errors->first('projectName') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group{{ $errors->has('segment') ? ' has-error' : '' }}">
                <label>Segment</label>
                <select name="segment" class="form-control select2" multiple>
                  <option value="CGS">CGS</option>
                  <option value="GAS">GAS</option>
                  <option value="LGS">LGS</option>
                  <option value="MPS">MPS</option>
                </select>
                 @if ($errors->has('segment'))
                      <span class="help-block">
                      <strong>{{ $errors->first('segment') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group{{ $errors->has('descriptiom') ? ' has-error' : '' }}">
                <label>Description</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                 @if ($errors->has('description'))
                      <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group{{ $errors->has('customer') ? ' has-error' : '' }}">
                <label>Customer</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="customer" />
                 @if ($errors->has('customer'))
                      <span class="help-block">
                      <strong>{{ $errors->first('customer') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group{{ $errors->has('lastAction') ? ' has-error' : '' }}">
                <label>Last Action</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." name="lastAction"></textarea>
                 @if ($errors->has('lastAction'))
                      <span class="help-block">
                      <strong>{{ $errors->first('lastAction') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group{{ $errors->has('nextAction') ? ' has-error' : '' }}">
                <label>Next Action</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." name="nextAction"></textarea>
                 @if ($errors->has('nextAction'))
                      <span class="help-block">
                      <strong>{{ $errors->first('nextAction') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group{{ $errors->has('progress') ? ' has-error' : '' }}">
                <label>Progress</label>
                <input type="text" class="form-control pull-right" placeholder="Enter ..." id="progress" name="progress" value="{{ old('progress') }}">
                 @if ($errors->has('progress'))
                      <span class="help-block">
                      <strong>{{ $errors->first('progress') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" name="currentProgress" id="currentProgress">
              </div>        

              <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                <label>Status</label>
                <select class="form-control select2" name="status">
                  <option value="P0">P0</option>
                  <option value="P1">P1</option>
                  <option value="P2">P2</option>
                  <option value="P3">P3</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">

              <div class="form-group{{ $errors->has('information') ? ' has-error' : '' }}">
                <label>Information</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." name="information"></textarea>
                @if ($errors->has('information'))
                      <span class="help-block">
                      <strong>{{ $errors->first('information') }}</strong>
                      </span>
                 @endif
              </div>

              <div class="form-group">
               <label>Start Project</label>
               <div class="input-group">
                 <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
                 </div>
                 <input type="date" class="form-control pull-right" id="reservation" name="startProject" />
               </div><!-- /.input group -->
             </div><!-- /.form group -->

             <div class="form-group">
               <label>Finish Project</label>
               <div class="input-group">
                 <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
                 </div>
                 <input type="date" class="form-control pull-right" id="reservation" name="finishProject" />
               </div><!-- /.input group -->
             </div><!-- /.form group -->

             <div class="form-group">
              <label>AM Segment</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="AMSegment" />
            </div>

            <div class="form-group">
              <label>Keahlian yang dibutuhkan</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="keahlian" />
            </div>

            <div class="form-group">
              <label>Est. Revenue</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="EstRevenue" />
            </div>

            <div class="form-group">
              <label>Deliverable</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="deliverable" />
            </div>

            <div class="form-group">
              <label>Benefit</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="benefit" />
            </div>

            <div class="form-group">
              <label>Support AP</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="supportAP" />
            </div>

            <div class="form-group">
              <input type="hidden" class="form-control" name="lastStatus" value="0" />
            </div>
          </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary" onclick="val();">Submit</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->


@endsection
