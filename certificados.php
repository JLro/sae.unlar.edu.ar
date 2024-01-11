<!DOCTYPE html>
<html lang="es">
<head>
	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="universidad, secretaría, sae, estudiantes, estudiantil, guía, certificados">
	<meta name="category" content="university, education">
	<meta name="author" content="Lucas Paz">

	<!-- links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<!-- Material Style CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@materialstyle/materialstyle@3.1.1/dist/css/materialstyle.min.css" integrity="sha384-TveZ4SBMG9Zwu44Pq5aK2bgL+4CaFRTtx6pSSsxmQKWhIRKoONDSRW+k+NA9A0Gk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/9d84b18605.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body class="bg-light">
	<!-- header -->
	<?php
	include('menu.php');
	include('complementos/header.php') 
	?>
	<!-- content -->
	<div class="content-wrapper">
		<div class="container-lg flex-grow-1 container-p-y">
			<div class="row pt-4">
				<div class="col-lg-8 mb-4 order-0">
					<!-- inicio primer tarjeta -->
					<div class="card shadow p-4 mb-3">
						<h2 class="card-title">Certificado de Alumno Inscripto</h2>
						<p class="card-text">
							Este certificado corresponde a los estudiantes que han ingresado a la universidad en el presente año, no adeudando ningún tipo de documentación y generalmente esta disponible a partir del inicio del curso de ingreso, una vez que se les asigna el número de matricula.<br> <br>

							<b>¿Cómo obtengo el certificado?</b> <br>

							Debes descargarlo desde el <a href="https://guarani.unlar.edu.ar/" target="blank">SIU Guaraní</a>, haciendo clic en el menú de “Tramites/solicitud de Certificados” y seleccionando “Certificado de Alumno Regular”.
							<a id="alumno-regular"></a>
						</p>
						<div class="col-md-6 mx-2">
							<div class="card shadow-none mb-3 tooltips overflow-hidden rounded-top-3 bg-verde">
								<div class="card-header">
									<h5 ><i class="fa-solid fa-brain"></i> Recordatorio</h5>
								</div>
								<div class="card-body text-light">
									<p class="card-text">El certificado estará disponible una vez cargada y aprobada la documentación..</p>
								</div>
							</div>
						</div>
					</div>
					<!-- fin tarjeta -->
					<!-- inicio segunda tarjeta -->
					<div class="card shadow p-4 mb-3">
						<h2 class="card-title">Alumno regular</h2>
						<p class="card-text">
							Conforme lo marca el art. 6 del <a href="#">Reglamento de Alumnos</a>, y en referencia al art. 50 de la Ley de Educación Superior 24.521; es Estudiante Regular el alumno que hubiere aprobado por lo menos dos (2) asignaturas durante cada año académico. <br>

							<b>¿Cómo obtengo el certificado?</b> <br>

							Debes descargarlo desde el <a href="https://guarani.unlar.edu.ar/" target="blank">SIU Guaraní</a>, haciendo clic en el menú de “Tramites/solicitud de Certificados” y seleccionando “Certificado de Alumno Regular”.
							<a id="alumno-regular"></a>
						</p>
						<div class="col-md-6 mx-2">
							<div class="card shadow-none bg-transparent mb-3 tooltips overflow-hidden rounded-top-3">
								<div class="card-header bg-verde">
									<h5 class="card-title"><i class="fa-solid fa-brain"></i> Recordatorio</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Para poder recibirlo debes tener como mínimo dos exámenes finales aprobados durante el último año.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- fin tarjeta -->
					<!-- inicio tercer tarjeta -->
					<div class="card shadow p-4 mb-3">
						<h2 class="card-title">Examen rendido</h2>
						<p class="card-text">
							En caso de necesitarlo podes obtener el certificado de examen rendido o evaluación. Existen dos tipos, el Certificado de Evaluación Parcial y El Certificado de Examen Final. Ambos se obtienen de igual manera, según corresponda. <br>

							<b>¿Cómo obtengo el certificado?</b> <br>

							Debes descargarlo desde el , haciendo clic en el menú de “<u>Tramites/solicitud de Certificados</u>” y seleccionando, “<u>Certificado de Evaluación</u>”.
							Aquí tendrás dos opciones.
							<a id="examen-rendido"></a>
							<ul class="list-group list-group-horizontal">
								<li class="list-group-item">Cursadas – Períodos lectivos vigentes: Genera una constancia de evaluación parcial para las materias que estas cursando, debes llenarla con el docente.</li>
								<li class="list-group-item">Exámenes – Turnos de exámenes vigentes: Genera una constancia de evaluación final para las materias en las que estas inscripto para rendir en la mesa vigente, debes llenarla con el docente.</li>
							</ul>
						</p>
					</div>
					<!-- fin tarjeta -->
					<!-- inicio cuarta tarjeta -->
					<div class="card shadow p-4 mb-3">
						<h2 class="card-title">Libre deuda de la biblioteca</h2>
						<p class="card-text">
							<b>¿Cómo obtengo el certificado?</b> <br>

							Debes descargarlo desde el , haciendo clic en el menú de “<u>Tramites/solicitud de Certificados</u>” y seleccionando, “<u>Certificado de Evaluación</u>”.
							Aquí tendrás dos opciones.
							<a id="libre-deuda"></a>
							<ol class="list-group list-group-numbered">
								<li class="list-group-item">Se requiere el llenado del <a href="https://docs.google.com/forms/d/e/1FAIpQLSdGmLP9xRx26ZjXFqErG6fDFzeZD-_jLHMp8xATWCRn2cZgaw/viewform">siguiente formulario</a>  con el objeto de Solicitar el Certificado de Libre deuda.</li>
								<li class="list-group-item">La biblioteca constatara que el solicitante no adeude material bibliográfico</li>
								<li class="list-group-item">Luego se emitirá el Certificado Digital vía mail hacia el correo del solicitante. El mismo será emitido por la Biblioteca Central Ángel María Vargas de la Universidad Nacional de La Rioja.</li>
							</ol>
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 order-1">
					<div class="card shadow sticky-sm-top">
							<div class="card-header bg-info">
								<h5>Contenidos</h5>
							</div>
							<div class="card-body">
								<ul class="list-group">
									<li class="list-group-item"><a href="#alumno-inscripto">Certificado de alumno inscripto</a></li>
									<li class="list-group-item"><a href="#examen-rendido">Certificado de examen rendido</a></li>
									<li class="list-group-item"><a href="#alumno-regular">Certificado de alumno regular</a></li>
									<li class="list-group-item"><a href="#libre-deuda">Certificado de Libre deuda de la Biblioteca</a></li>
								</ul>
							</div>	
						</div>
					</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<!-- footer-links -->
	<?php 
	include('complementos/footer-links.php');
	?>
</body>
</html>