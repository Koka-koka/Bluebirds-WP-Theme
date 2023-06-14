<?php

get_header();

?>

 

 <section class="blog-posts grid-system common-page">
      <div class="container">
        <div class="row">
          
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                <?php while ( have_posts() ) : the_post(); ?>
                  <div class="blog-post">

                    <div class="down-content">
                  
                      <h2><?php the_title();?></h2>
                            <ul class="post-info">
                                        <li><?php the_author();?></li>
                                        <li><?php the_category(', '); ?>,</li>
                                        <li><?php echo get_the_date('F d, Y') ?></li>
                            </ul>
                        <div class="blog-thumb-single">
                          <?php the_post_thumbnail();?>
                        </div>
                      <div><?php the_content();?></div>
                      <div class="pagination">
                      <?php wp_link_pages();?>
                      </div>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags" aria-hidden="true"></i></li>
                              <li><?php the_tags('', ', ', '');?></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="https://twitter.com/" target="blank"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="https://www.vk.com/" target="blank"><i class="fa fa-vk"></i></a></li>
                              <li><a href="https://www.linkedin.com/" target="blank"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="https://www.youtube.com/" target="blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                  <?php endwhile; ?>
                </div>

              </div>
            </div>
            <div class="col-lg-12">
                             <?php  if ( comments_open() || get_comments_number() ) :
                              comments_template();
                          endif; ?>
                
                          </div>
        </div>
      </div>
    </section>


<?php 

get_footer();

?>