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
              <form class="form-horizontal" action="/insertPosting" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
                @csrf
                <div class="card-body">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto Posting</label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control @error('fotoPosting') is-invalid @enderror" name="fotoPosting" id="">
                        @error('fotoPosting')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        <span class="text-secondary">Minimal Ukuran File 2MB</span>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Posting <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control @error('namaPosting') is-invalid @enderror" name="namaPosting" id="">
                          @error('namaPosting')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Isi <span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                          <textarea class="form-control" id="summernote" name="isiPosting"></textarea>
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
