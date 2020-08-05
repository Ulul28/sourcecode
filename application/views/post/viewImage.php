<div class="modal fade" id="modalImage" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Gambar Berita</h4>
            </div>
            <div class="modal-body">
                <img src="<?= base_url($data['image_post']) ?>" class="img-responsive" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <a href="<?= site_url('post/hapusimage/'.$data['id_post'])?>" class="btn red">Hapus Gambar</a>
            </div>
        </div>
    </div>
</div>