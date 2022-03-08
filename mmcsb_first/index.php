<?php get_header();?>
<main class="container-lg main">
<div class="content">
<?php
  if (have_posts()):
    while (have_posts()): the_post();
      the_title("<h1>", "</h1><hr>");
      the_content();
    endwhile;
  endif;
?>
</div>
<?php get_sidebar();?>
</main>
<?php get_footer();?>