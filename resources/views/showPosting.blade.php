@extends('layouts.lay')

@section('content')
<div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Show Posting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal Post</th>
                    <th>Nama Posting</th>
                    <th>Detail</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($posting as $p)
                  <tr>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->namaPosting}}</td>
                    <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-details{{$p->id}}">Details</button></td>
                    <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$p->id}}">Edit</button> | 
                    <a href="/deletePosting/{{$p->id}}" class="btn btn-primary">Delete</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            
            @foreach($posting as $p)
            <!-- /.modal -->
            <div class="modal fade" id="modal-details{{$p->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Posting</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="{{ asset($p->fotoPosting) }}" width="340" height="340">
              <p>Nama Posting : {{$p->namaPosting}}</p>
              <p>Jenis Posting : {{$p->jenisPosting}}</p>
              <p>Isi Posting : {{$p->isiPosting}}</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- /.modal -->
      <form class="form-horizontal" action="/insertPosting" method="POST" enctype="multipart/form-data">
      <div class="modal fade" id="modal-edit{{$p->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Posting</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
              <input type="hidden" name="id" value="{{ $p->id }}" > 
                @csrf
                <div class="card-body">
                <div class="form-group row">
                        <label>Foto Posting</label>
                        <input type="file" class="form-control" name="fotoPosting" id="" value="">
                </div>
                <div class="form-group row">
                        <label>Nama Posting</label>
                        <input type="text" class="form-control" name="namaPosting" id="" value="{{ $p->namaPosting }}">
                </div>
                <div class="form-group row">
                        <label>Jenis Posting</label>
                        <select class="form-control select2" name="jenisPosting">
                        <option value="pilih" {{ $p->jenisPosting == "Pilih" ? 'selected' : '' }}>Pilih</option>
                   
                  </select>
                      </select>
                        </div>
                <div class="form-group row">
                        <label>Isi Posting</label>
                        <textarea name="isiPosting" class="form-control">{{ $p->isiPosting }}</textarea>
                </div>
                </div>
                <!-- /.card-body -->

               
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </form>

      <!-- /.modal -->
      @endforeach
@endsection
