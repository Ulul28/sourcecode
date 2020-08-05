<div class="row">
	<div class="col-lg-12">
		<div class="box box-solid">
			<div class="box-header with-border">
            <?= form_open('master/halaman/store', ['id' => 'form_tambah', 'role' => 'form']) ?>
            <div class="form-body">
                <div class="form-group">
                    <label>*judul-halaman.</label>
                    <input type="text" name="judul" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>*link-halaman.</label>
                    <input type="text" name="link" class="form-control" placeholder="link.">
                </div>
                <div class="form-group">
                    <label>*isi-halaman.</label>
                    <textarea class="form-control" id="ckeditor" name="isi" required></textarea>
                </div>
            </div>
            <div class="form-actions right">
                <button type="button" onclick="location.href='<?= site_url('master/halaman') ?>'" class="btn default">Cancel</button>
                <button type="submit" class="btn green">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>