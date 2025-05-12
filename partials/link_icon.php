<div class="block block-link-icon">
    <?php if (have_rows('link')): ?>
        <?php while (have_rows('link')): the_row(); 
            $icon_id = get_sub_field('icon');
            $link = get_sub_field('link');
        ?>
            <div class="link-icon">
                <div class="arrow">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 27.625L27.625 6.375M27.625 6.375L11.6875 6.375M27.625 6.375V22.3125" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="icon">
                    <?php if ($icon_id): ?>
                        <?php echo wp_get_attachment_image($icon_id, 'full'); ?>
                    <?php endif; ?>
                </div>
                <div class="text">
                    <?php if (!empty($link['title'])): ?>
                        <p><?php echo esc_html($link['title']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>