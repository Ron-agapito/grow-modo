<?php
/**
 * Template Name: Flexible Layout
 */
get_header(); ?>


<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php if (have_rows('flexible_blocks')) : ?>
            <?php while (have_rows('flexible_blocks')) : the_row(); ?>
                <?php
                 $layout = get_row_layout();
                get_template_part('partials/' . $layout);
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
    
    <?php endwhile;?>
    
    <div class="container text-white">
        <?php the_content();?>

    </div>
    
    
        
 
    
    
<?php endif; ?>
</main>

<?php get_footer(); ?>
