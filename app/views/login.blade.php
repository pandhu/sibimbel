@extends('layouts.master')
@section('style')
{{ HTML::style('css/login.css') }}
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign In</h3>
				</div>
				<div class="panel-body">
					{{Form::open(array('url' => 'login', 'role'=>'form'))}}
					<fieldset>
						<div class="form-group">
							{{Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'username', 'autofocus'=>'1')) }}

						</div>
						<div class="form-group">
							{{Form::password('password', array('class'=>'form-control', 'placeholder'=>'password')) }}

						</div>
						<!-- Change this to a button or input when using this as a form -->
						{{Form::submit('Login', array('class'=>'btn btn-lg btn-primary btn-block'))}}

					</fieldset>
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
@stop