<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posting;
use Auth;

class PostingController extends Controller
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
    public function formPosting()
    {
        return view('inputPosting');
    }
    public function showPosting()
    {
        $auth=auth()->user()->id;
        $posting=posting::where('idUser', $auth)->get();
        return view('showPosting', compact('posting'));
    }
    public function filterPosting()
    {
        $posting=posting::all();
        return view('filterPosting', compact('posting'));
    }
    public function prosesInput(Request $request)
    {
        $rules = [
            'namaPosting' => 'required|',
            'fotoPosting' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'isiPosting' => 'string|max:255',
        ];
        $messages = [
            'namaPosting.required' => 'Nama wajib diisi',
            'isiPosting' => 'Isi wajib diisi',
            'fotoPosting.image' => 'Foto harus gambar',
            'fotoPosting.mimes' => 'Foto harus bertipe: jpeg,png,jpg,gif,svg',
            'fotoPosting.max' => 'Foto maksimal 2mb',
        ];
        $request->validate($rules, $messages);

        $image = $request->file('fotoPosting');
        $result = " ";
        if ($image != null) {
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        }
        $content = $request->isiPosting;
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
        $add=new posting([
            'idUser' =>$request->input('idUser'),
            'namaPosting' => $request->input('namaPosting'),
            'isiPosting' => $content,
            'status' => 'Tunggu',
            'fotoPosting' => $result
          

        ]);
        $add->save();
        return redirect('/showPosting');
    }
    public function prosesUpdate(Request $request)
    {
        
        $update=posting::where('id', $request->input('id'))->first();
        $image = $request->file('fotoPosting');
        $result = " ";
        if ($image != null) {
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
            $update->fotoPosting =  $result;
        }
        
        $content = $request->isiPosting;
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
        $update->namaPosting = $request->input('namaPosting');
        $update->isiPosting =  $content;
        $update->save();
        return redirect('/showPosting');
    }
    public function prosesDelete($id)
    {
        $update=posting::where('id', $id)->delete();
        return redirect('/showPosting');
    }
    public function prosesPersetujuan(Request $request)
    {
        $id=$request->input('id');
        $update=posting::where('id', $id)->first();
        $update->status=$request->input('status');
        $update->save();
        return redirect()->back();
    }
}
