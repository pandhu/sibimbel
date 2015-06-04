<?php
use Carbon\Carbon;
class PembayaranController extends BaseController {

	public function __construct(){
        $this->beforeFilter('auth', ['except' => 'login']);
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

	public function show(){
		
		$pembayarans = Pembayaran::with('siswa')->get();
		$data['pembayarans'] = $pembayarans;
		return  View::make('inner/pembayaran/pembayaran', $data);
		
	}

	public function showEdit($id){
		$pembayaran = Pembayaran::find($id);
		$today = Carbon::now()->toDateString();

		return View::make('inner/pembayaran/edit', array('pembayaran'=>$pembayaran, 'today'=>$today));
	}

	public function showAdd(){
		$today = Carbon::now()->toDateString();
		return View::make('inner/pembayaran/new', array('today'=>$today));
	}

	public function submitEdit($id){
		$validator = Validator::make(Input::all(), Pembayaran::$rules);
		if ($validator->fails()) {
       		$messages = $validator->messages();
       		return Redirect::to('pembayaran/edit/'.$id)
       							->withErrors($validator)
       							->withInput();
		}

		$pembayaran = Pembayaran::find($id);
		$pembayaran->tanggal = Input::get('tanggal');
		$pembayaran->nis = Input::get('nis');
		$pembayaran->pembayaran = Input::get('pembayaran');
		$pembayaran->jumlah = Input::get('jumlah');
		$pembayaran->terbilang = $this->terbilang(Input::get('jumlah'));

		if($pembayaran->save()){
			$alert = array('type'=>'success', 'message'=>'Pembayaran berhasil diubah!');
			Session::flash('alert', $alert);
			return Redirect::to('pembayaran');
	 	}
	}
	public function submitAdd(){
		$tahun_ajaran = DB::table('setting')->where('key', 'tahun_ajaran')->first()->value;
		$last_pembayaran = Pembayaran::where('no_kuitansi', 'like', 'LADD'.$tahun_ajaran.'%')->orderby('no_kuitansi', 'desc')->get()->first();
		if(isset($last_pembayaran))
			$nomor = 1 + (int)substr($last_pembayaran->no_kuitansi, 4, 8);
		else 
			$nomor = '0001';

		$validator = Validator::make(Input::all(), Pembayaran::$rules);
		if ($validator->fails()) {
       		$messages = $validator->messages();
       		return Redirect::to('pembayaran/add')
       							->withErrors($validator)
       							->withInput();
		}

		$pembayaran = new Pembayaran;
		$pembayaran->no_kuitansi = "LADD".$nomor;
		$pembayaran->tanggal = Input::get('tanggal');
		$pembayaran->nis = Input::get('nis');
		$pembayaran->pembayaran = Input::get('pembayaran');
		$pembayaran->jumlah = Input::get('jumlah');
		$pembayaran->terbilang = $this->terbilang(Input::get('jumlah'));
		$pembayaran->penerima = Auth::user()->nama;

		
		if($pembayaran->save()){
			$alert = array('type'=>'success', 'message'=>'Pembayaran berhasil ditambah!');
			Session::flash('alert', $alert);
		}
		return Redirect::to('pembayaran');
 
	}
	
	public function showDelete($id){
		$pembayaran = Pembayaran::find($id);
		return View::make('inner/pembayaran/_delete', array('pembayaran'=>$pembayaran));
	}

	public function doDelete($id){
		$program = Pembayaran::find($id);
		

		if($program->delete()){
			$alert = array('type'=>'success', 'message'=>'Program berhasil dihapus!');
			Session::flash('alert', $alert);
		}
		return Redirect::to('pembayaran');
	}
	
	public function showInfo($id){
		$program = Programs::find($id);
		return View::make('inner/programs/_info', array('program'=>$program));

	}

	public function showPDF($id){
		$bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		$pembayaran = Pembayaran::find($id);
		$siswa = Siswa::with('kelas')->find($pembayaran->nis);
		$now = Carbon::now()->toDateTimeString();
		$now = date_create($now);
		$now = date_format($now,"d/m/Y H:i:s");
		$date_create = explode('-',$pembayaran->tanggal);
		$tanggal = $date_create[2]." ".$bulan[(int)$date_create[1]]." ".$date_create[0]; 
		
		$pdf =  PDF::loadView('inner/pembayaran/topdf', array('siswa'=>$siswa, 'pembayaran'=>$pembayaran, 'now'=>$now,'tanggal'=>$tanggal)); 
		return $pdf->stream();
		return View::make('inner/pembayaran/topdf', array('siswa'=>$siswa, 'pembayaran'=>$pembayaran, 'today'=>$today, 'now'=>$now, 'tanggal'=>$tanggal)); 
	}
	//**** HELPER FUNCTION ****//
	private function kekata($x) {
	    $x = abs($x);
	    $angka = array("", "Satu", "Dua", "Tiga", "Rmpat", "Lima",
	    "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
	    $temp = "";
	    if ($x <12) {
	        $temp = " ". $angka[$x];
	    } else if ($x <20) {
	        $temp = $this->kekata($x - 10). " Belas";
	    } else if ($x <100) {
	        $temp = $this->kekata($x/10)." Puluh". $this->kekata($x % 10);
	    } else if ($x <200) {
	        $temp = " Seratus" . $this->kekata($x - 100);
	    } else if ($x <1000) {
	        $temp = $this->kekata($x/100) . " Ratus" . $this->kekata($x % 100);
	    } else if ($x <2000) {
	        $temp = " Seribu" . $this->kekata($x - 1000);
	    } else if ($x <1000000) {
	        $temp = $this->kekata($x/1000) . " Ribu" . $this->kekata($x % 1000);
	    } else if ($x <1000000000) {
	        $temp = $this->kekata($x/1000000) . " Juta" . $this->kekata($x % 1000000);
	    } else if ($x <1000000000000) {
	        $temp = $this->kekata($x/1000000000) . " Milyar" . $this->kekata(fmod($x,1000000000));
	    } else if ($x <1000000000000000) {
	        $temp = $this->kekata($x/1000000000000) . " Trilyun" . $this->kekata(fmod($x,1000000000000));
	    }     
	        return $temp;
	}
 
	private function terbilang($x, $style=4) {
	    if($x<0) {
	        $hasil = "minus ". trim($this->kekata($x));
	    } else {
	        $hasil = trim($this->kekata($x));
	    }     
	    switch ($style) {
	        case 1:
	            $hasil = strtoupper($hasil);
	            break;
	        case 2:
	            $hasil = strtolower($hasil);
	            break;
	        case 3:
	            $hasil = ucwords($hasil);
	            break;
	        default:
	            $hasil = ucfirst($hasil);
	            break;
	    }     
	    return $hasil;
	}
}
