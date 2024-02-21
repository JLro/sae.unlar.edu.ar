<?php 
include('menu.php');
$pagina = "Secretaría de Asuntos Estudiantiles - 2024";
$extra = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('complementos/head.php'); ?>
</head>
<body style="background:#eee">
	<?php 
	include('complementos/header.php');
	?>

	<div class="container my-5">
		<section class="row">
			<div class="row">
				<h5>Noticias</h5>
			</div>
			<div class="row p-0 justify-content-around">
				<?php $i= 0; while($i < 4): ?>
				<div class="col-md-6 mb-1 p-1">
					<div class="card overflow-hidden">
						<div class="row">
							<img src="img/thumb/fill_thumb_2.jpg" class="img-fluid rounded col-lg-6" alt="...">
							<!-- <div class="col-lg-6 p-2 noti-images d-flex align-items-center justify-content-center">
							</div> -->
							<div class="col-lg-6">
								<div class="card-body">
									<h5 class="card-title">Noticia sobre SAE</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php $i++; endwhile; ?>		
			</div>
		</section>
	</div>
	<?php /*
	
	
		<!-- / Content -->


		<div class="content-backdrop fade"></div>
	</div>
	*/
	?>
	<!-- Footer -->
	<?php 
	include('complementos/foot.php');
	?>
	<!-- / Footer -->
	<?php 
	include('complementos/footer-links.php');
	?>

</body>

</html>