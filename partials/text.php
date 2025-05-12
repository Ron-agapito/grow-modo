<div class="block block-text">
    <div class="container">
        <?php 
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        ?>

        <?php if ($title): ?>
            <h1 class="hero-title"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if ($text): ?>
            <div class="text">
                <p><?php echo esc_html($text); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>