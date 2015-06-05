@extends('layouts.admin')
@section('content-inner')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header ">Users
		<a href="{{URL::to('users/add')}}" class="pull-right new-btn"><i class="fa fa-plus"></i></a> 		
		</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data User
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Username</th>
								<th>Nama</th>
								<th>Jabatan</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr class="odd gradeX">
								<td>{{$user->username}}</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->jabatan}}</td>
								<td class="" style="width:120px">	
									<div class="btn-group btn-group-sm" role="group" aria-label="...">
										<a data-id="{{$user->id}}" class="delete-btn btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>



<!-- Modal new -->
<div class="modal fade" id="modal-new" tabindex="-1" role="dialog" aria-labelledby="modal-new" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-new">Tambah Programs</h4>
			</div>
			{{Form::open(array('url' => 'users/add/', 'class'=>'form-horizontal'))}}
			<div class="modal-body">

				<div class="form-group @if ($errors->has('username')) has-error @endif">
					{{Form::label('username', 'Username', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('username', Input::old('username'), array('id' => 'datepicker', 'class'=>'form-control')) }}
						@if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif		
					</div>
				</div>

				<div class="form-group @if ($errors->has('password')) has-error @endif">
					{{Form::label('password', 'Password', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::password('password', array('class'=>'form-control')) }}
						@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
					</div>
				</div>

				<div class="form-group @if ($errors->has('confirm_password')) has-error @endif">
					{{Form::label('confirm_password', 'Ulangi Password', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::password('confirm_password', array('class'=>'form-control')) }}
						@if ($errors->has('confirm_password')) <p class="help-block">{{ $errors->first('confirm_password') }}</p> @endif		
					</div>
				</div>

				<div class="form-group @if ($errors->has('nama')) has-error @endif">
					{{Form::label('nama', 'Nama', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('nama', Input::old('nama'), array('class'=>'form-control')) }}
						@if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
					</div>
				</div>

				<div class="form-group @if ($errors->has('jabatan')) has-error @endif">
					{{Form::label('jabatan', 'Jabatan', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('jabatan', Input::old('jabatan'), array('class'=>'form-control')) }}
						@if ($errors->has('jabatan')) <p class="help-block">{{ $errors->first('jabatan') }}</p> @endif		

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


<div class="modal-area">
</div>

<!-- Modal Edit -->
<div class="modal-area">
	<div class="modal fade" id="modal-labs" tabindex="-1" role="dialog" aria-labelledby="modal-new" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-new">Tambah Programs</h4>
				</div>
				{{Form::open(array('url' => 'programs/add/', 'class'=>'form-horizontal'))}}
				<div class="modal-body">

					<div class="form-group">
						{{Form::label('nama', 'Date labs', array('class'=>'col-sm-2 control-label'))}}
						<div class="col-sm-10">
							{{Form::text('nama', '', array('id' => 'datepicker-labs', 'class'=>'clsDatePicker form-control')) }}
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
</div>
@stop
@section('script-inner')
{{ HTML::script('bower_components/datatables/media/js/jquery.dataTables.min.js') }}
{{ HTML::script('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}
<script>
	$(document).ready(function() {
		if(<?php echo count($errors->all())?> != 0){
			$('#modal-new').modal('show');
		}
		$('#dataTables-example').DataTable({
			responsive: true
		});

		$('.new-btn').click(function(e){
			e.preventDefault();
			$('#modal-new').modal('show');
		});
	});
</script>

<script>
	$(document).ready(function(){
		$(document).on('click', '.delete-btn, .detil-btn', function(e){
			e.preventDefault();
			var thisClass = $(this).attr('class').split("-");
			var id = $(this).attr('data-id'); 
			$.ajax({
				type: "GET",
				dataType: 'html',
				url : "users/"+thisClass[0]+"/" + id ,
				success : function(data){
					$('.modal-area').html(data);
					$('#modal-'+ thisClass[0]).modal('show');
				}
			},"json");

		});
        });//end of document ready function
</script>
<script type="text/javascript">
	$('body').on('focus',"#datepicker-edit", function(){
		$(this).datepicker({
			dateFormat: 'dd-mm-yy',
			changeMonth: true,
			changeYear: true,
			altFormat: "yy-mm-dd"
		});
	});
</script>
@stop