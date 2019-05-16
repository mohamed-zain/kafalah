<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/philbert/rtl-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2019 00:09:44 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ config('app.name', 'برنامج كفالة') }}</title>
    <meta name="description" content="برنامج كفالة لدعم المستفيدين" />
    <meta name="keywords" content="كفالة" />
    <meta name="author" content="AamalOrg"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="{{ url('/') }}">
                <img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>
                <span class="brand-text">برنامج كفالة</span>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10"></span>
            <a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="signup.html"> الرئيسية </a>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">لوحة التحكم</h3>
                                    <h6 class="text-center nonecase-font txt-grey">تسجيل الدخول</h6>
                                </div>
                                <div class="form-wrap">
                                    <form method="POST" action="{{ route('login') }}">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2"> اسم الدخول </label>
                                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}  " required="" id="exampleInputEmail_2" placeholder="اسم الدخول">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">كلمة المرور</label>
                                            <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="#">هل نسيت كلمة المرور</a>
                                            <div class="clearfix"></div>
                                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required="" id="exampleInputpwd_2" placeholder="كلمة المرور">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-success btn-rounded">دخول</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js') }}"></script>
</body>

<!-- Mirrored from hencework.com/theme/philbert/rtl-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2019 00:09:44 GMT -->
</html>
