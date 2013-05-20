<?php get_header(); ?>
<!-- Begin home.php -->
  <div class="main">
    <div class="content">
      <div class="blog">
        <?php
          get_header();
          if (have_posts()) {
          
            $post = $posts[0]; // Hack. Set $post so that the_date() works.
          
             // category archive
             if (is_category()) { ?>
               <h2>Archive for &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
             <?php }
          
             // tag archive
             elseif(is_tag()) { ?>
               <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
             <?php }
          
             // daily archive
             elseif (is_day()) { ?>
               <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
             <?php }
          
             // monthly archive
             elseif (is_month()) { ?>
               <h1>Archive for <?php the_time('F, Y'); ?></h1>
             <?php }
          
             // yearly archive
             elseif (is_year()) { ?>
               <h1>Archive for <?php the_time('Y'); ?></h1>
             <?php }
          
             // author archive
             elseif (is_author()) { ?>
               <h1>Author Archive</h1>
             <?php }
          
             // paged archive
             elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
               <h1>Blog Archives</h1>
             <?php } ?>
          
             <ul>
             <?php while (have_posts()) : the_post(); ?>
               <li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
             <?php endwhile; ?>
             </ul>
            <?php
          }
          else {
            echo "<h1>Not Found</h1>";
            // category archive
            if (is_category()) {
              printf("<p>Sorry, but there aren't any posts in the %s category yet.</p>", single_cat_title('',false));
            }
            // date archive
            else if (is_date()) {
              echo("<p>Sorry, but there aren't any posts with this date.</p>");
            }
            // category archive
            else if (is_author()) {
              $userdata = get_userdatabylogin(get_query_var('author_name'));
              printf("<p>Sorry, but there aren't any posts by %s yet.</p>", $userdata->display_name);
            }
            else {
              echo "<p>No posts found.</p>";
            }
          }
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>
<!-- End home.php -->