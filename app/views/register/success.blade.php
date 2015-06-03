@extends('layouts.admin')
@section('content-inner')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">Siswa Berhasil Didaftarkan</h2>
		<div class="col-md-6 nopadding-left">

			{{Form::open(array('url' => 'siswa/add/'.'', 'class'=>'form'))}}

			<div class="col-md-6 nopadding-left form-group">
				{{Form::label('nis', 'NIS', array('class'=>' control-label'))}}
				{{Form::text('nis', $siswa->nis, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group">
				{{Form::label('status', 'Status', array('class'=>' control-label'))}}
				{{Form::text('status', $siswa->status, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('nama', 'Nama', array('class'=>' control-label'))}}
				{{Form::text('nama', $siswa->nama, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('panggilan', 'Panggilan', array('class'=>' control-label'))}}
				{{Form::text('panggilan', $siswa->panggilan, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left form-group">
				{{Form::label('agama', 'Agama', array('class'=>' control-label'))}}
				{{Form::text('agama', $siswa->agama, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group">
				{{Form::label('jenis_kelamin', 'Jenis Kelamin', array('class'=>' control-label'))}}
				{{Form::text('jenis_kelamin', $siswa->jenis_kelamin, array('readonly'=>'1','class'=>'form-control'))}}
			</div>

			<div class="form-group">
				{{Form::label('asal_sekolah', 'Asal Sekolah', array('class'=>' control-label'))}}
				{{Form::text('asal_sekolah', $siswa->asal_sekolah, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left form-group">
				{{Form::label('tempat_lahir', 'Tempat Lahir', array('class'=>' control-label'))}}
				{{Form::text('tempat_lahir', $siswa->tempat_lahir, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group">
				{{Form::label('tanggal_lahir', 'Tanggal Lahir', array('class'=>' control-label'))}}
				{{Form::text('tanggal_lahir', $siswa->tanggal_lahir, array('readonly'=>'1','id'=>'datepicker', 'class'=>'clsDatePicker form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('nama_ayah', 'Nama Ayah', array('class'=>' control-label'))}}
				{{Form::text('nama_ayah', $siswa->nama_ayah, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('pekerjaan_ayah', 'Pekerjaan Ayah', array('class'=>' control-label'))}}
				{{Form::text('pekerjaan_ayah', $siswa->pekerjaan_ayah, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('nama_ibu', 'Nama Ibu', array('class'=>' control-label'))}}
				{{Form::text('nama_ibu', $siswa->nama_ibu, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('pekerjaan_ibu', 'Pekerjaan Ibu', array('class'=>' control-label'))}}
				{{Form::text('pekerjaan_ibu', $siswa->pekerjaan_ibu, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

		</div>

		<div class="col-md-6 nopadding-left">
			
			<div class="form-group">
				{{Form::label('telp_siswa', 'Telp Siswa', array('class'=>' control-label'))}}
				{{Form::text('telp_siswa', $siswa->telp_siswa, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('telp_ortu', 'Telp Orangtua', array('class'=>' control-label'))}}
				{{Form::text('telp_ortu', $siswa->telp_ortu, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('telp_rumah', 'Telp Rumah', array('class'=>' control-label'))}}
				{{Form::text('telp_rumah', $siswa->telp_rumah, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('alamat', 'Alamat', array('class'=>' control-label'))}}
				{{Form::textarea('alamat', $siswa->alamat, array('size'=>'30x9', 'readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left form-group">
				{{Form::label('kota', 'Kota', array('class'=>' control-label'))}}
				{{Form::text('kota', $siswa->kota, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="col-md-6 nopadding-left nopadding-right form-group">
				{{Form::label('kode_pos', 'Kode Pos', array('class'=>' control-label'))}}
				{{Form::text('kode_pos', $siswa->kode_pos, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('id_program', 'Program', array('class'=>' control-label'))}}
				{{Form::text('id_program', $siswa->kelas->nama, array('readonly'=>'1','class'=>'form-control')) }}
			</div>
			<div class="col-md-6 nopadding-left form-group">
				{{Form::label('aktivasi', 'Aktivasi', array('class'=>' control-label'))}}
				{{Form::text('aktivasi', $siswa->aktivasi, array('readonly'=>'1','class'=>'form-control')) }}
			</div>
			<div class="col-md-6 nopadding-left nopadding-right form-group">
				{{Form::label('pendaftaran', 'Pendaftaran', array('class'=>' control-label'))}}
				{{Form::text('pendaftaran', $siswa->pendaftaran, array('readonly'=>'1','class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{Form::label('penerima', 'Penerima', array('class'=>' control-label'))}}
				{{Form::text('penerima', $siswa->penerima, array('readonly'=>'1', 'class'=>'form-control')) }}
			</div>

		</div>
		<div class="clearfix"></div>
		{{Form::close()}}
		<a class="col-md-6 btn btn-warning">Cetak</a>
		<a class="col-md-6 btn btn-primary">Edit</a>
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


