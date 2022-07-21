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
              <form class="form-horizontal" action="/insertPosting" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
                @csrf
                <div class="card-body">
                <div class="form-group row">
                        <label>Foto Posting</label>
                        <input type="file" class="form-control" name="fotoPosting" id="">
                </div>
                <div class="form-group row">
                        <label>Nama Posting</label>
                        <input type="text" class="form-control" name="namaPosting" id="">
                </div>
                <div class="form-group row">
                        <label>Jenis Posting</label>
                        <select class="form-control select2" name="jenisPosting">
                    <option selected="selected">Pilih</option>
                   
                  <option value=""> </option>
                   
                  </select>
                      </select>
                        </div>
                <div class="form-group row">
                        <label>Isi Posting</label>
                        <textarea name="isiPosting" class="form-control"></textarea>
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
