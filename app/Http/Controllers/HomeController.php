<?php

namespace App\Http\Controllers;
use App\User;
use App\produk;
use App\posting;
use App\informasi;
use Illuminate\Support\Facades\Gate;
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
        $this->middleware(function ($request, $next) {
            if (Gate::allows('admin')||Gate::allows('toko')) {
                return $next($request);
            }
            abort(403, 'Anda tidak memiliki cukup hak akses');
        })->except('welcome','listProduk','listPosting','listInformasi','detailProduk','detailPosting');
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
    public function listProduk($idUser)
    {
        $produk=produk::where('idUser',$idUser)->get();
        $posting=posting::where('idUser',$idUser)->get();
        $informasi=informasi::where('idUser',$idUser)->get();
        return view('listProduk',compact('produk','informasi','posting'));
       
    }
    public function listPosting($idUser)
    {
        $posting=posting::where('idUser',$idUser)->where('status','setuju')->get();
        return view('listPosting',compact('posting','informasi'));
    }
    public function listInformasi($jenis)
    {
        $informasi=informasi::where('jenisInformasi',$jenis)->get();
        return view('listInformasi',compact('informasi','jenis'));
    }
    public function welcome()
    {
        $produk=produk::all();
        $posting=posting::where('status','setuju')->get();
        $informasi=informasi::all();
        return view('welcome',compact('produk','posting','informasi'));
    }
}
