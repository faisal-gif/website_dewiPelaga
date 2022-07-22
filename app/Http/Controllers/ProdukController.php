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
        $auth=auth()->user()->id;
        $produk=produk::where('idUser',$auth)->get();
        return view('showProduk', compact('produk'));
    }
    public function prosesInput(Request $request)
    {
        $file = $request->file('fotoBarang');

        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->move('fotoBarang', $filename);

        $content = $request->keteranganBarang;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');
  
        foreach ($imageFile as $item => $image) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "/upload/" . time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
  
        $content = $dom->saveHTML();
        $add=new produk([
            'idUser' =>$request->input('idUser'),
            'namaBarang' => $request->input('namaBarang'),
            'jenisBarang' => $request->input('jenisBarang'),
            'keteranganBarang' => $content,
            'hargaBarang' =>  $request->input('harga'),
            'informasiLainnya' =>  $request->input('informasiLainnya'),
            'foto' => $path
          

        ]);
        $add->save();
        return redirect('/showProduk');
    }
    public function prosesUpdate(Request $request)
    {
        $update=produk::where('id', $request->input('id'))->first();
        $content = $request->keteranganBarang;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');
  
        foreach ($imageFile as $item => $image) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "/upload/" . time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
  
        $content = $dom->saveHTML();
        $update->namaBarang = $request->input('namaBarang');
        $update->jenisBarang = $request->input('jenisBarang');
        $update->keteranganBarang = $content;
        $update->hargaBarang = $request->input('hargaBarang');
        $update->informasiLainnya = $request->input('informasiLainnya');
        $update->save();
        return redirect('/showProduk');
    }
    public function prosesDelete($id)
    {
        $update=produk::where('id', $id)->delete();
        return redirect('/showProduk');
    }
}
