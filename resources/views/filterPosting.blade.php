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
                    <th>Status</th>
                    <th>Persetujuan</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($posting as $p)
                  <tr>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->namaPosting}}</td>
                    <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-details{{$p->id}}">Details</button></td>
                    <td>
                    @if($p->status === 'setuju')
                          <a class="btn btn-success btn-sm" href="#">
                           Setuju
                          </a>
                          @elseif($p->status === 'tolak')
                          <a class="btn btn-danger btn-sm" href="#">
                           Tolak
                          </a>
                          @else
                          <a class="btn btn-secondary btn-sm" href="#">
                           Tunggu
                          </a>
                          @endif
                    </td>
                    
                    <td>
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#persetujuanModal{{$p->id}}">
                          <i class="fa fa-paper-plane"></i>
                          </button>
                    </td>
                   
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
              <p>Isi Posting : {!! $p->isiPosting !!}</p>
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

      <div class="modal fade" id="persetujuanModal{{$p->id}}">
        <form action="/prosesFilter" method="post">
        @csrf
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Persetujuan Posting</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="form-group row">
              <input type="hidden" name="id" value="{{$p->id}}">
                        <label class="col-sm-2 col-form-label">Persetujuan</label>
                        <div class="col-sm-9">
                    <select class="form-control select2" name="status">
                    <option {{ optional($p)->status == "setuju" ? 'selected' : '' }} >setuju</option>
                    <option  {{ optional($p)->status == "tolak" ? 'selected' : '' }}> tolak </option>
                  </select>
                  </div>
                        </div>
            </div>
            
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-default" >Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
          </form>
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      @endforeach
@endsection
