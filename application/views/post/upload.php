<div class="modal fade" id="modalUpload" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal Title</h4>
            </div>
            <?= form_open('post/upload', ['id' => 'formUpload', 'enctype' => 'multipart/form-data'], ['id' => $data['id_post']]) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Upload Gambar</label>
                    <input type="file" name="gambar">
                    <span class="error gambar help-block text-danger"></span>
                    <p class="help-block">
                        - Kosongkan jika tidak ada file yang di upload.<br>
                        - The maximum file size for uploads in this demo is <strong>2 MB</strong> (default file size is unlimited).<br>
                        - Only image files (<strong>JPG, PNG</strong>) are allowed in this demo (by default there is no file type restriction).
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn blue">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#formUpload").submit(function(e) {
            e.preventDefault();
            var formData = new FormData($("#formUpload")[0]);
            $.ajax({
                url: $("#formUpload").attr('action'),
                dataType: 'json',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(resp) {
                    console.log(resp);
                    $('.error').html('');
                    if (resp.status == false) {
                        $.each(resp.message, function(i, m) {
                            $('.' + i).text(m);
                        });
                    } else {
                        window.location.href = "<?= site_url('post') ?>";
                    }
                }
            });
        });
    });
</script> -->