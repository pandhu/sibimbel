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
          {{ HTML::image('images/sialum.png', '', array('style'=>'width:70px; margin-left:20px;margin-top:10px')) }}
          <div style="width:200px; float:left; position:fixed; top:10; left:90px; color:#11386b">
             <strong style="font-size: 24px">Bimbel ALUMNI</strong>
             <br>
             <strong style="font-size: 20px">Cab. Lenteng Agung</strong>
         </div>	
         <div style="width:400px float:left; position:fixed; top:0; left:380px; color:#11386b">
             <div style="padding:10px 0; padding-left:5px; background-color:#adc0d9"> <span style="font-size:16px"><strong>TANDA TERIMA PEMBAYARAN</strong></span> <span style="left:20px">Ref.{{$pembayaran->no_kuitansi}}</span></div>
             <div class="text-center">Gd. Citrasari (Bank BTN)  Jl. Raya Lenteng Agung No 39 Jakarta Selatan (021) 7869942</div>
         </div>
         <div style="width:790px;border-top:3px solid #3764a0; padding:10px 0;"></div>
         <div style="left:10px; top: 90px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#11386b">Telah terima dari: {{$siswa->nama}}</div>
         <div style="position:fixed; top: 90px; left: 675px; font-size:10px; color:#11386b">{{$now}}</div>
         <div style="width:100px; position:fixed; left:50px; top:110px; font-size:12px; color:#11386b">NIS: {{$siswa->nis}}</div> 
         <div style="width: 150px; position: fixed; left:150px; top:110px; font-size:12px; color:#11386b">Kelas: {{$siswa->kelas->nama}}</div>
         <div style="width:700px; position:fixed; left:30px; top:140px; font-size:12px; color:#11386b">Uang Sejumlah: <span style="width:100px; position:fixed; top:140px; left:120px"><strong>Rp{{number_format((double)$pembayaran->jumlah)}}</strong></span> <div style="border-bottom:1px solid;background-color:#e9edf3; position:fixed; padding: 3px; left:380px; width:395px; top: 135px; " class="text-center">{{$pembayaran->terbilang}} Rupiah</div></div>
         <div style="width:700px; position:fixed; left:10px; top:160px; font-size:12px; color:#11386b"><span>Untuk Pembayaran: {{$pembayaran->pembayaran}}</span></div>
         <div style="position:fixed; padding: 3px; left:480px; width:240px; top: 165px; font-size:12px; color:#11386b" class="text-center">Jakarta, {{$tanggal}}</div>
         <div style="background-color:#adc0d9; position:fixed; padding: 5px 10px; left:20px; width:90px; top: 185px; font-size:14px; color:#11386b" class="text-center">Lembar Untuk Siswa</div>
         <div style="position:fixed; top:220px; left:480px ;width:240px; font-size:12px; color:#11386b" class="text-center">{{$pembayaran->penerima}}</div>
         <div style="position:fixed; top:240px; left:0;width:794px;border-top:3px solid #3764a0; color:#11386b" ></div>
         <div class="text-center" style="border-bottom:3px solid #3764a0; width:760px; position:fixed; top:245px; font-size:12px; color:#11386b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

     </div>
 </div>
 <div style="page-break-before: always;"></div>

 <div class="kuitansi" style="width:794px ">
    <div class="row" >
        {{ HTML::image('images/sialum.png', '', array('style'=>'width:70px; margin-left:20px;margin-top:10px')) }}
        <div style="width:200px; float:left; position:fixed; top:10; left:90px; color:#6b1111">
            <strong style="font-size: 24px">Bimbel ALUMNI</strong>
            <br>
            <strong style="font-size: 20px">Cab. Lenteng Agung</strong>
        </div>  
        <div style="width:400px float:left; position:fixed; top:0; left:380px; color:#6b1111">
         <div style="padding:10px 0; padding-left:5px; background-color:#e69696"> <span style="font-size:16px"><strong>TANDA TERIMA PEMBAYARAN</strong></span> <span style="left:20px">Ref.{{$pembayaran->no_kuitansi}}</span></div>
         <div class="text-center">Gd. Citrasari (Bank BTN)  Jl. Raya Lenteng Agung No 39 Jakarta Selatan (021) 7869942</div>
     </div>
     <div style="width:790px;border-top:3px solid #a03737; padding:10px 0;"></div>
     <div style="left:10px; top: 90px;  margin-top: 10px; position:fixed; width:720px; font-size:12px; color:#6b1111">Telah terima dari: {{$siswa->nama}}</div>
     <div style="position:fixed; top: 90px; left: 675px; font-size:10px; color:#6b1111">{{$now}}</div>
     <div style="width:100px; position:fixed; left:50px; top:110px; font-size:12px; color:#6b1111">NIS: {{$siswa->nis}}</div> 
     <div style="width: 150px; position: fixed; left:150px; top:110px; font-size:12px; color:#6b1111">Kelas: {{$siswa->kelas->nama}}</div>
     <div style="width:700px; position:fixed; left:30px; top:140px; font-size:12px; color:#6b1111">Uang Sejumlah: <div style="width:100px; position:fixed; top:140px; left:120px"><strong>Rp{{number_format((double)$pembayaran->jumlah)}}</strong></div> <div style="border-bottom:1px solid;background-color:#f7d6d6; position:fixed; padding: 3px; left:380px; width:395px; top: 135px; " class="text-center">{{$pembayaran->terbilang}} Rupiah</div></div>
     <div style="width:700px; position:fixed; left:10px; top:160px; font-size:12px; color:#6b1111"><span>Untuk Pembayaran: {{$pembayaran->pembayaran}}</span></div>
     <div style="position:fixed; padding: 3px; left:480px; width:240px; top: 165px; font-size:12px; color:#6b1111" class="text-center">Jakarta, {{$tanggal}}</div>
     <div style="background-color:#e69696; position:fixed; padding: 5px 10px; left:20px; width:90px; top: 185px; font-size:14px; color:#6b1111" class="text-center">Lembar Untuk Siswa</div>
     <div style="position:fixed; top:220px; left:480px ;width:240px; font-size:12px; color:#6b1111" class="text-center">{{$pembayaran->penerima}}</div>
     <div style="position:fixed; top:240px; left:0;width:794px;border-top:3px solid #a03737; color:#6b1111" ></div>
     <div class="text-center" style="border-bottom:3px solid #a03737; width:760px; position:fixed; top:245px; font-size:12px; color:#6b1111">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

 </div>
</div>
<!-- Scripts are placed here -->
{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/jquery-ui.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
@yield('script')


</body>
</html>
