<?php

get_header();

?>

 

    <section class="blog-posts grid-system common-page">
      <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/content','post');?>
            
     </div>
    </div>
    </section>

<?php 

get_footer();

?>