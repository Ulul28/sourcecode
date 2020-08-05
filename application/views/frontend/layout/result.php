<section class="content-header">
  <div class="container">
    <div class="row">
      <h2>Hasil Pencarian </h2>
    </div>
    <div class="row">
      <?php
         if(count($cari)>0){
         	foreach ($cari as $p) {?>
        		<div class="col-md-4 col-sm-12 mb-3">
                <div class="card card-outline card-warning">
                    <a href="<?= site_url('berita/' . $p['slug_post']) ?>">
                      <?= $p['image_post'] != null ? '<img class="card-img-top" alt="" src="' . base_url($p['image_post']) . '">' : '<img class="card-img-top" alt="" src="' . theme() . 'img/noImage.png">' ?>
                          </a>
                        <div class="card-body">
                          <div class="card-title"><h5><a class="card-title" href="<?= site_url('berita/' . $p['slug_post']) ?>"><?= shortText(strip_tags($p['title_post']), '...') ?></a></h5></div>
                          <?= strip_tags($p['title_post']), '...' ?>
                          <h5><i class="icon calender"></i><small class="text-muted"><?= timestampIndo($p['tgl_post']) ?> By PUPR Kab. Padang Pariaman</small></h5>
                        </div>
                        <div class="card-footer">
                          <a target="_blank" href="<?= site_url('berita/' . $p['slug_post']) ?>" class="btn btn-warning">Read More...</a>
                        </div>
                      </div>
                    </div>
      <?php }}else{?>
        	<div class="col-md-4 col-sm-6 col-xs-6">
            <h1>Data Not Found</h1>
            </div>
        	<?php }?>
    </div>
  </div>
</section>