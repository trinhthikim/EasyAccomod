<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DuyettaikhoanController extends Controller
{
    public function duyettaikhoanform($id)
    {
        $data = DB::table('phongchothues')->select('thanhpho', 'quan','diachi','giaca','anh1')->limit(15)->get();
        return view("admin.duyettaikhoan");
    }

    public function pheduyet(Request $request,$id)
    {
        $thongtin = User::find($id);
        if($request->duyetbai == "Duyệt bài")$thongtin->duyettaikhoan = "Đã được duyệt";
        else $thongtin->duyettaikhoan = "Hủy tài khoản";
        $thongtin->save();
        return redirect('admin/quanlytaikhoan');
    }
}
