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
              <form class="form-horizontal" action="/insertInformasi" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
                @csrf
                <div class="card-body">
                <div class="form-group row">
                        <label>Nama Informasi</label>
                        <input type="text" class="form-control" name="namaInformasi" id="">
                </div>
                <div class="form-group row">
                        <label>Jenis Informasi</label>
                        <select class="form-control select2" name="jenisInformasi">
                    <option selected="selected">Pilih</option>
                   
                  <option value=""> </option>
                   
                  </select>
                      </select>
                        </div>
                <div class="form-group row">
                        <label>Isi Informasi</label>
                        <textarea name="isiInformasi" class="form-control">Enter text here...</textarea>
                </div>

               
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
         
@endsection
