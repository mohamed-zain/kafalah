@extends('layouts.main')
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

@section('content')
    @if(Session::has('Flash'))
        <script>
            window.setTimeout(function(){
                $.toast({
                    heading: 'شكرا',
                    text: 'تم تعديل بيانات المحفظة الرئيسية بنجاح',
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
            <div class="panel panel-success contact-card card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <div class="pull-left user-img-wrap mr-15">
                            <img class="card-user-img img-circle pull-left" src="{{ asset('fundlogo.png') }}" alt="user">
                        </div>
                        <div class="pull-left user-detail-wrap">
											<span class="block card-user-name">
												المحفظة الرئيسية
											</span>
                            <span class="block card-user-desn">
												تفاصيل
											</span>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="pull-left inline-block mr-15" href="#"  data-toggle="modal" data-target="#myModal">
                            <i class="zmdi zmdi-edit txt-light"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row">
                        <div class="user-others-details pl-15 pr-15">
                            <div class="mb-15">
                                <i class="zmdi zmdi-email-open inline-block mr-10"></i>
                                <span class="inline-block txt-dark">المبلغ الكلي - {{ number_format($wallet->Balance) }}</span> ريال
                            </div>
                            <div class="mb-15">
                                <i class="zmdi zmdi-smartphone inline-block mr-10"></i>
                                <span class="inline-block txt-dark">المبلغ المخصص - {{ number_format($wallet->Custom) }}</span> ريال
                            </div>
                            <div class="mb-15">
                                <i class="zmdi zmdi-phone inline-block mr-10"></i>
                                <span class="inline-block txt-dark">المبلغ غير المخصص - {{ number_format($wallet->not_Customized) }}</span> ريال
                            </div>
                            <div>
                                <i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
                                <span class="inline-block txt-dark"> نسبة الكفالة - {{ number_format($wallet->sponsorship_Rate) }} </span> %
                            </div>
                        </div>
                        <hr class="light-grey-hr mt-20 mb-20">
                        <div class="emp-detail pl-15 pr-15">
                            <div class="mb-5">
                                <span class="inline-block capitalize-font mr-5">تاريخ الانشاء :</span>
                                <span class="txt-dark">{{ $wallet->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="panel panel-success card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-light">المحافظ الفرعية</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

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
                        </div>                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 class="modal-title" id="myModalLabel">تعديل بيانات المحفظة الرئيسية</h5>
                </div>
                <div class="modal-body">
                    <h5 class="mb-15">كل الحقول مطلوبة</h5>
                    <form id="Appintsend" action="{{ route('MainWallet.update',$wallet->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="financing_Ceiling">المبلغ الكلي</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                        <input type="text" class="form-control" name="Balance" value="{{ $wallet->Balance }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="sponsorship_Rate">المبلغ المخصص</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                        <input type="number" class="form-control" name="Custom" value="{{ $wallet->Custom }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="repayment_Period"> المبلغ غير المخصص</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                        <input type="text" class="form-control" name="not_Customized" value="{{ $wallet->not_Customized }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="Balance"> نسبة الكفالة</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                        <input type="number" class="form-control" name="sponsorship_Rate" value="{{ $wallet->sponsorship_Rate }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" id="Addwallet00" class="btn btn-success mr-10">تعديل</button>
                        <button type="reset" class="btn btn-default">الغاء</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>

@endsection
