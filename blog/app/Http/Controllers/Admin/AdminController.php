<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        $data = DB::table('phongchothues')->select('thanhpho', 'quan','diachi','giaca','anh1')->limit(15)->get();
        return view("admin.homeadmin",['data'=>$data]);
    }
}
