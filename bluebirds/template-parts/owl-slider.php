<?php

        $sliderPosts = new WP_Query( [
            'post_type' => 'post',
            'posts_per_page' => 12,
            'order' => 'DESC',

        ] );
        
 
?>



      <div class="container-fluid">
      <h2 class="header-text"><?php _e('Latest Articles','bluebirds'); ?></h2>
        <div class="owl-banner owl-carousel">
            <?php if ( $sliderPosts->have_posts() ): while ( $sliderPosts->have_posts() ):
                                     $sliderPosts->the_post();
            ?>
          <div class="item">
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <a href="<?php echo get_the_permalink()?>"><?php the_post_thumbnail(); ?></a>
            <div class="item-content">
              <div class="main-content">
                <a href="<?php echo get_the_permalink()?>"><h4> <?php the_title();?></h4></a>
              </div>
            </div>
           </div>
          </div>
        <?php
         endwhile;
          endif;
          wp_reset_postdata();
         ?>
        </div>
      </div>
   

