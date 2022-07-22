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
                        <input type="file" class="form-control" name="fotoPosting" id="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Posting</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="namaPosting" id="">
                        </div>
                </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Isi</label>
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
