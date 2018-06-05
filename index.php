<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Factory | Desarrollo web y marketing digital</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" type="image/png" href="images\WebFactory\Iconos Azules\favicon-16x16.png" />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="fonts/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/arriba.js"></script>
	<script src="jquery.localscroll.js" type="text/javascript"></script> 
	<script src="jquery.scrollTo.js" type="text/javascript"></script>
</head>
<!-- Inicio del body-->
<body>

   	<span class="ir-arriba icon-arrow_upward"></span>
	<section class="menu col-xs-12">
		<?php include("includes/menu.php"); ?>
	</section>
	<a name="Inicio"></a><section class="Inicio">
		</section>
	<section class="medio">
		<article class="top_banner">
		<p class="col-xs-8 col-md-offset-2">TEXTO DE PRUEBA</p>			
		</article>
	</section>
	<div class="services">
		<a name="Servicios"></a><h2 id="titles">Sobre Nosotros</h2>
		<div class="who">
			<section class="whoim">
				<P>prueba</P>
			</section>			
		</div>
	</div>
	<a name="quienes"></a>
	<div class="services">
		<a name="historia"></a> <h2 id="titles" class="col-sm-12">Servicios</h2>
		<div class="row">
		<article class="col-md-6 col-xs-12" >
			<section class="s1"></section>
			<h4 id="titles">Tecnología de punta.</h4>
			<p class="textimg">Contamos con los mejores frameworks para el maquetado y desarrollo de sus páginas, de manera que siempre estará sobre las ultimas tendencias.</p>
		</article>
		<article class="col-md-6 col-xs-12 contorno">
			<section class="s11"></section>
			<h4 id="titles">Hosting de dominios.</h4>
			<p class="textimg">Contamos con uno de los mejores sitios de hosting de dominios para garantizar rapidez y seguridad de su página web.</p>			
		</article>
		</div>
		<div class="row">
		<article class="col-md-6 col-xs-12 contorno">
			<section class="s10"></section>
			<h4 id="titles">Respaldo de sitio web.</h4>
			<p class="textimg">Con el servico de respaldo automatico ya no hay porque preocuparse por nuestro sitio, siempre habrá una copia de nuestra página.</p>			
		</article>
		<article class="col-md-6 col-xs-12 contorno">
			<section class="s4"></section>
			<h4 id="titles">Marketing Digital.</h4>
			<p class="textimg">Con nuestro servicio de marketing digital, pocisione su página dentro de los primeros lugares en internet para que sus clientes siempre lo encuentren antes que a algun otro.</p>			
		</article>
		</div>
	</div>
	<!-- Sección de contacto -->
	<a name="Contacto"></a>
	<h2 id="titles">Contacto</h2>
	<!-- Formulario-->
	<?php include("includes/form.php");?>
	<!-- Fin de sección de contacto -->
	<!-- Inicio de seccion del footer-->
	<section class="footer">
	<?php include("includes/footer.php");?>		
	</section>
	<!-- Fin de sección de footer-->
</body>
<!-- Final del body -->
</html>