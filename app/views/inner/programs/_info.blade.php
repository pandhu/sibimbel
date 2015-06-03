Detil Program
<table class="table table-striped">
		<tr>
			<td>Hari</td>
			<td>{{$program->hari}}</td>
		</tr>
		<tr>
			<td>Jam</td>
			<td>{{$program->jam}}</td>
		</tr>
		<tr>
			<td>Harga Tunai</td>
			<td>{{number_format((double)$program->harga_tunai)}}</td>
		</tr>
		<tr>
			<td>Uang Pangkal</td>
			<td>{{number_format((double)$program->uang_pangkal)}}</td>
		</tr>
		<tr>
			<td>SPP</td>
			<td>{{number_format((double)$program->spp)}}</td>
		</tr>
</table>