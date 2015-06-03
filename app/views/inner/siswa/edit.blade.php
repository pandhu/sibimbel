@extends('layouts.admin')
@section('content-inner')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">Pendaftaran Siswa Baru Bimbel Alumni</h2>
		<div class="col-md-6 nopadding-left">

			{{Form::model($siswa, array('url' => 'siswa/edit/'.$siswa->nis, 'class'=>'form'))}}
			<div class="col-md-6 nopadding-left form-group @if ($errors->has('tanggal')) has-error @endif">
				{{Form::label('tanggal', 'Tanggal Masuk', array('class'=>' control-label'))}}
				{{Form::text('tanggal',  Input::old('tanggal'), array('id'=>'datepicker-tanggal','class'=>'form-control')) }}
        		@if ($errors->has('tanggal')) <span class="help-block">{{ $errors->first('tanggal') }}</span> @endif		
			</div>
			
			<div class="col-md-6 nopadding-left nopadding-right form-group @if ($errors->has('status')) has-error @endif">
				{{Form::label('status', 'Status', array('class'=>' control-label'))}}
				{{Form::select('status', array('Baru'=>'Baru', 'ALUMNI'=>'ALUMNI'), Input::old('status'), array('class'=>'form-control')) }}
        		@if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif		
			</div>
			<div class="form-group @if ($errors->has('nama')) has-error @endif">
				{{Form::label('nama', 'Nama', array('class'=>' control-label'))}}
				{{Form::text('nama', Input::old('nama'), array('class'=>'form-control')) }}
        		@if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif		
			</div>
			<div class="form-group @if ($errors->has('panggilan')) has-error @endif">
				{{Form::label('panggilan', 'Panggilan', array('class'=>' control-label'))}}
				{{Form::text('panggilan', Input::old('panggilan'), array('class'=>'form-control')) }}
        		@if ($errors->has('panggilan')) <p class="help-block">{{ $errors->first('panggilan') }}</p> @endif		
			</div>

			<div class="col-md-6 nopadding-left form-group @if ($errors->has('agama')) has-error @endif">
				{{Form::label('agama', 'Agama', array('class'=>' control-label'))}}
				{{Form::text('agama', Input::old('agama'), array('class'=>'form-control')) }}
        		@if ($errors->has('agama')) <p class="help-block">{{ $errors->first('agama') }}</p> @endif		
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group @if ($errors->has('jenis_kelamin')) has-error @endif">
				{{Form::label('jenis_kelamin', 'Jenis Kelamin', array('class'=>' control-label'))}}
				{{Form::select('jenis_kelamin', array('Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'), Input::old('jenis_kelamin'), array('class'=>'form-control'))}}
        		@if ($errors->has('jenis_kelamin')) <p class="help-block">{{ $errors->first('jenis_kelamin') }}</p> @endif		
			</div>

			<div class="clearfix"></div>

			<div class="form-group @if ($errors->has('asal_sekolah')) has-error @endif">
				{{Form::label('asal_sekolah', 'Asal Sekolah', array('class'=>' control-label'))}}
				{{Form::text('asal_sekolah', Input::old('asal_sekolah'), array('class'=>'form-control')) }}
        		@if ($errors->has('asal_sekolah')) <p class="help-block">{{ $errors->first('asal_sekolah') }}</p> @endif		
			</div>

			<div class="col-md-6 nopadding-left form-group @if ($errors->has('tempat_lahir')) has-error @endif">
				{{Form::label('tempat_lahir', 'Tempat Lahir', array('class'=>' control-label'))}}
				{{Form::text('tempat_lahir', Input::old('tempat_lahir'), array('class'=>'form-control')) }}
        		@if ($errors->has('tempat_lahir')) <p class="help-block">{{ $errors->first('tempat_lahir') }}</p> @endif		
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group @if ($errors->has('tanggal_lahir')) has-error @endif">
				{{Form::label('tanggal_lahir', 'Tanggal Lahir', array('class'=>' control-label'))}}
				{{Form::text('tanggal_lahir', Input::old('tanggal_lahir'), array('id'=>'datepicker', 'class'=>'clsDatePicker form-control')) }}
        		@if ($errors->has('tanggal_lahir')) <p class="help-block">{{ $errors->first('tanggal_lahir') }}</p> @endif		
			</div>

			<div class="clearfix"></div>

			<div class="form-group @if ($errors->has('nama_ayah')) has-error @endif">
				{{Form::label('nama_ayah', 'Nama Ayah', array('class'=>' control-label'))}}
				{{Form::text('nama_ayah', Input::old('nama_ayah'), array('class'=>'form-control')) }}
        		@if ($errors->has('nama_ayah')) <p class="help-block">{{ $errors->first('nama_ayah') }}</p> @endif		
			</div>

			<div class="form-group @if ($errors->has('pekerjaan_ayah')) has-error @endif">
				{{Form::label('pekerjaan_ayah', 'Pekerjaan Ayah', array('class'=>' control-label'))}}
				{{Form::text('pekerjaan_ayah', Input::old('pekerjaan_ayah'), array('class'=>'form-control')) }}
        		@if ($errors->has('pekerjaan_ayah')) <p class="help-block">{{ $errors->first('pekerjaan_ayah') }}</p> @endif		
			</div>

			<div class="form-group @if ($errors->has('nama_ibu')) has-error @endif">
				{{Form::label('nama_ibu', 'Nama Ibu', array('class'=>' control-label'))}}
				{{Form::text('nama_ibu', Input::old('nama_ibu'), array('class'=>'form-control')) }}
        		@if ($errors->has('nama_ibu')) <p class="help-block">{{ $errors->first('nama_ibu') }}</p> @endif		
			</div>

			<div class="form-group @if ($errors->has('pekerjaan_ibu')) has-error @endif">
				{{Form::label('pekerjaan_ibu', 'Pekerjaan Ibu', array('class'=>' control-label'))}}
				{{Form::text('pekerjaan_ibu', Input::old('pekerjaan_ibu'), array('class'=>'form-control')) }}
        		@if ($errors->has('pekerjaan_ibu')) <p class="help-block">{{ $errors->first('pekerjaan_ibu') }}</p> @endif		
			</div>			
		</div>
		<div class="col-md-6 nopadding-left">

			<div class="form-group @if ($errors->has('telp_siswa')) has-error @endif">
				{{Form::label('telp_siswa', 'Telp Siswa', array('class'=>' control-label'))}}
				{{Form::text('telp_siswa', Input::old('telp_siswa'), array('class'=>'form-control')) }}
        		@if ($errors->has('telp_siswa')) <p class="help-block">{{ $errors->first('telp_siswa') }}</p> @endif		
			</div>

			<div class="form-group @if ($errors->has('telp_ortu')) has-error @endif">
				{{Form::label('telp_ortu', 'Telp Orangtua', array('class'=>' control-label'))}}
				{{Form::text('telp_ortu', Input::old('telp_ortu'), array('class'=>'form-control')) }}
        		@if ($errors->has('telp_ortu')) <p class="help-block">{{ $errors->first('telp_ortu') }}</p> @endif		
			</div>

			<div class="form-group @if ($errors->has('telp_rumah')) has-error @endif">
				{{Form::label('telp_rumah', 'Telp Rumah', array('class'=>' control-label'))}}
				{{Form::text('telp_rumah', Input::old('telp_rumah'), array('class'=>'form-control')) }}
        		@if ($errors->has('telp_rumah')) <p class="help-block">{{ $errors->first('telp_rumah') }}</p> @endif		
			</div>

			<div class="form-group @if ($errors->has('alamat')) has-error @endif">
				{{Form::label('alamat', 'Alamat', array('class'=>' control-label'))}}
				{{Form::text('alamat', Input::old('alamat'), array('class'=>'form-control')) }}
        		@if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif		
			</div>

			<div class="col-md-6 nopadding-left form-group @if ($errors->has('kota')) has-error @endif">
				{{Form::label('kota', 'Kota', array('class'=>' control-label'))}}
				{{Form::text('kota', Input::old('kota'), array('class'=>'form-control')) }}
        		@if ($errors->has('kota')) <p class="help-block">{{ $errors->first('kota') }}</p> @endif		
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group @if ($errors->has('kode_pos')) has-error @endif">
				{{Form::label('kode_pos', 'Kode Pos', array('class'=>' control-label'))}}
				{{Form::text('kode_pos', Input::old('kode_pos'), array('class'=>'form-control')) }}
        		@if ($errors->has('kode_pos')) <p class="help-block">{{ $errors->first('kode_pos') }}</p> @endif		
			</div>

			<div class="clearfix"></div>

			<div class="form-group @if ($errors->has('id_program')) has-error @endif">
				{{Form::label('id_program', 'Program', array('class'=>' control-label'))}}
				{{Form::select('id_program', $programs, $siswa->id_program, array('class'=>'form-control')) }}
        		@if ($errors->has('id_program')) <p class="help-block">{{ $errors->first('id_program') }}</p> @endif		
			</div>
			<div class="form-group @if ($errors->has('aktivasi')) has-error @endif">
				{{Form::label('aktivasi', 'Aktivasi', array('class'=>' control-label'))}}
				{{Form::select('aktivasi', array('none'=>'Pilih', 'Aktif'=>'Aktif', 'Non-aktif'=>'Non-aktif'), Input::old('aktivsi'), array('class'=>'form-control')) }}
        		@if ($errors->has('aktivasi')) <p class="help-block">{{ $errors->first('aktivasi') }}</p> @endif		
			</div>
			<div class="form-group @if ($errors->has('pendaftaran')) has-error @endif">
				{{Form::label('pendaftaran', 'Pendaftaran', array('class'=>' control-label'))}}
				{{Form::text('pendaftaran', Input::old('pendaftaran'), array('class'=>'form-control')) }}
        		@if ($errors->has('pendaftaran')) <p class="help-block">{{ $errors->first('pendaftaran') }}</p> @endif		
			</div>

			<div class="form-group">
				{{Form::label('penerima', 'Penerima', array('class'=>' control-label'))}}
				{{Form::text('penerima', $siswa->penerima, array('readonly'=>'1', 'class'=>'form-control')) }}
        		@if ($errors->has('penerima')) <p class="help-block">{{ $errors->first('penerima') }}</p> @endif		
			</div>

		</div>
		<div class="clearfix"></div>
		<div class="pull-right">
			<a class="btn btn-danger" href="{{URL::to('siswa')}}">Back to Siswa</a>
			{{Form::submit('Save', array('class'=>'btn btn-primary'))}}
		</div>
		{{Form::close()}}
	</div>
	<div class="detil-program">
	</div>
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
		$(document).on('change', '#id_program', function(e){
			e.preventDefault();
			var thisClass = $(this).attr('class').split("-");
			var id = $(this).val(); 
			$.ajax({
				type: "GET",
				dataType: 'html',
				url : "programs/getinfo/" + id ,
				success : function(data){
					$('.detil-program').html(data);
					$('.detil-program').html(data);
				}
			},"json");

		});
		$('.detil-program').offset($('#id_program').position());
    });//end of document ready function
</script>
@stop


