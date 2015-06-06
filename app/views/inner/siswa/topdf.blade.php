
<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		Laravel 4 - Tutorial
		@show
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- CSS are placed here -->
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-theme.css') }}
	{{ HTML::style('css/jquery-ui.css') }}
	{{ HTML::style('css/style.css') }}
	<style type="text/css">
		@page{
			margin: 0 20px;
		}
	</style>
	@yield('style')
</head>

<body>
	<!-- Container -->
	<!-- Content -->
	<div class="kuitansi" style="width:794px ">
		<div class="row" >
			{{ HTML::image('uploads/'.$setting['logo'], '', array('style'=>'width:70px; margin-left:20px;margin-top:10px')) }}
			<div style="width:200px; float:left; position:fixed; top:10; left:90px; color:#11386b">
				<strong style="font-size: 24px">{{$setting['nama_bimbel']}}</strong>
				<br>
				<strong style="font-size: 20px">Cab. {{$setting['cabang']}}</strong>
			</div>	
			<div style="width:400px float:left; position:fixed; top:0; left:380px; color:#11386b"> 
				<div style="padding:10px 0; padding-left:5px; background-color:#adc0d9"> <span style="font-size:16px; width:360px" class="text-center"><strong>BUKTI PENERIMAAN SISWA TA {{'20'.substr($setting['tahun_ajaran'],0,2).'/20'.substr($setting['tahun_ajaran'],2,2)}}</strong></span></div>
				<div class="text-center">{{$setting['alamat']}}</div>
			</div>
			<div style="width:790px;border-top:3px solid #3764a0; padding:10px 0; position:fixed; top:85px"></div>
			<div style="left:10px; top: 80px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#11386b">Nama Siswa: {{$siswa->nama}}</div>
			<div style="left:10px; top: 95px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#11386b">Nomor Indouk Siswa: {{$siswa->nis}}</div>
			<div style="left:380px; top: 80px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#11386b">Asal Sekolah: {{$siswa->asal_sekolah}}</div>
			<div style="left:380px; top: 95px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#11386b">Telp. Siswa: {{$siswa->telp_siswa}}</div>
			<div style="left:600px; top: 95px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#11386b">Telp. Orangtua: {{$siswa->telp_ortu}}</div>
			<div style="position:fixed; top: 90px; left: 675px; font-size:10px; color:#11386b">{{$now}}</div>
			<div style="widht:700px; position:fixed;top:125px; background-color:#e9edf3; height:25px"></div>
			<div style="width:700px; position:fixed; left:30px; top:127px; font-size:12px; color:#11386b">Program: {{$siswa->kelas->nama}}</div>
			<div style="width:700px; position:fixed; left:230px; top:127px; font-size:12px; color:#11386b">Jadwal Belajar: {{$siswa->kelas->hari}}</div>
			<div style="width:700px; position:fixed; left:545px; top:127px; font-size:12px; color:#11386b">Jam: {{$siswa->kelas->jam}}</div>
			<div style="width:700px; position:fixed; left:30px; top:150px; font-size:12px; color:#11386b">Biaya yang harus dibayar:</div>
			<div style="width:700px; position:fixed; left:60px; top:165px; font-size:12px; color:#11386b">Pendaftaran: &nbsp;&nbsp; Rp{{number_format((double)$siswa->pendaftaran)}}</div>
			<div style="width:700px; position:fixed; left:60px; top:180px; font-size:12px; color:#11386b">Jika Tunai: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp{{number_format((double)$siswa->kelas->harga_tunai)}}</div>
			<div style="width:700px; position:fixed; left:60px; top:195px; font-size:12px; color:#11386b">Uang Pangkal: Rp{{number_format((double)$siswa->kelas->uang_pangkal)}}</div>
			<div style="width:700px; position:fixed; left:60px; top:210px; font-size:12px; color:#11386b">SPP/bulan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp{{number_format((double)$siswa->kelas->spp)}}</div>
			<div style="position:fixed; padding: 3px; left:480px; width:240px; top: 165px; font-size:12px; color:#11386b" class="text-center">Jakarta, {{$tanggal}}</div>
			<div style="background-color:#adc0d9; position:fixed; padding: 5px 10px; left:350px; width:90px; top: 165px; font-size:14px; color:#11386b" class="text-center">Lembar Untuk Siswa</div>
			<div style="position:fixed; top:220px; left:480px ;width:240px; font-size:12px; color:#11386b" class="text-center">{{$siswa->penerima}}</div>
			<div style="position:fixed; top:240px; left:0;width:794px;border-top:3px solid #3764a0; color:#11386b" ></div>
			<div class="text-center" style="border-bottom:3px solid #3764a0; width:760px; position:fixed; top:245px; font-size:12px; color:#11386b;padding-bottom: 5px">{{$setting['footer_kuitansi']}}</div>

		</div>
	</div>
	<div style="page-break-before: always;"></div>

	<div class="kuitansi" style="width:794px ">
		<div class="row" >
			{{ HTML::image('uploads/'.$setting['logo'], '', array('style'=>'width:70px; margin-left:20px;margin-top:10px')) }}
			<div style="width:200px; float:left; position:fixed; top:10; left:90px; color:#6b1111">
				<strong style="font-size: 24px">{{$setting['nama_bimbel']}}</strong>
				<br>
				<strong style="font-size: 20px">Cab. {{$setting['cabang']}}</strong>
			</div>	
			<div style="width:400px float:left; position:fixed; top:0; left:380px; color:#6b1111"> 
				<div style="padding:10px 0; padding-left:5px; background-color:#e69696"> <span style="font-size:16px; width:360px" class="text-center"><strong>BUKTI PENERIMAAN SISWA TA {{'20'.substr($setting['tahun_ajaran'],0,2).'/20'.substr($setting['tahun_ajaran'],2,2)}}</strong></span></div>
				<div class="text-center">{{$setting['alamat']}}</div>
			</div>
			<div style="width:790px;border-top:3px solid #a03737; padding:10px 0; position:fixed; top:85px"></div>
			<div style="left:10px; top: 80px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#6b1111">Nama Siswa: {{$siswa->nama}}</div>
			<div style="left:10px; top: 95px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#6b1111">Nomor Indouk Siswa: {{$siswa->nis}}</div>
			<div style="left:380px; top: 80px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#6b1111">Asal Sekolah: {{$siswa->asal_sekolah}}</div>
			<div style="left:380px; top: 95px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#6b1111">Telp. Siswa: {{$siswa->telp_siswa}}</div>
			<div style="left:600px; top: 95px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#6b1111">Telp. Orangtua: {{$siswa->telp_ortu}}</div>
			<div style="position:fixed; top: 90px; left: 675px; font-size:10px; color:#f7d6d6">{{$now}}</div>
			<div style="widht:700px; position:fixed;top:125px; background-color:#e9edf3; height:25px"></div>
			<div style="width:700px; position:fixed; left:30px; top:127px; font-size:12px; color:#6b1111">Program: {{$siswa->kelas->nama}}</div>
			<div style="width:700px; position:fixed; left:230px; top:127px; font-size:12px; color:#6b1111">Jadwal Belajar: {{$siswa->kelas->hari}}</div>
			<div style="width:700px; position:fixed; left:545px; top:127px; font-size:12px; color:#6b1111">Jam: {{$siswa->kelas->jam}}</div>
			<div style="width:700px; position:fixed; left:30px; top:150px; font-size:12px; color:#6b1111">Biaya yang harus dibayar:</div>
			<div style="width:700px; position:fixed; left:60px; top:165px; font-size:12px; color:#6b1111">Pendaftaran: &nbsp;&nbsp; Rp{{number_format((double)$siswa->pendaftaran)}}</div>
			<div style="width:700px; position:fixed; left:60px; top:180px; font-size:12px; color:#6b1111">Jika Tunai: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp{{number_format((double)$siswa->kelas->harga_tunai)}}</div>
			<div style="width:700px; position:fixed; left:60px; top:195px; font-size:12px; color:#6b1111">Uang Pangkal: Rp{{number_format((double)$siswa->kelas->uang_pangkal)}}</div>
			<div style="width:700px; position:fixed; left:60px; top:210px; font-size:12px; color:#6b1111">SPP/bulan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp{{number_format((double)$siswa->kelas->spp)}}</div>
			<div style="position:fixed; padding: 3px; left:480px; width:240px; top: 165px; font-size:12px; color:#6b1111" class="text-center">Jakarta, {{$tanggal}}</div>
			<div style="background-color:#e69696; position:fixed; padding: 5px 10px; left:350px; width:90px; top: 165px; font-size:14px; color:#6b1111" class="text-center">Lembar Untuk Bimbel</div>
			<div style="position:fixed; top:220px; left:480px ;width:240px; font-size:12px; color:#6b1111" class="text-center">{{$siswa->penerima}}</div>
			<div style="position:fixed; top:240px; left:0;width:794px;border-top:3px solid #a03737; color:#6b1111" ></div>
			<div class="text-center" style="border-bottom:3px solid #a03737; width:760px; position:fixed; top:245px; font-size:12px; color:#6b1111;padding-bottom: 5px">{{$setting['footer_kuitansi']}}</div>

		</div>
	</div>
	<!-- Scripts are placed here -->
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/jquery-ui.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	@yield('script')


</body>
</html>
