<?php get_header();?>
<main class="container-lg main">
  <div class="content">
    <h1>News</h1>
    <hr>
    <div class="list-group text-align-start">
      <?php
      $wp_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

      if ($wp_query -> have_posts()):
        while ($wp_query -> have_posts()) : $wp_query -> the_post();
          ?>
          <a href="<?php the_permalink();?>" class="list-group-item list-group-item-action">
              <?php
              the_title('<h2 class="h4">', '</h2>');
              ?>
              <small><?php echo get_the_date(); ?></small>
          </a>
          <?php
          wp_reset_postdata();
        endwhile;
      else:
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
      endif;
      ?>
    </div>
  </div>
  <?php get_sidebar();?>
</main>
<?php get_footer();?>