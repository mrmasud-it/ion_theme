<?php
/*
* Template Name: Home with sidebar
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
        <?php while (have_posts()) : the_post();

            the_content();

        endwhile; ?>
       


<section id="three" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
</div> 

</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
