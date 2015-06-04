@extends('layouts.admin')
@section('content-inner')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header ">Pembayaran 		
		</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Pembayaran
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No. Kuitansi</th>
								<th>Nama</th>
								<th>Transaksi</th>
								<th>Jumlah</th>
								<th>Penerima</th>
								<th>Tanggal</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($pembayarans as $pembayaran)
							<tr class="odd gradeX">
								<td>{{$pembayaran->no_kuitansi}}</td>
								<td>{{$pembayaran->siswa->nama}}</td>
								<td>{{$pembayaran->pembayaran}}</td>
								<td>{{$pembayaran->jumlah}}</td>
								<td>{{$pembayaran->penerima}}</td>
								<td>{{$pembayaran->tanggal}}</td>
								<td class="">
									<a data-id="{{$pembayaran->no_kuitansi}}" href="{{URL::to('pembayaran/topdf/'.$pembayaran->no_kuitansi)}}" class="btn btn-success btn-xs">Cetak</a>
									<a data-id="{{$pembayaran->no_kuitansi}}" class="detil-btn btn btn-primary btn-xs">Detil</a>
									<a data-id="{{$pembayaran->no_kuitansi}}" href="{{URL::to('pembayaran/edit/'.$pembayaran->no_kuitansi)}}" class="edit-btn btn btn-default btn-xs">Edit</a>
									<a data-id="{{$pembayaran->no_kuitansi}}" class="delete-btn btn btn-danger btn-xs">Delete</a>
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
			{{Form::open(array('url' => 'programs/add/', 'class'=>'form-horizontal'))}}
			<div class="modal-body">

				<div class="form-group">
					{{Form::label('nama', 'Nama', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('nama', '', array('id' => 'datepicker', 'class'=>'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('hari', 'Hari', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('hari', '', array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('jam', 'Jam', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('jam', '', array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('harga_tunai', 'Harga Tunai', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('harga_tunai', '', array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('uang_pangkal', 'Uang Pangkal', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('uang_pangkal', '', array('class'=>'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('spp', 'SPP', array('class'=>'col-sm-2 control-label'))}}
					<div class="col-sm-10">
						{{Form::text('spp', '', array('class'=>'form-control')) }}
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
				url : "pembayaran/"+thisClass[0]+"/" + id ,
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