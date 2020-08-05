<header class="main-header">
	<a href="<?= theme() ?>index2.html" class="logo">
		<span class="logo-mini"><b><?= title() ?></b></span>
		<span class="logo-lg"><b><?= title() ?></b></span>
	</a>
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="<?= theme() ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= foto() ?>" class="user-image" alt="<?= username() ?>">
						<span class="hidden-xs"><?= username() ?> | <?= iduser() ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?= foto() ?>" class="img-circle" alt="<?= username() ?>">
							<p>
								<?= username() ?>
								<small><?= role() ?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?= site_url('profil') ?>" class="btn btn-default btn-flat">Profil</a>
							</div>
							<div class="pull-right">
								<a href="<?= site_url('logout') ?>" class="btn btn-default btn-flat">Logout</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
