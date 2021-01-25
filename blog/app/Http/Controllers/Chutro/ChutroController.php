<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phongchothue;

class ChutroController extends Controller
{
    public function home()
    {
        
        
        // $data = DB::table('phongchothues')->select('thanhpho', 'quan','diachi','giaca','anh1')->get();
        $data = Phongchothue::paginate(1);
        
        return view("chutro.homechutro",['data'=>$data]);
    }
}
