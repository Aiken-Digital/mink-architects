<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1280, initial-scale=1.0">
    
    <title>Mink Architects: <?php echo wp_title(""); ?></title>
    
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
    
    <script type='text/javascript' src='//use.typekit.net/mwm1qtm.js'></script>
    <script type='text/javascript'>try{Typekit.load();}catch(e){}</script>
  </head>
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'single-post-thumbnail'); ?>
  <?php 
    for($i = 0; $i < 10; $i++) {
      if(MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image-'.$i , NULL, 'secondary-featured-thumbnail') != NULL &&
        MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image-'.$i , NULL, 'secondary-featured-thumbnail') != "") {
          $images[] = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image-'.$i, NULL,  'secondary-featured-thumbnail');
      }
    }
  ?>
  <body class="single-project" style="background: url(<?php echo $featured[0]; ?>) center no-repeat;">
    <div class="slide-essentials">
      <a href="<?php echo home_url(); ?>/projects" class="close-button">X</a>
      <div class="right-align">
        <div class="slide-dots">
          <ul>
            <li class="selected"></li>
            <?php foreach($images as $image) : ?>
            <li></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <section class="slide">
      <div class="first-slide-indicator">Scroll Down to View Portfolio</div>
      <div class="vertical-alignment">
        <div class="title">
          <?php the_title(); ?>
        </div>
        <div class="subtitle">
          <?php the_content(); ?>
        </div>
        <div class="subtitle">
          <?php the_subtitle(); ?>
        </div>
      </div>
    </section>

    <?php foreach($images as $image) : ?>
    <section class="slide">
      <div class="background" style="background: url(<?php echo $image; ?>) center no-repeat;"></div>
    </section>
    <?php endforeach; ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.panelSnap.js"</script>
    <script type="text/javascript" src="//use.typekit.net/mwm1qtm.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/blur.min.js"></script>
    <script>
      $('body').panelSnap({
        onSnapFinish: function(){
          $('.slide-dots li').removeClass('selected');

          $('.slide-dots li').eq($('section.active').index()-1).addClass('selected');
        },
        directionThreshold: 20,
        slideSpeed: 150
      });
    </script>
  </body>

  <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
</html>