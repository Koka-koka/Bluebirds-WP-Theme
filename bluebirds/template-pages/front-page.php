<?php

/*
 * Template name:  Home Page - template 
 */

get_header();

?>
        
    
    <?php get_template_part('template-parts/owl-slider');?>
    
    <section class="blog-posts common-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <h2><?php _e('Featured Articles','bluebirds'); ?></h2>
                
                 <?php
                              $latestNews = new WP_Query( [
                                'post_type' => 'post',
                                'posts_per_page' => 10,
                                'orderby' => 'rand',
                    
                            ] );
                        if ( $latestNews->have_posts() ): while ( $latestNews->have_posts() ):
                                     $latestNews->the_post();
                    ?>
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post-home">
                  <div <?php post_class(); ?>>
                    <div class="blog-thumb">
                      <a href="<?php echo get_the_permalink()?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="down-content">
                      
                      <a href="<?php echo get_the_permalink()?>"><h4> <?php the_title();?></h4></a>
                      <ul class="post-info">
                        <li><?php the_author();?></li>
                        <li><?php the_category(', '); ?>,</li>
                        <li><?php echo get_the_date('F d, Y') ?></li>
                      </ul>
                      <div><?php the_excerpt()?></div>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><?php the_tags('', ', ', '');?></li>
                            </ul>
                          </div>
                          <div class="col-6">
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   
                        <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                        ?>

                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) );?>">View All Posts</a>
                  </div>
                </div>
              
            </div>
          </div>
        <?php if ( is_active_sidebar( 'main' ) ) : ?>
         <div class="col-lg-4"> 
             
            <?php get_sidebar();?>
             
         </div>
        <?php endif; ?>
        </div>
      </div>
    </section>

<?php

get_footer();

?>