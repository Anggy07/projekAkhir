<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 11/22/2017
 * Time: 12:10 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use Carbon\Carbon;
use App\Models\Detail_Proyek;
class ProyekController extends Controller
{
    public function index(){

        $proyek = Detail_Proyek::whereNull('deleted_at')->get();
        return view('Proyek',[
            'proyek' => $proyek
        ]);
    }

    public function detail($id) {
        $rumah = Detail_Proyek::find($id);
        if(isset($rumah->id)) {
            return View('DetailProyek', [
                'rumah' => $rumah,
            ]);

        } else {
            return view( 'errors.404', [
                'record_id' => $id,
                'record_name' => ucfirst("detailproyek"),
            ]);
        }
    }

    public function pesan(Request $request) {
        $tanggalPesan = Carbon::now()->toDateString();
            $tanggalProyek = $request->TanggalProyek;
                $Namaproyek = $request->NamaProyek;
        $alamatProyek = $request->AlamatProyek;
            $namaClient = Client::where('nama','=',Auth::user()->name)->first()->id;
                $detailProyek = $request->proyek;
                    $statusPengajuan = 'Diajukan';
                        $statusProyek = 'Dikerjakan';
        Pemesanan::create([
            'TanggalPesan'=>$tanggalPesan,
            'tanggalProyek'=>$tanggalProyek,
            'client'=>$namaClient,
            'namaProyek'=>$Namaproyek,
        'alamatProyek'=>$alamatProyek,
        'detailProyek'=>$detailProyek,
            'status'=>$statusPengajuan,
            'statusProyek'=>$statusProyek
        ]);
        return view('homepage');
    }



}
