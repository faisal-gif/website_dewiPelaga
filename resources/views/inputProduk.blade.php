@extends('layouts.lay')

@section('content')
<div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/insertBarang" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
                @csrf
                <div class="card-body">
                <div class="form-group row">
                        <label>Foto Produk</label>
                        <input type="file" class="form-control" name="fotoBarang" id="">
                </div>
                <div class="form-group row">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="namaBarang" id="">
                </div>
                <div class="form-group row">
                        <label>Jenis Produk</label>
                        <select class="form-control select2" name="jenisBarang">
                    <option selected="selected">Pilih</option>
                   
                  <option> Sandang </option>
                  <option> Papan </option>
                  <option> Pangan </option>
                   
                  </select>
                      </select>
                        </div>
                <div class="form-group row">
                        <label>Keterangan Produk</label>
                        <textarea name="keteranganBarang" class="form-control"></textarea>
                </div>
                <div class="form-group row">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok" id="">
                </div>
                <div class="form-group row">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga" id="">
                </div>
               
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            </div>
         
@endsection
