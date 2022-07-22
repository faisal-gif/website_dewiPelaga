@extends('layouts.lay')

@section('content')
<div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Show Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal Post</th>
                    <th>Nama Produk</th>
                    <th>Details</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($produk as $pr)
                  <tr>
                    <td>{{$pr->created_at}}</td>
                    <td>{{$pr->namaBarang}}</td>
                    <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-details{{$pr->id}}">Details</button></td>
                    <td><button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#modal-edit{{$pr->id}}">Edit</button> | 
                    <a href="/deleteBarang/{{$pr->id}}" class="btn btn-primary">Delete</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
             
             @foreach($produk as $pr)
             <!-- /.modal -->
             <div class="modal fade" id="modal-details{{$pr->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Details Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <img src="{{ asset($pr->foto) }}" width="340" height="340">
              <p>Nama Barang : {{$pr->namaBarang}}</p>
              <p>Jenis Barang : {{$pr->jenisBarang}}</p>
              <p>Keterangan Barang : {!! $pr->keteranganBarang !!}</p>
              <p>Harga : {{$pr->hargaBarang}}</p>
              <p>Informasi Tambahan: {{$pr->informasiLainnya}}</p>
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
        <form class="form-horizontal" action="/updateBarang" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="modal-edit{{$pr->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">edit Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" > 
              <input type="hidden" name="id" value="{{ $pr->id }}" > 
                @csrf
                <div class="card-body">

                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto Produk</label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name="fotoBarang" id="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="namaBarang" id="" value="{{ $pr->namaBarang}}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="jenisBarang" id="" value="{{ $pr->jenisBarang}}">
                        </div>
                        </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan Produk</label>
                        <div class="col-sm-9">
                        <textarea name="keteranganBarang" id="summernote{{$pr->id}}" class="form-control">{{$pr->keteranganBarang}}</textarea>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="hargaBarang" id="" value="{{ $pr->hargaBarang}}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Informasi Tambahan</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="informasiLainnya" id="" value="{{ $pr->informasiLainnya}}">
                        </div>
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

@section('script')
      @foreach($produk as $p)
      <script>
  $('#summernote{{$p->id}}').summernote({
        height: 300
    });
</script>
@endforeach
@endsection
