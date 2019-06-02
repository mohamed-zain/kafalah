@extends('layouts.main')
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
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
                <li class="active"><span> القروض</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>

    <div class="row">
        @foreach($sub as $subs)
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-success contact-card card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <div class="pull-left user-img-wrap mr-15">
                            <img class="card-user-img img-circle pull-left" src="{{ asset('fundlogo.png') }}" alt="user">
                        </div>
                        <div class="pull-left user-detail-wrap">
											<span class="block card-user-name">
												{{ $subs->name }}
											</span>
                            <span class="block card-user-desn">

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
                                <span class="inline-block txt-dark">المبلغ الكلي - {{ number_format($subs->totalPrice) }}</span> ريال
                            </div>
                            <div class="mb-15">
                                <i class="zmdi zmdi-smartphone inline-block mr-10"></i>
                                <span class="inline-block txt-dark">سقف التمويل - {{ number_format($subs->financing_Ceiling) }}</span> ريال
                            </div>
                            <div class="mb-15">
                                <i class="zmdi zmdi-phone inline-block mr-10"></i>
                                <span class="inline-block txt-dark">المبلغ غير المخصص - {{ number_format($subs->Balance) }}</span> ريال
                            </div>
                            <div>
                                <i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
                                <span class="inline-block txt-dark"> نسبة الكفالة - {{ number_format($subs->sponsorship_Rate) }} </span> %
                            </div>
                        </div>
                        <hr class="light-grey-hr mt-20 mb-20">
                        <div class="emp-detail pl-15 pr-15">
                            <div class="mb-5">
                                <span class="inline-block capitalize-font mr-5">الشروط والاحكام :</span>
                                <span class="txt-dark"><a href="{{ url('wallet_terms') }}/{{ $subs->id }}" class="btn btn-success">اضغط هنا</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>


    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>

@endsection
