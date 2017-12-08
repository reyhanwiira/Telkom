<!-- home -->

@extends('layouts.layouts')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-body">
          <div class="box-header with-border" style="text-align: center; padding-right: 29%">
            <h3 class="box-title">PROACTIVE</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-9">
                <div class="chart-responsive">
                  <canvas id="pieChart" height="220"></canvas>
                </div>
              </div>
              <div class="col-md-3">
                <ul class="chart-legend clearfix">
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba"></i> P0</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
                  <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
                </ul>
              </div>
            </div>  
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody>
                      <td style=" max-width: 35px; text-align: left; background-color: #ECF0F5">
                       Persentase
                     </td>
                     <td style="max-width: 8px; text-align: right; background-color: #ECF0F5">

                     </td>
                     <td style="max-width: 17px ; text-align: left; background-color: #ECF0F5">

                      @if($lastProactives2 !=0 || $lastProactives3 !=0)
                      <span><?php echo number_format(($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100,2, '.', '')?> %
                      </span>
                      @else
                      <span>0</span>
                      @endif
                    </td>
                    <td style="max-width: 5px; text-align: center; background-color: #ECF0F5">
                      <span style="font-size: 18px;"> | </span>
                    </td>
                    <td style="max-width: 17px ; text-align: left; background-color: #ECF0F5">
                      <span style="font-size: 16px; color: #1394ba">
                        @if($proactives2 !=0 || $proactives3 !=0)
                        <span><?php echo number_format(($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100,2, '.', '')?> %
                        </span>
                        @else
                        <span>0</span>
                        @endif
                      </span>
                      @if(($proactives2 !=0 || $proactives3 !=0) && ($lastProactives2 !=0 || $lastProactives3 !=0))
                      @if((($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100) >  (($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100)) 
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test2"></i>
                        </span>
                      </td>
                      @elseif((($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100) <  (($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100)) 
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif((($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100) ==  (($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100)) 
                      <td style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test1"></i>
                        </span>
                      </td>
                      @endif
                      @else
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test2"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <td style=" max-width: 30px; text-align: left">
                  P0
                </td>
                <td style=" max-width: 35px; text-align: right">

                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #b3b3b3">{{ $lastProactives0 }} </span>
                </td>
                <td style=" max-width: 5px; text-align: center;">
                  <span style="font-size: 18px;"> | </span>
                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #1394ba">{{ $proactives0 }} 
                    @if($proactives0  > $lastProactives0)
                    <td  style=" max-width: 5px; text-align: left;">
                      <span class="text-green">
                        <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                      </span>
                    </td>                             
                    @elseif($proactives0  < $lastProactives0)
                    <td  style=" max-width: 5px; text-align: center;">
                      <span class="text-green"> 
                        <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                      </span>
                    </td>
                    @elseif($proactives0 == $lastProactives0 )
                    <td style=" max-width: 5px; text-align: left;">
                      <span class="text-yellow">
                        <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                      </span>
                    </td>
                    @endif
                  </span>
                </td>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <td style=" max-width: 30px; text-align: left">
                  P1
                </td>
                <td style=" max-width: 35px; text-align: right">

                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #b3b3b3">{{ $lastProactives1 }} </span>
                </td>
                <td style=" max-width: 5px; text-align: center;">
                  <span style="font-size: 18px;"> | </span>
                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #0c3c55">{{ $proactives1 }} 
                    @if($proactives1  > $lastProactives1)
                    <td  style=" max-width: 5px; text-align: left;">
                      <span class="text-green">
                        <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                      </span>
                    </td>                             
                    @elseif($proactives1  < $lastProactives1)
                    <td  style=" max-width: 5px; text-align: center;">
                      <span class="text-green"> 
                        <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                      </span>
                    </td>
                    @elseif($proactives1 == $lastProactives1 )
                    <td style=" max-width: 5px; text-align: left;">
                      <span class="text-yellow">
                        <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                      </span>
                    </td>
                    @endif
                  </span>
                </td>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <td style=" max-width: 30px; text-align: left">
                  P2
                </td>
                <td style=" max-width: 35px; text-align: right">

                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #b3b3b3">{{ $lastProactives2 }} </span>
                </td>
                <td style=" max-width: 5px; text-align: center;">
                  <span style="font-size: 18px;"> | </span>
                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #c02e1d">{{ $proactives2 }} 
                    @if($proactives2  > $lastProactives2)
                    <td  style=" max-width: 5px; text-align: left;">
                      <span class="text-green">
                        <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                      </span>
                    </td>                             
                    @elseif($proactives2  < $lastProactives2)
                    <td  style=" max-width: 5px; text-align: center;">
                      <span class="text-green"> 
                        <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                      </span>
                    </td>
                    @elseif($proactives2 == $lastProactives2 )
                    <td style=" max-width: 5px; text-align: left;">
                      <span class="text-yellow">
                        <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                      </span>
                    </td>
                    @endif
                  </span>
                </td>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <td style=" max-width: 30px; text-align: left">
                  P3
                </td>
                <td style=" max-width: 35px; text-align: right">

                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #b3b3b3">{{$lastProactives3}} </span>
                </td>
                <td style=" max-width: 5px; text-align: center;">
                  <span style="font-size: 18px;"> | </span>
                </td>
                <td style=" max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #f16b20">{{ $proactives3 }} 
                    @if($proactives3  > $lastProactives3)
                    <td  style=" max-width: 5px; text-align: left;">
                      <span class="text-green">
                        <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                      </span>
                    </td>                             
                    @elseif($proactives3  < $lastProactives3)
                    <td  style=" max-width: 5px; text-align: center;">
                      <span class="text-green"> 
                        <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                      </span>
                    </td>
                    @elseif($proactives3 == $lastProactives3 )
                    <td style=" max-width: 5px; text-align: left;">
                      <span class="text-yellow">
                        <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                      </span>
                    </td>
                    @endif
                  </span>
                </td>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <td style="max-width: 30px; text-align: left;">
                  Total
                </td>
                <td style="max-width: 35px; text-align: right;">

                </td>
                <td style="max-width: 9px; text-align: left;">
                  <span style="font-size: 16px; color: #b3b3b3;"> {{$lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3}} </span>
                </td>
                <td style="max-width: 5px; text-align: center; ">
                  <span style="font-size: 18px;"> | </span>
                </td>
                <td style="max-width: 9px; text-align: left; ">
                  <span style="font-size: 16px; color: #cc00cc">  {{$proactives0 + $proactives1 + $proactives2 + $proactives3}} 
                    @if($proactives0 + $proactives1 + $proactives2 + $proactives3 > $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)
                    <td style="max-width: 5px; text-align: left; ">
                      <span class="text-green">
                        <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                      </span>
                    </td>  
                    @elseif($proactives0 + $proactives1 + $proactives2 + $proactives3 < $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)
                    <td style="max-width: 5px; text-align: center; ">
                      <span class="text-green">
                        <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terdapat project yang sudah selesai">
                        </i>
                      </span>
                    </td>  
                    @elseif($proactives0 + $proactives1 + $proactives2 + $proactives3 = $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)
                    <td style="max-width: 20px; text-align: left; ">
                      <span class="text-green">
                        <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                      </span>
                    </td> 
                    @endif
                  </span>
                </td>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>    
  </div>                                                                                                            
</div>
</div>      

<div class="col-md-8">
  <div class="box box-primary">
    <div class="box-body">
      <div class="col-md-6">
        <div class="box-header with-border" style="text-align: center; padding-right: 29%">
          <h3 class="box-title">RAISA</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="chart-responsive">
                <canvas id="pieChart2" height="220"></canvas>
              </div>
            </div>
            <div class="col-md-3">
              <ul class="chart-legend clearfix">
                <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba"></i> P0</li>
                <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
                <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
                <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
              </ul>
            </div>
          </div>

        </div>
        <div class="box-footer no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <td style="max-width: 35px; text-align: left; background-color: #ECF0F5">
                      Persentase
                    </td>
                    <td style="max-width: 8px; text-align: right; background-color: #ECF0F5">

                    </td>
                    <td style="max-width: 17px ; text-align: left; background-color: #ECF0F5">

                      @if($lastRaisa2 !=0 || $lastRaisa3 !=0)
                      <span><?php echo number_format(($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100,2, '.', '')?> %
                      </span>
                      @else
                      <span>0</span>
                      @endif
                      <span style="font-size: 16px; color: #b3b3b3"> % </span>
                    </td>
                    <td style="max-width: 5px; text-align: center; background-color: #ECF0F5">
                      <span style="font-size: 18px;"> | </span>
                    </td>
                    <td style="max-width: 17px ; text-align: left; background-color: #ECF0F5">
                      <span style="font-size: 16px; color: #1394ba">
                        @if($raisa2 !=0 || $raisa3 !=0)
                        <span><?php echo number_format(($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100,2, '.', '')?> %
                        </span>
                        @else
                        <span>0</span>
                        @endif
                      </span>
                      @if(($raisa2 !=0 || $raisa3 !=0) && ($lastRaisa2 !=0 || $lastRaisa3 !=0))
                      @if((($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100) >  (($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100)) 
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test2"></i>
                        </span>
                      </td>                         
                      @elseif((($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100) <  (($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100)) 
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif((($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100) ==  (($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100)) 
                      <td style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test1"></i>
                        </span>
                      </td>
                    </span>@endif
                    @else
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test2"></i>
                        </span>
                      </td>
                    @endif
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style="max-width: 30px; text-align: left;">
                    P0
                  </td>
                  <td style="max-width: 35px; text-align: right;">

                  </td>
                  <td style="max-width: 9px; text-align: left;">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastRaisa0 }} </span>
                  </td>
                  <td style="max-width: 5px; text-align: center; ">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style="max-width: 9px; text-align: left; ">
                    <span style="font-size: 16px; color: #1394ba">{{ $raisa0 }} 
                      @if($raisa0  > $lastRaisa0)
                      <td  style="max-width: 5px; text-align: left; ">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($raisa0  < $lastRaisa0)
                      <td  style="max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($raisa0 == $lastRaisa0 )
                      <td style="max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style="max-width: 30px; text-align: left;">
                    P1
                  </td>
                  <td style="max-width: 35px; text-align: right;">

                  </td>
                  <td style="max-width: 9px; text-align: left;">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastRaisa1 }} </span>
                  </td>
                  <td style="max-width: 5px; text-align: center; ">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style="max-width: 9px; text-align: left; ">
                    <span style="font-size: 16px; color: #0c3c55">{{ $raisa1 }} 
                      @if($raisa1  > $lastRaisa1)
                      <td  style="max-width: 5px; text-align: left; ">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($raisa1  < $lastRaisa1)
                      <td  style="max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($raisa1 == $lastRaisa1 )
                      <td style="max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style="max-width: 30px; text-align: left;">
                    P2
                  </td>
                  <td style="max-width: 35px; text-align: right;">

                  </td>
                  <td style="max-width: 9px; text-align: left;">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastRaisa2 }} </span>
                  </td>
                  <td style="max-width: 5px; text-align: center; ">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style="max-width: 9px; text-align: left; ">
                    <span style="font-size: 16px; color: #c02e1d">{{ $raisa2 }} 
                      @if($raisa2  > $lastRaisa2)
                      <td  style="max-width: 5px; text-align: left; ">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($raisa2  < $lastRaisa2)
                      <td  style="max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($raisa2 == $lastRaisa2 )
                      <td style="max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style="max-width: 30px; text-align: left;">
                    P3
                  </td>
                  <td style="max-width: 35px; text-align: right;">

                  </td>
                  <td style="max-width: 9px; text-align: left;">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastRaisa3 }} </span>
                  </td>
                  <td style="max-width: 5px; text-align: center; ">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style="max-width: 9px; text-align: left; ">
                    <span style="font-size: 16px; color: #f16b20">{{ $raisa3 }} 
                      @if($raisa3  > $lastRaisa3)
                      <td  style="max-width: 5px; text-align: left; ">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($raisa3  < $lastRaisa3)
                      <td  style="max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($raisa3 == $lastRaisa3 )
                      <td style="max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 30px; text-align: left">
                    Total
                  </td>
                  <td style=" max-width: 35px; text-align: right;">

                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: medium; color: #b3b3b3;"> {{$lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3}} </span>
                  </td>
                  <td style=" max-width: 5px; text-align: center;">
                    <span style="font-size: 16px;"> | </span>
                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: medium; color: #cc00cc">  {{$raisa0 + $raisa1 + $raisa2 + $raisa3}} 
                      @if($raisa0 + $raisa1 + $raisa2 + $raisa3 > $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)
                      <td style=" max-width: 5px; text-align: left;">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                        </span>
                      </td>  
                      @elseif($raisa0 + $raisa1 + $raisa2 + $raisa3 < $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)
                      <td style=" max-width: 5px; text-align: center;">
                        <span class="text-green">
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terdapat project yang sudah selesai">
                          </i>
                        </span>
                      </td>  
                      @elseif($raisa0 + $raisa1 + $raisa2 + $raisa3 = $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                        </span>
                      </td> 
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>    
    </div>
    <div class="col-md-6">
      <div class="box-header with-border" style="text-align: center; padding-right: 29%">
        <h3 class="box-title">OTHERS</h3>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-9">
            <div class="chart-responsive">
              <canvas id="pieChart3" height="220"></canvas>
            </div>
          </div>
          <div class="col-md-3">
            <ul class="chart-legend clearfix">
              <li style="font-size: medium"><i class="fa fa-circle" style="color: #1394ba"></i> P0</li>
              <li style="font-size: medium"><i class="fa fa-circle" style="color: #0c3c55"></i> P1</li>
              <li style="font-size: medium"><i class="fa fa-circle" style="color: #c02e1d"></i> P2</li>
              <li style="font-size: medium"><i class="fa fa-circle" style="color: #f16b20"></i> P3</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-pills nav-stacked">
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 35px; text-align: left; background-color: #ECF0F5">
                    Persentase
                  </td>
                  <td style=" max-width: 8px; text-align: right; background-color: #ECF0F5">

                  </td>
                  <td style=" max-width: 17px; text-align: left; background-color: #ECF0F5">
                    @if($lastOthers2 !=0 || $lastOthers3 !=0)
                    <?php echo number_format(($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100,2, '.', '')?>
                    @else
                    <span>0</span>
                    @endif
                    <span style="font-size: 16px; color: #b3b3b3"> %</span>
                  </td>
                  <td style=" max-width: 5px; text-align: center; background-color: #ECF0F5">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style=" max-width: 17px; text-align: left; background-color: #ECF0F5">
                    <span style="font-size: 16px; color: #1394ba">
                      @if($others2 !=0 || $others3 !=0)
                      <?php echo number_format(($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100,2, '.', '')?>
                      @else
                      <span>0</span>
                      @endif
                      %
                      @if(($others2 !=0 || $others3 !=0) && ($lastOthers2 !=0 || $lastOthers3 !=0))
                      @if(($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100 > ($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100)
                      <td  style=" max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @elseif(($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100 < ($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100)
                      <td  style=" max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green"> 
                          <i class="fa fa-chevron-down" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @else if(($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100 < ($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100)
                      <td style=" max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                      @else
                      <td  style="max-width: 5px; text-align: left; background-color: #ECF0F5">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test2"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 30px; text-align: left">
                    P0
                  </td>
                  <td style=" max-width: 35px; text-align: right;">

                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastOthers0 }} </span>
                  </td>
                  <td style=" max-width: 5px; text-align: center;">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #1394ba">{{ $others0 }} 
                      @if($others0  > $lastOthers0)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($others0  < $lastOthers0)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($others0 = $lastOthers0 )
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 30px; text-align: left">
                    P1
                  </td>
                  <td style=" max-width: 35px; text-align: right;">

                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastOthers1 }} </span>
                  </td>
                  <td style=" max-width: 5px; text-align: center;">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #0c3c55">{{ $others1 }} 
                      @if($others1  > $lastOthers1)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($others1  < $lastOthers1)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($others1 = $lastOthers1 )
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 30px; text-align: left">
                    P2
                  </td>
                  <td style=" max-width: 35px; text-align: right;">

                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastOthers2 }} </span>
                  </td>
                  <td style=" max-width: 5px; text-align: center;">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #c02e1d">{{ $proactives2 }} 
                      @if($proactives2  > $lastOthers2)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($proactives2  < $lastOthers2)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($proactives2 = $lastOthers2 )
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 30px; text-align: left">
                    P3
                  </td>
                  <td style=" max-width: 35px; text-align: right;">

                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #b3b3b3">{{ $lastOthers3 }} </span>
                  </td>
                  <td style=" max-width: 5px; text-align: center;">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #f16b20">{{ $proactives3 }} 
                      @if($proactives3  > $lastOthers3)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>                             
                      @elseif($proactives3  < $lastOthers3)
                      <td  style=" max-width: 5px; text-align: left">
                        <span class="text-green"> 
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                        </span>
                      </td>
                      @elseif($proactives3 = $lastOthers3 )
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-yellow">
                          <i class="fa fa-chevron-right" style="font-size: 15px" data-toggle="tooltip" data-placement="right" title="test"></i>
                        </span>
                      </td>
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
          <li>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <td style=" max-width: 30px; text-align: left">
                    Total
                  </td>
                  <td style=" max-width: 35px; text-align: right;">

                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #b3b3b3;"> {{$lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3}} </span>
                  </td>
                  <td style=" max-width: 5px; text-align: center;">
                    <span style="font-size: 18px;"> | </span>
                  </td>
                  <td style=" max-width: 9px; text-align: left">
                    <span style="font-size: 16px; color: #cc00cc">  {{$proactives0 + $proactives1 + $proactives2 + $proactives3}} 
                      @if($proactives0 + $proactives1 + $proactives2 + $proactives3 > $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)
                      <td style=" max-width: 5px; text-align: center;">
                        <span class="text-green">
                          <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                        </span>
                      </td>  
                      @elseif($proactives0 + $proactives1 + $proactives2 + $proactives3 < $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terdapat project yang sudah selesai">
                          </i>
                        </span>
                      </td>  
                      @elseif($proactives0 + $proactives1 + $proactives2 + $proactives3 = $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)
                      <td style=" max-width: 5px; text-align: left">
                        <span class="text-green">
                          <i class="fa fa-chevron-right" style="font-size: 13px"></i>
                        </span>
                      </td> 
                      @endif
                    </span>
                  </td>
                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>    
    </div>
  </div>  
</div>
</div>
</div>
</div>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<!-- ChartJS -->
<script src="../../bower_components/Chart.js/Chart.js"></script>

<script>
$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [

    {
      value    : {{ $others0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $others1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $others2 }},
      color    : '#c02e1d',
      highlight: '#de3421',
      label    : 'P2'
    },
    {
      value    : {{ $others3}},
      color    : '#f16b20',
      highlight: '#f17127',
      label    : 'P3'
    }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 48, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
  })
</script>

<script>
$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $raisa0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $raisa1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $raisa2 }},
      color    : '#c02e1d',
      highlight: '#de3421',
      label    : 'P2'
    },
    {
      value    : {{ $raisa3 }},
      color    : '#f16b20',
      highlight: '#f17127',
      label    : 'P3'
    }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 48, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

  })
</script>

<script>
$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $proactives0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $proactives1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $proactives2 }},
      color    : '#c02e1d',
      highlight: '#de3421',
      label    : 'P2'
    },
    {
      value    : {{ $proactives3 }},
      color    : '#f16b20',
      highlight: '#f17127',
      label    : 'P3'
    }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 48, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

  })
</script>

<script>
</script>
</section>
@endsection