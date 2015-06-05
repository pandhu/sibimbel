@extends('layouts.admin')
@section('content-inner')
<div class="col-md-8 col-md-offset-2">
	<h2 class="text-center">Ganti Password</h2>

		{{Form::open(array('url' => 'ganti_password', 'class'=>'form'))}}
		<div class="form-group @if ($errors->has('old_password')) has-error @endif">
			{{Form::label('old_password', 'Password Lama', array('class'=>' control-label'))}}
			{{Form::password('old_password', array('class'=>'form-control')) }}
			@if ($errors->has('old_password')) <span class="help-block">{{ $errors->first('old_password') }}</span> @endif		
		</div>
		<div class="form-group @if ($errors->has('new_password')) has-error @endif">
			{{Form::label('new_password', 'Password Baru', array('class'=>' control-label'))}}
			{{Form::password('new_password', array('class'=>'form-control')) }}
			@if ($errors->has('new_password')) <span class="help-block">{{ $errors->first('new_password') }}</span> @endif		
		</div>
		
		<div class="form-group @if ($errors->has('confirm_password')) has-error @endif">
			{{Form::label('confirm_password', 'Ulangi Password', array('class'=>' control-label'))}}
			{{Form::password('confirm_password', array( 'class'=>'form-control')) }}
			@if ($errors->has('confirm_password')) <p class="help-block">{{ $errors->first('confirm_password') }}</p> @endif		
		</div>
	
	<div class="clearfix"></div>
	{{Form::submit('Submit', array('class'=>'col-md-12 btn btn-primary'))}}
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
					url : "../siswa/getinfo/" + id ,
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


