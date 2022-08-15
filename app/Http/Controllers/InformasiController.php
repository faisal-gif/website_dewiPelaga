<?php

namespace App\Http\Controllers;

use App\informasi;
use Auth;
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
        $auth=auth()->user()->id;
       
        $i=informasi::where('idUser',$auth)->first(); 
        return view('inputInformasi',compact('i'));
    }
    public function showInformasi()
    {
        $informasi=informasi::all();
        return view('showInformasi', compact('informasi'));
    }
    public function prosesInput(Request $request)
    {
        $rules = [
            'namaInformasi' => 'required|',
            'jenisInformasi' => 'required|',
            'isiInformasi' => 'required|string|max:255',
        ];
        $messages = [
            'namaInformasi.required' => 'Nama wajib diisi',
            'isiInformasi.required' => 'Isi wajib diisi',
            'jenisInformasi.required' => 'Jenis wajib diisi',
        ];
        $request->validate($rules, $messages);

        $update=informasi::where('id', $request->input('id'))->first();
      
        if($update == null){
           
            $add=new informasi([
                'idUser' =>$request->input('idUser'),
                'namaInformasi' => $request->input('namaInformasi'),
                'jenisInformasi' => $request->input('jenisInformasi'),
                'isiInformasi' => $request->input('isiInformasi'),
                'tokoOnline' => $request->input('tokoOnline'),
                'socialMedia' => $request->input('socialMedia'),
                'lainnya' => $request->input('lainnya'),
            ]);
            $add->save();
            return redirect()->back();
        }
        else{
            $update->namaInformasi = $request->input('namaInformasi');
            $update->jenisInformasi = $request->input('jenisInformasi');
            $update->isiInformasi = $request->input('isiInformasi');
            $update->tokoOnline = $request->input('tokoOnline');
            $update->socialMedia = $request->input('socialMedia');
            $update->lainnya = $request->input('lainnya');
            $update->save();
            return redirect()->back();
        }
       
    }

    public function prosesUpdate(Request $request)
    {
        $update=informasi::where('id', $request->input('id'))->first();
        $content = $request->isiInformasi;
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
        $update->namaInformasi = $request->input('namaInformasi');
        $update->jenisInformasi = $request->input('jenisInformasi');
        $update->isiInformasi = $content;
        $update->tokoOnline = $request->input('tokoOnline');
        $update->socialMedia = $request->input('socialMedia');
        $update->lainnya = $request->input('lainnya');
        $update->save();
        return redirect('/showInformasi');
    }
    public function prosesDelete($id)
    {
        $update=informasi::where('id', $id)->delete();
        return redirect('/showInformasi');
    }
}
