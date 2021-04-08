<?php

  get_header();
?>
<div class="banner-img-404">
    <?php
        pageBanner();
    ?>
</div>
<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="page-wrapper">
                <div class="page-content container m-5 text-block-style text-404">
                <h1 class="page-title">404</h1>
                <h2><?php _e( "[:en]Page Not Found[:][:fr]Page non trouvée[:]"); ?></h2>
                    <h2><?php _e( "[:en]Page not found. Please visit our pages[:][:fr]Page non trouvée. Veuillez visiter nos pages[:]" ); ?></h2>
                    <a href="http://clicarmoires.local/"><?php _e("[:en]Home Page[:][:fr]Acceuil[:]"); ?></a> |
                    <a href="http://clicarmoires.local/kitchen/kitchens/"><?php _e("[:en]Kitchens[:][:fr]Cuisines[:]"); ?></a> |
                    <a href="http://clicarmoires.local/wardrobe/wardrobes/"><?php _e("[:en]Wardrobes[:][:fr]Garde-robes[:]"); ?></a>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
        </div><!-- #content -->
    </div><!-- #primary -->
<?php
  get_footer();
?>
