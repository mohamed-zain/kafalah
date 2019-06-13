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
            <h5 class="txt-dark">القطاعات </h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">لوحة التحكم</a></li>
                <li><a href="#"><span></span></a></li>
                <li class="active"><span>  القطاعات</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
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
                                                <th>#</th>
                                                <th>القطاع</th>
                                                <th>خيارات</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>القطاع</th>
                                                <th>خيارات</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($data as $DD)
                                                <tr>
                                                    <td>{{ $DD->id }}</td>
                                                    <td>{{ $DD->Name }}</td>
                                                    <td><a href="#" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="عرض"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="حذف"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
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
        </div>
    </div>




    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
    <script src="{{ asset('dist/js/myjs/subwallet.js') }}"></script>

@endsection
