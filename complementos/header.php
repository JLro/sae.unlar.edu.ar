<header class="pt-3 pb-3">
	<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-between">
				<a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
					<img src="img/SAE_HORIZONTAL.png" width="150" alt="">
				</a>
				<?php 
				/*
				<div class="dropdown text-end">
					<a href="javascript:void(0)" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
					</a>
					<ul class="dropdown-menu text-small">
						<li><a class="dropdown-item" href="#">New project...</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Sign out</a></li>
					</ul>
				</div> 
				*/
				?>
			</div>
		</div>
</header>
<nav class="navbar navbar-expand-md bg-body-y">
	<div class="container">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<?php foreach ($menu as $item => $espacio ) { ?>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php echo $espacio ?>"><?php echo $item; ?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<?php 
		/* --- formulario de busqueda, ver como utilizar.
			<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
				<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
			</form>
		*/
		?>
	</div>
</nav>
