<?php get_header(); ?>
<!-- Begin home.php -->
  <div class="main">
    <div class="content">
      <div class="blog">
        <?php
          if(have_posts()){
            while(have_posts()) {
              the_post(); ?>
              <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry">   
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <p class="postmetadata">
                    Posted on <?php the_date(); ?> <?php _e('by'); ?> <?php  the_author(); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                    </p>
                </div><!-- End entry -->
              </div><!-- End blog -->
            <?php } /* End while */ ?>
          <?php } /* End if */
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>
<!-- End home.php -->