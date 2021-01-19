<?php
/*
 * Template Name: Homepage
*/

get_header();
?>

<section class="heroBlock">
    <?php
    $args = array('post_type' => 'hero');
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();

        $backgourndImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    ?>

        <div class="holder" style="background: url('<?php echo $backgourndImg[0] ?>');">
            <div class="container">
                <div class="content">
                    <h3><span><?php the_title(); ?></span></h3>
                    <?php the_content(); ?>
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</section>

<section class="block slickJS">
    <div class="container">
        <div class="titleHolder">
            <h2><span>New Arrivals</span></h2>
            <p>Thousands of items added daily</p>
        </div>
        <?php echo do_shortcode('[recent_products]'); ?>
    </div>
</section>

<section class="block productCategories">
    <div class="container">
        <?php echo do_shortcode('[product_categories columns="3"]'); ?>
    </div>
</section>

<section class="block slickJS">
    <div class="container">
        <div class="titleHolder">
            <h2><span>On Sale</span></h2>
            <p>Hundereds of item on sale</p>
        </div>
        <?php echo do_shortcode('[sale_products]'); ?>
    </div>
</section>

<section class="block brandBlock">
    <div class="container">
        <ul>
            <?php
            $args = array('post_type' => 'brands', 'posts_per_page' =>  '20');
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <li>
                    <?php the_post_thumbnail(); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php
get_footer();
?>