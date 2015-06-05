@extends('layouts.admin')
@section('content-inner')
<div class="col-md-4 col-md-offset-4">
	<h2 class="text-center">Edit Pembayaran</h2>

		{{Form::model($pembayaran, array('url' => 'pembayaran/edit/'.$pembayaran->no_kuitansi, 'class'=>'form'))}}
		<div class="col-md-6 nopadding-left form-group @if ($errors->has('tanggal')) has-error @endif">
			{{Form::label('tanggal', 'Tanggal Masuk', array('class'=>' control-label'))}}
			{{Form::text('tanggal', $today, array('id'=>'datepicker-tanggal','class'=>'form-control')) }}
			@if ($errors->has('tanggal')) <span class="help-block">{{ $errors->first('tanggal') }}</span> @endif		
		</div>
		<div class="col-md-6 nopadding-left nopadding-right form-group @if ($errors->has('nis')) has-error @endif">
			{{Form::label('nis', 'NIS', array('class'=>' control-label'))}}
			{{Form::text('nis', Input::old('nis'), array('class'=>'form-control')) }}
			@if ($errors->has('nis')) <span class="help-block">{{ $errors->first('nis') }}</span> @endif		
		</div>
		<div class="siswa-info col-md-6 col-md-offset-6 nopadding-right">
		</div>
		<div class="clearfix"></div>
		<div class="form-group @if ($errors->has('pembayaran')) has-error @endif">
			{{Form::label('pembayaran', 'Pembayaran', array('class'=>' control-label'))}}
			{{Form::text('pembayaran', Input::old('pembayaran'), array('placeholder'=>'Contoh: Untuk pembayaran bulan juni', 'class'=>'form-control')) }}
			@if ($errors->has('pembayaran')) <p class="help-block">{{ $errors->first('pembayaran') }}</p> @endif		
		</div>
		<div class="form-group @if ($errors->has('jumlah')) has-error @endif">
			{{Form::label('jumlah', 'Jumlah', array('class'=>' control-label'))}}
			{{Form::text('jumlah', Input::old('jumlah'), array('placeholder'=>'Contoh: 350000', 'class'=>'form-control')) }}
			@if ($errors->has('jumlah')) <p class="help-block">{{ $errors->first('jumlah') }}</p> @endif		
		</div>

		<div class="form-group @if ($errors->has('penerima')) has-error @endif">
			{{Form::label('penerima', 'Penerima', array('class'=>' control-label'))}}
			{{Form::text('penerima', Auth::user()->nama, array('readonly'=>'1', 'class'=>'form-control')) }}
			@if ($errors->has('penerima')) <p class="help-block">{{ $errors->first('penerima') }}</p> @endif		
		</div>
	
	<div class="clearfix"></div>
	<div class="pull-right">
		<a href="{{URL::to('pembayaran')}}" class="btn btn-warning">Cancel</a>
		{{Form::submit('Submit', array('class'=>'btn btn-primary'))}}
	</div>
	{{Form::close()}}
</div>
<div class="detil-program">
</div>


@stop
@section('script-inner')
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "-25:+0"
		});
		$( "#datepicker-tanggal" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<script>

	$(document).ready(function(){

		var delay = (function(){
		  var timer = 0;
		  return function(callback, ms){
		    clearTimeout (timer);
		    timer = setTimeout(callback, ms);
		  };
		})();

		$('#nis').keyup(function() {
			var id = $(this).val(); 
		    delay(function(){
				console.log('lala');
				$.ajax({
					type: "GET",
					dataType: 'html',
					url : "../../siswa/getinfo/" + id ,
					success : function(data){
						$('.siswa-info').html(data);
					}
				},"json")
		    }, 1000 );
		});

		$('.detil-program').offset($('#id_program').position());
    });//end of document ready function
</script>
@stop


