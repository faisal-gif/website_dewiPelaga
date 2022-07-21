<?php

namespace App\Http\Controllers;
use App\User;
use App\produk;
use App\posting;
use App\informasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome','listProduk','listPosting','listInformasi','detailProduk');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function detailPosting($id)
    {
        $posting=posting::where('id',$id)->get();
        return view('detailPosting',compact('posting'));
    }
     public function detailProduk($id)
    {
        $produk=produk::where('id',$id)->get();
        return view('detailProduk',compact('produk'));
    }
    public function listProduk()
    {
        $produk=produk::all();
        return view('listProduk',compact('produk'));
    }
    public function listPosting()
    {
        $posting=posting::all();
        return view('listPosting',compact('posting'));
    }
    public function listInformasi()
    {
        $informasi=informasi::all();
        return view('listInformasi',compact('informasi'));
    }
    public function welcome()
    {
        $user=User::all();
        $produk=produk::all();
        $posting=posting::all();
        $informasi=informasi::all();
        return view('welcome',compact('user','produk','posting','informasi'));
    }
}
