<div class="content-header">
      <div class="container bg-light rounded">
        <div class="row">
          <div class="col-md-8">
              <h2 class="m-0 text-dark">{title}</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content-header">
      <div class="container">
        <div class="row">
            <a href="">
              <?= $data['image_post'] != null ? '<img alt="" src="' . base_url($data['image_post']) . '" width="800">' : '<img alt="" src="' . theme() . 'img/noImage.png">' ?>
            </a>
        </div>
        <div class="row">
          <h4><?= $data['title_post'] ?> 
          </h4>
          <p class="text-justify"><?= $data['desk_post'] ?></p><br>
          <small><i class="fa fa-calendar" aria-hidden="true"></i> <?= timestampIndo($data['tgl_post']) ?> <p>Posted by : <a href="#"> PUPR Padang Pariaman</a></p></small>
        </div>
      </div>
    </section>