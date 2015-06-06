@extends('layouts.admin')
@section('content-inner')
<div class="col-md-4 col-md-offset-4">
	<h2 class="text-center">Setting General</h2>
		{{Form::open(array('url' => 'setting/change/', 'class'=>'form', 'files'=>'true'))}}
		<div class="form-group @if ($errors->has('nama_bimbel')) has-error @endif">
			{{Form::label('nama_bimbel', 'Nama Bimbel', array('class'=>' control-label'))}}
			{{Form::text('nama_bimbel', $setting['nama_bimbel'], array( 'class'=>'form-control')) }}
			@if ($errors->has('nama_bimbel')) <p class="help-block">{{ $errors->first('nama_bimbel') }}</p> @endif		
		</div>

		<div class="form-group @if ($errors->has('cabang')) has-error @endif">
			{{Form::label('cabang', 'Nama Bimbel', array('class'=>' control-label'))}}
			{{Form::text('cabang', $setting['cabang'], array( 'class'=>'form-control')) }}
			@if ($errors->has('cabang')) <p class="help-block">{{ $errors->first('cabang') }}</p> @endif		
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

		<div class="form-group @if ($errors->has('footer_kuitansi')) has-error @endif">
			{{Form::label('footer_kuitansi', 'Footer Kuitansi', array('class'=>' control-label'))}}
			{{Form::text('footer_kuitansi', $setting['footer_kuitansi'], array( 'class'=>'form-control')) }}
			@if ($errors->has('footer_kuitansi')) <p class="help-block">{{ $errors->first('footer_kuitansi') }}</p> @endif		
		</div>

		<div class="form-group @if ($errors->has('logo')) has-error @endif">
			{{Form::label('logo', 'Logo', array('class'=>' control-label'))}}
			<br>
			{{ HTML::image('uploads/'.$setting['logo'], '', array('class'=>'thumbnail', 'style'=>'width:70px; margin-bottom:10px')) }}
			{{Form::file('logo', array( 'class'=>'form-control')) }}
			@if ($errors->has('logo')) <p class="help-block">{{ $errors->first('logo') }}</p> @endif		
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