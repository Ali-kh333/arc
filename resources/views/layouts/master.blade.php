<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>صفحه شروع | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


<!-- should be added into the header -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div id="app">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>



            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">{{ $user->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <p>
                                    {{ $user->fullName }}
{{--                                    <small>مدیریت کل سایت</small>--}}
                                </p>
                            </li>
                            <!-- Menu Body -->
{{--                            <li class="user-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-4 text-center">--}}
{{--                                        <a href="#">صفحه من</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 text-center">--}}
{{--                                        <a href="#">فروش</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 text-center">--}}
{{--                                        <a href="#">دوستان</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </li>--}}
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                {{--<div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                                </div>--}}

                                <form action="{{ route('logout') }}" class="pull-right" method="POST">
                                    @csrf
                                    <button style="margin-left: 0;width: 100%" class="btn btn-default btn-flat">خروج</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
{{--                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">


            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <!-- Optionally, you can add icons to the links -->
                <li ><a href="{{ route('api.list') }}"><i class="fa fa-link"></i> <span>مدیریت دامنه(Vue & API)</span></a></li>

                <li class="treeview {{ request()->path() == 'domains/create' ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت دامنه(Blade)</span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li {{ request()->path() == 'domains/index' ? 'class=active' : '' }}><a href="{{ route('domains.index') }}">نمایش</a></li>
                        <li {{ request()->path() == 'domains/create' ? 'class=active' : '' }} ><a href="{{ route('domains.create') }}">ثبت</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
{{--            <h1>--}}
{{--                عنوان صفحه--}}
{{--                <small>توضیحات</small>--}}
{{--            </h1>--}}
            {{--<ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">صفحه</li>
            </ol>--}}
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @section('content')
            @show
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer text-left">

    </footer>

    <div class="control-sidebar-bg"></div>
</div>
</div>
<!-- ./wrapper -->

<script src="{{ asset('js/app.js') }}"></script>
{{--<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>--}}


<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

</body>
</html>
