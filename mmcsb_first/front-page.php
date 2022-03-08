<?php get_header();?>
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
<img src="<?php bloginfo('template_url');?>/assets/bg.jpeg" class="bg" alt="A doctor's office" aria-hidden="true">
<?php get_footer();?>