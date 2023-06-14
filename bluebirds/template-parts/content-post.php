<div class="col-lg-8">
              <div class="all-blog-posts">
                  <h2><?php _e('Articles From','bluebirds'); ?><?php wp_title(); ?></h2>
                <div class="row">
                    

                
                
                        <?php
                               if (have_posts()) : while (have_posts()) : the_post();
                      ?>
                         
                            <div class="col-lg-6">
                                <div class="blog-post">
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                                    <div><?php the_excerpt() ?></div>
                                    <div class="post-options">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <ul class="post-tags">
                                          <li><i class="fa fa-tags"></i></li>
                                          <li><?php the_tags(' ', ', ', '');?></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                 </div>
                                 </div>
                              </div>
                          </div>
                        
                
                        <?php
                                
                                  endwhile; else : ?>
                                        <section class="blog-posts grid-system">
                                          <div class="container">
                                              <div class="row">
                                                  <div class="not-found">
                                            <h1 class="page-title"><?php esc_html_e( 'Oops! That article can&rsquo;t be found.', 'bluebirds' ); ?></h1>
                                                  </div>
                                              </div>
                                          </div>
                                       </section>
                          <?php    
                              endif;
                          ?>
                   
                 
                


              


                  </div>
       </div>
       <div class="pagination">
         <?php the_posts_pagination();?>
      </div>
</div>