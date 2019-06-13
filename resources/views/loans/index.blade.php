@extends('layouts.main')
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@section('content')
    @if ($errors->any())

                @foreach ($errors->all() as $error)
                    <script>
                        window.setTimeout(function(){
                            $.toast({
                                heading: 'خطأ',
                                text: '{{ $error }}',
                                position: 'top-right',
                                loaderBg:'#ed6f56',
                                icon: 'error',
                                hideAfter: 3500,
                                stack: 6
                            });
                        }, 500);
                    </script>
                @endforeach

    @endif
    @if(Session::has('Flash'))
        <script>
            window.setTimeout(function(){
                $.toast({
                    heading: 'شكرا',
                    text: 'تم انشاء القرض بنجاح',
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
            <h5 class="txt-dark">تفاصيل القروض</h5>
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
        <div class="col-lg-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="contact-list">
                            <div class="row">
                                <aside class="col-lg-2 col-md-4 pr-0">
                                    <div class="mt-20 mb-20 ml-15 mr-15">
                                        <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">اضافة قرض جديد</a>
                                        <!-- Modal -->
                                        <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">اضافة قرض جديد</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('LoansLists.store') }}" method="post" class="form-horizontal form-material" id="addsub">
                                                            {{ csrf_field() }}
                                                                    <div class="col-lg-6 mb-20">
                                                                            <label>اسم العميل</label>
                                                                            <input type="text" class="form-control" placeholder="اسم العميل" name="agentName">
                                                                    </div>
                                                                    <div class="col-lg-6 mb-20">

                                                                            <label> المحفظة</label>
                                                                            <select class="form-control" name="wallet_Id" id="wallet_Id">
                                                                                <option>-------اختار--------</option>
                                                                                @foreach($wallet as $wallets)
                                                                                <option value="{{ $wallets->id }}">{{ $wallets->name }}</option>
                                                                                    @endforeach
                                                                            </select>


                                                                    </div>
                                                            <div class="col-lg-12 mb-20">

                                                                <label> المسار</label>
                                                                <select class="form-control" name="Sub_wallet_Id" id="Course">

                                                                </select>


                                                            </div>



                                                            <div class="col-md-6 mb-20">
                                                                    <label>الجنس </label>
                                                                    <select class="form-control" name="Gender">
                                                                        <option>-------اختار--------</option>
                                                                        <option value="ذكر">ذكر</option>
                                                                        <option value="انثي">انثي</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 mb-20">
                                                                    <label> العمر</label>
                                                                    <input type="text" class="form-control" placeholder="العمر" name="age">
                                                                </div>
                                                                <div class="col-md-6 mb-20">
                                                                    <label> رقم الهوية</label>
                                                                    <input type="number" class="form-control" placeholder="رقم الهوية" name="identityNo">
                                                                </div>
                                                                <div class="col-md-6 mb-20">
                                                                    <label> رقم الجوال</label>
                                                                    <input type="number" class="form-control" placeholder="رقم الجوال" name="phoneNo">
                                                                </div>

                                                                <div class="col-md-6 mb-20">
                                                                    <label> مبلغ القرض</label>
                                                                    <input type="number" class="form-control" placeholder=" مبلغ القرض" name="loanAmount">
                                                                </div>
                                                            <div class="col-md-6 mb-20">
                                                                <label>عدد الاقساط</label>
                                                                <input type="number" class="form-control" placeholder="عدد الاقساط" name="installmentsNum">
                                                            </div>

                                                            <div class="col-md-6 mb-20">
                                                                <label>اسم الكفيل</label>
                                                                <input type="text" class="form-control" placeholder="اسم الكفيل" name="KfeelName">
                                                            </div>
                                                            <div class="col-md-6 mb-20">
                                                                <label> الفرع المشرف</label>
                                                                <input type="text" class="form-control" placeholder="الفرع المشرف" name="Branch">
                                                            </div>
                                                            <div class="col-md-6 mb-20">
                                                                <label>حالة القرض</label>
                                                                <input type="text" class="form-control" placeholder="حالة القرض" name="LoanStatus">
                                                            </div>
                                                            <div class="col-md-6 mb-20">
                                                                <label>رقم الحفظ</label>
                                                                <input type="number" class="form-control" placeholder="رقم الحفظ" name="SaveNo">
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="addsub" class="btn btn-info waves-effect" id="searching">حفظ</button>
                                                        <button type="reset" form="addsub" class="btn btn-default waves-effect">الغاء</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                    <ul class="inbox-nav mb-30">
                                        <li class="active">
                                            <a href="#">كل المحافظ<span class="label label-primary ml-10">20</span></a>
                                        </li>
                                        @foreach($loanstype as $loans)
                                        <li>
                                            <a href="{{ url('LoansTypesByType') }}/{{ $loans->id }}">{{ $loans->name }}<span class="label label-primary ml-10">12</span></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </aside>
                                <div class="col-lg-10 col-md-10 col-sm-4 col-xs-12">
                                    <div class="panel panel-success card-view">
                                        <div class="panel-heading">
                                            <div class="pull-left">
                                                <h6 class="panel-title txt-light">قائمة القروض</h6>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <aside class="col-lg-12 col-md-12 pl-0">
                                                    <div class="panel pa-0">
                                                        <div class="panel-wrapper collapse in">
                                                            <div class="panel-body  pa-0">
                                                                <div class="table-responsive mb-30">
                                                                    <table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>الاسم</th>
                                                                            <th>المحفظة</th>
                                                                            <th>الجنس</th>
                                                                            <th>العمر</th>
                                                                            <th>رقم الهوية</th>
                                                                            <th>رقم الجوال</th>
                                                                            <th>مبلغ القرض</th>
                                                                            <th>عدد الاقساط</th>
                                                                            {{--<th>اسم الكفيل</th>
                                                                            <th>الفرع المشرف</th>
                                                                            <th>حالة القرض</th>
                                                                            <th>رقم الحفظ</th>--}}
                                                                            <th>اجراء</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($data as $item)
                                                                            <tr>
                                                                                <td>{{ $item->loanId }}</td>
                                                                                <td><a href="#">{{ $item->agentName }}</a></td>
                                                                                <td>{{ $item->name }}</td>
                                                                                <td>
                                                                                    @if($item->Gender == 'ذكر')
                                                                                        <span class="label label-danger">ذكر</span>
                                                                                    @else
                                                                                        <span class="label label-info">انثي</span>
                                                                                    @endif
                                                                                </td>
                                                                                <td>{{ $item->age }}</td>
                                                                                <td>{{ $item->identityNo }}</td>
                                                                                <td>{{ $item->phoneNo }}</td>
                                                                                <td>{{ $item->loanAmount }}</td>
                                                                                <td>{{ $item->installmentsNum }}</td>
                                                                                {{--<td>{{ $item->KfeelName }}</td>
                                                                                <td>{{ $item->Branch }}</td>
                                                                                <td>{{ $item->LoanStatus }}</td>
                                                                                <td>{{ $item->SaveNo }}</td>--}}
                                                                                <td>
                                                                                    <a href="#{{ $item->loanId }}" data-toggle="modal" class="text-inverse pr-10 btn btn-success btn-sm" title="تفاصيل" data-toggle="tooltip">بيانات التحصيل</a>
                                                                                </td>
                                                                            </tr>
                                                                            <div aria-hidden="true" role="dialog" tabindex="-1" id="{{ $item->loanId }}" class="modal fade" style="display: none;">
                                                                                <div class="modal-dialog modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                            <h4 class="modal-title" id="myModalLabel">  تفاصيل التحصيل</h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="panel panel-default card-view">
                                                                                                <div class="panel-heading">
                                                                                                    <div class="pull-left">
                                                                                                        <h6 class="panel-title txt-dark">بيانات التحصيل</h6>
                                                                                                    </div>
                                                                                                    <div class="clearfix"></div>
                                                                                                </div>
                                                                                                <div class="panel-wrapper collapse in">
                                                                                                    <div class="panel-body">
                                                                                                        <div>
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">قيمة القرض</span>
                                                                                                            <span class="label label-warning pull-right">{{ number_format(40000) }}</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> رقم القرض</span>
                                                                                                            <span class="label label-primary pull-right">152565</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> تاريخ الاقراض </span>
                                                                                                            <span class="label label-primary pull-right">20-05-2017</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">  نسبة السداد </span>
                                                                                                            <span class="label label-primary pull-right">20%</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">عدد الاقساط</span>
                                                                                                            <span class="label label-primary pull-right">17</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">قيمة القسط </span>
                                                                                                            <span class="label label-primary pull-right">1200</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">الفرع المشرف</span>
                                                                                                            <span class="label label-danger pull-right">الرياض</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> المدينة</span>
                                                                                                            <span class="label label-danger pull-right">السليمانية</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">اسم الكفيل</span>
                                                                                                            <span class="label label-success pull-right">محمد احمد</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark">حالة القرض</span>
                                                                                                            <span class="label label-primary pull-right">مفتوح</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> المبالغ المستحقة</span>
                                                                                                            <span class="label label-primary pull-right">0</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> المسدد</span>
                                                                                                            <span class="label label-primary pull-right">23,000</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> المبالغ المتعثرة</span>
                                                                                                            <span class="label label-primary pull-right">0</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                            <hr class="light-grey-hr row mt-10 mb-10">
                                                                                                            <span class="pull-left inline-block capitalize-font txt-dark"> المتبقي</span>
                                                                                                            <span class="label label-primary pull-right">17000</span>
                                                                                                            <div class="clearfix"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer"></div>
                                                                                    </div>
                                                                                    <!-- /.modal-content -->
                                                                                </div>
                                                                                <!-- /.modal-dialog -->
                                                                            </div>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

    <script type="text/javascript">


    </script>
@endsection
