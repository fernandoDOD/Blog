<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="row center-xs middle-xs" style="position: absolute;height: 90%;width: 100%;">
	<div class="col-xs-12">
		
		<h1 style="color: #fff; font-size: 60px;">Error <?php echo $code; ?></h1>

		<div class="error">
		<h5 style="color: #fff; font-size: 40px;">Ups! tenemos un problema,</br> tratare de solucionarlo lo mas pronto posible.</h5>
		</div>
	</div>	
</div>