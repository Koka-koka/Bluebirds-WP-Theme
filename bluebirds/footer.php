<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-content">  

               <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                <div class="footer-widget-area">
                <?php dynamic_sidebar('footer1');?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
                <div class="footer-widget-area">
                <?php dynamic_sidebar('footer2');?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer3' ) ) : ?>
                <div class="footer-widget-area">
                <?php dynamic_sidebar('footer3');?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'social-icons' ) ) : ?>
                <div class="footer-widget-area">
                <?php dynamic_sidebar('social-icons');?>
                </div>
                <?php endif; ?>

            </div>
          </div>
          <div class="col-lg-12">
            
             <?php if ( is_active_sidebar( 'copyrightrules' ) ) : ?>
                <div class="copyright-text">
                <?php dynamic_sidebar('copyrightrules');?>
                <div class="year"><?php echo "  ".date('Y');?></div>
                </div>
                <?php endif; ?>
                
            
          </div>
        </div>
      </div>
    </footer>

   <?php wp_footer(); ?>
              
  </body>
</html>