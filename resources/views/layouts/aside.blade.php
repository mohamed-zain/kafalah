<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>لوحة التحكم</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="active" href="{{ url('/') }}" ><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">الرئيسية</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a href="{{ url('MainWallet') }}" ><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">المحفظة الرئيسية</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">المحافظ الفرعية </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="app_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{ url('SubWallet') }}">قائمة المحافظ</a>
                </li>
                <li>
                    <a href="{{ url('wallet_statistic') }}">احصاءات</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('LoansLists') }}"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">تفاصيل القروض</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>التحصيل </span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">الارباح والخسائر</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a href="#">الارباح</a>
                </li>
                <li>
                    <a href="#">الخسائر</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" ><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">المتعثرين</span></div><div class="pull-right"></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a href="javascript:void(0);" ><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">المستخدمين </span></div><div class="pull-right"></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">بيانات النظام</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="table_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a href="{{ url('LoansTypes') }}">انواع المحافظ</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">سجل النظام</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="icon_dr" class="collapse collapse-level-1">
                <li>
                    <a href="#">سجل النظام</a>
                </li>
            </ul>
        </li>

        <li><hr class="light-grey-hr mb-10"/></li>


    </ul>
</div>