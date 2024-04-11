<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Visualizador | Normativa</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
	<script language="JavaScript">
	//Ajusta el tamaño de un iframe al de su contenido interior para evitar scroll
	function autofitIframe(id){
	  if (!window.opera && document.all && document.getElementById){
	    id.style.height=id.contentWindow.document.body.scrollHeight;
	  } else if(document.getElementById) {
		id.style.height=id.contentDocument.body.scrollHeight+"px";
	  }
	}
	</script>

</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="title">COOPELECT R.L.</span>
			<span class="tagline">Cooperativa de servicios públicos de electricidad Tupiza R.L.<br><img src="../Imgs/logo.png" height="80"></span>
		</h1>
	</div>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Navegador</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="../Inicio/index.html">Inicio</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		<!-- Article main content -->
		<article class="col-sm-8 maincontent">
		  <?php 
			include("Conexion/conexion.php");
			$var1 = ($_GET['cd']);
			$res1 = mysqli_query($conexion, "SELECT arc_nom, arc_are, arc_url FROM tb_arc WHERE arc_cod='$var1'");
			if(mysqli_num_rows($res1)>0){
			  $dat1 = mysqli_fetch_row($res1);
			  $noma = $dat1[0];
			  $area = $dat1[1];
			  $areu = $dat1[2];
			}else{
			  echo("No existe el archivo.");
			}
		    $res2 = mysqli_query($conexion,"SELECT are_car FROM tb_are WHERE are_cod='$area'"); 
			if(mysqli_num_rows($res2)>0){
			  $dat2 = mysqli_fetch_row($res2);
			  $carp = $dat2[0];
			}else{
			  echo("No existe la carpeta.");
			} 
			include("Conexion/desconexion.php");
		  ?>
		  <p>
            <style type="text/css">
		      #biframe { position: absolute; width: 925px; height: 640px;}
		      #iframe { width: 940px; height: 640px; }
			</style>
		    <?php
			  $var2=($areu."/".$carp."/".$noma.".pdf");
		    ?>
		    <div id="ciframe"><div id="biframe"></div><iframe id="iframe" src="<?php echo($var2); ?>#toolbar=0" target="_blank" width="940px" height="440px" frameborder="1" transparency="transparency" onload="autofitIframe(this);"></iframe></div> 
          </p>
		</article>
	</div>	<!-- /container -->	
</main>

<!-- 
<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Descripción</h3>
				<div class="widget-body">
					<p>El plan operativo anual que considera presupuestos, planificaciones............</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title"></h3>
				<div class="widget-body">
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Modificaciones</h3>
				<div class="widget-body">
					<p>Se modificaron ............</p>
					<p>Se modificaron ............</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title"> </h3>
				<div class="widget-body">
					<p>Se modificaron ............</p>
					<p>Se modificaron ............</p>
				</div>
			</div>

		</div> 
	</div>
</footer>
-->

<footer id="underfooter">
	<div class="container">
		<div class="row">
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>Area de Tecnología de la Información </p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2023, Coopelect<br> 
				</div>
			</div>
		</div> <!-- /row of widgets -->
	</div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
