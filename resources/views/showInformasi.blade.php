@extends('layouts.lay')

@section('content')
<div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Show Informasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal Post</th>
                    <th>Nama Informasi</th>
                    <th>Toko Online</th>
                    <th>Social Media</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($informasi as $i)
                  <tr>
                    <td>{{$i->created_at}}</td>
                    <td>{{$i->namaInformasi}}</td>
                    <td>{{$i->tokoOnline}}</td>
                    <td>{{$i->socialMedia}}</td>
   
                    
                    <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$i->id}}">Edit</button> | 
                    <a href="/deleteInformasi/{{$i->id}}" class="btn btn-primary">Delete</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            @foreach($informasi as $i)
            <form class="form-horizontal" action="/updateInformasi" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="modal-edit{{$i->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Informasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="idUser" value="{{ Auth::user()->id }}" >
              <input type="hidden" name="id" value="{{ $i->id }}" > 
                @csrf
                <div class="card-body">

                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Informasi</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="namaInformasi" id="" value="{{$i->namaInformasi}}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kategori Toko</label>
                        <div class="col-sm-9">
                    <select class="form-control select2" name="jenisInformasi">
                    <option {{ $i->jenisInformasi == "Pilih" ? 'selected' : '' }}>UMKM</option>
                    <option  {{ $i->jenisInformasi == "Pilih" ? 'selected' : '' }}> Olahraga </option>
                    <option  {{ $i->jenisInformasi == "Pilih" ? 'selected' : '' }}> Pendidikan </option>
                 
                   
                  </select>
                  </div>
                        </div>
                        <div class="form-group row">
                <label class="col-sm-2 col-form-label">Isi</label>
                          <div class="col-sm-9">
                          <textarea class="form-control" id="summernote{{$i->id}}" name="isiInformasi">{{$i->isiInformasi}}</textarea>
                          </div>                
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Toko Online</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="tokoOnline" id="" value="{{$i->tokoOnline}}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Social Media</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="socialMedia" id="" value="{{$i->socialMedia}}">
                        </div>
                </div>
               
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lainnya</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="lainnya" id="" value="{{$i->lainnya}}">
                        </div>
                </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @endforeach
      
      @section('script')
      @foreach($informasi as $i)
      <script>
  $('#summernote{{$i->id}}').summernote({
        height: 300
    });
</script>
@endforeach
@endsection
      
@endsection
