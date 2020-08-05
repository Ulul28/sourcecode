<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid">
            <div class="box-header with-border">
        <div class="portlet-body form">
            <?= form_open('post/update', ['id' => 'form_edit', 'role' => 'form'], ['id' => encryp($data['id_post'])]) ?>
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
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Judul ..." value="<?= $data['title_post'] ?>">
                    <span class="error judul help-block text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter Slug ..." value="<?= $data['slug_post'] ?>">
                    <span class="error slug help-block text-danger"></span>
                </div>
                <!-- <p>
                    <h4><b>Deskripsi post sebelumnya</b></h4>
                    <?php //echo $data['desk_post'] ?>
                </p> -->
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1" <?= $data['status_post'] == 1 ? 'selected' : null;?>>Approved</option>
                        <option value="0" <?= $data['status_post'] == 0 ? 'selected' : null;?>>Blocked</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi<!-- <b>Jika ingin edit deskripsi silahkan inputkan deskripsi dibawah ini.</b> --></label>
                    <textarea class="form-control" name="desk" id="ckeditor" rows="15"><?= $data['desk_post'] ?></textarea>
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
</div>
</div>