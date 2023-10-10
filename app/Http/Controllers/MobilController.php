<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    //
    public function index()
    {
        $data = Mobil::all();
        // dd($data);
        return view('datamobil', compact('data'));
    }


    public function tambahmobil()
    {
        return view('tambahdata');
    }
    public function insertdata(Request $request)
    {
        // dd($request->all());
        Mobil::create($request->all());
        return redirect()->route('mobil')->with('success', 'Data Berhasil Ditambahkan!');
    }
    public function tampilkandata($id_mobil)
    {
        $data = Mobil::where('id_mobil', $id_mobil)->first();

        // $data = Mobil::find($id_mobil);
        // dd($data);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id_mobil)
    {
        // $data = Mobil::find($id_mobil); //cari id nya
        $data = Mobil::where('id_mobil', $id_mobil)->first();

        $data->update($request->all()); //semua request data
        return redirect()->route('mobil')->with('success', 'Data Berhasil Di Update!');
    }

    public function delete($id_mobil)
    {
        $data = Mobil::where('id_mobil', $id_mobil)->first();
        // dd($data);
        // $data = Mobil::find($id_mobil); //cari id nya
        $data->delete(); //semua request data
        return redirect()->route('mobil')->with('success', 'Data Berhasil Dihapus!');
    }
}
