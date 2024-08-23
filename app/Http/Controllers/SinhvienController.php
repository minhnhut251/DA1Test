<?php

namespace App\Http\Controllers;

use App\Models\sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    public function index(){
        return view('sinhvien.index');
    }

    public function them(){
        return view('sinhvien.them');
    }

    public function luu(Request $request){
        $data = $request->validate([
            'mssv'=>'required',
            'hoten'=>'required',
            'sdt'=>'required|numeric',
            'ngaysinh'=>'required',
            'gioitinh'=>'required'
        ]);
        if ($data['gioitinh']=='Nam'){
            $data['gioitinh']=true;
        }
        $newSinhvien = sinhvien::create($data);

        return redirect(route('sinhvien.index'));
    }
}
