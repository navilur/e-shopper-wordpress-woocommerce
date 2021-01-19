<?php
/*
 * Template Name: FAQs
*/

get_header();
?>

<section class="block openClose">
    <div class="container">
        <?php
        $args = array('post_type' => 'faqs', 'posts_per_page' =>  '20');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
        ?>
            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
?>