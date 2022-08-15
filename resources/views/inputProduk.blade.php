@extends('layouts.lay')

@section('content')
<div class="col-md-12">
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
                        <label class="col-sm-2 col-form-label">Foto Produk / Fasilitas</label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name="fotoBarang" id="" >
                        @error('fotoBarang')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        <span class="text-secondary">Minimal Ukuran File 2MB</span>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Produk / Fasilitas <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" name="namaBarang" id="">
                        @error('namaBarang')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Produk / Fasilitas <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('jenisBarang') is-invalid @enderror" name="jenisBarang" id="" placeholder="Makanan, Minuman, Barang, dll">
                        @error('jenisBarang')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan Produk / Fasilitas <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                        <textarea name="keteranganBarang" id="summernote" class="form-control"></textarea>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="">
                        @error('harga')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Informasi Tambahan</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="informasiLainnya" id="" placeholder="Link Barang, Link toko, dll">
                        </div>
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
