<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid">
            <div class="box-header with-border">
        <div class="portlet-body form">
            <?= form_open('master/halaman/update', ['id' => 'form_edit', 'role' => 'form'], ['id' => encryp($data['id_hal'])]) ?>
            <div class="form-body">
                <div class="form-group">
                    <label>*judul-halaman.</label>
                    <input type="text" name="judul" class="form-control" value="<?= $data['judul'] ?>">
                    <span class="error judul help-block text-danger"></span>
                </div>
                <div class="form-group">
                    <label>*link-halaman</label>
                    <input type="text" name="link" class="form-control" value="<?= $data['link'] ?>">
                    <span class="error link help-block text-danger"></span>
                </div>
                <div class="form-group">
                    <label>*isi-halaman</label>
                    <textarea class="form-control" name="isi" id="ckeditor" rows="15"><?= $data['isi'] ?></textarea>
                    <span class="error isi help-block text-danger"></span>
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
</div>
</div>