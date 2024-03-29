<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mobil, Merk, TipeMobil};

class MobilController extends Controller
{
    protected $arrayMobil = [];

    function index() 
    {
        // $dataMobil = session()->get('dataMobil');
        // return view('mobil.index', compact('dataMobil'));

        $mobilData = Mobil::all();
        return view('pages.mobil.index', ['mobilData'=>$mobilData]);
    }

    function create() 
    {
        $merkData = Merk::get();
        $tipeMobilData = TipeMobil::get();
        return view('pages.mobil.create', compact('merkData', 'tipeMobilData'));



        // return view('mobil/form');
    }

    function store(Request $request) 
    {
    //    $namaMobil = $request->nama_mobil;
    //    $merkMobil = $request->merk_mobil;
    //    $cc = $request->cc;

    //    $dataBaru = [
    //     'namaMobil' =>$namaMobil,
    //     'merkMobil' => $merkMobil,
    //     'cc' =>$cc
    //    ];

    //    array_push($this->arrayMobil, $dataBaru);

    //    return redirect()->to('/mobil')->with('dataMobil', $this->arrayMobil);

    $mobilData = $request->validate([
        // memastikan tidak ada data yang kosong
        'nama_mobil' => 'required',
        'merk_id'=>'required',
        'cc'=>'required',
        'tahun_mobil'=>'required',
        'nomor_polisi'=>'required',
        'warna'=>'required',
        'foto'=>'required',
        'tipe_mobil_id'=>'required',
    ]);

    Mobil::create($mobilData);

    return redirect()->to('/mobil')->with('success', 'Data mobil berhasil disimpan');
    }

    function edit($id){
        $mobilData = Mobil::find($id);
        $merkData = Merk::get();
        $tipeMobilData = TipeMobil::get();
        return view('pages.mobil.edit',['mobilData'=> $mobilData]);
    }

    function update($id, Request $request) {
        $mobilData = Mobil::find($id);
        $mobilData->update($request->all());
        $mobilData->save();
    
        return redirect()->to('/mobil')->with('success', 'data berhasil diupdate');
    }

    function delete($id, Request $request){
        $mobilData = Mobil::find($id);
        $mobilData->delete();

        return redirect()->to('/mobil')->with('success', 'data berhasil dihapus');

    }
}
