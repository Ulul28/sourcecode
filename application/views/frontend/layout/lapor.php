<div class="content-header">
  <div class="container">
    <p class="text-danger"></p>
    <p class="text-danger"><b>PENTING:</b><br>*Ukuran foto pendukung yang bisa diupload Maximal ukuran <b>4MB</b>.<br>*Setelah mengirim laporan, anda tidak bisa melakukan perubahan/edit data.
    </p>
    <p class="text-danger"></p>
</div>
</div>
      <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Lapor </h3>
              </div>
              <?= form_open('home/storelapor', ['enctype' => 'multipart/form-data']) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>NIK Kartu Tanda Penduduk</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="NIK ...">
                  </div>
                  <div class="form-group">
                    <label>Tentang</label>
                    <input type="text" name="ttg" class="form-control" id="exampleInputPassword1" placeholder="Jalan, Irigasi dan lain-lain ...">
                  </div>
                  <div class="form-group">
                        <label>Uraian</label>
                        <textarea class="form-control" name="uraian" rows="3" placeholder="Uraikan Laporan anda ..."></textarea>
                      </div>
                  <div class="form-group">
                    <label>Foto Pendukung</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="form-control">
                      </div>
                    </div>
                    <p>*Ukuran foto pendukung yang bisa diupload sebesar <b>4MB</b></p>
                  </div>
                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Kirim Laporan">
                </div>
              <?= form_close() ?>
            </div>
            <!-- <a class="btn btn-warning"> Cek Data Laporan </a> -->
        </div>
    </div>
</div>