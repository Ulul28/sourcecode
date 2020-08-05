    <div class="content-header">
      <div class="container bg-light rounded">
        <div class="row">
          <div class="col-md-8">
              <h2 class="m-0 text-dark"> Berita</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content-header">
      <div class="container">
        <div class="row">
          <?php
                $limitPerLine = 3;
                $currentData = 0;
                for ($a = 0; $a < count($posts); $a++) {
                $p = $posts[$a];
                  ++$currentData;
                  if ($currentData == 1) {
                    echo '<div class="row">';
                } ?>
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
          <?php if ($currentData == $limitPerLine) {
                    $currentData = 0;
                    echo '</div> <hr class="blog-post-sep" style="margin-top: 20px; margin-bottom: 20px;">';        
                  }
                  } ?>
        </div>
      </div>
    </section>