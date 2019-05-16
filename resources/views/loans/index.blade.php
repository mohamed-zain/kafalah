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
                                                                            <select class="form-control" name="wallet_Id">
                                                                                <option>-------اختار--------</option>
                                                                                @foreach($wallet as $wallets)
                                                                                <option value="{{ $wallets->id }}">{{ $wallets->name }}</option>
                                                                                    @endforeach
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

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="addsub" class="btn btn-info waves-effect" >حفظ</button>
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
                                        @foreach($loanstype as $loans)
                                        <li class="@if($loans->id == 1) active @endif">
                                            <a href="#">{{ $loans->Name }}<span class="label label-primary ml-10">12</span></a>
                                        </li>
                                        @endforeach
                                    </ul>

                                    <a class="txt-success create-label  pa-15" href="javascript:void(0)" data-toggle="modal" data-target="#myModal_1">اضافة نوع جديد + </a>
                                    <div id="myModal_1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myModalLabel">اضافة جديد </h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="addnew" action="{{ route('LoansTypes.store') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">اسم القطاع</label>
                                                            <input type="text" name="Name" class="form-control" placeholder="اسم القطاع">
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" form="addnew" class="btn btn-success waves-effect" data-dismiss="modal">حفظ</button>
                                                    <button type="reset" form="addnew" class="btn btn-default waves-effect" data-dismiss="modal">الغاء</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </aside>

                                <aside class="col-lg-10 col-md-8 pl-0">
                                    <div class="panel pa-0">
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body  pa-0">
                                                <div class="table-responsive mb-30">
                                                    <table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Role</th>
                                                            <th>Joining date</th>
                                                            <th>Salery</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="#">Jens Brincker</a></td>
                                                            <td>jens@gmail.com</td>
                                                            <td>+123 456 789</td>
                                                            <td><span class="label label-danger">Designer</span> </td>
                                                            <td>12-10-2014</td>
                                                            <td>$1200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="#">Mark Hay</a></td>
                                                            <td>markh@gmail.com</td>
                                                            <td>+234 456 789</td>
                                                            <td><span class="label label-info">Developer</span> </td>
                                                            <td>10-09-2014</td>
                                                            <td>$1800</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="#">Anthony Davie</a></td>
                                                            <td>nthonyavie@gmail.com</td>
                                                            <td>+345 456 789</td>
                                                            <td><span class="label label-success">Accountant</span></td>
                                                            <td>1-10-2013</td>
                                                            <td>$2200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td><a href="#">David Perry</a></td>
                                                            <td>david@gmail.com</td>
                                                            <td>+456 456 789</td>
                                                            <td><span class="label label-inverse">HR</span></td>
                                                            <td>2-10-2016</td>
                                                            <td>$200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td><a href="#">Alan Gilchrist</a></td>
                                                            <td>alan@gmail.com</td>
                                                            <td>+567 456 789</td>
                                                            <td><span class="label label-danger">Manager</span></td>
                                                            <td>10-9-2015</td>
                                                            <td>$1200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td><a href="#">Sue Woodger</a></td>
                                                            <td>suew@gmail.com</td>
                                                            <td>+678 456 789</td>
                                                            <td><span class="label label-warning">Chairman</span></td>
                                                            <td>10-5-2013</td>
                                                            <td>$1500</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td><a href="#">Barry Croucher</a></td>
                                                            <td>barry@gmail.com</td>
                                                            <td>+123 456 789</td>
                                                            <td><span class="label label-danger">Designer</span></td>
                                                            <td>05-10-2012</td>
                                                            <td>$3200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td><a href="#">Ian Vaughn</a></td>
                                                            <td>ian@gmail.com</td>
                                                            <td>+234 456 789</td>
                                                            <td><span class="label label-info">Developer</span></td>
                                                            <td>11-10-2014</td>
                                                            <td>$1800</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td><a href="#">Serena Fredrick</a></td>
                                                            <td>serena@gmail.com</td>
                                                            <td>+345 456 789</td>
                                                            <td><span class="label label-success">Accountant</span></td>
                                                            <td>12-5-2016</td>
                                                            <td>$100</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td><a href="#">Tim Gray</a></td>
                                                            <td>tim@gmail.com</td>
                                                            <td>+456 456 789</td>
                                                            <td><span class="label label-inverse">HR</span></td>
                                                            <td>18-5-2009</td>
                                                            <td>$4200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td><a href="#">Jeremy Upton</a></td>
                                                            <td>jeremy@gmail.com</td>
                                                            <td>+567 456 789</td>
                                                            <td><span class="label label-danger">Manager</span></td>
                                                            <td>12-10-2010</td>
                                                            <td>$5200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td><a href="#">Emily Hick</a></td>
                                                            <td>emily@gmail.com</td>
                                                            <td>+123 456 789</td>
                                                            <td><span class="label label-danger">Designer</span> </td>
                                                            <td>12-10-2014</td>
                                                            <td>$1200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td><a href="#">Tom Armitage</a></td>
                                                            <td>tom@gmail.com</td>
                                                            <td>+234 456 789</td>
                                                            <td><span class="label label-info">Developer</span> </td>
                                                            <td>10-09-2014</td>
                                                            <td>$1800</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td><a href="#">Rhian Davies</a></td>
                                                            <td>rhian@gmail.com</td>
                                                            <td>+345 456 789</td>
                                                            <td><span class="label label-success">Accountant</span></td>
                                                            <td>1-10-2013</td>
                                                            <td>$2200</td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
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


    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>

@endsection
