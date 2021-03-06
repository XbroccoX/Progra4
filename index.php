<?php
	include("php/codigo.php");
?>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="UTF-8">
	<meta name="author" content="Grupo progra">

	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

	<title>¿Quién quiere ser Millonario?</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $fondo ;?>">
  	<div class="container">
  		<div class="row pull-right menu">
  			<div class="col-md-2"><span>50:50</span></div>
  			<div class="col-md-2"><i class="fa fa-phone" aria-hidden="true"></i></div>
  			<div class="col-md-2 dinero"><span>$ <?= $dinero; ?></span></div>
  		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>
			</div>
		</div>
		<?php
			if($fallo == "false")
			{
				if($final == $id )
				{
					$id = $id - 1;
					$indice_correcta = $respuestas[$id]['correcta'];
					if(isset($_REQUEST['r']))
					{
						$seleccionada = $_REQUEST['r'];
						if($indice_correcta == $seleccionada)
						{
							echo "<h1 class='felicidades'>¡Has ganado, felicidades!</h1></br><center><a href='?id=0' class='iniciar'>Iniciar de nuevo</a></center>";
						}
						else
						{
							echo "<h1 class='felicidades'>Lo sentimos, has perdido</h1></br><center><a href='?id=0' class='iniciar'>Iniciar de nuevo</a></center>";
						}
					}
				}
				else
				{
		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="preguntas">
					<h2><?php echo $pregunta;?></h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="respuestas">
				<?php
					for($i = 3; $i >= 0 ; $i--)
					{
					$link = $id+1;
				?>
				<a href="<?php echo "?id=".$link."&r=".$i."&dinero=".$dinero ?>">
					<div class="col-md-5 col-md-offset-1">
						<h4>
							<?php echo $respuestas[$id][$i]; ?>
						</h4>
					</div>
				</a>
				<?php
				}
				?>
			</div>
			<?php

				}
			}
			else
			{

			?>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1 class='felicidades'>Lo sentimos, has perdido</h1>
					</br>
					<center>
						<a href='?id=0' class='iniciar'>Iniciar de nuevo</a>
					</center>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</body>
</html>
