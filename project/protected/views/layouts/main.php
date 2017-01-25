<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="es">
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?> /images/favicon.ico">
	<!-- VENDORS CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/font-awesome/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?> /vendor/background/background.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/fondo/fondo.png) no-repeat fixed; background-size: cover;">
	<body>
		<div class="btn-lateral-menu"><a href="#" data-activates="slide-out" class="button-collapse"><span class="fa fa-navicon"></span></a></div>
		<section id="content-body">
			<?php echo $content; ?>
	  </section>
		<ul id="slide-out" class="side-nav">
		  <li>
		    <div class="userView">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pattern.png" class="background"/>
					<a href="blog__admin/login"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/perfil.png" class="circle"/></a>
					<span class="white-text name">Fernando Vega</span>
					<span class="white-text email">fernando.vega@siasoftware.com</span>
				</div>
		  </li>
		  <li><a href="<?php echo $this->createUrl('/index') ?>" class="fa fa-laptop"> <span>Perfil</span></a></li>
		  <li><a href="<?php echo $this->createUrl('/blog') ?>" class="fa fa-pencil-square-o"> <span>Blog</span></a></li>
		</ul>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/background/background.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/materialize/js/materialize.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/scrollflow/eskju.jquery.scrollflow.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>
