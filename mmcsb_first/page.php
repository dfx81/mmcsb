<?php get_header();?>
<main class="main">
<div class="container-lg content">
<?php
  if (have_posts()):
    while (have_posts()): the_post();
      the_title("<h1>", "</h1><hr>");
      the_content();
    endwhile;
  endif;
?>
</div>
</main>
<?php get_footer();?>