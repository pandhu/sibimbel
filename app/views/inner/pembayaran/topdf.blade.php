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
        <div class="kuitansi" style="width:794px">
        	<div class="row" >
	        	{{ HTML::image('images/sialum.png', '', array('style'=>'width:70px; margin-left:20px;margin-top:10px')) }}
        		<div style="width:200px; float:left; position:fixed; top:10; left:90px">
	        		<strong style="font-size: 24px">Bimbel ALUMNI</strong>
                    <br>
	        		<strong style="font-size: 20px">Cab. Lenteng Agung</strong>
	        	</div>	
                <div style="width:400px float:left; position:fixed; top:0; left:380px">
                   <div style="padding:10px 0; padding-left:5px; background-color:#adc0d9"> <span style="font-size:16px"><strong>TANDA TERIMA PEMBAYARAN</strong></span> <span style="left:20px">Ref.{{$pembayaran->no_kuitansi}}</span></div>
                    <div class="text-center">Gd. Citrasari (Bank BTN)  Jl. Raya Lenteng Agung No 39 Jakarta Selatan (021) 7869942</div>
                </div>
                <div style="width:790px;border-top:3px solid #3764a0; padding:10px 0;"></div>
                <div style="left:10px; top: 90px;  margin-top: 10px; position:fixed; width:720px; font-size:12px">Telah terima dari: {{$siswa->nama}}</div>
                <div style="position:fixed; top: 90px; left: 580px; font-size:12px">{{$now}}</div>
                <div style="width:100px; position:fixed; left:50px; top:110px; font-size:12px">NIS: {{$siswa->nis}}</div> 
                <div style="width: 150px; position: fixed; left:150px; top:110px; font-size:12px">Kelas: {{$siswa->kelas->nama}}</div>
                <div style="width:700px; position:fixed; left:30px; top:140px; font-size:12px">Uang Sejumlah: <span style="width:100px; position:fixed; top:140px; left:133px"><strong>Rp{{number_format((double)$pembayaran->jumlah)}}</strong></span> <div style="border-bottom:1px solid;background-color:#adc0d9; position:fixed; padding: 3px; left:380px; width:395px; top: 135px; " class="text-center">{{$pembayaran->terbilang}} Rupiah</div></div>
                <div style="width:700px; position:fixed; left:10px; top:160px; font-size:12px"><span>Untuk Pembayaran: {{$pembayaran->pembayaran}}</span></div>
                <div style="position:fixed; padding: 3px; left:480px; width:240px; top: 185px; font-size:12px" class="text-center">Jakarta, {{$tanggal}}</div>
                <div style="background-color:#adc0d9; position:fixed; padding: 10px; left:20px; width:90px; top: 185px; font-size:12px" class="text-center">Lembar Untuk Siswa</div>
                <div style="position:fixed; top:260px; left:480px ;width:240px; font-size:12px" class="text-center">{{$pembayaran->penerima}}</div>
                <div style="position:fixed; top:280px; left:0;width:794px;border-top:3px solid #3764a0;" ></div>
                    <div class="text-center" style="width:760px; position:fixed; top:285px; font-size:12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <div style="position:fixed; top:320px; left:0;width:794px;border-top:3px solid #3764a0; "></div>

        	</div>
        </div>
		

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/jquery-ui.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        @yield('script')


    </body>
</html>
