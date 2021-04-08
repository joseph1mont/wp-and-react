<?php
  get_header();
  while(have_posts()) {
    the_post();
    // pageBanner();
?>
<div class="container mt-5" style="height: 50vh">
    <h2><?php the_title(); ?></h2>
    <?php    the_content();
    ?>

</div>
<?php }
get_footer();
?>
