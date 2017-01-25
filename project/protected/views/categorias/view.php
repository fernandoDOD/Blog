<section class="blog"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/parallax.png" class="img-parallax"/>
  <div class="row top-xs col-xs-12 title-section-blog">
    <div class="title col-xs-12 row center-xs middle-xs">
      <h2>BLOG</h2>
    </div>
    <div class="content-blog row top-xs col-xs-12">
      <div class="col-xs-12 center-xs"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/shadow.png" class="shadow"/></div>
       
        <?php foreach ($categorias->posts as $key => $post) { ?>

        <div class="col-sm-12 col-md-4">
          <div class="card small">
            <div class="card-image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/parallax.png"/><span data-scrollflow-start="0" data-scrollflow-distance="20" class="scrollflow -slide-right -opacity card-title"><?php echo MyMethods::myStrtoupper($post->nombre); ?></span></div>
            <div class="card-content">
              <?php echo $post->descripcion ?>
            </div>
            <div class="card-action"><a href="<?php echo $this->createUrl('/posts/'.MyMethods::normalizarUrl($post->id.'_'.$post->nombre)); ?>">Leer más</a></div>
          </div>
        </div>

       <?php } ?> 

    </div>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red"  href="<?php echo $this->createUrl('/blog') ?>">
          <i class="large material-icons">fast_rewind</i>
        </a>
      </div>
  </div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>
