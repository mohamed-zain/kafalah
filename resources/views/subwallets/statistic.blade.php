@extends('layouts.main')
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@section('content')
    @if(Session::has('Flash'))
        <script>
            window.setTimeout(function(){
                $.toast({
                    heading: 'شكرا',
                    text: 'تم انشاء المحفظة الفرعية بنجاح',
                    position: 'top-right',
                    loaderBg:'#f0c541',
                    icon: 'success',
                    hideAfter: 3500,
                    stack: 6
                });
            }, 500);
        </script>
    @endif
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">المحافظ الفرعية</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">لوحة التحكم</a></li>
                <li><a href="#"><span></span></a></li>
                <li class="active"><span> احصاءات</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">{{ number_format($data->totalPrice) }}</span>ريال</span>
                                        <span class="weight-500 uppercase-font block font-13">مبلغ المحفظة الكلي</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                        <i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">{{ number_format($data->sponsorship_Rate) }}</span>%</span>
                                        <span class="weight-500 uppercase-font block">نسبة الكفالة</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                        <i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">{{ number_format($data->Balance) }}</span>ريال</span>
                                        <span class="weight-500 uppercase-font block"> مخصص المحفظة</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                        <i class="icon-layers data-right-rep-icon txt-light-grey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim"> {{ number_format($data->financing_Ceiling) }}</span>ريال</span>
                                        <span class="weight-500 uppercase-font block"> سقف التمويل</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                                        <div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">احصائيات</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block refresh mr-15">
                            <i class="zmdi zmdi-replay"></i>
                        </a>
                        <div class="pull-left inline-block dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div>
                            <canvas id="chart_6" height="191"></canvas>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15"/>
                        <div class="label-chatrs">
                            <div class="">
                                <span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">المبالغ المصروفة</span><span class="block txt-grey">145478 ريال</span></span>
                                <div id="sparkline_1" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15"/>
                        <div class="label-chatrs">
                            <div class="">
                                <span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">المبالغ المحصلة</span><span class="block txt-grey">268229 ريال</span></span>
                                <div id="sparkline_2" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15"/>
                        <div class="label-chatrs">
                            <div class="">
                                <span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">رصيد المحفظة</span><span class="block txt-grey">40939 ريال</span></span>
                                <div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body sm-data-box-1">
                        <span class="uppercase-font weight-500 font-14 block text-center txt-dark">الرصيد المتبقي</span>
                        <div class="cus-sat-stat weight-500 txt-success text-center mt-5">
                            <span class="counter-anim">{{ number_format(201444) }}</span><span> ريال </span>
                        </div>
                        <div class="progress-anim mt-20">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <ul class="flex-stat mt-5">
                            <li>
                                <span class="block">العملاء الاناث</span>
                                <span class="block txt-dark weight-500 font-15">79.82</span>
                            </li>
                            <li>
                                <span class="block">العملاء الذكور</span>
                                <span class="block txt-dark weight-500 font-15">+14.29</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">المنتجات</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block mr-15">
                            <i class="zmdi zmdi-download"></i>
                        </a>
                        <a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div>
										<span class="pull-left inline-block capitalize-font txt-dark">
											السيارات
										</span>
                            <span class="label label-warning pull-right"> 50 عميل </span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10"/>
                            <span class="pull-left inline-block capitalize-font txt-dark">
											الاسر المنتجة
										</span>
                            <span class="label label-danger pull-right"> 20 عميل </span>
                            <div class="clearfix"></div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Row -->
@push('scripts')
    <script src="{{ asset('dist/js/myjs/dashboard-subwallet.js') }}"></script>
    @endpush
@endsection
