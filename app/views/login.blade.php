@extends('layouts.master')
@section('content')
<div class="col-md-6">
{{Form::open(array('url' => 'register/submit', 'class'=>'form-horizontal'))}}
	
	<div class="form-group">
		{{Form::label('username', 'Username', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::text('username', '', array('class'=>'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{Form::label('password', 'password', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::password('password', '', array('class'=>'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{Form::label('', '', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::submit('Submit', array('class'=>'btn btn-default'))}}

		</div>
	</div>
{{Form::close()}}
</div>

@stop
@section('script')
@stop