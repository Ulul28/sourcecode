<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Data</h3><br>
                <br>
               <button type="button" class="btn btn-primary" onclick="tambah()"><i class="icon-plus2"></i> Tambah</button>
                <br>
                <br>
            </div>
    <div class="box-body table-responsive">
       <table class="table table-bordered table-hover data-tabel">
            <thead>
                <tr>
                    <th>no.</th>
                    <th>nama-file.</th>
                    <th>doc-file.</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach($query as $d){
            ?>
                <tr>
                    <td><?= $no .'.'?></td>
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['file'] ?></td>
                    <td>
                        <a href="javascript:void(0)" onclick="edit('<?= $d['id_download'] ?>')">
                            <i class="icon-pencil7 text-green"></i>
                        </a>
                        <a href="<?php echo site_url('download/destroy/' . $d['id_download']) ?>" onclick="return confirm('Yakin akan hapus data ini ?');">
                            <i class="icon-trash text-red"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <?php $no++; }?>
        </table>
    </div>
</div>
</div>
</div>
<div id="tampil_modal"></div>
<script>
    function tambah() {
        $.ajax({
            url: "<?= site_url('download/create') ?>",
            type: "post",
            success: function(ajaxData) {
                $("#tampil_modal").html(ajaxData);
                $("#modal_tambah").modal('show');
            }
        });
    }
</script>