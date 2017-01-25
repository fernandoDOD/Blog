<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=945417742255994";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="blog">
  <div style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/parallax.png) center no-repeat;he;background-size: cover;background-attachment: fixed;height: 300px;" class="img-parallax"></div>
  <div class="row top-xs col-xs-12">
    <div class="title col-xs-12 row center-xs middle-xs" style="width: 100%; height: auto;">
      <h2 style="font-size: 45px"><?php echo MyMethods::myStrtoupper($post->nombre); ?></h2>
    </div>

    <div style="padding: 0 10px;" class="content-blog row top-xs col-sm-12 col-ms-9">
      <div class="col-xs-12 center-xs"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/shadow.png" class="shadow"/></div>
      <div style="padding: 0;" class="col-xs-12">

          <div style="padding: 0;" class="card">
            <div class="card-image">
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/700x300/<?php echo $post->imagen ?>" style="width: 100%; max-height: 500px;" />
            <span class="card-title"><?php echo MyMethods::myStrtoupper($post->nombre); ?></span></div>
            <div class="card-content row center-xs">
              <?php echo $post->descripcion ?>
            </div>
            <div class="card">
              <div class="fb-comments" data-href="https://developers.facebook.com/jvegapineda/posts/<?php echo $post->post__url ?>" data-width="100%" data-numposts="10" data-include-parent="false"></div>
            </div>
          </div>

      </div>
    </div>
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large red"  href="<?php echo $this->createUrl('/blog') ?>">
        <i class="large material-icons">fast_rewind</i>
      </a>
    </div>

  </div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>
