<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("home", compact("mahasiswa"));
    }

    public function create(){
        return view("create");
    }

    public function store(MahasiswaRequest $request)
    {
        if($this->sameNrp($request)){
            return redirect()->back()->with([
                "status" => "error",
                "pesan" => "Data Gagal di Tambahkan"
            ]);
        }
        Mahasiswa::create($request->all());
        return redirect("/")->with([
            "status" => "success",
            "pesan" => "Data Berhasil di Tambahkan"
        ]);
    }

    public function edit($nrp)
    {
        $mahasiswa = Mahasiswa::where("nrp",$nrp)->first();
        return view("edit", compact("mahasiswa"));
    }

    public function update(Request $request)
    {
        if($this->sameNrp($request)){
            return redirect()->back()->with([
                "status" => "error",
                "pesan" => "Data Gagal di Update"
            ]);
        }
        
        Mahasiswa::where("nrp", $request->old_nrp)->update([
            "nrp" => $request->nrp,
            "nama" => $request->nama,
            "email" => $request->email,
            "alamat" => $request->alamat,
            "ipk" => $request->ipk,
            "status" => $request->status
        ]);

        return redirect("/")->with([
            "status" => "success",
            "pesan" => "Data Berhasil di Update"
        ]);
        
    }
    
    public function delete($nrp)
    {
        Mahasiswa::where("nrp", $nrp)->delete();
        return redirect("/")->with([
            "status" => "success",
            "pesan" => "Data Berhasil di Hapus"
        ]);
    }

    private function sameNrp($data){
        // update
        if(isset($data->old_nrp)){
            if($data->old_nrp == $data->nrp){
                return false;
            }
            
            if(is_null(Mahasiswa::where("nrp", $data->nrp)->first())){
                return false;
            }
            echo "test2";
            return true;
        }
        // insert
        if(is_null(Mahasiswa::where("nrp", $data->nrp)->first())){
            return false;
        }
        return true;
    }
}
