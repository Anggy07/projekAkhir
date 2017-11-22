<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 11/22/2017
 * Time: 12:10 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Detail_Proyek;
class ProyekController extends Controller
{
    public function index(){
        $proyek = Detail_Proyek::all();
        return view('Proyek',[
            'proyek' => $proyek
        ]);
    }
}