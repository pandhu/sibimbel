<!-- Modal delete -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-delete">Delete Program</h4>
			</div>
			{{Form::open(array('url' => 'users/delete/'.$user->id, 'class'=>'form-horizontal'))}}
			<div class="modal-body">
				Delete user {{$user->username}}, are you sure?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				{{Form::submit('Yes', array('class'=>'btn btn-primary'))}}
			</div>
			{{Form::close()}}

		</div>
	</div>
</div>