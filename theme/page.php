<?php get_header(); ?>
<!-- Begin home.php -->
  <div class="main">
    <div class="content">
      <div class="blog">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <div class="post">
                <h2><?php the_title(); ?></h2>
                <div class="entry">
                  <?php the_content(); ?>
                </div><!-- End entry -->
              </div><?php
            }
          }
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
  <script src="wp-content/themes/theme/js/jquery.js"></script>
  <script src="wp-content/themes/theme/js/jquery.lightbox-0.5.min.js"></script>
  <script>
    $(function() {
      $('.gallery a').lightBox();
    });
  </script>
<?php get_footer(); ?>
<!-- End home.php -->