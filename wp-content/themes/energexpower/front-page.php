<?php get_header(); ?>

<?php $heroImage = get_field('hero-image');
    if( $heroImage ) { ?>
        <section class="banner" style="background: url(<?php echo $heroImage ['url'] ?>)">
        <?php } else { ?>
        <section class="banner" style="background: url(<?php echo get_theme_file_uri('/images/hero.png'); ?>)"></section>
        <?php } ?>    
        <div><h1 class="banner__text">Lorem Ipsom</h1></div>
        </section>


<!-- </section> -->
<section class="section-home categories container">
<p class="categories__heading">Please select one of the categories to find the desired information or use the search field</p>
    <div class="row cat-row">

        <!-- <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 1</p>
            </div>
        </div>
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 2</p>
            </div>
        </div>        
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 3</p>
            </div>
        </div>        
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 4</p>
            </div>
        </div>
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 5</p>
            </div>
        </div>
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 6</p>
            </div>
        </div>        
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 7</p>
            </div>
        </div>
        <div class="category col-md-6 col-xl-3">
            <div class="category__content">
                <img src="#" />
                <p class="category__text">Box 8</p>
            </div>
        </div>                     -->
    </div>
</section>
<section class="section-home social">
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-facebook"></a>
</section>


<?php get_footer(); ?>