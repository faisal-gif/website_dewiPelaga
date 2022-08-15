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
              <form class="form-horizontal" action="/insertInformasi" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
              <input type="hidden" name="id" value="{{ optional($i)->id }}" > 
                @csrf
                <div class="card-body">
                
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Informasi <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('namaInformasi') is-invalid @enderror" name="namaInformasi" id="" value="{{optional($i)->namaInformasi}}">
                        @error('namaInformasi')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kategori Toko <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                    <select class="form-control select2 @error('jenisInformasi') is-invalid @enderror" name="jenisInformasi">
                    <option {{ optional($i)->jenisInformasi == "UMKM" ? 'selected' : '' }} >UMKM</option>
                    <option  {{ optional($i)->jenisInformasi == "Olahraga" ? 'selected' : '' }}> Olahraga </option>
                    <option  {{ optional($i)->jenisInformasi == "Pendidikan" ? 'selected' : '' }}> Pendidikan </option>
                    <option  {{ optional($i)->jenisInformasi == "Pariwisata" ? 'selected' : '' }}> Pariwisata </option>
                 
                   
                  </select>
                  @error('jenisInformasi')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                  </div>
                        </div>
                        <div class="form-group row">
                <label class="col-sm-2 col-form-label">Isi <span class="text-danger">*</span> </label>
                          <div class="col-sm-9">
                          <textarea class="form-control @error('isiInformasi') is-invalid @enderror" name="isiInformasi">{{optional($i)->isiInformasi}}</textarea>
                          @error('isiInformasi')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror  
                        </div>                
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Toko Online</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="tokoOnline" id="" value="{{optional($i)->tokoOnline}}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Social Media </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="socialMedia" id="" value="{{optional($i)->socialMedia}}">
                        </div>
                </div>
               
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lainnya</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="lainnya" id="" value="{{optional($i)->lainnya}}">
                        </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
         
@endsection
