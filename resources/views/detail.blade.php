@extends('layouts.detail_layout')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-solid"></div>
      <div class="box-header with-border">
        <h3 class="box-title">Progress Bars Different Sizes</h3>

        <div class="box-body">
          <div class="progress">
            <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>

        </div>
        
      </div>
    </div>
  </div>
</section>
@endsection