<div class="row">
	<div class="col-lg-12">
		<div class="box box-solid">
			<div class="box-header with-border">
            <?= form_open('post/store', ['id' => 'form_tambah', 'role' => 'form', 'enctype' => 'multipart/form-data']) ?>
            <div class="form-body">
                <div class="form-group">
                    <label><span class="required">*</span>Kategori</label>
                    <select class="form-control" name="kategori" required>
                        <?php foreach ($kat as $d) { ?>
                            <option value="<?= $d['id_kategori'] ?>"><?= $d['title_kategori'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>*judul-post.</label>
                    <input type="text" name="title" class="form-control" placeholder="">
                    <span class="error judul help-block text-danger"></span>
                </div>
                <div class="form-group">
                    <label>*slug-post</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter Slug ...">
                    <span class="error slug help-block text-danger"></span>
                </div>
                <div class="form-group">
                    <label>*upload-gambar.</label>
                    <input type="file" name="gambar">
                    <span class="error gambar help-block text-danger"></span>
                    <p class="help-block">
                        - Kosongkan jika tidak ada file yang di upload.<br>
                        - The maximum file size for uploads in this demo is <strong>2 MB</strong> (default file size is unlimited).<br>
                        - Only image files (<strong>JPG, PNG</strong>) are allowed in this demo (by default there is no file type restriction).
                    </p>
                </div>
                <div class="form-group">
                    <label>*status-post.</label>
                    <select class="form-control" name="status">
                        <option value="1" selected>Approved</option>
                        <option value="0">Blocked</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" id="ckeditor" name="desk" required></textarea>
                    <span class="error desk help-block text-danger"></span>
                </div>
            </div>
            <div class="form-actions right">
                <button type="button" onclick="location.href='<?= site_url('post') ?>'" class="btn default">Cancel</button>
                <button type="submit" class="btn green">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
