<!-- Modal Edit -->
<div class="modal fade" id="modal-detil" tabindex="-1" role="dialog" aria-labelledby="modal-detil" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-detil">Edit Siswa | <strong>{{'NIS: '.$siswa->nis}}</strong>
				</h4>
				
			</div>
			{{Form::open(array('url' => 'siswa/edit/'.$siswa->nis, 'readonly'=>'true', 'class'=>'form'))}}
			<div class="modal-body row">
				<div class="col-md-4">
					
					<div class="form-group">
						{{Form::label('nama', 'Nama', array('readonly'=>'true', 'class'=>' control-label'))}}
							{{Form::text('nama', $siswa->nama, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('panggilan', 'Panggilan', array('readonly'=>'true', 'class'=>' control-label'))}}
							{{Form::text('panggilan', $siswa->panggilan, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('agama', 'Agama', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('agama', $siswa->agama, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('jenis_kelamin', 'Jenis Kelamin', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('jenis_kelamin', $siswa->jenis_kelamin, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('asal_sekolah', 'Asal Sekolah', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('asal_sekolah', $siswa->asal_sekolah, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('tempat_lahir', 'Tempat Lahir', array('readonly'=>'true', 'class'=>' control-label'))}}
							{{Form::text('tempat_lahir', $siswa->tempat_lahir, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('tanggal_lahir', 'Tanggal Lahir', array('readonly'=>'true', 'class'=>' control-label'))}}
							{{Form::text('tanggal_lahir', $siswa->tanggal_lahir, array('id'=>'datepicker-edit', 'readonly'=>'true', 'class'=>'clsDatePicker form-control')) }}
					</div>					
				</div>

				<div class="col-md-4">
					<div class="form-group">
						{{Form::label('status', 'Status', array('readonly'=>'true', 'class'=>' control-label'))}}
							{{Form::text('status', $siswa->status, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('nama_ayah', 'Nama Ayah', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('nama_ayah', $siswa->nama_ayah, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('pekerjaan_ayah', 'Pekerjaan Ayah', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('pekerjaan_ayah', $siswa->pekerjaan_ayah, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('nama_ibu', 'Nama Ibu', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('nama_ibu', $siswa->nama_ibu, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('pekerjaan_ibu', 'Pekerjaan Ibu', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('pekerjaan_ibu', $siswa->pekerjaan_ibu, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('telp_siswa', 'Telp Siswa', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('telp_siswa', $siswa->telp_siswa, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('telp_ortu', 'Telp Orangtua', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('telp_ortu', $siswa->telp_ortu, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>					

				</div>
				<div class="col-md-4">
										
					<div class="form-group">
						{{Form::label('alamat', 'Alamat', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('alamat', $siswa->alamat, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('kota', 'Kota', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('kota', $siswa->kota, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('kode_pos', 'Kode Pos', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('kode_pos', $siswa->kode_pos, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('telp_rumah', 'Telp Rumah', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('telp_rumah', $siswa->telp_rumah, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>
	
					<div class="form-group">
						{{Form::label('id_program', 'Program', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('id_program', $siswa->id_program, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('aktivasi', 'Aktivasi', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('aktivasi', $siswa->aktivasi, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>

					<div class="form-group">
						{{Form::label('penerima', 'Penerima', array('readonly'=>'true', 'class'=>' control-label'))}}
						{{Form::text('penerima', $siswa->penerima, array('readonly'=>'true', 'class'=>'form-control')) }}
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			{{Form::close()}}

		</div>
	</div>
</div>
