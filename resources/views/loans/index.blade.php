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
                                                        <button type="button" form="addsub" class="btn btn-info waves-effect" id="searching">حفظ</button>
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
                                                    <button type="button" form="addnew" class="btn btn-success waves-effect" id="">حفظ</button>
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
                                                            <th>الاسم</th>
                                                            <th>المحفظة</th>
                                                            <th>الجنس</th>
                                                            <th>العمر</th>
                                                            <th>رقم الهوية</th>
                                                            <th>رقم الجوال</th>
                                                            <th>مبلغ القرض</th>
                                                            <th>عدد الاقساط</th>
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
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-10" title="تعديل" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="حذف" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                        </tr>
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

    <script>
        $(document).ajaxStart(function () {
            $(".spinner").show();
        }).ajaxStop(function () {
            $(".spinner").hide();
        });
        $('#searching').click(function () {

            $( "#addsub" ).on( "submit", function( event ) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                event.preventDefault();

                var data2    = $( this ).serialize();

                $.ajax({
                    type: 'POST',
                    url : $(this).attr('action'),
                    data : data2 ,
                    //dataType: 'json',
                    cache:false,

                    success  : function(data) {
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
                    },
                    error: function(xhr, textStatus, thrownError){
                        // console.log(thrownError);
                        swal("للأسف!", "لم يتم حفظ البيانات!", "error");
                    }

                });
                $("#addsub").trigger("reset");

            });

        });
        $("#all").click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('OrdersLists') }}",
                type: "GET",
                success: function(data){
                    $("#here").html(data);

                },
                error: function(){
                    console.log("No results for " + data + ".");
                }
            });
        });
        function playSound() {
            var sound = document.getElementById("audio");
            sound.play();
        }
    </script>
    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>

@endsection
