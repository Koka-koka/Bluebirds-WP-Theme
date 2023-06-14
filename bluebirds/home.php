<?php

get_header();

?>

 

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          
          <?php get_template_part('template-parts/content','post');?>
          
     <?php if ( is_active_sidebar( 'main' ) ) : ?>       
       <div class="col-lg-4">
        <?php get_sidebar(); ?>
      </div>
      <?php endif; ?>
     </div>
    </div>
    </section>

<?php 

get_footer();

?>