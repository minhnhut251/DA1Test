<?php

namespace App\Http\Controllers;

use App\Models\sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    public function index(){
        $dssinhvien = sinhvien::all();
        return view('sinhvien.index', ['dssinhvien' => $dssinhvien]);
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
            $data['gioitinh']=false;
        }
        else {$data['gioitinh']=true;}
        $newSinhvien = sinhvien::create($data);

        return redirect(route('sinhvien.index'));
    }

    public function timkiem(Request $request){
        $search = $request->input('mssv');
        $results = sinhvien::where('mssv', "$search")->get();

        error_log(print_r($search, TRUE)); 
        error_log(print_r($results, TRUE)); 

        // sinhvien::query();
        // $sinhvien = DB::table('sinhviens')->where('mssv', $request['mssv']);
        // return view('sinhvien.timkiem', ['sinhvien' => $sinhvien]);

        return view('sinhvien.timkiem', ['results' => $results]);
    }
}
