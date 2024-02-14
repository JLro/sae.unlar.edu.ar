<?php 
include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Material Style CSS -->
	<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@materialstyle/materialstyle@3.1.1/dist/css/materialstyle.min.css" 
integrity="sha384-TveZ4SBMG9Zwu44Pq5aK2bgL+4CaFRTtx6pSSsxmQKWhIRKoONDSRW+k+NA9A0Gk" 
	crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Secretaría de Asuntos Estudiantiles - 2024</title>
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
	
	<div class="content-wrapper">
		<!-- Content -->

		<div class="container-xxl flex-grow-1 container-p-y">
			<div class="row">
				<div class="card">
					<h5 class="card-header">Alguna cosa</h5>
					<div class="table-responsive text-nowrap">
						
					</div>
					<h5></h5>
				</div>
				<hr class="my-5">
				<div class="card">
					<h5 class="card-header">Atributos</h5>
					
					<div class="table-responsive text-nowrap">
					</div>
				</div>

				<div class="card bg-success bg-opacity-10 m-3" style="max-width: 400px;">
					<img class="card-img-top" src="img/Damin_Ruiz_Ramoni_I.jpg" alt="Damin_Ruiz_Ramoni">
					<div class="card-body">
						<h4 class="card-title">Investigador estudia qué pasó en La Rioja después de la extinción de los dinosaurios</h4>
						<p class="card-text">
						Se trata de Damián Ruiz Ramoni, oriundo de Venezuela, hace un año y medio, es investigador del CONICET, se desempeña en el Museo de Ciencias Antropológicas y Naturales de la UNLaR. La investigación más reciente en la que participó y que acaba de ser publicada por una revista científica internacional es sobre la evolución de la biodiversidad de los mamíferos en La Rioja luego de la extinción de los dinosaurios.
						</p>
					</div>
					<div class="d-flex justify-content-between align-items-center flex-wrap p-2">
						<div>
						<button type="button" class="btn btn-outline-success border-0">Read</button>
						<button type="button" class="btn btn-outline-success border-0">Bookmark</button>
						</div>
						<div>
						<button type="button" class="btn btn-fab mini-fab btn-outline-dark border-0 m-1">
							<i class="bi bi-heart-fill"></i>
						</button>
						<button type="button" class="btn btn-fab mini-fab btn-outline-dark border-0 m-1">
							<i class="bi bi-share-fill"></i>
						</button>
						<button type="button" class="btn btn-fab mini-fab btn-outline-dark border-0 m-1">
							<i class="bi bi-three-dots-vertical"></i>
						</button>
						</div>
					</div>
					</div>

			</div>
		</div>
		<!-- / Content -->

		<!-- Footer -->
		<footer class="content-footer footer bg-footer-theme">
			<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
			</div>
		</footer>
		<!-- / Footer -->

		<div class="content-backdrop fade"></div>
	</div>
	*/
	?>
	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
			crossorigin="anonymous"></script>

	<!-- Material Style JS -->
	<script src="https://cdn.jsdelivr.net/npm/@materialstyle/materialstyle@3.1.1/dist/js/materialstyle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>