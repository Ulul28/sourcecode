<style>
    .user-pic {
        display: inline-block;
        vertical-align: middle;
        height: 30px;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        -o-border-radius: 100%;
        border-radius: 100%;
    }
</style>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
					<h3 class="box-title">Data Postingan</h3><br><br>
					<a href="<?= site_url('post/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                    </a>					
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-hover data-tabel">
					<thead>
						<tr>
							<th>No.</th>
	                        <th>title-post.</th>
	                        <th>deskripsi.</th>
                            <th>image-post.</th>
	                        <th>created-post.</th>
	                        <th class="text-center">status-post</th>
	                        <th class="text-center">#</th>
						</tr>
					</thead>
					<tbody>
		  				<?php $no = 1;
                            foreach ($data as $d) {?>
                        <tr>
                            <td class="text-center" width="40px"><?= $no ?><input type="hidden" name="id" value="<?= $d['id_post'] ?>"></td>
                            <td><?= $d['title_post'] ?></td>
                            <td><?= shortText(strip_tags($d['desk_post']), '...') ?></td>
                            <td class="fit text-center" width="80px">
                                <?= $d['image_post'] != null ? '<img class="user-pic" src="' . base_url($d['image_post']) . '">' : '<a href="javascript:void(0)" onclick="upload(' . $d['id_post'] . ')" class="tooltips" data-container="body" data-placement="top" data-original-title="Upload Gambar"><i class="icon-cloud-upload text-black"></i></a>' ?>
                            </td>
                            <td><?= format_timestamp($d['tgl_post']) ?></td>
                            <td class="text-center">
                                <?= $d['status_post'] == 1 ? '<span class="label label-sm label-success">Approved</span>' : '<span class="label label-sm label-danger">Blocked</span>'; ?>
                            </td>
                            <td width="80px" class="text-center">
                                <?php if ($d['image_post'] != null) { ?>
                                    <a href="javascript:void(0)" onclick="viewImage('<?= $d['id_post'] ?>')"><i class="glyphicon glyphicon-picture text-primary"></i></a>
                                <?php } ?>
                                <a href="<?= site_url('post/edit/' . encryp($d['id_post'])) ?>"><i class="glyphicon glyphicon-edit text-success"></i></a>
                                <a href="<?= site_url('post/hapus/' . encryp($d['id_post'])) ?>" onclick="javascript: return confirm('Anda yakin hapus data ini ?')"><i class="glyphicon glyphicon-trash text-danger"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="tampil_modal"></div>
<script>
    function upload(kode) {
        datanya = "&kode=" + kode;
        $.ajax({
            url: "<?= site_url('post/modal') ?>",
            type: "post",
            data: datanya,
            success: function(ajaxData) {
                $("#tampil_modal").html(ajaxData);
                $("#modalUpload").modal('show');
            }
        });
    }

    function viewImage(kode) {
        datanya = "&kode=" + kode;
        $.ajax({
            url: "<?= site_url('post/viewImage') ?>",
            type: "post",
            data: datanya,
            success: function(ajaxData) {
                $("#tampil_modal").html(ajaxData);
                $("#modalImage").modal('show');
            }
        })
    }
</script>