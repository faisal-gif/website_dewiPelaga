<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use Yajra\DataTables\DataTables;

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
    public function produk()
    {
        return view('produk.show');
    }
    public function index()
    {
        $auth = auth()->user()->id;
        $produk = produk::where('idUser', $auth)->select(['id', 'namaBarang', 'jenisBarang', 'keteranganBarang', 'hargaBarang', 'foto', 'informasiLainnya', 'created_at']);
        return DataTables::of($produk)
            ->addIndexColumn()
            ->addColumn('tanggal_post', function ($row) {
                return $row->created_at->format('d,M Y'); // Ubah format sesuai keinginan
            })
            ->addColumn('action', function ($row) {
                $edit = '<a href="javascript:void(0)" id="edit_produk" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn text-white btn-info btn-sm mt-1 editProduk"><i class="far fa-edit"></i> Edit</a>';
                $delete = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Delete" class="delete btn text-white btn-danger btn-sm mt-1 deleteBook"><i class="fas fa-trash"></i> Delete</a>';

                return $edit . ' ' . $delete;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jenis' => 'required|',
            'harga' => 'required|',
            'keterangan' => 'string|max:255',
        ];

        $request->validate($rules);

        $image = $request->file('foto');
        $result = " ";
        if ($image != null) {
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        }

        $produk = produk::create([
            'idUser' => $request->idUser,
            'namaBarang' => $request->nama,
            'jenisBarang' => $request->jenis,
            'keteranganBarang' => $request->keterangan,
            'hargaBarang' =>  $request->harga,
            'informasiLainnya' =>  $request->lainnya,
            'foto' =>  $result
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $produk
        ]);
    }
    public function edit($id)
    {
        $produk = produk::find($id);
        return response()->json($produk);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $produk = produk::findOrFail($id);
        $image = $request->file('fotoBarang');
        $result = " ";
        if (isset($image)) {
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
            $produk->foto = $result;
        }

        $produk->namaBarang = $request->nama;
        $produk->jenisBarang = $request->jenis;
        $produk->keteranganBarang = $request->keterangan;
        $produk->hargaBarang = $request->harga;
        $produk->informasiLainnya = $request->lainnya;
        $produk->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diubah',
        ]);
    }
    public function destroy($id)
    {
        $produk = produk::where('id', $id)->delete();
        return redirect('/showProduk');
    }
}
