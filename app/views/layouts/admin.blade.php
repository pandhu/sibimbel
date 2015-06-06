@extends('layouts.master')

@section('style')
{{ HTML::style('bower_components/metisMenu/dist/metisMenu.min.css') }}
{{ HTML::style('css/timeline.css') }}
{{ HTML::style('css/sb-admin-2.css') }}
{{ HTML::style('bower_components/font-awesome/css/font-awesome.min.css') }}
@stop

@section('content')
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Sialum</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        
        
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ganti Password</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{URL::to('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{URL::to('programs')}}"><i class="fa fa-table fa-fw"></i> Programs</a>
                </li>
                <li>
                    <a href="{{URL::to('siswa')}}"><i class="fa fa-table fa-fw"></i> Siswa</a>
                </li>
                <li>
                    <a href="{{URL::to('pembayaran')}}"><i class="fa fa-edit fa-fw"></i> Pembayaran</a>
                </li>
                @if(Auth::user()->role == 0)
                <li>
                    <a href="{{URL::to('users')}}"><i class="fa fa-users fa-fw"></i> Users</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{URL::to('setting')}}">General</a>
                        </li>
                        <li>
                            <a href="login.html">Login Page</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                @endif 

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">
    <?php 
        $alert = Session::get('alert'); //session for alert
    ?>
    @if(isset($alert))
    <div class="alert alert-inner alert-{{$alert['type']}} alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{$alert['message']}}
    </div>
    @endif
    @yield('content-inner')
</div>
@stop

@section('script')
{{ HTML::script('bower_components/metisMenu/dist/metisMenu.min.js') }}
{{ HTML::script('bower_components/raphael/raphael-min.js') }}
{{ HTML::script('js/sb-admin-2.js') }}
<script type="text/javascript">
    $(document).ready(function(){
        var wrapperWidth = $('window').height()-$('.navbar').height()-20;
        //console.log(wrapperWidth);
        $('#page-wrapper').height(wrapperWidth);
        //$('body').height($(window).height());
    });

</script>
@yield('script-inner')
@stop