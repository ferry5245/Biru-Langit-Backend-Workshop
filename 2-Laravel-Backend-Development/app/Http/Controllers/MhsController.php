<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index(){
        return mhs::all();
    }
    
    public function getDetail($id){
        return mhs::find($id);
    }

    public function createData(Request $request){
        $data = mhs::create([
            "nama"=> $request->input('nama'),
            "kelas"=> $request->input('kelas'),
        ]);
        if($data){
            return ["message" => "Penyimpanan Berhasil!!!"];
        }
        else {
            return ["message" => "Penyimpanan Gagal!!!"];
        }
    }

    public function deleteData($id){
        $data = mhs::where('id',$id)->delete();
        if($data){
            return ["message" => "Penghapusan Berhasil!!!"];
        }
        else{
            return ["message" => "Gagal!!!"];
        }
    }

    public function updateData(Request $request,$id){
        $data = mhs::where('id',$id)->update([
            "nama"=> $request->input('nama'),
            "kelas"=> $request->input('kelas'),
        ]);
        if($data){
            return ["message" => "Penyimpanan Berhasil!!!"];
        }
        else {
            return ["message" => "Penyimpanan Gagal!!!"];
        }
    }
}
