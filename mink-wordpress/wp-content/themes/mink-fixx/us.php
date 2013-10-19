<?php
/**
 * Template Name: Us Page
 * Description: Us Page
 */
?>

<?php get_header(); ?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="about">
          <?php the_content(); ?>
        </div>
        <div class="contact-form">
          <form action="#" method="post">
            <div class="form-row">
              <label for="form-name">Name *</label>
              <input type="text" name="name" id="form-name">
            </div>
            <div class="form-row">
              <label for="form-email-address">Email Address *</label>
              <input type="text" name="email" id="form-email-address">
            </div>
            <div class="form-row">
              <label for="form-message">Message</label>
              <textarea name="message" id="form-message"></textarea>
            </div>
            <div class="form-row">
              <input type="submit" value="Send">
            </div>
          </form>
        </div>

        <div class="contact-details">
          <ul>
            <li><strong>Mink Architects</strong></li>
            <li>258 Middle Road</li>
            <li>Singapore 188987</li>
          </ul>
          <ul>
            <li><a href="mailto:studio@minkarchitects.com">studio@minkarchitects.com</a></li>
            <li>tel: +65 6372 2468</li>
            <li>fax: +65 6225 9776</li>
          </ul>
          <ul>
            <li>
              <a class="map-link" href="https://www.google.com.sg/maps/preview#!q=Mink+Architects&data=!1m4!1m3!1d1823!2d103.8504325!3d1.3017055!4m29!2m16!1m14!1s0x0%3A0xfa4a97d19fcb61ec!3m8!1m3!1d233340!2d103.8240449!3d1.3437459!3m2!1i1280!2i702!4f13.1!4m2!3d1.3015963!4d103.8504124!5e4!6smink+architects!5m11!1m10!1smink+architects!4m8!1m3!1d233340!2d103.8240449!3d1.3437459!3m2!1i1280!2i702!4f13.1">
                <div class="overlay">
                  +
                </div>
                <div class="map">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mink-map.png" />
                </div>
              </a>
            </li>
          </ul>
        </div>
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
<?php get_footer(); ?>