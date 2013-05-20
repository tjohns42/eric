<?php get_header(); ?>
<!-- Begin index.php -->
  <div class="row-fluid">
    <div id="blog" class="span7 offset1">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="post">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="entry">   
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
                <p class="postmetadata">
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </p>
              </div><!-- End entry -->
            </div><!-- End post -->
          <?php } /* End while */ ?>
        <div class="navigation">
          <?php posts_nav_link(); ?>
        </div><!-- End navigation -->
        <?php } /* End if */
      ?>
    </div><!-- End blog -->
<?php get_sidebar(); ?>
  </div>   
<?php get_footer(); ?>
<!-- End index.php -->