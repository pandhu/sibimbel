@extends('layouts.master')
@section('content')
<div class="col-md-6">
{{Form::open(array('url' => 'register/submit', 'class'=>'form-horizontal'))}}
	<div class="form-group">
		{{Form::label('tanggal', 'Tanggal', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::text('tanggal', '', array('id' => 'datepicker', 'class'=>'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{Form::label('nis', 'NIS', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::text('nis', '', array('class'=>'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{Form::label('pembayaran', 'Pembayaran', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::text('pembayaran', '', array('class'=>'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{Form::label('jumlah', 'Jumlah', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::text('jumlah', '', array('class'=>'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{Form::label('penerima', 'Penerima', array('class'=>'col-sm-2 control-label'))}}
	    <div class="col-sm-10">
			{{Form::text('penerima', '', array('readonly'=>true, 'class'=>'form-control')) }}
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
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
</script>
@stop