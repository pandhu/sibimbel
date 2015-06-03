@extends('layouts.master')
@section('style')
    {{ HTML::style('css/login.css') }}
@stop
@section('content')
	{{Form::open(array('url' => 'login', 'class'=>'form-signin'))}}
	<h4 class="form-signin-heading">Silahkan Login</h4>
	{{Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'username', 'autofocus'=>'1')) }}
	{{Form::password('password', array('class'=>'form-control', 'placeholder'=>'username')) }}
	{{Form::submit('Login', array('class'=>'btn btn-lg btn-primary btn-block'))}}
{{Form::close()}}

@stop

@section('script')
@stop