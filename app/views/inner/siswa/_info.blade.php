@if(isset($siswa))
<table class="table table-striped">
	<tr>
		<td>Nama</td>
		<td>{{$siswa->nama}}</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>{{$siswa->kelas->nama}}</td>
	</tr>
</table>
@else
Siswa Tidak Ditemukan!
@endif 