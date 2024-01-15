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
    public function index()
    {
        $auth = auth()->user()->id;
        $posting = posting::where('idUser', $auth)->paginate(10);
        return view('showPosting', compact('posting'));
    }
    public function filterPosting()
    {
        $posting = posting::all();
        return view('filterPosting', compact('posting'));
    }
    public function store(Request $request)
    {
        $rules = [
            'namaPosting' => 'required|',
            'fotoPosting' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'isiPosting' => 'string|max:255',
        ];

        $request->validate($rules);

        $image = $request->file('fotoPosting');
        $result = " ";
        if ($image != null) {
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        }

        posting::create([
            'idUser' => $request->idUser,
            'namaPosting' => $request->namaPosting,
            'isiPosting' => $request->isiPosting,
            'status' => 'Tunggu',
            'fotoPosting' => $result


        ]);

        return redirect('/showPosting');
    }
    public function update(Request $request)
    {

        $posting = posting::where('id', $request->input('id'))->first();
        $image = $request->file('fotoPosting');
        $result = " ";
        if ($image != null) {
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
            $posting->fotoPosting =  $result;
        }


        $posting->namaPosting = $request->namaPosting;
        $posting->isiPosting =  $request->isiPosting;
        $posting->save();
        return redirect('/showPosting');
    }
    public function destroy($id)
    {
        $posting = posting::where('id', $id)->delete();
        return redirect('/showPosting');
    }
    public function agreement(Request $request)
    {
        $id = $request->input('id');
        $update = posting::where('id', $id)->first();
        $update->status = $request->status;
        $update->save();
        return redirect()->back();
    }
}
