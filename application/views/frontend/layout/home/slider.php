<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md-8">
                <!-- <div class="color-palette-set">
                  <div class="bg-navy color-palette">
                    <div class="col-md-12">
                      Headline News:<marquee></marquee>
                    </div>
                  </div>
                </div><br> -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php
                        foreach($slide as $key=>$value){
                            $active = ($key == 0) ? 'active' : '';
                        echo
                        '<li data-target="#carouselExampleIndicators" data-slide-to="'.$key.'" class="'.$active.'"></li>';
                        }?>
                  </ol>
                  <div class="carousel-inner">
                    <?php foreach($slide as $key=>$value){    
                            $active = ($key == 0) ? 'active' : '';
                        echo '<div class="carousel-item '.$active.'">
                                <img class="d-block w-100" src="'. base_url().'assets/postingan/'.$value['foto'].'" style="width: 450px; height: 390px;">
                        </div>';} ?>
                </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-lightblue">
                <h3 class="card-title">Popular</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <?php foreach($pop as $p){?>
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                    <div class="product-img">
                      <a href="<?= site_url('berita/' . $p['slug_post']) ?>">
                            <?= $p['image_post'] != null ? '<img class="img-size-50" alt="" src="' . base_url($p['image_post']) . '">' : '<img class="img-size-50" alt="" src="' . theme() . 'img/noImage.png">' ?>
                          </a>
                    </div>
                    <div class="product-info">
                      <a class="product-title" href="<?= site_url('berita/' . $p['slug_post']) ?>"><?= strip_tags($p['title_post']), '...' ?></a>
                      <span class="product-description">
                        <?= strip_tags($p['desk_post']), '...' ?>
                      </span>
                    </div>
                  </li>
                </ul>
              <?php }?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="<?= site_url('home/posts') ?>" class="uppercase">View All</a>
              </div>
              <!-- /.card-footer -->
            </div>
          </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>