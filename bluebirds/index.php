<?php

get_header();

?>

 

<div class="row">
                    

                
                
                    <?php
                           if (have_posts()) : while (have_posts()) : the_post();
                  ?>
                     
                  <div class="col-lg-6">
                       <div class="blog-post">
                          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="down-content">
                                  <a href="<?php echo get_the_permalink()?>"><h4> <?php the_title();?></h4></a>
                                <div><?php the_content(); ?></div>
                             </div>
                            </div>
                        </div>
                      </div>
                    
            
                    <?php
                            
                              endwhile; endif; ?>
               
             
            


          


              </div>
 </div>

<?php 

get_footer();

?>