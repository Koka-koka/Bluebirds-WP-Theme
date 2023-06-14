<?php
get_header();

?>

<section class="common-page">
      <div class="container">    	
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div><?php the_content();?></div>
              <?php  if ( comments_open() || get_comments_number() ) :
			      comments_template();
			                endif; ?>

     </div>
</section>
          
      <?php endwhile; endif;
      get_footer();?>          