<?php get_header(); ?>
<!-- Begin home.php -->
  <div class="flexslider">
    <ul class="slides">
      <!-- Add slider images here -->
      <li><img src="wp-content/uploads/2013/03/shutterstock_31535446-e1363793950741.jpg" height="350" width="800" alt=""></li>
      <li><img src="wp-content/uploads/2013/03/shutterstock_17394940-e1363795566567.jpg" height="350" width="800" alt=""></li>
    </ul>
  </div>
  <div class="main">
    <div class="content">
      <div class="blog">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry">   
                  <?php the_post_thumbnail(); ?>
                  <?php the_content(); ?>
                  <p class="postmetadata">
                    Posted on <?php the_date(); ?> <?php _e('by'); ?> <?php  the_author(); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                  </p>
                </div><!-- End entry -->
              </article><?php
            }
          }
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
  <script src="wp-content/themes/theme/js/jquery-1.9.0.min.js"></script>
  <script src="wp-content/themes/theme/js/jquery.flexslider-min.js"></script>
  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });
  </script>
<?php get_footer(); ?>
<!-- End home.php -->