  <?php 
    $fraseuno = GeneralValue::model()->findByPk(1);
    $frasedos = GeneralValue::model()->findByPk(2);
    $facebook = GeneralValue::model()->findByPk(3);
    $twitter = GeneralValue::model()->findByPk(4);
    $linkedin = GeneralValue::model()->findByPk(8);
    $google = GeneralValue::model()->findByPk(7);
    $youtube = GeneralValue::model()->findByPk(5);
    $whatsapp = GeneralValue::model()->findByPk(6);
  ?>

<footer class="row middle-xs between-xs center-xs">
  <div class="col-sm-12 col-md-4 mascota"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mascota.png"/>
    <h4><?php echo $fraseuno->value ?></h4>
  </div>
  <div class="col-sm-12 col-md-4 logo-sia row center-xs around-xs">
    <div class="col-xs-12"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-sia.png"/></div>
  </div>
  <div class="col-sm-12 col-md-4 frase">
    <h3><?php echo $frasedos->value ?></h3>
  </div>
  <div class="col-sm-6 row center-xs around-xs">

    <section style="background: transparent;" class="redes_sociales">
      <a target="_blank" href="<?php echo $facebook->value ?>" class="facebook"><span class="fa fa-facebook"></span></a>
      <a target="_blank" href="<?php echo $twitter->value ?>" class="twitter"><span class="fa fa-twitter"></span></a>
      <a target="_blank" href="<?php echo $linkedin->value ?>" class="linkedin"><span class="fa fa-linkedin"></span></a>
      <a target="_blank" href="<?php echo $google->value ?>" class="google"><span class="fa fa-google-plus"></span></a>
      <a target="_blank" href="<?php echo $youtube->value ?>" class="youtube"><span class="fa fa-youtube"></span></a>
      <a target="_blank" class="tooltipped whatsapp" data-position="top" data-delay="50" data-tooltip="<?php echo $whatsapp->value ?>"><span class="fa fa-whatsapp"></span></a>
    </section>

  </div>
  <div class="col-xs-12 end-footer"><a target="_blank" href="http://siasoftware.com/">
      <h5>© 2017 Sia-Software</h5></a></div>
</footer>