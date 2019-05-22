@extends('layouts.main')
@section('content')
    @push('styles')
    <link href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css"/>

    @endpush


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
                <li class="active"><span>المحافظ الفرعية</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <button class="btn  btn-success btn-outline btn-rounded" data-toggle="modal" data-target="#myModal">انشاء محفظة جديدة</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
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
                                        <th>القطاع</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>اسم المحفظة</th>
                                        <th>سقف التمويل</th>
                                        <th>نسبة الكفالة</th>
                                        <th>مده السداد</th>
                                        <th>مخصص المحفظة</th>
                                        <th>القطاع</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($data as $DD)
                                    <tr>
                                        <td>{{ $DD->name }}</td>
                                        <td>{{ $DD->financing_Ceiling }} ريال</td>
                                        <td>{{ $DD->sponsorship_Rate }} %</td>
                                        <td>{{ $DD->repayment_Period }} شهر</td>
                                        <td>{{ $DD->Balance }} ريال</td>
                                        <td>{{ $DD->prodects }}</td>

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
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 class="modal-title" id="myModalLabel">انشاء محفظة جديدة</h5>
                </div>
                <div class="modal-body">
                    <h5 class="mb-15">كل الحقول مطلوبة</h5>
                    <form id="Appintsend" action="{{ route('SubWallet.store') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet_Id" value="1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="name">اسم المحفظة</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                        <input type="text" class="form-control" name="name" placeholder="اسم المحفظة">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="financing_Ceiling">سقف التمويل</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                        <input type="text" class="form-control" name="financing_Ceiling" placeholder="سقف التمويل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="prodects">القطاع</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                        <select class="form-control" name="prodects">
                                            <option value="">------اختار------</option>
                                            <option value="السيارات">السيارات</option>
                                            <option value="الاسر المنتجة">الاسر المنتجة</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="sponsorship_Rate">نسبة الكفالة</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                        <input type="number" class="form-control" name="sponsorship_Rate" placeholder="نسبة الكفالة ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="repayment_Period">مده السداد</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                        <input type="text" class="form-control" name="repayment_Period" placeholder="مده السداد">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="Balance">مخصص المحفظة</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                        <input type="number" class="form-control" name="Balance" placeholder="مخصص المحفظة">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="Addwallet00" class="btn btn-success mr-10">انشاء</button>
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

    @push('scripts')
    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>
    @endpush
@endsection
