<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=945417742255994";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="blog">
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/parallax.png" class="img-parallax"/>
  <div class="row top-xs col-sm-12 title-section-blog">
    <div class="title col-sm-12 row center-xs middle-xs">
      <h2>BLOG</h2>
    </div>
    <div class="content-blog row top-xs col-sm-12 col-md-9">
      <div class="col-sm-12 center-xs"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/shadow.png" class="shadow"/></div>
       <?php foreach ($posts as $key => $post) { ?>

        <div class="col-sm-12 col-md-6" style="padding: 12px;">
          <div class="card medium">
            <div class="card-image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/300x300/<?php echo $post->imagen ?>"/><span data-scrollflow-start="0" data-scrollflow-distance="20" class="scrollflow -slide-right -opacity card-title"><?php echo MyMethods::myStrtoupper($post->nombre); ?></span></div>
            <div class="card-content">
              <?php echo $post->descripcion ?>
            </div>
            <div class="card-action"><a href="<?php echo $this->createUrl('/posts/'.MyMethods::normalizarUrl($post->id.'_'.$post->nombre)); ?>">Leer más</a></div>
          </div>
        </div>

       <?php } ?> 

      <div style="padding: 20px 0" class="col-sm-12 center-xs">
        <ul class="pagination">
          <li>
            <a <?php echo ($page != 1)?'href="'.$this->createUrl('blog/').'?page='.($page-1).'"':''; ?> class="<?php echo ($page == 1)?'disable':''; ?>" ><span class="fa fa-chevron-left"></span></a>
          </li>

              <?php
                for($i = 0; $i < $n_page; $i++) { ?>
                  
                  <li class="waves-effect <?php echo ($page==($i+1))?'active':''; ?>">
                    <a href="<?php echo $this->createUrl('blog/').'?page='.($i+1); ?>"><?php echo $i + 1; ?></a></li>
                  <li>

                <?php } ?>

            <a <?php echo ($page != $n_page)?'href="'.$this->createUrl('blog/').'?page='.($page+1).'"':''; ?> class="<?php echo ($page == $n_page)?'disable':''; ?>"><span class="fa fa-chevron-right"></span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="title-post-category z-depth-2">
        <h4>CATEGORIAS</h4>
      </div>
      <div class="content-post-category z-depth-1">
        
        <?php foreach ($categorias as $key => $categoria) { ?>

          <a href="<?php echo $this->createUrl('/categorias/'.MyMethods::normalizarUrl($categoria->id.'_'.$categoria->nombre)); ?>"><?php echo $categoria->nombre ?></a>

        <?php } ?>

      </div>
      <div  class="content-post-category row center-xs" style="padding: 0;">
        <div class="col-xs-12 fb-page z-depth-1" data-href="https://www.facebook.com/siasoftwarecode/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/siasoftwarecode/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/siasoftwarecode/">Sia Software</a></blockquote></div>
          
      </div>
    </div>
  </div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>
