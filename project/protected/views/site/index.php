<div id="particles-background" class="vertical-centered-box"></div>
<div id="particles-foreground" class="vertical-centered-box"></div>
<div id="contenedor" class="contenedor">
  <section class="tarjeta">
    <section class="slider_banner">
      <div id="banner" class="banner">
      <?php foreach ($slide->images as $key => $imagen) { ?>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/galleries/<?php echo $slide->id_gallery ?>/<?php echo $imagen->name ?>" alt="" class="slide"/>
      <?php } ?>
      </div>
      <a id="banner-prev" href="#" class="flecha-banner anterior"><span class="fa fa-chevron-left"></span></a><a id="banner-next" href="#" class="flecha-banner siguiente"><span class="fa fa-chevron-right"></span></a>
    </section>
    <section class="slider_info"><a id="info-prev" href="#" class="flecha-info anterior"><span class="fa fa-chevron-left"></span></a><a id="info-next" href="" class="flecha-info siguiente"><span class="fa fa-chevron-right"></span></a>
      <section id="informacion" class="informacion">
        <article id="info">
          <div class="slide active">
            <h1 class="nombre">Fernando Vega</h1>
            <span class="trabajo">Desarrollador Web</span><br><br>
            <span class="pais"><img src="images/bandera.png" alt=""/>Colombia</span>
          </div>

           <?php foreach ($items as $key => $item) { ?>
             
            <div class="slide">
              <h2 class="subtitulo"><?php echo $item->nombre ?></h2>
              <p><?php echo $item->descripcion ?></p>
            </div>

           <?php } ?> 

        </article>
        <div id="botones" class="botones"></div>
      </section>
    </section>
  <?php 
    $facebook = GeneralValue::model()->findByPk(3);
    $twitter = GeneralValue::model()->findByPk(4);
    $linkedin = GeneralValue::model()->findByPk(8);
    $google = GeneralValue::model()->findByPk(7);
    $youtube = GeneralValue::model()->findByPk(5);
    $whatsapp = GeneralValue::model()->findByPk(6);
   ?>

    <section class="redes_sociales">
      <a target="_blank" href="<?php echo $facebook->value ?>" class="facebook"><span class="fa fa-facebook"></span></a>
      <a target="_blank" href="<?php echo $twitter->value ?>" class="twitter"><span class="fa fa-twitter"></span></a>
      <a target="_blank" href="<?php echo $linkedin->value ?>" class="linkedin"><span class="fa fa-linkedin"></span></a>
      <a target="_blank" href="<?php echo $google->value ?>" class="google"><span class="fa fa-google-plus"></span></a>
      <a target="_blank" href="<?php echo $youtube->value ?>" class="youtube"><span class="fa fa-youtube"></span></a>
      <a target="_blank" class="tooltipped whatsapp" data-position="top" data-delay="50" data-tooltip="<?php echo $whatsapp->value ?>"><span class="fa fa-whatsapp"></span></a>
    </section>
    <section class="blog-link"><a href="<?php echo $this->createUrl('/blog') ?>">
        <h4>INGRESA A MI BLOG</h4></a></section>
  </section>
</div>
