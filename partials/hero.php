<div class="block block-hero">
    <div class="container">
        <?php 
        $icon_id = get_sub_field('icon');
        if ($icon_id): ?>
            <div class="icon">
                <?php echo wp_get_attachment_image($icon_id, 'full'); ?>
            </div>
        <?php endif; ?>

        <div class="text">
            <?php 
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            ?>
            <?php if ($title): ?>
                <h1 class="hero-title"><?php echo esc_html($title); ?></h1>
            <?php endif; ?>

            <?php if ($subtitle): ?>
                <div class="hero-text">
                    <p><?php echo esc_html($subtitle); ?></p>
                </div>
            <?php endif; ?>

            <?php if (have_rows('buttons')): ?>
                <div class="buttons">
                    <?php while (have_rows('buttons')): the_row(); 
                        $link = get_sub_field('button');
                        if ($link): ?>
                            <a href="<?php echo esc_url($link['url']); ?>" class="button" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
                                <?php echo esc_html($link['title']); ?>
                            </a>
                        <?php endif; 
                    endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('stats')): ?>
                <div class="hero-stats">
                    <?php while (have_rows('stats')): the_row(); 
                        $count = get_sub_field('count');
                        $text = get_sub_field('text');
                        ?>
                        <div class="stat">
                            <?php if ($count): ?>
                                <h2><?php echo esc_html($count); ?></h2>
                            <?php endif; ?>
                            <?php if ($text): ?>
                                <p><?php echo esc_html($text); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php 
        $image_id = get_sub_field('image');
        if ($image_id): ?>
            <div class="image">
                <?php echo wp_get_attachment_image($image_id, 'medium'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>