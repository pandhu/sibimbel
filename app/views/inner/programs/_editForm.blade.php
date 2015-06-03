<!-- Modal Edit -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-edit">Edit Programs</h4>
			</div>
			{{Form::open(array('url' => 'programs/edit/'.$program->id, 'class'=>'form-horizontal'))}}
			<div class="modal-body">

				<div class="form-group">
					{{Form::label('nama', 'Nama', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('nama', $program->nama, array('class'=>'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('hari', 'Hari', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('hari', $program->hari, array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('jam', 'Jam', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('jam', $program->jam, array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('harga_tunai', 'Harga Tunai', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('harga_tunai', $program->harga_tunai, array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('uang_pangkal', 'Uang Pangkal', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('uang_pangkal', $program->uang_pangkal, array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('spp', 'SPP', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('spp', $program->spp, array('class'=>'form-control')) }}
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{{Form::submit('Save', array('class'=>'btn btn-primary'))}}
			</div>
			{{Form::close()}}

		</div>
	</div>
</div>

