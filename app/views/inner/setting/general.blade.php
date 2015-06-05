@extends('layouts.admin')
@section('content-inner')
<div class="col-md-4 col-md-offset-4">
	<h2 class="text-center">Setting General</h2>
		{{Form::open(array('url' => 'setting/change/', 'class'=>'form'))}}
		<div class="form-group @if ($errors->has('nama_bimbel')) has-error @endif">
			{{Form::label('nama_bimbel', 'Nama Bimbel', array('class'=>' control-label'))}}
			{{Form::text('nama_bimbel', $setting['nama_bimbel'], array( 'class'=>'form-control')) }}
			@if ($errors->has('nama_bimbel')) <p class="help-block">{{ $errors->first('nama_bimbel') }}</p> @endif		
		</div>
		<div class="form-group @if ($errors->has('tahun_ajaran')) has-error @endif">
			{{Form::label('tahun_ajaran', 'Tahun Ajaran', array('class'=>' control-label'))}}
			{{Form::select('tahun_ajaran',$tahun_ajaran_option, $setting['tahun_ajaran'], array('class'=>'form-control')) }}
			@if ($errors->has('tahun_ajaran')) <p class="help-block">{{ $errors->first('tahun_ajaran') }}</p> @endif		
		</div>

		<div class="form-group @if ($errors->has('alamat')) has-error @endif">
			{{Form::label('alamat', 'Alamat', array('class'=>' control-label'))}}
			{{Form::text('alamat', $setting['alamat'], array( 'class'=>'form-control')) }}
			@if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif		
		</div>
	
	<div class="clearfix"></div>
	<div class="pull-right">
		<a href="{{URL::to('dashboard')}}" class="btn btn-warning">Cancel</a>
		{{Form::submit('Save', array('class'=>'btn btn-primary'))}}
	</div>
	{{Form::close()}}
</div>
<div class="detil-program">
</div>


@stop