<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="language" content="es" />

<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Desarrollo de Software" />
<meta name="author" content="" />
<meta name="robots" content="index, follow" />
<meta name="keywords"
	content="Desarrollo, Software , Freelance, Aplicaciones , moviles , mobile , development" />
<meta name="title" content="Desarrollo de Software" />

<link href="http://fonts.googleapis.com/css?family=Droid+Serif:Bold"
	rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Droid+Sans"
	rel="stylesheet" type="text/css" />


<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/fenix.css" />



<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container-narrow" id="page">

		<div class="masthead">
			<ul class="nav nav-pills pull-right">
			
				<li class="<?php echo ($this->menuSelection=='INDEX' ? 'active':'')?>">
					<?php echo CHtml::link('Home', array('site/index')); ?>
				<li class="<?php echo ($this->menuSelection=='NOSOTROS' ? 'active':'')?>">
					
				</li>
				<li class="<?php echo ($this->menuSelection=='CONTACTO' ? 'active':'')?>">
					<?php echo CHtml::link('Contacto', array('site/contact')); ?>
				</li>
				
			</ul>
			
			
			
			<div class="logo" style="width: 65px">
				<img src="img/FenixLabsLogo.png" width="100%" height="100%" />
			</div>
		</div>

		<hr />

		<!-- header -->
		<div class="jumbotron">
			<h1>
				<span class="muted">Fenix Labs. <br />Desarrollo de Software
				</span>
			</h1>

			<p class="lead">Creamos soluciones integrales enfocadas a
				dispositivos móviles y aplicaciones web.</p>

			<!-- Button to trigger modal -->
			<a href="index.php?r=site/contact" role="button" data-toggle="modal"
				class="btn btn-large btn-custom"> <i class="icon-envelope"></i>
				Contáctanos
			</a>

		</div>
		<hr />
		<!-- Contenido -->
		<?php echo $content; ?>
		<!-- footer -->
		<div id="footer" class="footer">
			<footer>
			
			<p class="pull-right">
				<a href="#">Back to top</a>
			</p>
			<p>
				© 2012 FenixLabs, Todos los derechos reservados. · <a href="#">Privacy</a>
				· <a href="#">Terms</a>
				
				
			</p>
			</footer>
		</div>

		<!-- footer -->

	</div>
	<!-- page -->

	<script
		src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>
	<script
		src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script
		src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
		$.backstretch("img/background.jpg");
	</script>

</body>
</html>
