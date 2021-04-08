<?php
  get_header();
  while(have_posts()) {
    the_post();
    // pageBanner();
?>
<div class="container mt-5">
    <?php
        the_content();
    ?>
</div>
<?php }
get_footer();
?>
