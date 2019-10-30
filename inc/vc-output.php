<?php
//For banner section
function banners($banners)
{
    extract(
        shortcode_atts(
            array(
                'banner_image'  => '',
                'heading'   => '',
                'text'      => '',
                'btn_one_t' => '',
                'btn_one_l' => '',
                'btn_two_t' => '',
                'btn_two_l' => '',

            ),
            $banners
        )
    );
    ob_start();

    ?>
    <?php wp_get_attachment_url($banner_image); ?>
    <section id="banner" style="background-image:url('<?php echo wp_get_attachment_url($banner_image); ?>')">
        <div class="inner">
            <h2><?php echo esc_attr($heading); ?></h2>
            <p><?php echo esc_attr($text) ?></p>
            <ul class="actions">
                <li><a href="<?php echo esc_attr($btn_one_l) ?>" class="button big special"><?php echo esc_attr($btn_one_t); ?></a></li>
                <li><a href="<?php echo esc_attr($btn_two_l) ?>" class="button big alt"><?php echo esc_attr($btn_two_t); ?></a></li>
            </ul>
        </div>
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('banner', 'banners');



//For sec_one heading
function sec_ones($sec_ones){
    extract(
        shortcode_atts(
            array(
                'sec_one_h'     => '',
                'sec_one_d'  => ''
            ),
            $sec_ones
        )
    );
    ob_start();
    ?>
    <section id="one" class="wrapper style1">
    <header class="major">
        <h2><?php echo esc_attr($sec_one_h); ?></h2>
        <p><?php echo esc_attr($sec_one_d); ?></p>
    </header>
    </section>

<?php
    return ob_get_clean();
}
add_shortcode('sec_one', 'sec_ones');


//For iconbox with text
function iconboxs($iconboxs){
    extract(
        shortcode_atts(
            array(
                'icon'          => '',
                'icon_heiding'  => '',
                'icon_desc'     => '',

            ),
            $iconboxs
        )
    );

    ob_start();
    ?>
    <section id="one" class="style1">

        <div class="row">
            <div class="">
                <section class="special box">
                    <i class="icon fa-area-chart major"></i>
                    <h3>Justo placerat</h3>
                    <p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
                </section>
            </div>
        </div>
    </section>


<?php
    return ob_get_clean();
}
add_shortcode('iconbox', 'iconboxs');

//For sec_two heading
function sec_twos($sec_twos)
{
    extract(
        shortcode_atts(
            array(
                'sec_two_h'     => '',
                'sec_two_d'  => ''
            ),
            $sec_twos
        )
    );
    ob_start();
    ?>
    <section id="two" class="wrapper style2">
    <header class="major">
        <h2><?php echo esc_attr($sec_two_h); ?></h2>
        <p><?php echo esc_attr($sec_two_d); ?></p>
    </header>
    </section>

<?php
    return ob_get_clean();
}
add_shortcode('sec_two', 'sec_twos');


// For post section
function post_secs($post_secs)
{
    extract(
        shortcode_atts(
            array(
                'post_sec'          => '',
            ),
            $post_secs
        )
    );
    ob_start();
    ?>
    <?php
        $args = array('post_type' => 'custom_post', 'posts_per_page' => $post_sec);
        $the_query = new WP_Query($args);
        ?>
    <section id="two" class="wrapper style2">
        <div class="container">
            <div class="row">
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="6u">
                            <section class="special">
                                <a href="<?php the_permalink(); ?>" class="image fit"><?php the_post_thumbnail(); ?></a>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                                <ul class="actions">
                                    <li><a href="#" class="button alt">Learn More</a></li>
                                </ul>
                            </section>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e("Sorry this is empty","ion_theme"); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('post_sec', 'post_secs');




// for our testomonial
function testomonial($testomonial)
{
    extract(
        shortcode_atts(
            array(
                'clients_p' => '',
            ),
            $testomonial
        )
    );
    ob_start();
    ?>
    <?php
        $args = array('post_type' => 'testimonial', 'posts_per_page' => '1');
        $the_query = new WP_Query($args);
        ?>
    <section id="three" class="wrapper style1">
        <div class="container">
            <div class="row">
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="8u">
                            <section>
                                <h2><?php the_title(); ?></h2>
                                <a href="<?php the_permalink(); ?>" class="image fit"><?php the_post_thumbnail(); ?></a>
                                <p><?php the_excerpt(100); ?></p>
                            </section>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e("Sorry this is empty","ion_theme"); ?></p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="4u">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
    return ob_get_clean();
}
add_shortcode('testomonial', 'testomonial');
