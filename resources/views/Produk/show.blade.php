@extends('layouts.lay')

@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Produk</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table class="table table-bordered table-striped data-table">
        <div class="mb-2">
          <button type="submit" class="btn btn-primary" id="tambah_produk">Tambah</button>
        </div>

        <thead>
          <tr>
            <th>Tanggal Post</th>
            <th>Nama Produk</th>
            <th>Jenis</th>
            <th>Action</th>

          </tr>
        </thead>


      </table>
      @include('Produk.modal-produk')
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@section('script')
<script>
  $(function() {
    var produkTable = $(".data-table").DataTable({
      processing: true,
      serverSide: true,
      ajax: '/produk/index',
      columns: [{
          data: 'tanggal_post',
          name: 'tanggal_post',
        },
        {
          data: 'namaBarang',
          name: 'namaBarang'
        },
        {
          data: 'jenisBarang',
          name: 'jenisBarang',
        },
        {
          data: 'action',
          name: 'action',
          orderable: true,
          searchable: true
        },
      ]
    });

    $('#tambah_produk').click(function() {
      $('#preview_foto').attr('src', '');
      $('#simpan').show();
      $('#update').hide();
      $('#idProduk').val('');
      $('#produkForm').trigger('reset');
      $('#modal-produk').modal('show');
    });

    $('#foto').on('change', function() {
      var input = this;
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#preview_foto').attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);

    })

    $('#simpan').click(function(e) {
      e.preventDefault();
      var formData = new FormData($("#produkForm")[0]);
      formData.append('_token', '{{ csrf_token() }}');

      $.ajax({
        url: '/produk/store',
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(response) {
          produkTable.ajax.reload();
          $('#produkForm').trigger("reset");
          $('#modal-produk').modal('hide');

          Swal.fire({
            type: 'success',
            icon: 'success',
            title: `${response.message}`,
            showConfirmButton: false,
            timer: 3000
          });

        }
      });
    });

    $('body').on('click', '.editProduk', function() {
      var produk_id = $(this).data('id');
      var url = '/produk/' + produk_id + '/edit';
      $.get(url, function(data) {
        $('#simpan').hide();
        $('#update').show();
        $('#idProduk').val(data.id);
        $('#preview_foto').attr('src', data.foto);
        $('#nama').val(data.namaBarang);
        $('#jenis').val(data.jenisBarang);
        $('#keterangan').val(data.keteranganBarang);
        $('#harga').val(data.hargaBarang);
        $('#lainnya').val(data.informasiLainnya);
        $('#modal-produk').modal('show');
      })
    });

    $('#update').click(function(e) {
      e.preventDefault();

      var produk_id = $('#idProduk').val();
      var alamat = '/produk/' + produk_id + '/update';

      var formData = new FormData($("#produkForm")[0]);
      formData.append('_token', '{{ csrf_token() }}');
      formData.append('_method', 'PUT');

      $.ajax({
        url: alamat,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(response) {
          produkTable.ajax.reload();
          $('#produkForm').trigger("reset");
          $('#modal-produk').modal('hide');
          Swal.fire({
            type: 'success',
            icon: 'success',
            title: `${response.message}`,
            showConfirmButton: false,
            timer: 3000
          });

        }
      });
    })

    
  });
</script>
@endsection


@endsection