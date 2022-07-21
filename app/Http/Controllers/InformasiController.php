<?php

namespace App\Http\Controllers;
use App\informasi;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function formInformasi()
    {
        return view('inputInformasi');
    }
    public function showInformasi()
    {
        $informasi=informasi::all();
        return view('showInformasi',compact('informasi'));
    }
    public function prosesInput(Request $request)
    {
        $add=new informasi([
            'idUser' =>$request->input('idUser'),
            'namaInformasi' => $request->input('namaInformasi'),
            'jenisInformasi' => $request->input('jenisInformasi'),
            'isiInformasi' => $request->input('isiInformasi')
          

        ]);
        $add->save();
        return redirect('/showInformasi');
    }

    public function prosesUpdate(Request $request)
    {
        $update=informasi::where('id',$request->input('id'))->first();
        $update->namaInformasi = $request->input('namaInformasi');
        $update->jenisInformasi = $request->input('jenisInformasi');
        $update->isiInformasi = $request->input('isiInformasi');
        $update->save();
        return redirect('/showInformasi');
    }
    public function prosesDelete($id)
    {
        $update=informasi::where('id',$id)->delete();
        return redirect('/showInformasi');
    }


}
