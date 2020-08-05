    <div class="content-header">
      <div class="container bg-light rounded">
        <div class="row">
          <div class="col-md-8">
              <h2 class="m-0 text-dark"> </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content-header">
      <div class="container">
        <div class="row">
          <?php
                foreach ($download as $p) {?>
                <div class="col-md-3 col-sm-12 mb-3">
                      <div class="card card-outline card-warning">
                        <a href="">
                            <img class="card-img-top" alt="" src="<?= theme()?>img/noImage.png">
                          </a>
                        <div class="card-body">
                          <div class="card-title"><h5 class="card-title"><?= $p['nama']?></h5></div><br>
                          <small class="text-muted"> By PUPR Kab. Padang Pariaman</small>
                        </div>
                        <div class="card-footer">
                          <a target="_blank" href="<?php echo base_url().$p['file']; ?>" class="btn btn-warning"><i class="fa fa-download"></i> Unduh</a>
                        </div>
                      </div>
                    </div>
          <?php } ?>
        </div>
      </div>
    </section>