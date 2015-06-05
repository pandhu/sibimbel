@extends('layouts.admin')
@section('content-inner')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Dashboard</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<h2 class="text-center">Selamat Datang Di Sistem Informasi {{$setting['nama_bimbel']}}</h2>
<h4 class="text-center">Tahun Ajaran {{'20'.substr($setting['tahun_ajaran'],0,2).'/20'.substr($setting['tahun_ajaran'],2,2)}}</h4>
<div class="row">
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-pencil fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{count($programs)}}</div>
						<div>Program!</div>
					</div>
				</div>
			</div>
			<a href="{{URL::to('programs')}}">
				<div class="panel-footer">
					<span class="pull-left">Tambah Program</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-user-plus fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{count($siswa)}}</div>
						<div>Siswa!</div>
					</div>
				</div>
			</div>
			<a href="{{URL::to('register')}}">
				<div class="panel-footer">
					<span class="pull-left">Pendaftaran Siswa!</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-money fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">124</div>
						<div>New Orders!</div>
					</div>
				</div>
			</div>
			<a href="{{URL::to('pembayaran/add')}}">
				<div class="panel-footer">
					<span class="pull-left">Pembayaran Baru!</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
</div>
@stop
