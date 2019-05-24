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
            <h5 class="txt-dark">المحفظة الرئيسية</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">لوحة التحكم</a></li>
                <li><a href="#"><span></span></a></li>
                <li class="active"><span> تحكم </span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-danger contact-card card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <div class="pull-left user-img-wrap mr-15">
                            <img class="card-user-img img-circle pull-left" src="../img/user.png" alt="user">
                        </div>
                        <div class="pull-left user-detail-wrap">
											<span class="block card-user-name">
												Clay Masse
											</span>
                            <span class="block card-user-desn">
												designer
											</span>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="pull-left inline-block mr-15" href="#">
                            <i class="zmdi zmdi-edit txt-light"></i>
                        </a>
                        <a class="pull-left inline-block mr-15" href="#">
                            <i class="zmdi zmdi-delete txt-light"></i>
                        </a>
                        <div class="pull-left inline-block dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
                            <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row">
                        <div class="user-others-details pl-15 pr-15">
                            <div class="mb-15">
                                <i class="zmdi zmdi-email-open inline-block mr-10"></i>
                                <span class="inline-block txt-dark">markh@gmail.com</span>
                            </div>
                            <div class="mb-15">
                                <i class="zmdi zmdi-smartphone inline-block mr-10"></i>
                                <span class="inline-block txt-dark">9192372533</span>
                            </div>
                            <div class="mb-15">
                                <i class="zmdi zmdi-phone inline-block mr-10"></i>
                                <span class="inline-block txt-dark">0203878654</span>
                            </div>
                            <div>
                                <i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
                                <span class="inline-block txt-dark">jberincker</span>
                            </div>
                        </div>
                        <hr class="light-grey-hr mt-20 mb-20">
                        <div class="emp-detail pl-15 pr-15">
                            <div class="mb-5">
                                <span class="inline-block capitalize-font mr-5">joininig date:</span>
                                <span class="txt-dark">12-10-2014</span>
                            </div>
                            <div>
                                <span class="inline-block capitalize-font mr-5">salery:</span>
                                <span class="txt-dark">$12000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30" >
                                    <thead>
                                    <tr>
                                        <th>اسم المحفظة</th>
                                        <th>سقف التمويل</th>
                                        <th>نسبة الكفالة</th>
                                        <th>مده السداد</th>
                                        <th>مخصص المحفظة</th>
                                        <th> مبلغ المحفظة الكلي</th>
                                        <th>خيارات</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>اسم المحفظة</th>
                                        <th>سقف التمويل</th>
                                        <th>نسبة الكفالة</th>
                                        <th>مده السداد</th>
                                        <th>مخصص المحفظة</th>
                                        <th> مبلغ المحفظة الكلي</th>
                                        <th>خيارات</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($data as $DD)
                                        <tr>
                                            <td>{{ $DD->name }}</td>
                                            <td>{{ number_format($DD->financing_Ceiling) }} ريال</td>
                                            <td>{{ $DD->sponsorship_Rate }} %</td>
                                            <td>{{ $DD->repayment_Period }} شهر</td>
                                            <td>{{ number_format($DD->Balance) }} ريال</td>
                                            <td>{{ number_format($DD->totalPrice) }}</td>
                                            <td><a href="{{ url('wallet_statistic') }}/{{ $DD->id }}" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="عرض"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="حذف"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>

@endsection
