@extends('layouts.layouts')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-3">
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
                      <td>
                        Persentase
                      </td>
                      <td style="text-align: center">

                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #b3b3b3">  <span id="presentaseProactiveLast"></span> %  
                        </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium;"> | </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #1394ba">
                        <span id="presentaseProactive"></span> %
                        @if( ($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100 >  ($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100)
                          <td  style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                            </span>
                          </td>                             
                          @elseif(($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100 < ($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100 )
                          <td  style="text-align: center">
                            <span class="text-green"> 
                              <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                            </span>
                          </td>
                          @elseif(($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100 == ($lastProactives2 + $lastProactives3) / ($lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)*100 )
                          <td style="text-align: center">
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
                      <td>
                        P0
                      </td>
                      <td style="text-align: center">

                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #b3b3b3">{{ $lastProactives0 }} </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium;\"> | </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #1394ba">{{ $proactives0 }} 
                          @if($proactives0  > $lastProactives0)
                          <td  style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                            </span>
                          </td>                             
                          @elseif($proactives0  < $lastProactives0)
                          <td  style="text-align: center">
                            <span class="text-green"> 
                              <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                            </span>
                          </td>
                          @elseif($proactives0 = $lastProactives0 )
                          <td style="text-align: center">
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
                      <td>
                        P1
                      </td>
                      <td style="text-align: center">

                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #b3b3b3">{{ $lastProactives1 }} </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium;\"> | </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #1394ba">{{ $proactives1 }} 
                          @if($proactives1  > $lastProactives1)
                          <td  style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                            </span>
                          </td>                             
                          @elseif($proactives1  < $lastProactives1)
                          <td  style="text-align: center">
                            <span class="text-green"> 
                              <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                            </span>
                          </td>
                          @elseif($proactives1 = $lastProactives1 )
                          <td style="text-align: center">
                            <span class="text-yellow">
                              <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                      <td>
                        P2
                      </td>
                      <td style="text-align: center">

                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #b3b3b3">{{ $lastProactives2 }} </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium;\"> | </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #1394ba">{{ $proactives2 }} 
                          @if($proactives2  > $lastProactives2)
                          <td  style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                            </span>
                          </td>                             
                          @elseif($proactives2  < $lastProactives2)
                          <td  style="text-align: center">
                            <span class="text-green"> 
                              <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                            </span>
                          </td>
                          @elseif($proactives2 = $lastProactives2 )
                          <td style="text-align: center">
                            <span class="text-yellow">
                              <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                      <td>
                        P3
                      </td>
                      <td style="text-align: center">

                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #b3b3b3">{{ $lastProactives3 }} </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium;\"> | </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #1394ba">{{ $proactives1 }} 
                          @if($proactives3 > $lastProactives3)
                          <td  style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                            </span>
                          </td>                             
                          @elseif($proactives3 < $lastProactives3)
                          <td  style="text-align: center">
                            <span class="text-green"> 
                              <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                            </span>
                          </td>
                          @elseif($proactives3 = $lastProactives3 )
                          <td style="text-align: center">
                            <span class="text-yellow">
                              <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                      <td>
                        Total
                      </td>
                      <td style="text-align: center">

                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #b3b3b3;"> {{$lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3}} </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium;\"> | </span>
                      </td>
                      <td style="text-align: center">
                        <span style="font-size: medium; color: #cc00cc">  {{$proactives0 + $proactives1 + $proactives2 + $proactives3}} 
                          @if($proactives0 + $proactives1 + $proactives2 + $proactives3 > $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)
                          <td style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                            </span>
                          </td>  
                          @elseif($proactives0 + $proactives1 + $proactives2 + $proactives3 < $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)
                          <td style="text-align: center">
                            <span class="text-green">
                              <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terdapat project yang sudah selesai">
                              </i>
                            </span>
                          </td>  
                          @elseif($proactives0 + $proactives1 + $proactives2 + $proactives3 = $lastProactives0 + $lastProactives1 + $lastProactives2 + $lastProactives3)
                          <td style="text-align: center">
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

    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-body">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-body">
                <div class="box-header with-border" style="text-align: center; padding-right: 29%">
                  <h3 class="box-title">RAISA</h3>
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
                            <td>
                              Persentase
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastRaisa0 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">@if( ($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100 >  ($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif(($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100 < ($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100 )
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif(($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100 == ($lastRaisa2 + $lastRaisa3) / ($lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)*100 )
                                <td style="text-align: center">
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
                            <td>
                              P0
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastRaisa0 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $raisa0 }} 
                                @if($raisa0  > $lastRaisa0)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($raisa0  < $lastRaisa0)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($raisa0 = $lastRaisa0 )
                                <td style="text-align: center">
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
                            <td>
                              P1
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastRaisa1 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $raisa1 }} 
                                @if($raisa1  > $lastRaisa1)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($raisa1  < $lastRaisa1)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($raisa1 = $lastRaisa1 )
                                <td style="text-align: center">
                                  <span class="text-yellow">
                                    <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                            <td>
                              P2
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastRaisa2 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $raisa2 }} 
                                @if($raisa2  > $lastRaisa2)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($raisa2  < $lastRaisa2)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($raisa2 = $lastRaisa2 )
                                <td style="text-align: center">
                                  <span class="text-yellow">
                                    <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                            <td>
                              P3
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastRaisa3 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $raisa1 }} 
                                @if($raisa3 > $lastRaisa3)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($raisa3 < $lastRaisa3)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($raisa3 = $lastRaisa3 )
                                <td style="text-align: center">
                                  <span class="text-yellow">
                                    <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                            <td>
                              Total
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3;"> {{$lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3}} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #cc00cc">  {{$raisa0 + $raisa1 + $raisa2 + $raisa3}} 
                                @if($raisa0 + $raisa1 + $raisa2 + $raisa3 > $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)
                                <td style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                                  </span>
                                </td>  
                                @elseif($raisa0 + $raisa1 + $raisa2 + $raisa3 < $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)
                                <td style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terdapat project yang sudah selesai">
                                    </i>
                                  </span>
                                </td>  
                                @elseif($raisa0 + $raisa1 + $raisa2 + $raisa3 = $lastRaisa0 + $lastRaisa1 + $lastRaisa2 + $lastRaisa3)
                                <td style="text-align: center">
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

          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-body">
                <div class="box-header with-border" style="text-align: center; padding-right: 29%">
                  <h3 class="box-title">RAISA</h3>
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
                            <td>
                              Persentase
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastOthers0 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">@if( ($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100 >  ($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif(($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100 < ($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100 )
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif(($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100 == ($lastOthers2 + $lastOthers3) / ($lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)*100 )
                                <td style="text-align: center">
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
                            <td>
                              P0
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastOthers0 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $others0 }} 
                                @if($others0  > $lastOthers0)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($others0  < $lastOthers0)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($others0 = $lastOthers0 )
                                <td style="text-align: center">
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
                            <td>
                              P1
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastOthers1 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $others1 }} 
                                @if($others1  > $lastOthers1)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($others1  < $lastOthers1)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($others1 = $lastOthers1 )
                                <td style="text-align: center">
                                  <span class="text-yellow">
                                    <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                            <td>
                              P2
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastOthers2 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $others2 }} 
                                @if($others2  > $lastOthers2)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($others2  < $lastOthers2)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($others2 = $lastOthers2 )
                                <td style="text-align: center">
                                  <span class="text-yellow">
                                    <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                            <td>
                              P3
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3">{{ $lastOthers3 }} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #1394ba">{{ $others1 }} 
                                @if($others3 > $lastOthers3)
                                <td  style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
                                  </span>
                                </td>                             
                                @elseif($others3 < $lastOthers3)
                                <td  style="text-align: center">
                                  <span class="text-green"> 
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terjadi perpindahan dari P0 ke P1"> </i>
                                  </span>
                                </td>
                                @elseif($others3 = $lastOthers3 )
                                <td style="text-align: center">
                                  <span class="text-yellow">
                                    <i class="fa fa-chevron-right" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="test"></i>
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
                            <td>
                              Total
                            </td>
                            <td style="text-align: center">

                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #b3b3b3;"> {{$lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3}} </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium;\"> | </span>
                            </td>
                            <td style="text-align: center">
                              <span style="font-size: medium; color: #cc00cc">  {{$others0 + $others1 + $others2 + $others3}} 
                                @if($others0 + $others1 + $others2 + $others3 > $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)
                                <td style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-chevron-up" style="font-size: 13px"></i>
                                  </span>
                                </td>  
                                @elseif($others0 + $others1 + $others2 + $others3 < $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)
                                <td style="text-align: center">
                                  <span class="text-green">
                                    <i class="fa fa-minus" style="font-size: 13px" data-toggle="tooltip" data-placement="right" title="Terdapat project yang sudah selesai">
                                    </i>
                                  </span>
                                </td>  
                                @elseif($others0 + $others1 + $others2 + $others3 = $lastOthers0 + $lastOthers1 + $lastOthers2 + $lastOthers3)
                                <td style="text-align: center">
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
      segmentStrokeWidth   : 1,
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
    var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : {{ $scn0 }},
      color    : '#1394ba',
      highlight: '#2980b9',
      label    : 'P0'
    },
    {
      value    : {{ $scn1 }},
      color    : '#0c3c55',
      highlight: '#104e70',
      label    : 'P1'
    },
    {
      value    : {{ $scn2 }},
      color    : '#c02e1d',
      highlight: 'de3421',
      label    : 'P2'
    },
    {
      value    : {{ $scn3 }},
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
    var pieChartCanvas = $('#pieChart4').get(0).getContext('2d')
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
      value    : {{ $others3 }},
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

  var presentaseProactive = {{ ($proactives2 + $proactives3) / ($proactives0 + $proactives1 + $proactives2 + $proactives3)*100}}
  var presentaseRaisa = {{ ($raisa2 + $raisa3) / ($raisa0 + $raisa1 + $raisa2 + $raisa3)*100}}
  var presentaseScn = {{ ($scn2 + $scn3) / ($scn0 + $scn1 + $scn2 + $scn3)*100}}
  var presentaseOthers = {{ ($others2 + $others3) / ($others0 + $others1 + $others2 + $others3)*100}}



  document.getElementById("presentaseProactive").innerHTML = presentaseProactive.toFixed(2);
  document.getElementById("presentaseRaisa").innerHTML = presentaseRaisa.toFixed(2);
  document.getElementById("presentaseScn").innerHTML = presentaseScn.toFixed(2);
  document.getElementById("presentaseOthers").innerHTML = presentaseOthers.toFixed(2);

</script>
</section>
@endsection