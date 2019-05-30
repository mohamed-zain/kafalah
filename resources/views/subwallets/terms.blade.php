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
                    text: "{{ Session::get('Flash') }}",
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
                <li class="active"><span> الشروط والاحكام</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <button class="btn  btn-success btn-outline btn-rounded" data-toggle="modal" data-target="#myModal">اضافة شروط</button>
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
                                        <th>#</th>
                                        <th>الشروط</th>
                                        <th>خيارات</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>الشروط</th>
                                        <th>خيارات</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if(isset($data))
                                    @foreach($data as $DD)
                                        <tr>
                                            <td>{{ $DD->id }}</td>
                                            <td>{{ $DD->Term }}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="text-inverse pr-10" title=""  data-toggle="modal" data-target="#{{ $DD->id }}" data-original-title="تعديل"><i class="zmdi zmdi-edit txt-danger"></i></a>
                                            </td>
                                        </tr>
                                        <div id="{{ $DD->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">تعديل الشرط  </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="mb-15">كل الحقول مطلوبة</h5>
                                                        <form id="Appintsend" action="{{ route('Terms.update',$DD->id) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PUT') }}
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="name"> الشرط</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                            <textarea rows="5" cols="20" class="form-control" name="Term">{{ $DD->Term }}</textarea>
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
                                    @endforeach
                                        @endif
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
                    <h5 class="modal-title" id="myModalLabel">اضافة شرط جديد للمحفظة</h5>
                </div>
                <div class="modal-body">
                    <h5 class="mb-15">كل الحقول مطلوبة</h5>
                    <form id="Appintsend" action="{{ route('Terms.store') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="SubID" value="{{ $id }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="name"> الشرط</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                        <textarea rows="5" cols="20" class="form-control" name="Term"></textarea>
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
