<!-- /.modal -->

<div class="modal fade" id="modal-produk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" action="produk/update" id="produkForm" enctype="multipart/form-data">
             
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="idProduk" id="idProduk">

                        <div class="form-group">
                            <label for="current_image" class="col-sm-2 control-label">Preview Foto</label>
                            <div class="col-12">
                                <img id="preview_foto" src="" style="max-width: 100%; height: auto;" width="100px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto<span class="wajib">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="foto" id="foto">
                                <div class="invalid-feedback" role="alert" id="alert-nama"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama<span class="wajib">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" id="nama" required>
                                <div class="invalid-feedback" role="alert" id="alert-nama"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Produk<span class="wajib">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="jenis" id="jenis" required>
                                <div class="invalid-feedback" role="alert" id="alert-jenis"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keterangan Produk<span class="wajib">*</span></label>
                            <div class="col-sm-9">
                                <textarea name="keterangan" class="form-control" id="keterangan"></textarea>
                                <div class="invalid-feedback" role="alert" id="alert-keterangan"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga<span class="wajib">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="harga" id="harga">
                                <div class="invalid-feedback" role="alert" id="alert-harga"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Informasi Tambahan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="lainnya" id="lainnya">
                                <div class="invalid-feedback" role="alert" id="alert-jenis"></div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                    <button type="submit" class="btn btn-warning" id="update">Update</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>