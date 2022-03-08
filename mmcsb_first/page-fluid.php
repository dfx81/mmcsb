<?php 
  /**
    * Template //Name: Fluid Page
    **/
  get_header();
?>
<main class="main">
<div class="container-lg content">
<?php
  if (have_posts()):
    while (have_posts()): the_post();
      the_content();
    endwhile;
  endif;
?>
</div>
</main>
<?php get_footer();?>