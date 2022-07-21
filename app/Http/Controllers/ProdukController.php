<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;

class ProdukController extends Controller
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
    public function formProduk()
    {
        return view('inputProduk');
    }
    public function showProduk()
    {
        $produk=produk::all();
        return view('showProduk',compact('produk'));
    }
    public function prosesInput(Request $request)
    {
        $file = $request->file('fotoBarang');

        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->move('fotoBarang',$filename);
        $add=new produk([
            'idUser' =>$request->input('idUser'),
            'namaBarang' => $request->input('namaBarang'),
            'jenisBarang' => $request->input('jenisBarang'),
            'keteranganBarang' => $request->input('keteranganBarang'),
            'stok' => $request->input('stok'),
            'hargaBarang' =>  $request->input('harga'),
            'foto' => $path
          

        ]);
        $add->save();
        return redirect('/showProduk');
    }
    public function prosesUpdate(Request $request)
    {
        $update=produk::where('id',$request->input('id'))->first();
        $update->namaBarang = $request->input('namaBarang');
        $update->jenisBarang = $request->input('jenisBarang');
        $update->keteranganBarang = $request->input('keteranganBarang');
        $update->stok = $request->input('stok');
        $update->save();
        return redirect('/showProduk');
    }
    public function prosesDelete($id)
    {
        $update=produk::where('id',$id)->delete();
        return redirect('/showProduk');
    }

}
