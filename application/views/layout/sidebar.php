<?php $urls = $this->uri->segment(1); ?>
<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= foto() ?>" class="img-circle" alt="<?= username() ?>">
			</div>
			<div class="pull-left info">
				<p><?= username() ?></p>
				<a href="<?= site_url() ?>"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?= $urls == null || $urls == 'welcome' ? 'active' : null ?>">
				<a href="<?= site_url('welcome') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
			</li>
			<?php if (level() == '1') { ?>
				<li class="<?= $urls == 'users' || $urls == 'kategori' ? 'active' : null ?> treeview">
					<a href="#">
						<i class="icon-grid4"></i> <span>Master</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?= $urls == 'users' ? 'active' : null ?>">
							<a href="<?= site_url('master/users') ?>"><i class="fa fa-angle-double-right"></i> User</a>
						</li>
						<li class="<?= $urls == 'kategori' ? 'active' : null ?>">
							<a href="<?= site_url('master/kategori') ?>"><i class="fa fa-angle-double-right"></i> Kategori</a>
						</li>
						<li class="<?= $urls == 'menu' ? 'active' : null ?>">
							<a href="<?= site_url('master/menu') ?>"><i class="fa fa-angle-double-right"></i> Menu</a>
						</li>
						<li class="<?= $urls == 'slider' ? 'active' : null ?>">
							<a href="<?= site_url('master/slider') ?>"><i class="fa fa-angle-double-right"></i> Slider</a>
						</li>
					</ul>
				</li>
				
						<li class="<?= $urls == 'post' ? 'active' : null ?>">
							<a href="<?= site_url('post') ?>"><i class="icon-pencil"></i> Posting</a>
						</li>
						<li class="<?= $urls == 'download' ? 'active' : null ?>">
							<a href="<?= site_url('download') ?>"><i class="icon-download"></i> Download</a>
						</li>
						<li class="<?= $urls == 'halaman' ? 'active' : null ?>">
							<a href="<?= site_url('master/halaman') ?>"><i class="fa fa-file-archive-o"></i> Halaman</a>
						</li>
						<li class="<?= $urls == 'lapor' ? 'active' : null ?>">
							<a href="<?= site_url('master/halaman/lapor') ?>"><i class="fa fa-file"></i> Pelaporan</a>
						</li>
			<?php } else if (level() == '2') { ?>
				<li class="<?= $urls == 'post' ? 'active' : null ?>">
					<a href="<?= site_url('post') ?>"><i class="icon-pin"></i> Posting</a>
				</li>
			<?php } ?>
			<li>
				<a href="<?= site_url('login/logout') ?>"><i class="icon-switch"></i> <span>Logout</span></a>
			</li>
		</ul>
	</section>
</aside>