<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posting;

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
        $posting=posting::all();
        return view('showPosting',compact('posting'));
    }
    public function prosesInput(Request $request)
    {
        $file = $request->file('fotoPosting');

        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->move('fotoPosting',$filename);
        $add=new posting([
            'idUser' =>$request->input('idUser'),
            'namaPosting' => $request->input('namaPosting'),
            'jenisPosting' => $request->input('jenisPosting'),
            'isiPosting' => $request->input('isiPosting'),
            'fotoPosting' => $path
          

        ]);
        $add->save();
        return redirect('/showPosting');
    }
    public function prosesUpdate(Request $request)
    {
        $update=posting::where('id',$request->input('id'))->first();
        $update->namaPosting = $request->input('namaPosting');
        $update->jenisPosting = $request->input('jenisPosting');
        $update->isiPosting = $request->input('isiPosting');
        $update->save();
        return redirect('/showPosting');
    }
    public function prosesDelete($id)
    {
        $update=posting::where('id',$id)->delete();
        return redirect('/showPosting');
    }
}

