<?php
/**
 * Template Name: Projects Page
 * Description: Projects Page
 */
?>

<?php get_header(); ?>

        <div class='results-area' id="mobile">
          <h1>Projects</h1>
          <div class='results'>
            <ul>
              <?php
                if (have_posts()) :
                  $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wposts.post_status = 'publish' AND wposts.post_type = 'post'");
                  foreach($years as $year) :
                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND YEAR(wposts.post_date) = '" . $year . "'");
                    foreach($months as $month) : 
                      $theids = $wpdb->get_results("SELECT DISTINCT ID, post_title, post_date FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND MONTH(wposts.post_date)= '" . $month . "' AND YEAR(wposts.post_date) = '" . $year . "'");
                      foreach ($theids as $theid) :
                        $thesub = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->postmeta wmeta WHERE wmeta.meta_key = 'kia_subtitle' AND wmeta.post_id = $theid->ID")
              ?>
              <li>
                <a href='?p=<?php echo $theid->ID; ?>'><?php echo $theid->post_title; ?></a>
                <?php echo $thesub[0]; ?>
              </li>
              <?php
                      endforeach;
                    endforeach;
                  endforeach;
                endif;
              ?>
            </ul>
          </div>
        </div>

        <div id="desktop">
          <div class='tab-navigation'>
            <ul>
              <li id='architecture-selector' class='tab-selector selected'>Architecture</li>
              <li id='interior-design-selector' class='tab-selector'>Interior Design</li>
              <li id='master-planning-selector' class='tab-selector'>Master Planning</li>
            </ul>
          </div>
          <div id='architecture-tab' class='tab-content selected'>
            <div class='filter-selector'>
              <div class='heading'>
                <div class='title'>Type</div>
                <div class='expand'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up.png' />
                </div>
              </div>
              <div class='filters'>
                <ul>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-1' checked />
                    <label for='architecture-checkbox-1'>All</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-2' />
                    <label for='architecture-checkbox-2'>Restaurants &amp; Bars</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-3' />
                    <label for='architecture-checkbox-3' for='architecture-checkbox-1'>Offices</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-4' />
                    <label for='architecture-checkbox-4'>Residences</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-5' />
                    <label for='architecture-checkbox-5'>Hotels &amp; Resorts</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-6' />
                    <label for='architecture-checkbox-6'>Retail</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-7' />
                    <label for='architecture-checkbox-7'>Mixed Use</label>
                  </li>
                  <li>
                    <input type='checkbox' id='architecture-checkbox-8' />
                    <label for='architecture-checkbox-8'>Others</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class='results-area'>
              <div class='controls'>
                <div class='scroll-up' onMouseover='move("architecture-results", 2)' onMouseout='clearTimeout(move.to)'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/scroll-up.png' />
                </div>
                <div class='scroll-down' onMouseover='move("architecture-results", -2)' onMouseout='clearTimeout(move.to)'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/scroll-down.png' />
                </div>
              </div>
              <div class='results' id='architecture-results'>
                <ul>
                  <?php
                    if (have_posts()) :
                      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'architecture' AND wposts.post_status = 'publish' AND wposts.post_type = 'post'");
                      foreach($years as $year) :
                        $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'architecture' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND YEAR(wposts.post_date) = '" . $year . "'");
                        foreach($months as $month) : 
                          $theids = $wpdb->get_results("SELECT DISTINCT ID, post_title, post_date FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'architecture' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND MONTH(wposts.post_date)= '" . $month . "' AND YEAR(wposts.post_date) = '" . $year . "'");
                          foreach ($theids as $theid) :
                            $thesub = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->postmeta wmeta WHERE wmeta.meta_key = 'kia_subtitle' AND wmeta.post_id = $theid->ID")
                  ?>
                  <li>
                    <a href='?p=<?php echo $theid->ID; ?>'><?php echo $theid->post_title; ?></a>
                    <?php echo $thesub[0]; ?>
                  </li>
                  <?php
                          endforeach;
                        endforeach;
                      endforeach;
                    endif;
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div id='interior-design-tab' class='tab-content'>
            <div class='filter-selector'>
              <div class='heading'>
                <div class='title'>Type</div>
                <div class='expand'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up.png' />
                </div>
              </div>
              <div class='filters'>
                <ul>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-1' />
                    <label for='interior-design-checkbox-1'>All</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-2' />
                    <label for='interior-design-checkbox-2'>Restaurants &amp; Bars</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-3' checked/>
                    <label for='interior-design-checkbox-3' for='interior-design-checkbox-1'>Offices</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-4' />
                    <label for='interior-design-checkbox-4'>Residences</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-5' checked />
                    <label for='interior-design-checkbox-5'>Hotels &amp; Resorts</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-6' checked />
                    <label for='interior-design-checkbox-6'>Retail</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-7' />
                    <label for='interior-design-checkbox-7'>Mixed Use</label>
                  </li>
                  <li>
                    <input type='checkbox' id='interior-design-checkbox-8' checked />
                    <label for='interior-design-checkbox-8'>Others</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class='results-area'>
              <div class='controls'>
                <div class='scroll-up'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/scroll-up.png' />
                </div>
                <div class='scroll-down'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/scroll-down.png' />
                </div>
              </div>
              <div class='results'>
                <ul>
                  <?php
                    if (have_posts()) :
                      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'interior' AND wposts.post_status = 'publish' AND wposts.post_type = 'post'");
                      foreach($years as $year) :
                        $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'interior' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND YEAR(wposts.post_date) = '" . $year . "'");
                        foreach($months as $month) : 
                          $theids = $wpdb->get_results("SELECT DISTINCT ID, post_title, post_date FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'interior' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND MONTH(wposts.post_date)= '" . $month . "' AND YEAR(wposts.post_date) = '" . $year . "'");
                          foreach ($theids as $theid) :
                            $thesub = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->postmeta wmeta WHERE wmeta.meta_key = 'kia_subtitle' AND wmeta.post_id = $theid->ID")
                  ?>
                  <li>
                    <a href='?p=<?php echo $theid->ID; ?>'><?php echo $theid->post_title; ?></a>
                    <?php echo $thesub[0]; ?>
                  </li>
                  <?php
                          endforeach;
                        endforeach;
                      endforeach;
                    endif;
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div id='master-planning-tab' class='tab-content'>
            <div class='filter-selector'>
              <div class='heading'>
                <div class='title'>Type</div>
                <div class='expand'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up.png' />
                </div>
              </div>
              <div class='filters'>
                <ul>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-1' />
                    <label for='master-planner-checkbox-1'>All</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-2' checked />
                    <label for='master-planner-checkbox-2'>Restaurants &amp; Bars</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-3' checked />
                    <label for='master-planner-checkbox-3' for='master-planner-checkbox-1'>Offices</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-4' />
                    <label for='master-planner-checkbox-4'>Residences</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-5' checked />
                    <label for='master-planner-checkbox-5'>Hotels &amp; Resorts</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-6' />
                    <label for='master-planner-checkbox-6'>Retail</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-7' />
                    <label for='master-planner-checkbox-7'>Mixed Use</label>
                  </li>
                  <li>
                    <input type='checkbox' id='master-planner-checkbox-8' />
                    <label for='master-planner-checkbox-8'>Others</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class='results-area'>
              <div class='controls'>
                <div class='scroll-up'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/scroll-up.png' />
                </div>
                <div class='scroll-down'>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/img/scroll-down.png' />
                </div>
              </div>
              <div class='results'>
                <ul><?php
                    if (have_posts()) :
                      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'planning' AND wposts.post_status = 'publish' AND wposts.post_type = 'post'");
                      foreach($years as $year) :
                        $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'planning' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND YEAR(wposts.post_date) = '" . $year . "'");
                        foreach($months as $month) : 
                          $theids = $wpdb->get_results("SELECT DISTINCT ID, post_title, post_date FROM $wpdb->posts wposts, $wpdb->terms wterms, $wpdb->term_relationships wterm_relationships, $wpdb->term_taxonomy wterm_taxonomy WHERE wterm_relationships.object_id = wposts.ID AND wterm_relationships.term_taxonomy_id = wterm_taxonomy.term_taxonomy_id AND wterms.term_id = wterm_taxonomy.term_id AND wterm_taxonomy.taxonomy = 'category' AND wterms.name = 'planning' AND wposts.post_status = 'publish' AND wposts.post_type = 'post' AND MONTH(wposts.post_date)= '" . $month . "' AND YEAR(wposts.post_date) = '" . $year . "'");
                          foreach ($theids as $theid) :
                            $thesub = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->postmeta wmeta WHERE wmeta.meta_key = 'kia_subtitle' AND wmeta.post_id = $theid->ID")
                  ?>
                  <li>
                    <a href='?p=<?php echo $theid->ID; ?>'><?php echo $theid->post_title; ?></a>
                    <?php echo $thesub[0]; ?>
                  </li>
                  <?php
                          endforeach;
                        endforeach;
                      endforeach;
                    endif;
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

<?php get_footer("projects"); ?>