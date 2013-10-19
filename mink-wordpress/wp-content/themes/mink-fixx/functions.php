<?php

  if (class_exists('MultiPostThumbnails')) {
    for($i = 1; $i <= 10; $i++) {
      new MultiPostThumbnails(array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image-'.$i,
        'post_type' => 'post'
      ));
    }
  }

  add_theme_support('post-thumbnails', array('post'));
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );

?>