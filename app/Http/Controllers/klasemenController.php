<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class klasemenController extends Controller
{
    public function index()
    {
        $data = DB::table('klub')->get();
        return view('index', compact(['data']));
    }

    public function tambah(Request $request)
    {
        $request->validate([
        'klub'=>'required|unique:klub,klub,except,id',
        'kota'=>'required|unique:klub,klub,except,id',
    ]);

    $data = [
        'klub' => $request->klub,
        'kota' => $request->kota,
    ];
    DB::table('klub')->insert($data);
        return redirect()->route('index');
        
     }

     public function skor()
     {
        $data = DB::table('klub')->get();
        $klub = DB::select('SELECT klub.klub, klub.id as kl, klub.id, skor.skor FROM skor, klub WHERE klub.id=skor.id_klub;');
        return view('skor',compact(['klub', 'data']));
     }

     public function tambahskor(Request $request)

     {
        // if (skor) {
        // # code...
        // }
          $data = [
          'id_klub' => $request->klub,
          'skor' => $request->skor,
          ];

    DB::table('skor')->insert($data);
    return redirect()->route('skor');
     }

     public function klasemen()
     {
        $data = DB::table('klub')->get();
        return view('klasemen', compact(['data']));
     }
}