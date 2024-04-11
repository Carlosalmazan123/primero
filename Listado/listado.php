<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Inicio - Listado de normativa</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/guy.png" alt="">
			<span class="title">COOPELECT R.L.</span>
			<span class="tagline">Cooperativa de servicios públicos de electricidad Tupiza R.L.<br><img src="../Imgs/logo.png" height="80"></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Navegador</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="../Inicio/index.html">Inicio</a></li>
					<li class="active"><a href="principal.html">Principal - Normativa</a></li>
<!--					<li><a href="about.html">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Left Sidebar</a></li>
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="single.html">Blog Post</a></li>  
						</ul>
					</li>-->
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		<div class="row section featured topspace">
			<?php 
				session_start();
				include("Conexion/conexion.php");
				$cod=($_GET['c']);
				$cod1=('101'.$cod);
				$res=mysqli_query($conexion, "SELECT are_nom FROM tb_are WHERE are_cod='$cod1'");
				if(mysqli_num_rows($res)>0){
				  $datos=mysqli_fetch_row($res);
				  echo("<h3>$datos[0]</h3>");
				}else{
				  echo("No hay área");
				}
			    $result = mysqli_query($conexion,"SELECT arc_cod, arc_nom, arc_des, arc_vis FROM tb_arc WHERE arc_are='$cod1' ORDER BY arc_nom ASC"); 
				if ($row = mysqli_fetch_array($result)){ 
	 			  echo "<table border = '0'> \n"; 
   				  echo "<tr><td width=150px>Codigo</td><td width=650px>Nombre</td><td width=150px>Opción</td></tr> \n"; 
				  do { 
				    if ($row["arc_vis"] == 1){
					  $code = $row["arc_cod"];
					  echo "<tr><td>".$row["arc_nom"]."</td><td>".$row["arc_des"]."</td><td><a target=\"_blank\" href='visualizador.php?cd=".$code."'>Visualizar</a></td></tr> \n"; 
					}
				  } while ($row = mysqli_fetch_array($result)); 
   				  echo "</table> \n";
				} else { 
				  echo "¡ No se ha encontrado ningún registro !"; 
				} 
				include("Conexion/desconexion.php");
			?>
		</div>
		<div class="row section featured topspace">

		</div> <!-- / section -->
	</div>	<!-- /container -->
</main>

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
