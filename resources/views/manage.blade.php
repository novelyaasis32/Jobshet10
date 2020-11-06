<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\staff;

class articlecontroller extends Controller
{
    public function article(){
        $staffs = staff::all();
        return view('article');
    }
    public function addArticle(){
        return view('addArticle');
    }
    
    public function createArticle(Request $request){
        $siswa = Siswa::find($id);
        $siswa->No=$request->id;
        $siswa->Nama=$request->nama;
        $siswa->TTL=$request->TTL;
        $siswa->Alamat=$request->Alamat
            $add->save();
        return redirect('/manage');
    }

    public function editArticle($id){
        $staff = Staff::find($id);
        return view('editArticle', ['staff'=>$staff]);
    }

    public function updateArticle($id, Request $request){
        $siswa = Siswa::find($id);
        $siswa->No=$request->id;
        $siswa->Nama=$request->nama;
        $siswa->TTL=$request->TTL;
        $siswa->Alamat=$request->Alamat;
        $siswa->save();
        return redirect('/manage');
    }

    public function deleteArticle ($id){
        $staff = Staff::find($id);
        $staff->deleteArticle();
        return redirect('/manage');
    }
}